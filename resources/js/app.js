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
