(()=>{document.querySelectorAll(".checkout-tab")&&document.querySelectorAll(".checkout-tab").forEach((function(e){e.querySelectorAll(".nexttab")&&e.querySelectorAll(".nexttab").forEach((function(t){e.querySelectorAll('button[data-bs-toggle="pill"]').forEach((function(e){e.addEventListener("show.bs.tab",(function(e){e.target.classList.add("done")}))})),t.addEventListener("click",(function(){var e=t.getAttribute("data-nexttab");document.getElementById(e).click()}))})),e.querySelectorAll(".previestab")&&e.querySelectorAll(".previestab").forEach((function(e){e.addEventListener("click",(function(){for(var t=e.getAttribute("data-previous"),o=e.closest("form"),r=o-1;r<o;r++)e.closest("form").querySelectorAll(".custom-nav .done")[r]&&e.closest("form").querySelectorAll(".custom-nav .done")[r].classList.remove("done");document.getElementById(t).click()}))}));var t=e.querySelectorAll('button[data-bs-toggle="pill"]');t&&t.forEach((function(o,r){o.setAttribute("data-position",r),o.addEventListener("click",(function(){e.querySelectorAll(".custom-nav .done").length>0&&e.querySelectorAll(".custom-nav .done").forEach((function(e){e.classList.remove("done")}));for(var o=0;o<=r;o++)t[o].classList.contains("active")?t[o].classList.remove("done"):t[o].classList.add("done")}))}))}));var e=document.querySelector("#dropzone-preview-list");if(e){e.id="";var t=e.parentNode.innerHTML;e.parentNode.removeChild(e)}if(document.querySelector(".dropzone"))new Dropzone(".dropzone",{url:"https://httpbin.org/post",method:"post",previewTemplate:t,previewsContainer:"#dropzone-preview"})})();