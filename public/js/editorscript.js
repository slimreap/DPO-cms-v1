

let draftcanvas;

function initializeckEditor(target){
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline(target);
  $('#'+target).attr('contenteditable',true);

}; 




$(function () {




  // Functions
  function sanitizeId(str) {
    return str.replace(/[^\w]/g, '_');
  }


// change theme color
$('#btnchangethemecolor').click(function(){
    var color = $('#themecolor').val();
    var navigation = $('#navcontainer');
    var mobilenavigation = $('#mobilenavcontainer');
    var footer = $('#footercontainer');

    navigation.removeClass(function(index, className) {
      return className;
    });
    mobilenavigation.removeClass(function(index, className) {
      return className;
    });
    footer.removeClass(function(index, className) {
      return className;
    });

    navigation.addClass('bg-' + '[' + color + ']');
    navigation.addClass('relative flex shadow h-20 w-screen max-h-20');
    mobilenavigation.addClass('bg-' + '[' + color + ']');
    mobilenavigation.addClass('absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between');
    footer.addClass('bg-' + '[' + color + ']');
    footer.addClass('w-screen max-w-screen-2xl');

});


$(document).on('keydown', '#editor', function(event) {
  if (event.keyCode === 13) { // Enter key pressed
    event.preventDefault();
    $('#editor-modal').dialog('close');
  }
});


    // appending existing single image
    $('#addexistingimage').click(function(){
      var uniqueID = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
      var selectedOption = $('#existingsingleimages option:selected');
      var imageUrl = selectedOption.data('img');

      var image = $(`<div class="w-full flex-auto mt-16 mb-16"><div id="hello" class="singleimage-container w-full relative edit" style="background-image: url(${imageUrl}); background-size: cover; background-position: center; height: 400px; width: 100%; background-repeat: no-repeat;"></div></div>
      `);
      $('#canvas').append(image);
    });
      



    //   Handling canvas change

    function handleCanvasChange() {
        var canvasClone = $('#canvas').clone();

        canvasClone.find('#nav').remove();
        canvasClone.find('#footer').remove();

        var navigationContent = $("#nav")[0].outerHTML;
        var footerContent = $("#footer")[0].outerHTML;
        var canvasClone = canvasClone.html();

        $('#canvas-content').val($('#canvas')[0].outerHTML);
        $('#nav-content').val(navigationContent);
          $('#footer-content').val(footerContent);
          // console.log(canvasClone);



      }

    // Saving edited theme to the database

    $(function() {
      $('#htmlcontent').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission
        
        // disable btn links
        


        var filename = $("#editable-title").text();

        if ($('input[name="page_name"]').val() === '') 
          {
          $('input[name="page_name"]').val('Home');
        }  
        else{
          $('input[name="page_name"]').val();
        }


        handleCanvasChange();
        $('input[name="file_name"]').val(filename);
        var form = $(this); // Store the form reference
        var formData = new FormData(form[0]);
 
        // Send the AJAX request
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: formData,
            processData: false, // Disable processing of data for sending
            contentType: false, // Disable content type header for sending
            success: function(response) {
                // Handle the response from the server
                
                $('#message').html(`<div class="message flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                <div id="" class="mx-auto">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    Theme successfully saved!
                </div>
              </div>`);

              setTimeout(function() {
                $('.message').fadeOut(500, function() {
                  $(this).remove();
                });
              }, 3000);
              
            },
            error: function(xhr, status, error) {
                console.log(xhr);
                console.log(status);
                console.log(error);
            }
        });

        
    });
    
      });


      // Event listener for removing elements
      $('#navigation').on('DOMNodeRemoved', function() {
        $('#htmlcontent').submit();
        checknavigation();
      });
      $('#canvas').on('DOMNodeRemoved', function() {
        $('#htmlcontent').submit();
      });




                //   event listener for each button
    // Add click event listener to each button
    
    function buttonproperties(){

      $('.button').click(function(e) {   
        $("#button-text, #button_radius, #button_placement").off();
        $("#removebutton").off();
        // Get the card element
        var buttonElem = $(e.target).closest('.button');
        
        // Get the card ID
        var btnId = buttonElem.attr('id');
      
        // Open the card modal
        $('#openbtnmodal').click();
        // Add input event listener to the input field for the TITLE
  
        // $(function() {
          // Add input event listener to the input field
          $("#button-text").on("input", function() {
            // Get the value of the input field
            // $('#button-text').val('');
            var inputValue = $(this).val();
        
            // Set the value of the button text
            buttonElem.text(inputValue);
  
          });
  
          var previousValue = $("#button_radius option:first-child").val();
          $('#button_radius').on('change', function(){
              var selectedValue = $(this).val();
  
              if (selectedValue !== previousValue) {
                  // Remove the previous value class from the button
                  buttonElem.removeClass(previousValue);
            
                  // Add the selected value class to the button
                  buttonElem.addClass(selectedValue);
            
                  // Update the previous value variable
                  previousValue = selectedValue;
  
                  //call canvas handler
                  handleCanvasChange();
    
                }
  
            });
          
          //   button placement 
            var JustificationPreviousValue = $("#button_placement option:first-child").val();
            $('#button_placement').on('change', function(){
                var JustificationselectedValue = $(this).val();
                
  
                if (JustificationselectedValue !== JustificationPreviousValue) {
                    // Remove the previous value class from the button
                    buttonElem.removeClass(JustificationPreviousValue);
              
                    // Add the selected value class to the button
                    buttonElem.addClass(JustificationselectedValue);
              
                    // Update the previous value variable
                    JustificationPreviousValue = JustificationselectedValue;
                    
                    //call canvas handler
                    handleCanvasChange();
                  }
              });
  
          $('#removebutton').click(function () {
            buttonElem.remove();
          });
  
        // });
  
      });
   
  
     };

     buttonproperties();
     
    // event listener for appending element
    $(function() {
        $("#canvas").on("DOMNodeInserted", function(e) {
          $('#htmlcontent').submit();


          // editElement();
      
      checknavigation();
      editbtnproperty();


   
    

   }); // end of dominserted

   $("#navigation").on("DOMNodeInserted", function(e) {
    $('#htmlcontent').submit();
    checknavigation();
   });
 
 });


    // Define a valHooks function for <textarea> elements
    $.valHooks.textarea = {
        get: function (elem) {
            return elem.value.replace(/\r?\n/g, "\r\n");
        }
    };


    // TOOLS
    $("#pagestools").hide();

    $("#btnpage").click(function () {
      
      $('#btninsert').removeClass('bg-[#e06469]');
      $('#btninsert').addClass('bg-[#f8e5e5]');

      $('#btnpage').removeClass('bg-[#f8e5e5]');
      $('#btnpage').addClass('bg-[#e06469]');

        $("#inserttools").hide();
        $("#pagestools").show();
    });
    $("#btninsert").click(function () {
      $('#btninsert').removeClass('bg-[#f8e5e5]');
      $('#btninsert').addClass('bg-[#e06469]');

      $('#btnpage').removeClass('bg-[#e06469]');
      $('#btnpage').addClass('bg-[#f8e5e5]');

        $("#inserttools").show();
        $("#pagestools").hide();
    });


    //   adding textbox
    $("#addtextbox").click(function () {
        var $textbox =
            $(`<div id="textbox" class="transparent h-auto relative border-4 shadow-sm border-solid rounded-t-lg inline-block mb-2 mt-2">
        <textarea class="absolute w-full border-none bg-transparent" name="" id=""></textarea>
        <button class="exitbutton mb-8 ml-8" id="">X</button>
    </div>`);
        $("#canvas").append($textbox);


        $(function () {

            $(".exitbutton").click(function () {
                $(this).parent().remove();
       
             
            });

        });

     


    });


      // function to disable all button links

  function disablebtnlinks(){
    const div = document.getElementById('canvas'); // replace 'your-div-id' with the actual ID of your div element
const links = div.getElementsByTagName('a');

for (let i = 0; i < links.length; i++) {
  links[i].addEventListener('click', function(event) {
    event.preventDefault();
  });
}

  };

