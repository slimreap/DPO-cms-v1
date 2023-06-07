$(document).ready(function () {
// initialize CKeditor
function initializeckEditor(target){
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline(target);
  $('#'+target).attr('contenteditable',true);

}; 


  var url = window.location.href;

  var currentPath = window.location.pathname;
  var slug = url.substring(url.lastIndexOf("/") + 1);
  var decodedString = decodeURIComponent(slug);
  var expectedPath = `/editor/editorpage`;
  

 (currentPath === expectedPath) ? ajaxHomepage() : ajaxforotherpages();
  
  

  function ajaxHomepage(){
    var url = window.location.href;
    var slug = url.substring(url.lastIndexOf("/") + 1);
    var decodedString = decodeURIComponent(slug);
    // Ajax to load button style
    $('#homeurl').attr('href','http://privacy.wmsu.edu.ph/editor/editorpage');
    $.ajax({
      url: `/editor/editorpage/buttonattributes`,
      method: 'GET',
      dataType: 'JSON',
      contentType: 'application/json',
      error: function(xhr, status, error) {
        console.log(xhr.responseText)          // console.error(error); // Handle any errors that occur
        // console.error(status); // Handle any errors that occur
        // console.error(xhr); // Handle any errors that occur
    },
      success: function (data) {
          // Loop through the data and append it to an element in the view
          for (var i = 0; i < data.length; i++) {
              var btn = data[i];
              // var button_radius = $('<option>').text(btn.btn_radius);
              var button_radius = $('<option>').text(btn.name).attr('data-radius', btn.btn_radius);

              $('#button_radius').append(button_radius);
              button_radius.val(button_radius.data('radius'));
          }
      }
  });



  $('#pdfform').submit(function(event){

    // ajax to upload pdf file
      event.preventDefault(); // Prevent the form from submitting normally
          
      // Get the form data and make an AJAX request
      var form = $(this); // Store the form reference
      var formData = new FormData(form[0]); // Create a new FormData object from the form
    
    
    $.ajax({
      url: `/editor/editorpage/uploadpdf`, // the URL of the server endpoint
      type: form.attr('method'),
      data: formData,
      processData: false, // Disable processing of data for sending
      contentType: false, // Disable content type header for sending
      success: function(data) { // function to handle the response (optional)
        var pdfUrl = data.pdfurl;
 
        var pdfcontainer = $(`<div id="pdf-container" class="edit mx-auto"></div>`);
        var options = {
            height: '700px',
            width: '700px'
        };
        PDFObject.embed(pdfUrl, pdfcontainer, options);
        $('#canvas').append(parent);
        $('#pdf-container').wrap('<div class="pdfparent"></div>');
        
    
      },
      error: function(xhr, status, error) { // function to handle errors (optional)
        console.log('Error!');
        console.log(xhr.responseText);
      },
      complete: function(xhr, status) { // function to execute when the request is complete (optional)
      }
    });
    
    });

// ajax for getting existing single images
var existingsingleimgs = [];
$.ajax({
  url: `/editor/editorpage/retrieveimgs`, // the URL of the server endpoint
  method: 'GET', // HTTP method (default: 'GET')
  dataType: 'json', // the data type of the response (default: 'text')
  success: function(data) { // function to handle the response (optional)
    existingsingleimgs = existingsingleimgs.concat(data);
    existingsingleimgs.forEach(function (image){
      var existingimg = $('<option>').text(image.name).attr('data-img', image.url);
      $('.existingsingleimages').append(existingimg);
      existingimg.attr('value', image.url);
      $('#cardimgs').append(existingimg.clone());


      // image for content block 1


      // image for card
      $('#imageforcard').append(existingimg.clone());
      $('#imageforcard').chosen({
        width: "80%",
        no_results_text: "Oops, nothing found!",
        placeholder_text_multiple: "Select options",
        search_contains: true,

      });
            




  });
  },
  error: function(xhr, status, error) { // function to handle errors (optional)
    console.log('Error!');
    console.log(xhr.responseText);
  },
  complete: function(xhr, status) { // function to execute when the request is complete (optional)
  }
});

    // Ajax to load flexbox justification
    $.ajax({
      url: `/editor/editorpage/placeself`,
      method: 'GET',
      dataType: 'json',

      error: function(xhr, status, error) {
        console.error(error); // Handle any errors that occur
        console.error(status); // Handle any errors that occur
        console.error(xhr); // Handle any errors that occur
    },
      success: function (data) {
          // Loop through the data and append it to an element in the view
          for (var i = 0; i < data.length; i++) {
              var place_self = data[i];
              // var placeself_justification = $('<option>').text(placeself.justification);
              var placeself_justification = $('<option>').text(place_self.name).attr('data-placeself', place_self.placeself);
              
              $('#button_placement').append(placeself_justification);
              placeself_justification.val(placeself_justification.data('placeself'));
           
          }
      }
  });



  
  // ajax for existing carousel images
  var existingCarouselImgs = [];
  $.ajax({
  url: `/editor/editorpage/existingCarouselImgs`, // the URL of the server endpoint
  method: 'GET', // HTTP method (default: 'GET')
  dataType: 'json', // the data type of the response (default: 'text')
  success: function(data) { 
    // function to handle the response (optional)
    
    existingCarouselImgs = existingCarouselImgs.concat(data);
    var select = $('#existingCarouselImgs');
    existingCarouselImgs.forEach(function(image){
      var option = $('<option>').text(image.name).attr('data-carouselimg', image.url);
      option.attr('value',image.url);
      select.append(option);
      $("#existingimgcarousel").append(option.clone());
      $('#existingsingleimgcarousel').append(option.clone());
    });
    
        // add existing images for carousel
        $("#existingCarouselImgs").chosen({
          width: "80%",
          no_results_text: "Oops, nothing found!",
          placeholder_text_multiple: "Select options",
          search_contains: true,
          max_selected_options: 3,
          disable_search_threshold: 10
        });

        // image for content block 1 image
      

        $('#existingsingleimgcarousel').chosen({
          width: "80%",
          no_results_text: "Oops, nothing found!",
          placeholder_text_multiple: "Select options",
          search_contains: true,
          max_selected_options: 8,
          disable_search_threshold: 10
        });
        
        $("#existingimgcarousel").chosen({
          width: "80%",
          no_results_text: "Oops, nothing found!",
          placeholder_text_multiple: "Select options",
          search_contains: true,
          max_selected_options: 3,
          disable_search_threshold: 10
        });
  },
  error: function(xhr, status, error) { // function to handle errors (optional)
    console.log('Error!');
    console.log(xhr.responseText);
  },
  complete: function(xhr, status) { // function to execute when the request is complete (optional)
  }
});


// ajax for retrieving logos in the database
var logos = [];
$.ajax({
  url: `/editor/editorpage/logos`, // the URL of the server endpoint
  method: 'get', // HTTP method (default: 'GET')
  dataType: 'json', // the data type of the response (default: 'text')
  success: function(data) { // function to handle the response (optional)
    // console.log(data.logo);
    logos = logos.concat(data.logo);
    const logoselection = $('#logoselection');
    logos.forEach(logo => {

      var logo = $('<option>').text(logo.name).attr('data-logo', logo.url);
      logoselection.append(logo);
    });
    // var img = $('<option>').text(image.name).attr('data-img', image.url);
  },
  error: function(xhr, status, error) { // function to handle errors (optional)
    console.log('Error!');
    console.log(xhr.responseText);
  },
  complete: function(xhr, status) { // function to execute when the request is complete (optional)
    
  }
});


// remove a page
var pages = document.querySelectorAll('.remove');

pages.forEach(function(element) {

  element.click(function() {

    var theme = document.getElementById('editable-title');
    var page = '';
    $('#'+page).remove();
    $(this).parent().parent().remove();
    var themename = theme.text();
  
    // Make the AJAX request
    $.ajax({
      url: `/deletepage/${themename}/${page}`,
      type: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(result) {
        console.log(result);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        // Handle the error case here
      }
    });
    
  });
  
});


  };


  function ajaxforotherpages(){
    var url = window.location.href;
    var secondLastSlug = url.substring(0, url.lastIndexOf('/')).substring(url.substring(0, url.lastIndexOf('/')).lastIndexOf('/') + 1);
    var lastSlug = url.substring(url.lastIndexOf('/') + 1);
    var page = decodeURIComponent(lastSlug.replace('?', ''));
    var themename = decodeURIComponent(secondLastSlug);
    $('#homeurl').attr('href',`http://privacy.wmsu.edu.ph/editor/editorpage/${themename}`);
      // Ajax to load button style
      $.ajax({
        url: `/editor/editorpage/${themename}/${page}/buttonattributes`,
        method: 'GET',
        dataType: 'JSON',
        contentType: 'application/json',
        error: function(xhr, status, error) {
          console.log(xhr.responseText)          // console.error(error); // Handle any errors that occur
          // console.error(status); // Handle any errors that occur
          // console.error(xhr); // Handle any errors that occur
      },
        success: function (data) {
            // Loop through the data and append it to an element in the view
            for (var i = 0; i < data.length; i++) {
                var btn = data[i];
                // var button_radius = $('<option>').text(btn.btn_radius);
                var button_radius = $('<option>').text(btn.name).attr('data-radius', btn.btn_radius);
  
                $('#button_radius').append(button_radius);
                button_radius.val(button_radius.data('radius'));
            }
        }
    });
  
  
  
    $('#pdfform').submit(function(event){
  
      // ajax to upload pdf file
        event.preventDefault(); // Prevent the form from submitting normally
            
        // Get the form data and make an AJAX request
        var form = $(this); // Store the form reference
        var formData = new FormData(form[0]); // Create a new FormData object from the form
      
      
      $.ajax({
        url: `/editor/editorpage/${themename}/${page}/uploadpdf`, // the URL of the server endpoint
        type: form.attr('method'),
        data: formData,
        processData: false, // Disable processing of data for sending
        contentType: false, // Disable content type header for sending
        success: function(data) { // function to handle the response (optional)
          var pdfUrl = data.pdfurl;
          var pdfcontainer = $(`<div id="pdf-container" class="edit4 px-auto"></div>`);
          var options = {
              height: '700px',
              width: '700px',
              class: 'edit',          };
          PDFObject.embed(pdfUrl, pdfcontainer, options);
          
          $('#canvas').append(pdfcontainer);
      
        },
        error: function(xhr, status, error) { // function to handle errors (optional)
          console.log('Error!');
          console.log(xhr.responseText);
        },
        complete: function(xhr, status) { // function to execute when the request is complete (optional)
          
        }
      });
      
      });
  
  // ajax for getting existing single images
  var existingsingleimgs = [];
  $.ajax({
    url: `/editor/editorpage/${themename}/${page}/retrieveimgs`, // the URL of the server endpoint
    method: 'GET', // HTTP method (default: 'GET')
    dataType: 'json', // the data type of the response (default: 'text')
    success: function(data) { // function to handle the response (optional)
      existingsingleimgs = existingsingleimgs.concat(data);
      existingsingleimgs.forEach(function (image){
        var existingimg = $('<option>').text(image.name).attr('data-img', image.url);
        $('.existingsingleimages').append(existingimg);
        existingimg.attr('value', image.url);
        $('#cardimgs').append(existingimg.clone()); 
  
        var imgCopy = $('<option>').text(image.name).attr('data-img', image.url);
        $('#imageforcard').append(imgCopy);
        $('#imageforcard').append(existingimg.clone());
  


        
    });

          // image for cards
        
        $('#cardimgs').chosen({
          width: "80%",
          no_results_text: "Oops, nothing found!",
          placeholder_text_multiple: "Select options",
          search_contains: true,
          max_selected_options: 8,
          disable_search_threshold: 10
                                
          });

          // image for single image
        $('#existingsingleimages').chosen({
          width: "80%",
          no_results_text: "Oops, nothing found!",
          placeholder_text_multiple: "Select options",
          search_contains: true,
          max_selected_options: 8,
          disable_search_threshold: 10
                                
          });



                // image for card
      
      $('#imageforcard').chosen({
        width: "80%",
        no_results_text: "Oops, nothing found!",
        placeholder_text_multiple: "Select options",
        search_contains: true,

      });

    },
    error: function(xhr, status, error) { // function to handle errors (optional)
      console.log('Error!');
      console.log(xhr.responseText);
    },
    complete: function(xhr, status) { // function to execute when the request is complete (optional)
    }
  });
  
      // Ajax to load flexbox justification
      $.ajax({
        url: `/editor/editorpage/${themename}/${page}/placeself`,
        method: 'GET',
        dataType: 'json',
  
        error: function(xhr, status, error) {
          console.error(error); // Handle any errors that occur
          console.error(status); // Handle any errors that occur
          console.error(xhr); // Handle any errors that occur
      },
        success: function (data) {
            // Loop through the data and append it to an element in the view
            for (var i = 0; i < data.length; i++) {
                var place_self = data[i];
                // var placeself_justification = $('<option>').text(placeself.justification);
                var placeself_justification = $('<option>').text(place_self.name).attr('data-placeself', place_self.placeself);
                
                $('#button_placement').append(placeself_justification);
                placeself_justification.val(placeself_justification.data('placeself'));
             
            }
        }
    });
  
  
  
    
    // ajax for existing carousel images
    var existingCarouselImgs = [];
    $.ajax({
    url: `/editor/editorpage/${themename}/${page}/existingCarouselImgs`, // the URL of the server endpoint
    method: 'GET', // HTTP method (default: 'GET')
    dataType: 'json', // the data type of the response (default: 'text')
    success: function(data) { 
      // function to handle the response (optional)
      
      existingCarouselImgs = existingCarouselImgs.concat(data);
    
      existingCarouselImgs.forEach(function(image){
        var option = $('<option>').text(image.name).attr('data-carouselimg', image.url);
        option.attr('value',image.url);
        var select = $('#existingCarouselImgs');
        select.append(option);
          $("#existingimgcarousel").append(option.clone());
          $('#existingsingleimgcarousel').append(option.clone());
      });
            // for single carousel
          // add existing images for carousel
          $("#existingCarouselImgs").chosen({
            width: "80%",
            no_results_text: "Oops, nothing found!",
            placeholder_text_multiple: "Select options",
            search_contains: true,
            max_selected_options: 3,
            disable_search_threshold: 10
          });

        // image for content block 1 image
      

        $('#existingsingleimgcarousel').chosen({
          width: "80%",
          no_results_text: "Oops, nothing found!",
          placeholder_text_multiple: "Select options",
          search_contains: true,
          max_selected_options: 8,
          disable_search_threshold: 10
        });
          
          // Carousel for content block 1
        
        
          $("#existingimgcarousel").chosen({
            width: "80%",
            no_results_text: "Oops, nothing found!",
            placeholder_text_multiple: "Select options",
            search_contains: true,
            max_selected_options: 3,
            disable_search_threshold: 10
          });


    },
    error: function(xhr, status, error) { // function to handle errors (optional)
      console.log('Error!');
      console.log(xhr.responseText);
    },
    complete: function(xhr, status) { // function to execute when the request is complete (optional)
      
    }
  });
  
  
  // ajax for retrieving logos in the database
  var logos = [];
  $.ajax({
    url: `/editor/editorpage/${themename}/${page}/logos`, // the URL of the server endpoint
    method: 'get', // HTTP method (default: 'GET')
    dataType: 'json', // the data type of the response (default: 'text')
    success: function(data) { // function to handle the response (optional)
      // console.log(data.logo);
      logos = logos.concat(data.logo);
      const logoselection = $('#logoselection');
      logos.forEach(logo => {
  
        var logo = $('<option>').text(logo.name).attr('data-logo', logo.url);
        logoselection.append(logo);
      });
      // var img = $('<option>').text(image.name).attr('data-img', image.url);
    },
    error: function(xhr, status, error) { // function to handle errors (optional)
      console.log('Error!');
      console.log(xhr.responseText);
    },
    complete: function(xhr, status) { // function to execute when the request is complete (optional)
      
    }
  });
  

  };

    // prevent content block 1 form from submitting
    $('#form-contentb1').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
    
        // Get the form data and make an AJAX request
        var form = $(this); // Store the form reference
        var formData = new FormData(form[0]); // Create a new FormData object from the form
        // console.log(formData);
    
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: formData,
            processData: false, // Disable processing of data for sending
            contentType: false, // Disable content type header for sending
            success: function(data) {
                // console.log(data); // Do something with the response

        // ajax for appending carousel images
        var carouselimages = [];
        var singleimg = [];
        $.ajax({
            url: '/editor/showcarouselimg',
            type: 'GET',
            dataType: 'json',
            error: function (error) {
                console.log(error);
            },
            success: function (data) {
                
                carouselimages = carouselimages.concat(data.images);
                singleimg = carouselimages.concat(data.singlemedia);
                         
    var content_block_1 = `
    <div id="cb1" class="grid grid-cols-2 h-full my-auto">
    <div id="img" src="${singleimg}" class="h-full">
    </div>
    <div x-data=\'{slides: [`;

    carouselimages.forEach(function(image) {
      content_block_1 += `\{ \image: \"${image.url}\" \},`;
    });
    
    content_block_1 += `\],\
      slideIndex: 0,
    
      prevSlide() \{\
        this.slideIndex = (this.slideIndex === 0) ? (this.slides.length - 1) : (this.slideIndex - 1);
      \},
      nextSlide()\{\
        this.slideIndex = (this.slideIndex =\=\= this.slides.length - 1) ? 0 : (this.slideIndex + 1);
      }
    }\'
    class=\'w-full h-screen relative\'>
    
      <!-- Carousel slides -->
      <div class='carousel-container w-full h-full absolute top-0 left-0'>
      <button \@click='prevSlide()'\ class='carousel-control-btn p-2 top-1/2 left-0 transform -translate-y-1/2 rounded-full bg-black text-white font-bold'>Prev</button>
      <button @click='nextSlide()' class='carousel-control-btn p-2 top-1/2 right-0 transform -translate-y-1/2 rounded-full bg-black text-white font-bold'>Next</button>  
      <template x-for='(slide, index) in slides' :key='index'>
        <div x-show='slideIndex === index' class='carousel-slide w-full h-full bg-cover bg-center absolute top-0 left-0' :style=\'"background-image: url(" + slide.image + ")"\'>
        <div class='carousel-caption text-white text-center text-3xl uppercase tracking-wider absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2'></div>
          </div>
        </template>
      </div>
    
      <!-- Carousel controls -->

    </div>

    <div class="col-span-2">
    <div class="grid grid-cols-1 justify-items-center">
      <h3 class="editable">My title</h3>
      <div class="editable">Hello, World!</div>
      </div>
    </div>

  </div>
    `;
    
    $('#canvas').append(content_block_1);

    loadJS("http://privacy.wmsu.edu.ph/js/tinymce/tinymce.min.js", true);
        // initializeCarousel();
    
            // ajax for appending image to content block 1
            $.ajax({
              url: '/editor/showimg',
              method: 'GET',
              dataType: 'json',
      
              error: function (error) {
                  console.log(error);
              },
              success: function (data) {
                 
                  // Loop through the data and append it to an element in the view
                      // var placeself_justification = $('<option>').text(placeself.justification);
                      var img = $(`<img src="" alt="" class="h-full w-full object-fit">
                      `);
                      img.attr('src',data );
                
                        $('#img').append(img);
                           
                  
              }
          });
              
            }
        });

            },
            error: function(xhr, status, error) {
                console.error(error); // Handle any errors that occur
                console.error(status); // Handle any errors that occur
                console.error(xhr.responseText); // Handle any errors that occur
            }
        });



    });


    // prevent content block 2 form from submitting, form for cb2
    $('#form-contentb2').submit(function(event) {

      event.preventDefault(); // Prevent the form from submitting normally
    
      // Get the form data and make an AJAX request
      var form = $(this); // Store the form reference
      var formData = new FormData(form[0]); // Create a new FormData object from the form
      // console.log(formData);
  
      $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: formData,
          processData: false, // Disable processing of data for sending
          contentType: false, // Disable content type header for sending
          success: function(data) {
              // console.log(data); // Do something with the response

                      // ajax for appending carousel images
           var cardimages = [];
           $.ajax({
            url: '/editor/showcarouselimg',
            type: 'GET',
            dataType: 'json',
            error: function (error) {
                console.log(error);
            },
            success: function (data) {
                
              cardimages = cardimages.concat(data.images);
                         
    var content_block_2 = `
    <div class="grid grid-cols-4 gap-2  h-screen">`;

    cardimages.forEach(function(image) {
      content_block_1 += `\{ \image: \"${image.url}\" \},`;
    });
    
    content_block_1 += `\],\
      slideIndex: 0,
    
      prevSlide() \{\
        this.slideIndex = (this.slideIndex === 0) ? (this.slides.length - 1) : (this.slideIndex - 1);
      \},
      nextSlide()\{\
        this.slideIndex = (this.slideIndex =\=\= this.slides.length - 1) ? 0 : (this.slideIndex + 1);
      }
    }\'
    class=\'w-full h-screen relative\'>
    
      <!-- Carousel slides -->
      <div class='carousel-container w-full h-full absolute top-0 left-0'>
        <template x-for='(slide, index) in slides' :key='index'>
        <div x-show='slideIndex === index' class='carousel-slide w-full h-full bg-cover bg-center absolute top-0 left-0' :style=\'"background-image: url(" + slide.image + ")"\'>
        <div class='carousel-caption text-white text-center text-3xl uppercase tracking-wider absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2'></div>
          </div>
        </template>
      </div>
    
      <!-- Carousel controls -->
      <div class='carousel-controls absolute top-1/2 left-0 transform -translate-y-1/2 flex justify-between w-full'>
        <button \@click='prevSlide()'\ class='carousel-control-btn p-2 rounded-full bg-black text-white font-bold'>Prev</button>
        <button @click='nextSlide()' class='carousel-control-btn p-2 rounded-full bg-black text-white font-bold'>Next</button>
      </div>
    </div>

    <div class="col-span-2">
    <div class="grid grid-cols-1 justify-items-center">
      <h3 class="editable">My title</h3>
      <div class="editable">Hello, World!</div>
      </div>
    </div>

  </div>
    `;
    
    $('#canvas').append(content_block_2);

    // loadJS("http://privacy.wmsu.edu.ph/js/tinymce/tinymce.min.js", true);

              
            }
        });


          },
          error: function(xhr, status, error) {
              console.error(error); // Handle any errors that occur
              console.error(status); // Handle any errors that occur
              console.error(xhr); // Handle any errors that occur
          }
      });



    });


    // prevent submission for content block 3
    $('#cb3form').submit(function(event) {

      event.preventDefault(); // Prevent the form from submitting normally
    
      // Get the form data and make an AJAX request
      var form = $(this); // Store the form reference
      var formData = new FormData(form[0]); // Create a new FormData object from the form
      // console.log(formData);
  
      $.ajax({
          url: form.attr('action'),
          type: form.attr('method'),
          data: formData,
          processData: false, // Disable processing of data for sending
          contentType: false, // Disable content type header for sending
          success: function(data) {
            var uniqueID = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);
            var contentblock3 = `
            <div class="grid grid-cols-2 h-auto my-16">

            <div id="" class="grid h-auto justify-items-center place-items-center edit">
              <div id="${uniqueID}" class="grid justify-items-center place-items-center">
                <p class="mx-auto">Type something...</p>
              </div>
                        <!-- component -->
              <button class="button group rounded-2xl h-12 w-48 font-bold text-lg relative overflow-hidden mx-auto">
                Button
              </button>
    
            </div>
    
            <div class="grid h-auto justify-items-center place-items-center edit">
              <img src="${data.imageurl}" class="mx-auto mb-2 h-full" alt="">
              <button class="button group rounded-2xl h-12 w-48 font-bold text-lg relative overflow-hidden mx-auto">
              Button
              </button>
            </div>
    
          </div>
            `;

            $("#canvas").append(contentblock3);
            initializeckEditor(uniqueID);

          },
          error: function(xhr, status, error) {
              console.error(error); // Handle any errors that occur
              console.error(status); // Handle any errors that occur
              console.error(xhr.responseText); // Handle any errors that occur
          }
      });



    });


