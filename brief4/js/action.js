//import data to the edit modal
function edit_stf(id, name, email, pass, classe) {

  document.querySelector('#modal2').style.visibility = 'visible'

  document.querySelector('#id_edited').value = id;
  document.querySelector('#name_edited').value = name;
  document.querySelector('#email_edited').value = email;
  document.querySelector('#pass_edited').value = pass;
  document.querySelector('#class_edited').value = classe;

}


function edit_std(id, name, email, pass, classe) {

  document.querySelector('#modal2').style.visibility = 'visible'

  document.querySelector('#id_edited').value = id;
  document.querySelector('#name_edited').value = name;
  document.querySelector('#email_edited').value = email;
  document.querySelector('#pass_edited').value = pass;
  document.querySelector('#class_edited').value = classe;

}


function edit_std1(id, name, email, pass, classe) {

  document.querySelector('#modal2').style.visibility = 'visible'

  document.querySelector('#id_edited').value = id;
  document.querySelector('#name_edited').value = name;
  document.querySelector('#email_edited').value = email;
  document.querySelector('#pass_edited').value = pass;
  document.querySelector('#class_edited').value = classe;

}


function view(name, email, classe) {

  document.getElementById('modal1').style.visibility = 'visible'

  document.querySelector('#name_edited').value = name;
  document.querySelector('#email_edited').value = email;
  document.querySelector('#edited_class').value = classe;

}
var modal = document.getElementById('modal1');
var modal2 = document.getElementById('modal2');

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.visibility = "hidden";
  }
  if (event.target == modal2) {
    modal2.style.visibility = "hidden";

  }
}