// disable btn links
disablebtnlinks();

   
function editbtnproperty(){


$('.button').off('click').on('click',function(e) {
  var buttonvalue = $(this);
  $('#openbtnmodal').click();

var previousColor;
$('#button_color').off('change').on('change',function(){
  var selectedOption = $(this).find('option:selected');
  var color = selectedOption.data('color');

  (previousColor) ? buttonvalue.removeClass(previousColor) : ''
  buttonvalue.addClass(color);

  previousColor = color;
});

// /button radius
var previousRadius;
$('#buttonradius').off('change').on('change',function(){
  var selectedOption = $(this).find('option:selected');
  var radius = selectedOption.data('radius');

  (previousRadius) ? buttonvalue.removeClass(previousRadius) : ''
  buttonvalue.addClass(radius);

  previousRadius = radius;
});

// button position
var previousPosition;
$('#button_position').off('change').on('change',function(){
  var selectedOption = $(this).find('option:selected');
  var Position = selectedOption.data('position');

  (previousPosition) ? buttonvalue.removeClass(previousPosition) : ''
  buttonvalue.addClass(Position);

  previousPosition = Position;
});
// button text color
var previousTextColor;
$('#button_text_color').off('change').on('change',function(){
  var selectedOption = $(this).find('option:selected');
  var TextColor = selectedOption.data('textcolor');

  (previousTextColor) ? buttonvalue.removeClass(previousTextColor) : ''
  buttonvalue.addClass(TextColor);

  previousPosition = TextColor;
});

$("#button-text").off('input').on("input", function() {
  // Get the value of the input field
  var inputValue = $(this).val();

  // Set the value of the button text
  buttonvalue.text(inputValue);

});

// button link
$("#addbutton").off('click').on("click", function() {
  // Get the value of the input field
  var inputValue = `https://${$("#btnlink").val()}`;

  // Set the value of the button text
  buttonvalue.attr('href',inputValue);


  disablebtnlinks();
});


});
};

