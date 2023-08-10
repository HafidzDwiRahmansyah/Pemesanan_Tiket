//1. Mencoba Menulis Javascript

// var x = 25;

// console.log('Tes Javascript');
// console.log('Nilai variabel X adalah ' + x); 

// 2. Belajar alert menggunakan variabel

// alert('Selamat Datang Di website kami');
// var nama = prompt('Siapa Nama Anda : ');

// var text = confirm('Yakin tidak ingin memberitahu ? ');

// if(text === true){
// 	alert('Okkey');
// }else{
// 	alert('cancel');
// }

//3. Belajar Popup Box

// alert('selamat datang');

// var ulang = true;

// while(ulang === true){
// 	var nama = prompt('Masukan nama: ');
// 	alert('Hallo ' + nama);

// 	ulang = confirm('Coba Lagi ?');
// }

// alert('Terimakasih...');

//4. Dom Selection

// const judul = document.getElementById('judul');
// judul.style.color = 'green';
// judul.style.backgroundColor = 'blue';
// judul.innerHTML = 'Hafidz Dwi';

// document.getElementsByTagName()

// const p = document.getElementsByTagName('p');

// for(let i = 0; i < p.length; i++){
// 	p[i].style.backgroundColor = 'blue';
// }

// const h1 = document.getElementsByTagName('h1')[0];
// h1.style.fontSize = '30px';

//document.getElemntsByClassName()

// const p1 = document.getElementsByClassName('p1');
// p1[0].innerHTML = 'ini diubah dari Javascript';

//document.querySelector()

// const p4 = document.querySelector('#b p');
// p4.style.color = 'green';
// p4.style.fontSize = '25px';

// const li2 = document.querySelector('section#b ul li:nth-child(2)');
// li2.style.backgroundColor = 'orange';

// const p = document.querySelector('p');
// p.innerHTML = 'ini diubah melalui Javascript';


//document.querySelectorAll()

// const p = document.querySelectorAll('p');

// for(let i = 0; i < p.length; i++){
// 	p[i].style.backgroundColor = 'lightblue';
// }

// const p4 = document.querySelectorAll('p');
// p4[3].style.backgroundColor = 'lightblue';

//5. Dom Manipulation

// const judul = document.getElementById('judul');
// judul.innerHTML = '<em>Hafidz Dwi Rahmansyah</em>';

// const sectionA = document.querySelector('section#a');
// sectionA.innerHTML = '<div><p>Paragraf</p></div>';

// const judul = document.querySelector('#judul');
// judul.style.color = 'lightblue';
// judul.style.backgroundColor = 'salmon';

// const judul = document.getElementsByTagName('h1')[0];

// judul.setAttribute('name', 'hafidz');
// const a = document.querySelector('section#a a');

// const p2 = document.querySelector('.p2');

// p2.classList
// DOMTokenList ['p2', value: 'p2']
// p2.classList.add('satu')
// undefined
// p2.classList.add('dua')
// p2.classList.add('tiga')
// undefined
// p2.classList.item(2)
// 'dua'
// p2.classList.contains('empat')
// false
// p2.classList.contains('p2')
// true
// p2.classList.replace('tiga', 'empat')
// true

 