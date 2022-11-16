/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/apps/support-center/tickets/create.js":
/*!*******************************************************************************!*\
  !*** ./resources/assets/core/js/custom/apps/support-center/tickets/create.js ***!
  \*******************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTModalNewTicket = function () {\n  var submitButton;\n  var cancelButton;\n  var validator;\n  var form;\n  var modal;\n  var modalEl; // Init form inputs\n\n  var initForm = function initForm() {\n    // Ticket attachments\n    // For more info about Dropzone plugin visit:  https://www.dropzonejs.com/#usage\n    var myDropzone = new Dropzone(\"#kt_modal_create_ticket_attachments\", {\n      url: \"https://keenthemes.com/scripts/void.php\",\n      // Set the url for your upload script location\n      paramName: \"file\",\n      // The name that will be used to transfer the file\n      maxFiles: 10,\n      maxFilesize: 10,\n      // MB\n      addRemoveLinks: true,\n      accept: function accept(file, done) {\n        if (file.name == \"justinbieber.jpg\") {\n          done(\"Naha, you don't.\");\n        } else {\n          done();\n        }\n      }\n    }); // Due date. For more info, please visit the official plugin site: https://flatpickr.js.org/\n\n    var dueDate = $(form.querySelector('[name=\"due_date\"]'));\n    dueDate.flatpickr({\n      enableTime: true,\n      dateFormat: \"d, M Y, H:i\"\n    }); // Ticket user. For more info, plase visit the official plugin site: https://select2.org/\n\n    $(form.querySelector('[name=\"user\"]')).on('change', function () {\n      // Revalidate the field when an option is chosen\n      validator.revalidateField('user');\n    }); // Ticket status. For more info, plase visit the official plugin site: https://select2.org/\n\n    $(form.querySelector('[name=\"status\"]')).on('change', function () {\n      // Revalidate the field when an option is chosen\n      validator.revalidateField('status');\n    });\n  }; // Handle form validation and submittion\n\n\n  var handleForm = function handleForm() {\n    // Stepper custom navigation\n    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/\n    validator = FormValidation.formValidation(form, {\n      fields: {\n        subject: {\n          validators: {\n            notEmpty: {\n              message: 'Ticket subject is required'\n            }\n          }\n        },\n        user: {\n          validators: {\n            notEmpty: {\n              message: 'Ticket user is required'\n            }\n          }\n        },\n        due_date: {\n          validators: {\n            notEmpty: {\n              message: 'Ticket due date is required'\n            }\n          }\n        },\n        description: {\n          validators: {\n            notEmpty: {\n              message: 'Target description is required'\n            }\n          }\n        },\n        'notifications[]': {\n          validators: {\n            notEmpty: {\n              message: 'Please select at least one notifications method'\n            }\n          }\n        }\n      },\n      plugins: {\n        trigger: new FormValidation.plugins.Trigger(),\n        bootstrap: new FormValidation.plugins.Bootstrap5({\n          rowSelector: '.fv-row',\n          eleInvalidClass: '',\n          eleValidClass: ''\n        })\n      }\n    }); // Action buttons\n\n    submitButton.addEventListener('click', function (e) {\n      e.preventDefault(); // Validate form before submit\n\n      if (validator) {\n        validator.validate().then(function (status) {\n          console.log('validated!');\n\n          if (status == 'Valid') {\n            submitButton.setAttribute('data-kt-indicator', 'on'); // Disable button to avoid multiple click \n\n            submitButton.disabled = true;\n            setTimeout(function () {\n              submitButton.removeAttribute('data-kt-indicator'); // Enable button\n\n              submitButton.disabled = false; // Show success message. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n\n              Swal.fire({\n                text: \"Form has been successfully submitted!\",\n                icon: \"success\",\n                buttonsStyling: false,\n                confirmButtonText: \"Ok, got it!\",\n                customClass: {\n                  confirmButton: \"btn btn-primary\"\n                }\n              }).then(function (result) {\n                if (result.isConfirmed) {\n                  modal.hide();\n                }\n              }); //form.submit(); // Submit form\n            }, 2000);\n          } else {\n            // Show error message.\n            Swal.fire({\n              text: \"Sorry, looks like there are some errors detected, please try again.\",\n              icon: \"error\",\n              buttonsStyling: false,\n              confirmButtonText: \"Ok, got it!\",\n              customClass: {\n                confirmButton: \"btn btn-primary\"\n              }\n            });\n          }\n        });\n      }\n    });\n    cancelButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to cancel?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, cancel it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          form.reset(); // Reset form\t\n\n          modal.hide(); // Hide modal\t\t\t\t\n        } else if (result.dismiss === 'cancel') {\n          Swal.fire({\n            text: \"Your form has not been cancelled!.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"Ok, got it!\",\n            customClass: {\n              confirmButton: \"btn btn-primary\"\n            }\n          });\n        }\n      });\n    });\n  };\n\n  return {\n    // Public functions\n    init: function init() {\n      // Elements\n      modalEl = document.querySelector('#kt_modal_new_ticket');\n\n      if (!modalEl) {\n        return;\n      }\n\n      modal = new bootstrap.Modal(modalEl);\n      form = document.querySelector('#kt_modal_new_ticket_form');\n      submitButton = document.getElementById('kt_modal_new_ticket_submit');\n      cancelButton = document.getElementById('kt_modal_new_ticket_cancel');\n      initForm();\n      handleForm();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTModalNewTicket.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvc3VwcG9ydC1jZW50ZXIvdGlja2V0cy9jcmVhdGUuanMuanMiLCJtYXBwaW5ncyI6IkNBRUE7O0FBQ0EsSUFBSUEsZ0JBQWdCLEdBQUcsWUFBWTtFQUNsQyxJQUFJQyxZQUFKO0VBQ0EsSUFBSUMsWUFBSjtFQUNBLElBQUlDLFNBQUo7RUFDQSxJQUFJQyxJQUFKO0VBQ0EsSUFBSUMsS0FBSjtFQUNBLElBQUlDLE9BQUosQ0FOa0MsQ0FRbEM7O0VBQ0EsSUFBSUMsUUFBUSxHQUFHLFNBQVhBLFFBQVcsR0FBVztJQUN6QjtJQUNBO0lBQ0EsSUFBSUMsVUFBVSxHQUFHLElBQUlDLFFBQUosQ0FBYSxxQ0FBYixFQUFvRDtNQUNwRUMsR0FBRyxFQUFFLHlDQUQrRDtNQUNwQjtNQUN2Q0MsU0FBUyxFQUFFLE1BRmdEO01BRXhDO01BQ25CQyxRQUFRLEVBQUUsRUFIaUQ7TUFJM0RDLFdBQVcsRUFBRSxFQUo4QztNQUkxQztNQUNqQkMsY0FBYyxFQUFFLElBTDJDO01BTTNEQyxNQUFNLEVBQUUsZ0JBQVNDLElBQVQsRUFBZUMsSUFBZixFQUFxQjtRQUN6QixJQUFJRCxJQUFJLENBQUNFLElBQUwsSUFBYSxrQkFBakIsRUFBcUM7VUFDakNELElBQUksQ0FBQyxrQkFBRCxDQUFKO1FBQ0gsQ0FGRCxNQUVPO1VBQ0hBLElBQUk7UUFDUDtNQUNKO0lBWjBELENBQXBELENBQWpCLENBSHlCLENBa0J6Qjs7SUFDQSxJQUFJRSxPQUFPLEdBQUdDLENBQUMsQ0FBQ2hCLElBQUksQ0FBQ2lCLGFBQUwsQ0FBbUIsbUJBQW5CLENBQUQsQ0FBZjtJQUNBRixPQUFPLENBQUNHLFNBQVIsQ0FBa0I7TUFDakJDLFVBQVUsRUFBRSxJQURLO01BRWpCQyxVQUFVLEVBQUU7SUFGSyxDQUFsQixFQXBCeUIsQ0F5QnpCOztJQUNNSixDQUFDLENBQUNoQixJQUFJLENBQUNpQixhQUFMLENBQW1CLGVBQW5CLENBQUQsQ0FBRCxDQUF1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QWEsRUFBRTtZQURIO1VBTEosQ0FBVjtRQVNBO01BQ0QsQ0ExQkQ7SUEyQkEsQ0E5QkQ7RUErQkEsQ0E1SUQ7O0VBOElBLE9BQU87SUFDTjtJQUNBUyxJQUFJLEVBQUUsZ0JBQVk7TUFDakI7TUFDQXBFLE9BQU8sR0FBR3FFLFFBQVEsQ0FBQ3RELGFBQVQsQ0FBdUIsc0JBQXZCLENBQVY7O01BRUEsSUFBSSxDQUFDZixPQUFMLEVBQWM7UUFDYjtNQUNBOztNQUVERCxLQUFLLEdBQUcsSUFBSW9DLFNBQVMsQ0FBQ21DLEtBQWQsQ0FBb0J0RSxPQUFwQixDQUFSO01BRUFGLElBQUksR0FBR3VFLFFBQVEsQ0FBQ3RELGFBQVQsQ0FBdUIsMkJBQXZCLENBQVA7TUFDQXBCLFlBQVksR0FBRzBFLFFBQVEsQ0FBQ0UsY0FBVCxDQUF3Qiw0QkFBeEIsQ0FBZjtNQUNBM0UsWUFBWSxHQUFHeUUsUUFBUSxDQUFDRSxjQUFULENBQXdCLDRCQUF4QixDQUFmO01BRUF0RSxRQUFRO01BQ1JvQixVQUFVO0lBQ1Y7RUFsQkssQ0FBUDtBQW9CQSxDQWxOc0IsRUFBdkIsQyxDQW9OQTs7O0FBQ0FtRCxNQUFNLENBQUNDLGtCQUFQLENBQTBCLFlBQVk7RUFDckMvRSxnQkFBZ0IsQ0FBQzBFLElBQWpCO0FBQ0EsQ0FGRCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vYXBwcy9zdXBwb3J0LWNlbnRlci90aWNrZXRzL2NyZWF0ZS5qcz9mOWMxIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RNb2RhbE5ld1RpY2tldCA9IGZ1bmN0aW9uICgpIHtcclxuXHR2YXIgc3VibWl0QnV0dG9uO1xyXG5cdHZhciBjYW5jZWxCdXR0b247XHJcblx0dmFyIHZhbGlkYXRvcjtcclxuXHR2YXIgZm9ybTtcclxuXHR2YXIgbW9kYWw7XHJcblx0dmFyIG1vZGFsRWw7XHJcblxyXG5cdC8vIEluaXQgZm9ybSBpbnB1dHNcclxuXHR2YXIgaW5pdEZvcm0gPSBmdW5jdGlvbigpIHtcclxuXHRcdC8vIFRpY2tldCBhdHRhY2htZW50c1xyXG5cdFx0Ly8gRm9yIG1vcmUgaW5mbyBhYm91dCBEcm9wem9uZSBwbHVnaW4gdmlzaXQ6ICBodHRwczovL3d3dy5kcm9wem9uZWpzLmNvbS8jdXNhZ2VcclxuXHRcdHZhciBteURyb3B6b25lID0gbmV3IERyb3B6b25lKFwiI2t0X21vZGFsX2NyZWF0ZV90aWNrZXRfYXR0YWNobWVudHNcIiwgeyBcclxuXHRcdFx0dXJsOiBcImh0dHBzOi8va2VlbnRoZW1lcy5jb20vc2NyaXB0cy92b2lkLnBocFwiLCAvLyBTZXQgdGhlIHVybCBmb3IgeW91ciB1cGxvYWQgc2NyaXB0IGxvY2F0aW9uXHJcbiAgICAgICAgICAgIHBhcmFtTmFtZTogXCJmaWxlXCIsIC8vIFRoZSBuYW1lIHRoYXQgd2lsbCBiZSB1c2VkIHRvIHRyYW5zZmVyIHRoZSBmaWxlXHJcbiAgICAgICAgICAgIG1heEZpbGVzOiAxMCxcclxuICAgICAgICAgICAgbWF4RmlsZXNpemU6IDEwLCAvLyBNQlxyXG4gICAgICAgICAgICBhZGRSZW1vdmVMaW5rczogdHJ1ZSxcclxuICAgICAgICAgICAgYWNjZXB0OiBmdW5jdGlvbihmaWxlLCBkb25lKSB7XHJcbiAgICAgICAgICAgICAgICBpZiAoZmlsZS5uYW1lID09IFwianVzdGluYmllYmVyLmpwZ1wiKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgZG9uZShcIk5haGEsIHlvdSBkb24ndC5cIik7XHJcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgICAgIGRvbmUoKTtcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfVxyXG5cdFx0fSk7ICBcclxuXHJcblx0XHQvLyBEdWUgZGF0ZS4gRm9yIG1vcmUgaW5mbywgcGxlYXNlIHZpc2l0IHRoZSBvZmZpY2lhbCBwbHVnaW4gc2l0ZTogaHR0cHM6Ly9mbGF0cGlja3IuanMub3JnL1xyXG5cdFx0dmFyIGR1ZURhdGUgPSAkKGZvcm0ucXVlcnlTZWxlY3RvcignW25hbWU9XCJkdWVfZGF0ZVwiXScpKTtcclxuXHRcdGR1ZURhdGUuZmxhdHBpY2tyKHtcclxuXHRcdFx0ZW5hYmxlVGltZTogdHJ1ZSxcclxuXHRcdFx0ZGF0ZUZvcm1hdDogXCJkLCBNIFksIEg6aVwiLFxyXG5cdFx0fSk7XHJcblxyXG5cdFx0Ly8gVGlja2V0IHVzZXIuIEZvciBtb3JlIGluZm8sIHBsYXNlIHZpc2l0IHRoZSBvZmZpY2lhbCBwbHVnaW4gc2l0ZTogaHR0cHM6Ly9zZWxlY3QyLm9yZy9cclxuICAgICAgICAkKGZvcm0ucXVlcnlTZWxlY3RvcignW25hbWU9XCJ1c2VyXCJdJykpLm9uKCdjaGFuZ2UnLCBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgLy8gUmV2YWxpZGF0ZSB0aGUgZmllbGQgd2hlbiBhbiBvcHRpb24gaXMgY2hvc2VuXHJcbiAgICAgICAgICAgIHZhbGlkYXRvci5yZXZhbGlkYXRlRmllbGQoJ3VzZXInKTtcclxuICAgICAgICB9KTtcclxuXHJcblx0XHQvLyBUaWNrZXQgc3RhdHVzLiBGb3IgbW9yZSBpbmZvLCBwbGFzZSB2aXNpdCB0aGUgb2ZmaWNpYWwgcGx1Z2luIHNpdGU6IGh0dHBzOi8vc2VsZWN0Mi5vcmcvXHJcbiAgICAgICAgJChmb3JtLnF1ZXJ5U2VsZWN0b3IoJ1tuYW1lPVwic3RhdHVzXCJdJykpLm9uKCdjaGFuZ2UnLCBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgLy8gUmV2YWxpZGF0ZSB0aGUgZmllbGQgd2hlbiBhbiBvcHRpb24gaXMgY2hvc2VuXHJcbiAgICAgICAgICAgIHZhbGlkYXRvci5yZXZhbGlkYXRlRmllbGQoJ3N0YXR1cycpO1xyXG4gICAgICAgIH0pO1xyXG5cdH1cclxuXHJcblx0Ly8gSGFuZGxlIGZvcm0gdmFsaWRhdGlvbiBhbmQgc3VibWl0dGlvblxyXG5cdHZhciBoYW5kbGVGb3JtID0gZnVuY3Rpb24oKSB7XHJcblx0XHQvLyBTdGVwcGVyIGN1c3RvbSBuYXZpZ2F0aW9uXHJcblxyXG5cdFx0Ly8gSW5pdCBmb3JtIHZhbGlkYXRpb24gcnVsZXMuIEZvciBtb3JlIGluZm8gY2hlY2sgdGhlIEZvcm1WYWxpZGF0aW9uIHBsdWdpbidzIG9mZmljaWFsIGRvY3VtZW50YXRpb246aHR0cHM6Ly9mb3JtdmFsaWRhdGlvbi5pby9cclxuXHRcdHZhbGlkYXRvciA9IEZvcm1WYWxpZGF0aW9uLmZvcm1WYWxpZGF0aW9uKFxyXG5cdFx0XHRmb3JtLFxyXG5cdFx0XHR7XHJcblx0XHRcdFx0ZmllbGRzOiB7XHJcblx0XHRcdFx0XHRzdWJqZWN0OiB7XHJcblx0XHRcdFx0XHRcdHZhbGlkYXRvcnM6IHtcclxuXHRcdFx0XHRcdFx0XHRub3RFbXB0eToge1xyXG5cdFx0XHRcdFx0XHRcdFx0bWVzc2FnZTogJ1RpY2tldCBzdWJqZWN0IGlzIHJlcXVpcmVkJ1xyXG5cdFx0XHRcdFx0XHRcdH1cclxuXHRcdFx0XHRcdFx0fVxyXG5cdFx0XHRcdFx0fSxcclxuXHRcdFx0XHRcdHVzZXI6IHtcclxuXHRcdFx0XHRcdFx0dmFsaWRhdG9yczoge1xyXG5cdFx0XHRcdFx0XHRcdG5vdEVtcHR5OiB7XHJcblx0XHRcdFx0XHRcdFx0XHRtZXNzYWdlOiAnVGlja2V0IHVzZXIgaXMgcmVxdWlyZWQnXHJcblx0XHRcdFx0XHRcdFx0fVxyXG5cdFx0XHRcdFx0XHR9XHJcblx0XHRcdFx0XHR9LFxyXG5cdFx0XHRcdFx0ZHVlX2RhdGU6IHtcclxuXHRcdFx0XHRcdFx0dmFsaWRhdG9yczoge1xyXG5cdFx0XHRcdFx0XHRcdG5vdEVtcHR5OiB7XHJcblx0XHRcdFx0XHRcdFx0XHRtZXNzYWdlOiAnVGlja2V0IGR1ZSBkYXRlIGlzIHJlcXVpcmVkJ1xyXG5cdFx0XHRcdFx0XHRcdH1cclxuXHRcdFx0XHRcdFx0fVxyXG5cdFx0XHRcdFx0fSxcclxuXHRcdFx0XHRcdGRlc2NyaXB0aW9uOiB7XHJcblx0XHRcdFx0XHRcdHZhbGlkYXRvcnM6IHtcclxuXHRcdFx0XHRcdFx0XHRub3RFbXB0eToge1xyXG5cdFx0XHRcdFx0XHRcdFx0bWVzc2FnZTogJ1RhcmdldCBkZXNjcmlwdGlvbiBpcyByZXF1aXJlZCdcclxuXHRcdFx0XHRcdFx0XHR9XHJcblx0XHRcdFx0XHRcdH1cclxuXHRcdFx0XHRcdH0sXHJcblx0XHRcdFx0XHQnbm90aWZpY2F0aW9uc1tdJzoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGF0b3JzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBub3RFbXB0eToge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdQbGVhc2Ugc2VsZWN0IGF0IGxlYXN0IG9uZSBub3RpZmljYXRpb25zIG1ldGhvZCdcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIH0sXHJcblx0XHRcdFx0fSxcclxuXHRcdFx0XHRwbHVnaW5zOiB7XHJcblx0XHRcdFx0XHR0cmlnZ2VyOiBuZXcgRm9ybVZhbGlkYXRpb24ucGx1Z2lucy5UcmlnZ2VyKCksXHJcblx0XHRcdFx0XHRib290c3RyYXA6IG5ldyBGb3JtVmFsaWRhdGlvbi5wbHVnaW5zLkJvb3RzdHJhcDUoe1xyXG5cdFx0XHRcdFx0XHRyb3dTZWxlY3RvcjogJy5mdi1yb3cnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBlbGVJbnZhbGlkQ2xhc3M6ICcnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBlbGVWYWxpZENsYXNzOiAnJ1xyXG5cdFx0XHRcdFx0fSlcclxuXHRcdFx0XHR9XHJcblx0XHRcdH1cclxuXHRcdCk7XHJcblxyXG5cdFx0Ly8gQWN0aW9uIGJ1dHRvbnNcclxuXHRcdHN1Ym1pdEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcblx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcblx0XHRcdC8vIFZhbGlkYXRlIGZvcm0gYmVmb3JlIHN1Ym1pdFxyXG5cdFx0XHRpZiAodmFsaWRhdG9yKSB7XHJcblx0XHRcdFx0dmFsaWRhdG9yLnZhbGlkYXRlKCkudGhlbihmdW5jdGlvbiAoc3RhdHVzKSB7XHJcblx0XHRcdFx0XHRjb25zb2xlLmxvZygndmFsaWRhdGVkIScpO1xyXG5cclxuXHRcdFx0XHRcdGlmIChzdGF0dXMgPT0gJ1ZhbGlkJykge1xyXG5cdFx0XHRcdFx0XHRzdWJtaXRCdXR0b24uc2V0QXR0cmlidXRlKCdkYXRhLWt0LWluZGljYXRvcicsICdvbicpO1xyXG5cclxuXHRcdFx0XHRcdFx0Ly8gRGlzYWJsZSBidXR0b24gdG8gYXZvaWQgbXVsdGlwbGUgY2xpY2sgXHJcblx0XHRcdFx0XHRcdHN1Ym1pdEJ1dHRvbi5kaXNhYmxlZCA9IHRydWU7XHJcblxyXG5cdFx0XHRcdFx0XHRzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xyXG5cdFx0XHRcdFx0XHRcdHN1Ym1pdEJ1dHRvbi5yZW1vdmVBdHRyaWJ1dGUoJ2RhdGEta3QtaW5kaWNhdG9yJyk7XHJcblxyXG5cdFx0XHRcdFx0XHRcdC8vIEVuYWJsZSBidXR0b25cclxuXHRcdFx0XHRcdFx0XHRzdWJtaXRCdXR0b24uZGlzYWJsZWQgPSBmYWxzZTtcclxuXHRcdFx0XHRcdFx0XHRcclxuXHRcdFx0XHRcdFx0XHQvLyBTaG93IHN1Y2Nlc3MgbWVzc2FnZS4gRm9yIG1vcmUgaW5mbyBjaGVjayB0aGUgcGx1Z2luJ3Mgb2ZmaWNpYWwgZG9jdW1lbnRhdGlvbjogaHR0cHM6Ly9zd2VldGFsZXJ0Mi5naXRodWIuaW8vXHJcblx0XHRcdFx0XHRcdFx0U3dhbC5maXJlKHtcclxuXHRcdFx0XHRcdFx0XHRcdHRleHQ6IFwiRm9ybSBoYXMgYmVlbiBzdWNjZXNzZnVsbHkgc3VibWl0dGVkIVwiLFxyXG5cdFx0XHRcdFx0XHRcdFx0aWNvbjogXCJzdWNjZXNzXCIsXHJcblx0XHRcdFx0XHRcdFx0XHRidXR0b25zU3R5bGluZzogZmFsc2UsXHJcblx0XHRcdFx0XHRcdFx0XHRjb25maXJtQnV0dG9uVGV4dDogXCJPaywgZ290IGl0IVwiLFxyXG5cdFx0XHRcdFx0XHRcdFx0Y3VzdG9tQ2xhc3M6IHtcclxuXHRcdFx0XHRcdFx0XHRcdFx0Y29uZmlybUJ1dHRvbjogXCJidG4gYnRuLXByaW1hcnlcIlxyXG5cdFx0XHRcdFx0XHRcdFx0fVxyXG5cdFx0XHRcdFx0XHRcdH0pLnRoZW4oZnVuY3Rpb24gKHJlc3VsdCkge1xyXG5cdFx0XHRcdFx0XHRcdFx0aWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xyXG5cdFx0XHRcdFx0XHRcdFx0XHRtb2RhbC5oaWRlKCk7XHJcblx0XHRcdFx0XHRcdFx0XHR9XHJcblx0XHRcdFx0XHRcdFx0fSk7XHJcblxyXG5cdFx0XHRcdFx0XHRcdC8vZm9ybS5zdWJtaXQoKTsgLy8gU3VibWl0IGZvcm1cclxuXHRcdFx0XHRcdFx0fSwgMjAwMCk7ICAgXHRcdFx0XHRcdFx0XHJcblx0XHRcdFx0XHR9IGVsc2Uge1xyXG5cdFx0XHRcdFx0XHQvLyBTaG93IGVycm9yIG1lc3NhZ2UuXHJcblx0XHRcdFx0XHRcdFN3YWwuZmlyZSh7XHJcblx0XHRcdFx0XHRcdFx0dGV4dDogXCJTb3JyeSwgbG9va3MgbGlrZSB0aGVyZSBhcmUgc29tZSBlcnJvcnMgZGV0ZWN0ZWQsIHBsZWFzZSB0cnkgYWdhaW4uXCIsXHJcblx0XHRcdFx0XHRcdFx0aWNvbjogXCJlcnJvclwiLFxyXG5cdFx0XHRcdFx0XHRcdGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuXHRcdFx0XHRcdFx0XHRjb25maXJtQnV0dG9uVGV4dDogXCJPaywgZ290IGl0IVwiLFxyXG5cdFx0XHRcdFx0XHRcdGN1c3RvbUNsYXNzOiB7XHJcblx0XHRcdFx0XHRcdFx0XHRjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiXHJcblx0XHRcdFx0XHRcdFx0fVxyXG5cdFx0XHRcdFx0XHR9KTtcclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHR9KTtcclxuXHRcdFx0fVxyXG5cdFx0fSk7XHJcblxyXG5cdFx0Y2FuY2VsQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuXHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuXHRcdFx0U3dhbC5maXJlKHtcclxuXHRcdFx0XHR0ZXh0OiBcIkFyZSB5b3Ugc3VyZSB5b3Ugd291bGQgbGlrZSB0byBjYW5jZWw/XCIsXHJcblx0XHRcdFx0aWNvbjogXCJ3YXJuaW5nXCIsXHJcblx0XHRcdFx0c2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcclxuXHRcdFx0XHRidXR0b25zU3R5bGluZzogZmFsc2UsXHJcblx0XHRcdFx0Y29uZmlybUJ1dHRvblRleHQ6IFwiWWVzLCBjYW5jZWwgaXQhXCIsXHJcblx0XHRcdFx0Y2FuY2VsQnV0dG9uVGV4dDogXCJObywgcmV0dXJuXCIsXHJcblx0XHRcdFx0Y3VzdG9tQ2xhc3M6IHtcclxuXHRcdFx0XHRcdGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCIsXHJcblx0XHRcdFx0XHRjYW5jZWxCdXR0b246IFwiYnRuIGJ0bi1hY3RpdmUtbGlnaHRcIlxyXG5cdFx0XHRcdH1cclxuXHRcdFx0fSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcblx0XHRcdFx0aWYgKHJlc3VsdC52YWx1ZSkge1xyXG5cdFx0XHRcdFx0Zm9ybS5yZXNldCgpOyAvLyBSZXNldCBmb3JtXHRcclxuXHRcdFx0XHRcdG1vZGFsLmhpZGUoKTsgLy8gSGlkZSBtb2RhbFx0XHRcdFx0XHJcblx0XHRcdFx0fSBlbHNlIGlmIChyZXN1bHQuZGlzbWlzcyA9PT0gJ2NhbmNlbCcpIHtcclxuXHRcdFx0XHRcdFN3YWwuZmlyZSh7XHJcblx0XHRcdFx0XHRcdHRleHQ6IFwiWW91ciBmb3JtIGhhcyBub3QgYmVlbiBjYW5jZWxsZWQhLlwiLFxyXG5cdFx0XHRcdFx0XHRpY29uOiBcImVycm9yXCIsXHJcblx0XHRcdFx0XHRcdGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuXHRcdFx0XHRcdFx0Y29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcclxuXHRcdFx0XHRcdFx0Y3VzdG9tQ2xhc3M6IHtcclxuXHRcdFx0XHRcdFx0XHRjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiLFxyXG5cdFx0XHRcdFx0XHR9XHJcblx0XHRcdFx0XHR9KTtcclxuXHRcdFx0XHR9XHJcblx0XHRcdH0pO1xyXG5cdFx0fSk7XHJcblx0fVxyXG5cclxuXHRyZXR1cm4ge1xyXG5cdFx0Ly8gUHVibGljIGZ1bmN0aW9uc1xyXG5cdFx0aW5pdDogZnVuY3Rpb24gKCkge1xyXG5cdFx0XHQvLyBFbGVtZW50c1xyXG5cdFx0XHRtb2RhbEVsID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2t0X21vZGFsX25ld190aWNrZXQnKTtcclxuXHJcblx0XHRcdGlmICghbW9kYWxFbCkge1xyXG5cdFx0XHRcdHJldHVybjtcclxuXHRcdFx0fVxyXG5cclxuXHRcdFx0bW9kYWwgPSBuZXcgYm9vdHN0cmFwLk1vZGFsKG1vZGFsRWwpO1xyXG5cclxuXHRcdFx0Zm9ybSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9tb2RhbF9uZXdfdGlja2V0X2Zvcm0nKTtcclxuXHRcdFx0c3VibWl0QnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X21vZGFsX25ld190aWNrZXRfc3VibWl0Jyk7XHJcblx0XHRcdGNhbmNlbEJ1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdrdF9tb2RhbF9uZXdfdGlja2V0X2NhbmNlbCcpO1xyXG5cclxuXHRcdFx0aW5pdEZvcm0oKTtcclxuXHRcdFx0aGFuZGxlRm9ybSgpO1xyXG5cdFx0fVxyXG5cdH07XHJcbn0oKTtcclxuXHJcbi8vIE9uIGRvY3VtZW50IHJlYWR5XHJcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24gKCkge1xyXG5cdEtUTW9kYWxOZXdUaWNrZXQuaW5pdCgpO1xyXG59KTsiXSwibmFtZXMiOlsiS1RNb2RhbE5ld1RpY2tldCIsInN1Ym1pdEJ1dHRvbiIsImNhbmNlbEJ1dHRvbiIsInZhbGlkYXRvciIsImZvcm0iLCJtb2RhbCIsIm1vZGFsRWwiLCJpbml0Rm9ybSIsIm15RHJvcHpvbmUiLCJEcm9wem9uZSIsInVybCIsInBhcmFtTmFtZSIsIm1heEZpbGVzIiwibWF4RmlsZXNpemUiLCJhZGRSZW1vdmVMaW5rcyIsImFjY2VwdCIsImZpbGUiLCJkb25lIiwibmFtZSIsImR1ZURhdGUiLCIkIiwicXVlcnlTZWxlY3RvciIsImZsYXRwaWNrciIsImVuYWJsZVRpbWUiLCJkYXRlRm9ybWF0Iiwib24iLCJyZXZhbGlkYXRlRmllbGQiLCJoYW5kbGVGb3JtIiwiRm9ybVZhbGlkYXRpb24iLCJmb3JtVmFsaWRhdGlvbiIsImZpZWxkcyIsInN1YmplY3QiLCJ2YWxpZGF0b3JzIiwibm90RW1wdHkiLCJtZXNzYWdlIiwidXNlciIsImR1ZV9kYXRlIiwiZGVzY3JpcHRpb24iLCJwbHVnaW5zIiwidHJpZ2dlciIsIlRyaWdnZXIiLCJib290c3RyYXAiLCJCb290c3RyYXA1Iiwicm93U2VsZWN0b3IiLCJlbGVJbnZhbGlkQ2xhc3MiLCJlbGVWYWxpZENsYXNzIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJwcmV2ZW50RGVmYXVsdCIsInZhbGlkYXRlIiwidGhlbiIsInN0YXR1cyIsImNvbnNvbGUiLCJsb2ciLCJzZXRBdHRyaWJ1dGUiLCJkaXNhYmxlZCIsInNldFRpbWVvdXQiLCJyZW1vdmVBdHRyaWJ1dGUiLCJTd2FsIiwiZmlyZSIsInRleHQiLCJpY29uIiwiYnV0dG9uc1N0eWxpbmciLCJjb25maXJtQnV0dG9uVGV4dCIsImN1c3RvbUNsYXNzIiwiY29uZmlybUJ1dHRvbiIsInJlc3VsdCIsImlzQ29uZmlybWVkIiwiaGlkZSIsInNob3dDYW5jZWxCdXR0b24iLCJjYW5jZWxCdXR0b25UZXh0IiwidmFsdWUiLCJyZXNldCIsImRpc21pc3MiLCJpbml0IiwiZG9jdW1lbnQiLCJNb2RhbCIsImdldEVsZW1lbnRCeUlkIiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/apps/support-center/tickets/create.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/apps/support-center/tickets/create.js"]();
/******/ 	
/******/ })()
;