editbtnproperty();

    // adding button
    $("#showbtnproperty").off('click').on('click',function () {

      var $buttonvalue = $(
          `
          <button id="" class="inline-block ml-10 mr-10 px-4 py-2 mt-3 min-w-20 w-24 max-w-lg m-w-lg h-10 text-sm font-medium leading-5 transition-colors duration-150 border border-transparent focus:outline-none">
          </button>
          `
      );

      $('#canvas').append($buttonvalue);
$buttonvalue.addClass($('#button_color').find('option:selected').data('color'));
$buttonvalue.addClass($('#buttonradius').find('option:selected').data('radius'));
$buttonvalue.addClass($('#button_position').find('option:selected').data('position'));
$buttonvalue.addClass($('#button_text_color').find('option:selected').data('textcolor'));
// button color  
var previousColor;
$('#button_color').off('change').on('change',function(){
  var selectedOption = $(this).find('option:selected');
  var color = selectedOption.data('color');

  (previousColor) ? $buttonvalue.removeClass(previousColor) : ''
  $buttonvalue.addClass(color);

  previousColor = color;
});

// /button radius
var previousRadius;
$('#buttonradius').off('change').on('change',function(){
  var selectedOption = $(this).find('option:selected');
  var radius = selectedOption.data('radius');

  (previousRadius) ? $buttonvalue.removeClass(previousRadius) : ''
  $buttonvalue.addClass(radius);

  previousRadius = radius;
});

// button position
var previousPosition;
$('#button_position').off('change').on('change',function(){
  var selectedOption = $(this).find('option:selected');
  var Position = selectedOption.data('position');

  (previousPosition) ? $buttonvalue.removeClass(previousPosition) : ''
  $buttonvalue.addClass(Position);

  previousPosition = Position;
});

// button text
$("#button-text").off('input').on("input", function() {
  // Get the value of the input field
  var inputValue = $(this).val();

  // Set the value of the button text
  $buttonvalue.text(inputValue);

});

// button text color
var previousTextColor;
$('#button_text_color').off('change').on('change',function(){
  var selectedOption = $(this).find('option:selected');
  var TextColor = selectedOption.data('textcolor');

  (previousTextColor) ? $buttonvalue.removeClass(previousTextColor) : ''
  $buttonvalue.addClass(TextColor);

  previousPosition = TextColor;
});

// button link
$("#addbutton").off('click').on("click", function() {
  // Get the value of the input field
  var inputValue = `https://${$("#btnlink").val()}`;

  // Set the value of the button text
  $buttonvalue.attr('href',inputValue);

  editbtnproperty();
  disablebtnlinks();

});


// button link

editbtnproperty();

    });


    // open modal of existing images
    $('#closeuploadimgmodal').click(function(){
      $('#openexistingimagemodal').click();
    });

    // adding contact form
    $('#addcontactform').click(function () {
        var contactform = $(`<div class="grid grid-cols-2">
				
        <div class="flex flex-col bg-red-800 items-center justify-center text-center">
            <h2 class="text-white">Contact us</h2>
            <box-icon name='location-plus'></box-icon>
            <h3 class="text-white">Address</h3>
            <h4 class="text-white">WMSU, DPO, 2400,
                Dipolog City,
                Zamboanga del Norte</h4>
            <box-icon name='phone' ></box-icon>
            <h3 class="text-white">Phone</h3>
            <box-icon name='envelope'></box-icon>
            <h3 class="text-white">Email</h3>
        </div>

        <div class="flex flex-col bg-slate-200 space-y-2 items-center justify-center">
            <label for="fullname">Full name</label>
            <input type="text" name="fullname" id="fullname" class="rounded-full ring:bg-blue-300 w-1/2">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" class="rounded-full ring:bg-blue-300 w-1/2">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="rounded-full ring:bg-blue-300 w-1/2">
            <label for="message">Message</label>
            <textarea class="ring:bg-blue-300" name="message" id="message" cols="30" rows="10"></textarea>
            <button class="bg-red-800 w-20 h-6 rounded">Submit</button>
        </div>
    </div>`);

    $('#canvas').append(contactform);
    });


    // adding youtube video
    $('#addytvideo').click(function() {
        var ytlink = $(`
        <div>
        <div id="ytvideo" class="flex items-center justify-center mt-16 mb-16 edit">
        `+ $('#iframe').val() +`
        </div>
        </div>
        `);

        $("#canvas").append(ytlink);
    });

    // !Adding Card
    $("#btnokcard").click(function () {
        // Generate a unique ID for the card
        var cardId = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
        var imageurl = $('#imageforcard option:selected').data('img');
        var card = $(`
          <div id="card-container" class="flex justify-center items-center mt-6 mb-6 bg-red-800 rounded-lg mx-auto w-2/5">
              <img id="card-image-id" class="modifiableimg edit mb-2 mt-2 card object-cover w-48 rounded-t-lg h-64 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="${imageurl}" alt="">
              <div id="${cardId}" class="edit flex flex-col justify-between p-4 leading-normal bg-red-800">
                <h5 class="title mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Title</h5>
                <p class="description mb-3 font-normal text-white dark:text-gray-400">Description</p>
              </div>
          </div>
        `);
      
        $("#canvas").append(card);
        initializeckEditor(cardId);
 
      });
    
  
      // content block 3 sample
    $('#submitcb3').click(function(){
        $('#cb3form').submit();
    });


    // Adding Divider
    $('#addDivider').click(function (){
        var dividervalue = $(`<div class="h-1 w-full"><div class="border-b-2 border-black my-2 mx-auto edit h-1 w-5/6"></div></div>`)
        $("#canvas").append(dividervalue);
    });

    //Adding carousel
    $('#addcarousel').click(function () {
      var options = [];

      $('#existingCarouselImgs option:selected').each(function() {
        options.push($(this).val());
      });


        var $carouselvalue =
            `				<div x-data=\'{slides: [`;
            options.forEach(function(image){
              $carouselvalue += `\{ \image: \"${image}\"},`;
            });

            $carouselvalue += `\],
              
    
                slideIndex: 0,
              
                prevSlide() \{
                this.slideIndex = (this.slideIndex === 0) ? (this.slides.length - 1) : (this.slideIndex - 1);
                \},
                nextSlide()\{
                this.slideIndex = (this.slideIndex === this.slides.length - 1) ? 0 : (this.slideIndex + 1);
                }
              \}'
              class=\'w-full h-[400px] mt-16 mb-16\'>
              
                <!-- Carousel slides -->
                <div class='carousel-container relative flex w-full h-full'>
                <button @click="prevSlide()" class="carousel-control-btn p-2 rounded-full text-white font-bold absolute top-1/2 left-0 transform -translate-y-1/2">
                <box-icon class="text-2xl" name="chevron-left" type="solid" animation="fade-right" color="#c50404"></box-icon>
              </button>
              <button @click="nextSlide()" class="carousel-control-btn p-2 rounded-full text-white font-bold absolute top-1/2 right-0 transform -translate-y-1/2">
                <box-icon type="solid" color="#c50404" width="" animation="fade-right" name="chevron-right"></box-icon>
              </button>
                <template x-for="(slide, index) in slides" :key="index">
                  <img x-show="slideIndex === index" class="carousel-slide w-full h-[400px] object-cover edit2"        
                  x-transition:enter="transition ease-out duration-300"
                  x-transition:enter-start="opacity-0 transform scale-90"
                  x-transition:enter-end="opacity-100 transform scale-100"
                  x-transition:leave="transition ease-in duration-300"
                  x-transition:leave-start="opacity-100 transform scale-100"
                  x-transition:leave-end="opacity-0 transform scale-90" :src="slide.image">
                  
                  </template>
                  
                  
                </div>
              
                <!-- Carousel controls -->

                
              </div>`;

        $("#canvas").append($carouselvalue);
        buttonproperties();
     
    });

    // editable title
    $('#editable-title').on('blur', function() {
        var newText = $(this).text();
      });



    // add navigation
    $('#addnavigation').click(function () {
        var navlink = $('#navlink').val() ? $('#navlink').val() : '#';
        var $navigationvalue = $(`<form id="${$('#navname').val()}" action="/editor/editorpage/${encodeURIComponent($('#editable-title').data('value'))}/${encodeURIComponent($('#navname').val().toLowerCase())}" method="GET" class="pageform">
        <button type="submit" class="btnnav px-3 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg md:mx-2">${$('#navname').val()}</button>
    </form>`);
    
        $('#navigation').append($navigationvalue);

    });

    // add pages to page section
    function pages(navchildren){
      navchildren.forEach(function(childId) {
        var page = `<div class="col-span-2">
        ${childId}
      </div>
      <div class="">
        <button class="rounded-full" id="removehome">
          Remove
        </button>
        
      </div>`;

      $('#pages-container').append(page);
      });

    }
    // check navigation if it contains a child

    function checknavigation(){
      
          var navchildren = [];
          var navHtml = $('#navigation').html();
          var navChildren = $(navHtml).children();
          if(navChildren){
            navChildren.each(function() {
              // Do something with the current child element here
              var pageText = $(this).text();
              var page = `
                <div class="col-span-3">
                  <div class="grid grid-cols-2">
                    <div>${pageText}</div>
                    <div class="">
                      <button class="rounded-full remove" data-page="${pageText}" id="removepage">
                        Remove
                      </button>
                    </div>
                  </div>
                </div>`;
              
              // Check if the page element already exists
              if ($('#pages-container').find(`div:contains('${pageText}')`).length === 0) {
                // Append the new page element if it doesn't already exist
                $('#pages-container').append(page);
              }
            });
            
         

          } else{

          }


    };
   
    checknavigation();





    // Insertion of class to html element

    // insertion of button class
    $('#button_radius').on('change', function () {
        var selectedValue = $(this).val();


    });


    // submit upload image
    $('#uploadphoto').click(function(){
        $('#uploadphotosform').submit();
    });
  
  // existing image and carousel for content block 1
  $('#addcontentblock-1').click(function(){
      var options = [];
      var image = $('#existingsingleimgcarousel option:selected').data('carouselimg');
      $('#existingimgcarousel option:selected').each(function(){
          options.push($(this).val());
      });

      var $carouselvalue =
        `				<div x-data=\'{slides: [`;
        options.forEach(function(image){
          $carouselvalue += `\{ \image: \"${image}\"},`;
        });

        $carouselvalue += `\],
          

            slideIndex: 0,
          
            prevSlide() \{
            this.slideIndex = (this.slideIndex === 0) ? (this.slides.length - 1) : (this.slideIndex - 1);
            \},
            nextSlide()\{
            this.slideIndex = (this.slideIndex === this.slides.length - 1) ? 0 : (this.slideIndex + 1);
            }
          \}'
          class=\'w-full h-[400px] mt-16 mb-16\'>
            <div class="grid grid-cols-2 mb-2 mt-2 edit2">
            <img src="${image}" class="w-full h-[400px]" alt="img">
            <!-- Carousel slides -->
            <div class='carousel-container relative flex w-full h-[400px]'>

            <template x-for="(slide, index) in slides" :key="index">
            <div>
            <button @click="prevSlide()" class="carousel-control-btn p-2 rounded-full text-white font-bold absolute top-1/2 left-0 transform -translate-y-1/2">
            <box-icon class="text-2xl" name="chevron-left" type="solid" animation="fade-right" color="#c50404"></box-icon>
          </button>
          <button @click="nextSlide()" class="carousel-control-btn p-2 rounded-full text-white font-bold absolute top-1/2 right-0 transform -translate-y-1/2">
            <box-icon type="solid" color="#c50404" width="" animation="fade-right" name="chevron-right"></box-icon>
          </button>
              <img x-show="slideIndex === index" class="carousel-slide w-full h-full object-cover"        
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 transform scale-90"
              x-transition:enter-end="opacity-100 transform scale-100"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 transform scale-100"
              x-transition:leave-end="opacity-0 transform scale-90" :src="slide.image">
              </div>
              </template>
              
              <!-- Carousel controls -->


            </div>
          

          </div>
         </div>`;

        $('#canvas').append($carouselvalue);
  });
  
 
