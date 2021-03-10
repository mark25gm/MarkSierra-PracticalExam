<h1>A. Fix the sentence (Capitalize the first word only and add spaces per word). </h1>
<h2 id="sentence">TheQuickBrownFoxJumpsOverTheLazyDog.</h2>
<button id='fix'>Fix the Sentence</button>


<h1>B. Create a function that will parse and display the JSON values on a Contact Form</h1>
<h2>Note: Get only the first record order by lastName ASCENDING. </h2>
<button id='fetch'>Get the data</button>
<form id="form">
    <h3>First Name</h3>
    <input id='first' type = 'text' readOnly>
    
    <h3>Last Name</h3>
    <input id='last' type = 'text' readOnly>
    
    <h3>Birthdate</h3>
    <input id='birthdate' type = 'datetime' readOnly>

    <h3>Gender</h3>
    <input type="radio" id="male" name="gender" value="male" readOnly>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female" readOnly>
    <label for="female">Female</label>  

    <h3>Language</h3>
    <label> <input type="checkbox"  name="English" class="language" id="eng" readonly> English</label>
    <label> <input type="checkbox"  name="Japanese" class="language" id="jap" readonly> Japanese</label>
    <label> <input type="checkbox"  name="Chinese" class="language" id="chi" readonly> Chinese</label>
     
</form>

<script>
    var sentence = document.getElementById('sentence');
    var button = document.getElementById('fix');
    button.addEventListener("click",  function(){
        var text =  sentence.textContent.replace(/([A-Z])/g, ' $1').trim()
        text = text.toLowerCase();
        sentence.textContent = text.charAt(0).toUpperCase() + text.slice(1);
    });

// let url = "http://marvinv.local.com/exam/employees.php ";
let url = "text.json";

var form = document.getElementById('form');
fetch(url)
.then(res => res.json())
.then((out) => {
//   console.log(out);

    var fetch = document.getElementById('fetch');
    emp = out.employees
    emp.sort((a,b)=> (a.lastName > b.lastName ? 1 : -1))
    var fn = emp[0].firstName
    var ln = emp[0].lastName
    var birth = emp[0].birthday
    var gndr = emp[0].gender
    var lang = emp[0].knownLanguage

    fetch.addEventListener("click",  function(){
        form.querySelector('#first').setAttribute('value',fn);
        form.querySelector('#last').setAttribute('value',ln);
        form.querySelector('#birthdate').setAttribute('value',birth);
        if(!gndr.male){
            form.querySelector('#female').setAttribute('checked',true);
            form.querySelector('#male').removeAttribute('checked');
        }else{
            form.querySelector('#male').setAttribute('checked',true);
            form.querySelector('#female').removeAttribute('checked');
        }
       language = document.getElementsByClassName('language');
       for (var i = 0; i < language.length; i++) {
        language[i].removeAttribute('checked');
            lang.forEach(function(item,index){
                console.log(language[i].getAttribute('name')+"="+item);
                if(item == language[i].getAttribute('name')){
                    language[i].setAttribute('checked',true);
                }
            });
        }
    });



})



</script>
