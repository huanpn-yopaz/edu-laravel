
const send = document.querySelector('#send')
const reset = document.querySelector('#reset')
const cau1 = document.querySelector('#cau1')
const resuft = document.querySelector('.resuft')
const fail = document.querySelector('.fail')
const cau2 = document.querySelector('#cau2')
const resuft2 = document.querySelector('.resuft2')
const fail2 = document.querySelector('.fail2')
const cau3 = document.querySelector('#cau3')
const resuft3 = document.querySelector('.resuft3')
const fail3 = document.querySelector('.fail3')
const cau4 = document.querySelector('#cau4')
const resuft4 = document.querySelector('.resuft4')
const fail4 = document.querySelector('.fail4')


send.onclick = () => {

    if (cau1.checked == true) {
        resuft.innerText = 'Câu trả lời chính xác'
        fail.innerText = ''
    } else {
        resuft.innerText = ''
        fail.innerText = 'Câu trả sai'
    }
    if (cau2.checked == true) {
        resuft2.innerText = 'Câu trả lời chính xác'
        fail2.innerText = ''
    } else {
        resuft2.innerText = ''
        fail2.innerText = 'Câu trả sai'
    }
    if (cau3.checked == true) {
        resuft3.innerText = 'Câu trả lời chính xác'
        fail3.innerText = ''
    } else {
        resuft3.innerText = ''
        fail3.innerText = 'Câu trả sai'
    }
    if (cau4.checked == true) {
        resuft4.innerText = 'Câu trả lời chính xác'
        fail4.innerText = ''
    } else {
        resuft4.innerText = ''
        fail4.innerText = 'Câu trả sai'
    }


}
reset.onclick = () => {
    resuft.innerText = ''
    fail.innerText = ''
    resuft2.innerText = ''
    fail2.innerText = ''
    resuft3.innerText = ''
    fail3.innerText = ''
    resuft4.innerText = ''
    fail4.innerText = ''
    document.querySelector('input[name="cau1"]:checked').checked = false;
    document.querySelector('input[name="cau2"]:checked').checked = false;
    document.querySelector('input[name="cau3"]:checked').checked = false;
    document.querySelector('input[name="cau4"]:checked').checked = false;

}