// Content block 2, cards

$('#addcontentblock-2').click(function(){
  var imgs = [];
  var uniqueID = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);

  var numberofcards = $('#cardnumber').val();
  var images = $('#cardimgs option:selected').each(function(){
    imgs.push($(this).val());
  });

  // Loop through the range of numbers using $.each
  var cardscontainer = `<div id="" class="card-container flex flex-nowrap justify-center w-full mt-16 mb-16>"
        <!-- component -->

      </div>`;

  $('#canvas').append(cardscontainer);
  
  imgs.forEach(function(image){
    var uniqueID = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);

   var card = $(`<div class="mx-auto ml-2 mr-2 w-2/6 border-red-800 overflow-hidden rounded-lg bg-white shadow-lg shadow-red-800">
   <img
     src="${image}"
     class="edit aspect-video w-full object-cover"
     alt=""
   />
   <div id="${uniqueID}" class="p-4">
     <p class="mb-1 text-sm text-primary-500">Andrea Felsted • <time>18 Nov 2022</time></p>
     <h3 class="text-xl font-medium text-gray-900">Migrating to Sailboat UI</h3>
     <p class="mt-1 text-gray-500">Sailboat UI helps streamline software projects, sprints, tasks, and bug tracking.</p>
     <div class="mt-4 flex gap-2">
       <span
         class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
       >
         Design
       </span>
       <span
         class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600"
       >
         Product
       </span>
       <span
         class="inline-flex items-center gap-1 rounded-full bg-orange-50 px-2 py-1 text-xs font-semibold text-orange-600"
       >
         Develop
       </span>
     </div>
   </div>
 </div>`);

 $('#canvas').find('.card-container').last().append(card);
 initializeckEditor(uniqueID);

 $('#htmlcontent').submit();
  });




});

    // Content block 3 title, desc, button, carousel
    $('#dds').click(function () {
        var content_block_3 = (``);
    
    $('#canvas').append(content_block_3);
    
  
    });

    // Form block  Two column text

    $('#addcontent_block_4').click(function () {
      var uniqueID = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
      var uniqueID_2 = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
        var content_block_4 = (`
        <div id="" class="grid grid-cols-2  h-auto mx-auto mb-16 mt-16">
            <div id="${uniqueID}" class="edit relative flex flex-col space-y-2 items-center justify-center text-center">
                
                    <h3 class="">About us</h3>
                    <p>The UP Diliman Data Protection Office is a unit of the Office of the Chancellor led by the UP Diliman Data Protection Officer and mandated to protect the privacy of personal data with the following roles:</p>
           
              </div>
              <div id="${uniqueID_2}"  class="edit relative flex flex-col items-center justify-center text-center">
                    <h3>Western Mindanao State University</h3>
                    <p>Normal Road, Baliwasan, Zamboanga City</p>
                    <p>Email: wmsu.edu.ph@gmail.com</p>
              </div>
        </div>`);
    
    $('#canvas').append(content_block_4);
    initializeckEditor(uniqueID);
    initializeckEditor(uniqueID_2);

  
    // selecting content_block_4
    // Add click event listener to child elements
    $('.cb4').on('click', function() {
      // Get parent element of the clicked child
      var parent = $(this).parent().parent().parent();
      if (!parent.find('#closecb4').length) { // Check if close button exists
        parent.addClass('border-4 border-yellow-400');
        $('#cb4').append('<button id="closecb4" class="closebtn absolute right-0 w-10 h-10 rounded-sm bg-yellow-500">x</button>');
        $('#closecb4').on('click',function(){
          $('#cb4').remove();
        });
      }
      // Log the ID of the parent element
    });

    });


    // *logo related functions*
    // replacing current logo
    $('#btnreplacelogo').click(function(){
        var logourl = $('#logoselection option:selected').data('logo');
        
        $('#homepage').attr('src',logourl);
    });



    // submit form for uploading logo
    $('#btnoklogo').click(function(){
        $('#logoform').submit();
    });

    // submit form for uploading pdf
    $('#submitpdf').click(function(){
      $('#pdfform').submit();
    });

    $('.pdfobject').addClass('edit');
    // Footer selection




