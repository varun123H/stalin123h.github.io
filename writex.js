function writex() {
    var name=document.getElementById("name").value;
    var gender=document.getElementById("gender").value;
    var city=document.getElementById("city").value;

     if(name==''|| gender==''|| city==''){
         alert('required');
         return false;
     }
     else{
        firebase.database().ref('user/'+name).set({
            userName: name,
            userGender: gender,
            userCity: city
        });
        swal("Data saved","Successfully");
         return true;
     }

    firebase.database().ref('user/'+name).set({
        userName: name,
        userGender: gender,
        userCity: city
    });
    


}