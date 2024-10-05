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
    const loginBtn = document.getElementById('loginBtn');
    const signupBtn = document.getElementById('signup');
    const closeBtn = document.getElementById('close-btn');

     // Event listener for login button
     document.getElementById('loginBtn').addEventListener('click', function() {
        document.getElementById('sidebar-login').classList.remove('closed');
        document.getElementById('sidebar-signup').classList.add('closed'); // Hide signup sidebar
    });

    // Event listener for sign-up button
    document.getElementById('signup').addEventListener('click', function() {
        document.getElementById('sidebar-signup').classList.remove('closed');
        document.getElementById('sidebar-login').classList.add('closed'); // Hide login sidebar
    });
    
    // عند النقر على زر المربع لفتح الشريط الجانبي
    loginBtn.addEventListener('click', function() {
        sidebar.classList.remove('closed'); 
        loginBtn.style.display = 'none'; 
        signupBtn.style.display = 'none';
        closeBtn.style.display = 'block'; 
    });

    // عند النقر على زر X لإغلاق الشريط الجانبي
    closeBtn.addEventListener('click', function() {
        sidebar.classList.add('closed'); 
        closeBtn.style.display = 'none'; // إخفاء زر X
        loginBtn.style.display = 'block'; // إظهار زر المربع مجددًا
        signupBtn.style.display = 'block';
    });

    // لجعل الشريط الجانبي مغلقًا افتراضيًا عند تحميل الصفحة
    window.onload = function() {
        sidebar.classList.add('closed');
        loginBtn.style.display = 'block';
        signupBtn.style.display = 'block';
        closeBtn.style.display = 'none';
    };

