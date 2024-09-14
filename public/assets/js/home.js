var coursebtns = document.querySelectorAll("#courselist ul li a");
var allCourses = document.querySelectorAll(".all-pctm-courses");

coursebtns.forEach((value, index) => {
    value.addEventListener('click', function (event) {
        event.preventDefault();
        coursebtns.forEach(btns =>{
            btns.classList.remove('dynamic-bgchange');
            
        });
        
        value.classList.add("dynamic-bgchange");
        var btnCourseName = value.getAttribute('data-course');
        allCourses.forEach((val, ins) => {
            var coursename = val.getAttribute("data-course").split(',');
            if (coursename.includes(btnCourseName)) {
                val.style.display = "block";
            } else {
                val.style.display = "none";
            }
        });
    });
});