// ajax to show existing images
var existingimgs = [];
$.ajax({
    url: '/editor/existingimgs',
    method: 'GET',
    dataType: 'json',
    success: function(data) {
    
        existingimgs = existingimgs.concat(data.images)

        // Handle successful response here
        existingimgs.forEach(function (image){
            var existingimg = $('<option>').text(image.name).attr('data-img', image.url);
            $('#existingimgs').append(existingimg);
            existingimg.attr('value', image.url);
        });
        // loadJS("http://privacy.wmsu.edu.ph/js/chosen_v1.8.7/chosen.jquery.js", async = false)
        $('#existingimgs').chosen({
          width: "80%",
          no_results_text: "Oops, nothing found!",
          placeholder_text_multiple: "Select options",
          max_selected_options: 3,
          disable_search_threshold: 10
        });
    },
    error: function(xhr, status, error) {
        // Handle error response here
        console.log(error);
    }
});


// ajax for single image

$('#singleimageupload').submit(function(event) {

  event.preventDefault(); // Prevent the form from submitting normally

  // Get the form data and make an AJAX request
  var form = $(this); // Store the form reference
  var formData = new FormData(form[0]); // Create a new FormData object from the form
  // console.log(formData);

  $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: formData,
      processData: false, // Disable processing of data for sending
      contentType: false, // Disable content type header for sending
      success: function(data) {
        var image = $(`<img src="${data.imageurl}" class="flex w-screen h-screen object-fit" alt="">`);
        $('#canvas').append(image);
      },
      error: function(xhr, status, error) { // function to handle errors (optional)
        console.log('Error!');
        // console.log(xhr.responseText);
      },
      complete: function(xhr, status) { // function to execute when the request is complete (optional)
      }

    });
  });

  // upload single image form submission

