function on_page_load(){
    // alert("onload function executed");

  $.post("http://localhost/request.php", function(data, status){
    var workouts_data=JSON.parse(data);
    console.log(workouts_data);
    for(var i = 0; i < workouts_data.length; i++){
      // var row = workouts_data[i];

      // clone and set up workout tabloids
      
      var tabloid = document.getElementById("tabloid_template");

      var clone_tabloid = tabloid.cloneNode(true);
      clone_tabloid.style.display="block"

      document.getElementById("tabloid_list").appendChild(clone_tabloid);

    //   window.imagedownloader.download(
    //     workouts_data[i]["thumbnail_link"],
    //     function successFn() {
    //         alert('Image was downloaded');
    //     },
    //     function failureFn() {
    //         alert('Fail to download image');
    //     }
    // );

      // img.src=workouts_data[0]["thumbnail_link"]

      clone_tabloid.children[0].src= workouts_data[i]["thumbnail_link"]

      clone_tabloid.children[1].innerHTML=workouts_data[i]["exercise_name"];

      clone_tabloid.setAttribute("onclick", "open_workout("+workouts_data[i]["id"]+")");
    
      console.log(workouts_data[0]["thumbnail_link"]);


    }
  });
   
}



function open_workout(workout_id){
  localStorage.setItem("workout_id",workout_id)
  window.location.href = "workout_template.html";
  


}




