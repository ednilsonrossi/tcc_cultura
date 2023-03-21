const form = document.getElementById('form')
const email = document.getElementById('id_email')

form.addEventListener('submit', (e) => {
    e.preventDefault()

    checkInputs()
})

function checkInputs() {
    const emailValue = email.value.trim()
}