$("#uploadsingleimg").on('click',function() {
  $("#singleimageupload").submit();
});


// upload card ajax


$('#uploadcard').submit(function(event) {

  event.preventDefault(); // Prevent the form from submitting normally

  // Get the form data and make an AJAX request
  var form = $(this); // Store the form reference
  var formData = new FormData(form[0]); // Create a new FormData object from the form
  // console.log(formData);

  $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: formData,
      processData: false, // Disable processing of data for sending
      contentType: false, // Disable content type header for sending
      success: function(data) {
        var cardId = 'id-' + Date.now() + '-' + Math.floor(Math.random() * 1000);

        var card = $(`
        <div id="card-container" class="card flex justify-center items-center mt-6 mb-6 bg-red-800 rounded-lg mx-auto w-1/2">
            <img class="modifiableimg mb-2 mt-2 card object-cover w-48 rounded-t-lg h-64 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="${data.imageurl}" alt="">
            <div id="${cardId}" class="flex flex-col justify-between p-4 leading-normal bg-red-800">
              <h5 class="title mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">Title</h5>
              <p class="description mb-3 font-normal text-white dark:text-gray-400">Description</p>
            </div>
        </div>
      `);
    
      $('#canvas').append(card);
      initializeckEditor(cardId);
      },
      error: function(xhr, status, error) { // function to handle errors (optional)
        console.log('Error!');
        // console.log(xhr.responseText);
      },
      complete: function(xhr, status) { // function to execute when the request is complete (optional)
      }

    });


  });



// initialize JS
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


});