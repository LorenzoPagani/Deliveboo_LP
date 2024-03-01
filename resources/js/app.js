import './bootstrap'
import '~resources/scss/app.scss'
import * as bootstrap from 'bootstrap'
import.meta.glob(['../img/**'])

document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('submit', function (e) {
        const confirmDelete = confirm(
            'Sei sicuro di voler eliminare questo elemento?'
        )
        if (!confirmDelete) {
            e.preventDefault() // Previeni l'invio del modulo se l'utente annulla l'eliminazione
        }
    })
})

/* aggiunta preview foto nei form */
picture.onchange = evt => {
    const [file] = picture.files
    if (file) {
        prev_box.classList.remove('d-none')
        thumb.src = URL.createObjectURL(file)
    }
}
erase_prev.onclick = evt => {
    picture.value = ''
    prev_box.classList.add('d-none')
}

var myModal = document.getElementById('deleteModal')
let confirmDeleteButton = document.getElementById('confirmDelete')

myModal.addEventListener('shown.bs.modal', function () {
    confirmDeleteButton.addEventListener('click', function (e) {
        document.getElementById('deleteForm').submit()
        myModal.modal('hide')
    })
})
