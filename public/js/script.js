// document.addEventListener('DOMContentLoaded', function() {
//     const body = document.body;
//     const sidebar = document.getElementById('sidebar');
//     const toggleBtn = document.getElementById('toggle-btn');
//     const header = document.querySelector('.header');
//     const main = document.querySelector('.main');
//     const footer = document.querySelector('.footer');


//     toggleBtn.addEventListener('click', function() {
//         sidebar.classList.toggle('expand');
//         header.classList.toggle('expand');
//         main.classList.toggle('expand');
//         footer.classList.toggle('expand');
//     });
// });

    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggle-btn');
    const closeBtn = document.getElementById('close-btn');

    // عند النقر على زر المربع لفتح الشريط الجانبي
    toggleBtn.addEventListener('click', function() {
        sidebar.classList.remove('closed'); // فتح الشريط الجانبي
        toggleBtn.style.display = 'none'; // إخفاء زر المربع
        closeBtn.style.display = 'block'; // إظهار زر X
    });

    // عند النقر على زر X لإغلاق الشريط الجانبي
    closeBtn.addEventListener('click', function() {
        sidebar.classList.add('closed'); // إغلاق الشريط الجانبي
        closeBtn.style.display = 'none'; // إخفاء زر X
        toggleBtn.style.display = 'block'; // إظهار زر المربع مجددًا
    });

    // لجعل الشريط الجانبي مغلقًا افتراضيًا عند تحميل الصفحة
    window.onload = function() {
        sidebar.classList.add('closed');
        toggleBtn.style.display = 'block';
        closeBtn.style.display = 'none';
    };