// toolbar opener
$('#btntoolbar').click(function(){
  if($('#toolbar').hasClass('translate-x-full'))
  {
    $('#toolbar').removeClass('translate-x-full');
    $('#pagecontainer').removeClass('w-full');
    $('#pagecontainer').addClass('w-2/3');

  }
  else{
    $('#toolbar').addClass('translate-x-full');
    $('#pagecontainer').removeClass('w-2/3');
    $('#pagecontainer').addClass('w-full');
  }
 
});


// functionality to remove the exit button
$(document).click(function(e) {
  e.stopPropagation();
  var canvasElement = $('#canvas')[0];
  var clickedElement = e.target;

  if (!canvasElement.contains(clickedElement)) {
    // clicked outside of canvasElement
        $('.border-4.border-yellow-400').removeClass('border-4 border-yellow-400');
        $('#closecb4').remove();
  } else {
    // clicked inside of canvasElement
    var selectedElement = $(clickedElement).closest('.border-4.border-yellow-400');
    if (!selectedElement.length) {
      // clicked element is not already selected
      selectedElement.removeClass('border-4 border-yellow-400');
      $('#closecb4').remove();
    }
  }
  

});



  // adding accordion **content block 5
  $('#addcb5').click(function(){
    var uniqueID = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
    var numberofaccordion = $('#numberofaccordion').val();
    var accordioncontainer = `
    <div class="flex justify-center items-start my-16">
      <div class="w-full sm:w-10/12 md:w-1/2 my-1">
        <div class="flex flex-col accordioncontainer edit" id="">

        </div>
      </div>
    </div>
  `;

    $('#canvas').append(accordioncontainer);

    
    for (var i = 0; i < numberofaccordion; i++) {
      var accordionnumber = Math.floor(Math.random() * 1000);
      var uniqueID = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
      var accordion = `
                <div class="bg-white my-2 shadow-lg" x-data="accordion(${accordionnumber})">
                  <h2
                    @click="handleClick()"
                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
                  >
                    <span class="accordion-title">Type something...?</span>
                    <svg
                      :class="handleRotate()"
                      class="fill-current text-red-800 h-6 w-6 transform transition-transform duration-500"
                      viewBox="0 0 20 20"
                    >
                      <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                    </svg>
                  </h2>
                  <div
                    x-ref="tab"
                    :style="handleToggle()"
                    class="border-l-2 border-red-800 overflow-hidden max-h-0 duration-500 transition-all" id="${uniqueID}"
                  >
                    <p class="p-3 text-green-900">
                      Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation
                    </p>
                  </div>
                </div>
        `;

        $('.accordioncontainer').append(accordion);
        initializeckEditor(uniqueID);
    }
    initializeckEditor(uniqueID);
    $('.accordion-title').click(function(){
      $(this).attr("contentEditable", true);
    });
    
  });

  // accordion title click event


  $('.accordion-title').click(function(){
    $(this).attr("contentEditable", true);
  });
  


  // add textbox
  $('#addTextbox').click(function(){
      var uniqueID = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
      var txtbox = `<div class="w-full mt-16 mb-16"><div id="${uniqueID}" class="w-full h-auto edit">type something</div></div>`;
      $('#canvas').append(txtbox);
      initializeckEditor(uniqueID);

  });

  initializeckEditor('footer-1');
  initializeckEditor('footer-2');
  initializeckEditor('footer-3');
  initializeckEditor('footer-4');

    //  removing a page
    var pages = document.querySelectorAll('.remove');

    $(pages).each(function() {
      $(this).click(function() {
        console.log('Remove clicked');
        var theme = $('#editable-title').text();
        var page =  $(this).data('page'); // Set the value of the 'page' variable here
        $('#' + page).remove();
        $(this).parent().parent().remove();
      
        // Make the AJAX request
        $.ajax({
          url: `/deletepage/${theme}/${page}`,
          type: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(result) {
            console.log(result);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log('AJAX request error:');
            console.log('Status:', textStatus);
            console.log('Error:', errorThrown);
            console.log('Response:', jqXHR.responseText);
          }
        });
        
      });
    });

  }); //end of document ready function


  // adding footer to dom
  $('#addfooter').click(function(){

    function initializeckeditor_footer1(){
      var uniqueID = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
      var uniqueID2 = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
      var uniqueID3 = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
      var uniqueID4 = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
    
      var footeroption = $(`
      <div class=" w-screen max-w-screen-xl bg-gray-800">
        <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4 edit">
          <div id="${uniqueID}">
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                  <li class="mb-4">
                      <a href="#" class=" hover:underline">About</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Careers</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Brand Center</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Blog</a>
                  </li>
              </ul>
          </div>
          <div id="${uniqueID2}">
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Discord Server</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Twitter</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Facebook</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Contact Us</a>
                  </li>
              </ul>
          </div>
          <div id="${uniqueID3}">
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Privacy Policy</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Licensing</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                  </li>
              </ul>
          </div>
          <div id="${uniqueID4}">
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                  <li class="mb-4">
                      <a href="#" class="hover:underline">iOS</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Android</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Windows</a>
                  </li>
                  <li class="mb-4">
                      <a href="#" class="hover:underline">MacOS</a>
                  </li>
              </ul>
          </div>
      </div>
      
      </div>
      `);
    
      $('#canvas').append(footeroption);
      
      initializeckEditor(uniqueID);
      initializeckEditor(uniqueID2);
      initializeckEditor(uniqueID3);
      initializeckEditor(uniqueID4);
    
  
    
    };


  });

  // reload js
  function loadJS(FILE_URL, async = true) {
    let scriptEle = document.querySelector('script[src="' + FILE_URL + '"]');
  
    scriptEle.setAttribute("src", FILE_URL);
    scriptEle.setAttribute("type", "text/javascript");
    scriptEle.setAttribute("async", async);
  
  
    // success event 
    scriptEle.addEventListener("load", () => {
    });
     // error event
    scriptEle.addEventListener("error", (ev) => {
    });
  }


