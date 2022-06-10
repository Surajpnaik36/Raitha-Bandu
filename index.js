function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false
    var name = document.forms['myForm']["first_name"].value;
    if (name.length<5){
        seterror("name", "*Length of name is too short");
        returnval = false;
    }
    let Pattern1=/[^a-z]+/gi;
    if (name.match(Pattern1))
    {
       seterror("name","*Name cannot have numbers");
       returnval=false;
    }
    // var name1 = document.forms['myForm']["last_name"].value;
    // let Pattern2=/[^a-z]+/gi;
    // if (name1.match(Pattern2))
    // {
    //    seterror("name1","*Name cannot have numbers");
    //    returnval=false;
    // }

    if (name.length == 0){
        seterror("name", "*Length of name cannot be zero!");
        returnval = false;
    }

    var email = document.forms['myForm']["email"].value;
    if (email.length>50){
        seterror("email", "*Email length is too long");
        returnval = false;
    }

    var phone = document.forms['myForm']["number"].value;
    if (phone.length != 10){
        seterror("fphone", "*Phone number should be of 10 digits!");
        returnval = false;
    }

    var state = document.forms['myForm']['state'].value;
    if (state.length <3){
        seterror("state","*Enter valid state");
        returnval= false;
    }

    const text = document.forms['myForm']['state'].value;
    let Pattern=/[^a-z]+/gi;
    if (text.match(Pattern))
    {
       seterror("state","*State cannot have numbers");
       returnval=false;
    }

    var address = document.forms['myForm']['address'].value;
    if (address.length < 5){
        seterror("address","*Enter valid address");
        returnval= false;
    }

    // var password = document.forms['myForm']["fpass"].value;
    // if (password.length < 6){

    //     // Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
    //     seterror("pass", "*Password should be atleast 6 characters long!");
    //     returnval = false;
    // }

    // var cpassword = document.forms['myForm']["fcpass"].value;
    // if (cpassword != password){
    //     seterror("cpass", "*Password and Confirm password should match!");
    //     returnval = false;
    // }

    return returnval;
}

