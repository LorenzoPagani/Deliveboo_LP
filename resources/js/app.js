import './bootstrap'
import '~resources/scss/app.scss'
import * as bootstrap from 'bootstrap'
import.meta.glob(['../img/**'])

document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('submit', function (e) {
        
        e.preventDefault()
    })

})

var myModal = document.getElementById('deleteModal')
let confirmDeleteButton = document.getElementById('confirmDelete')

myModal.addEventListener('shown.bs.modal', function () {
    confirmDeleteButton.addEventListener('click',function(e){
        document.getElementById('deleteForm').submit();
        myModal.modal('hide');
    })

})

