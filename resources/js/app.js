import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('add-row').addEventListener('click', function (event) {
        event.preventDefault();
        addRow();
    });
//     document.getElementById('remove-qualification-row').addEventListener('click', function () {
//         removeQualificationRow();
//     });
var values = ['Higher Secondary', 'Graduation', 'Masters'];
var currentIndex = 0;

function addRow(){
    var row = document.getElementById("rowTemplate");
    var tableBody = document.getElementById("tableBody");
    var clone = row.cloneNode(true);
    clone.id = "newID";
    var rowCount = tableBody.rows.length + 1;
    var inputFields = clone.querySelectorAll('input');
    var firstInput = clone.querySelector('input[name="qualifications[][name]"]');

    function emptyFields(){
        inputFields.forEach(function (input) {
            input.value = '';
        });
    }

    emptyFields();

    if(firstInput){
        firstInput.value = values[currentIndex];
        currentIndex = (currentIndex + 1) % values.length;
    }
    if(rowCount>4){
        emptyFields();
    }

    tableBody.appendChild(clone);
}
});



// document.addEventListener('DOMContentLoaded', function () {
//     document.getElementById('add-row').addEventListener('click', function (event) {
//       event.preventDefault();
//       addRow();
//     });

//     function addRow() {
//       var table = document.querySelector('#tableId');
//       var clone = table.querySelector('tbody tr').cloneNode(true);

//       // Clear the input values in the cloned row
//       var inputs = clone.querySelectorAll('input');
//       inputs.forEach(function (input) {
//         input.value = '';
//       });

//       table.querySelector('tbody').appendChild(clone);
//     }
//   });
