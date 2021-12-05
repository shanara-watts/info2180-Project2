
   window.onload = function() {
    let container = document.getElementById("assignContainer");

    let title = document.getElementById("title");
    let description = document.getElementById("description");
    let bugs = document.getElementById("bugsinfo");
    let priority = document.getElementById("priorityinfo");
    let btn = document.getElementById("searchbtn")
    let request = new XMLHttpRequest();
    let assign;
    request.open('GET',"http://localhost/info2180-project2/main/index.php?context=getNames");
    request.send();
    request.onreadystatechange = function (){
        if (request.readyState == 4 && request.status == 200) {
            container.innerHTML= request.response;
                assign = document.getElementById("assigninfo");
        }
    }
;
    
    btn.addEventListener("click", function(e) {
        e.preventDefault();
        request.open("GET","http://localhost/Info2180-project2/main/index.php?context=createIssue&title="+title.value+"&description="+description.value+"&assigned="+assign.value+"&type="+bugs.value+"&priority="+priority.value,true);
        request.send()
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200){
                console.log(request.responseText);
            }
        }
    });
}