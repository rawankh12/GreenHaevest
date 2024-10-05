<aside id="sidebar" class="light-mode closed">
    <div class="d-flex flex-column align-items-center">
           <button id="close-btn" type="button">
            <i class="lni lni-cross-circle"></i>
        </button>
        <div class="profile-icon">
            <i class="lni lni-user" style="color: #28a745"></i>
        </div>
        <hr>
        <div class="sidebar-logo text-center">
            <h2> Your Account </h2>
        </div>

        <div class="sidebar-logo text-center">
            <p style="color: #28a745"> USER LOGIN </p>
        </div>

        <form class="login-form" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group input-container">
                <i class="lni lni-user"></i>
                <input type="text" class="form-control" id="username" name="username" placeholder=" Username " required>
            </div>
            <div class="form-group input-container">
                <i class="lni lni-lock"></i>
                <input type="password" class="form-control" id="password" name="password" placeholder=" Password" required>
            </div>
            <div class="form-group d-flex justify-content-between">
                <div>
                    <a href="#"> ? Forgot password  </a>
                </div>
                <div class="d-flex remember-container"> 
                    
                    <label for="remember" style="margin: 0 0 0 5px;">Remember</label> 
                    <input type="checkbox" id="remember"> 
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3"> LOGIN </button>
        </form>
    </div>
</aside>

<style>
/* الشريط الجانبي */
#sidebar {
    width: 330px;
    min-width: 300px;
    height: 80%;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: fixed;
    top: 20px;
    right: 0;
    border-left: 2px solid rgba(0, 0, 0, 0.1);
    padding: 0;
    margin: 0 ;
    background-color: #f5f5f5;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    direction: rtl;
    overflow-y: auto;
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
    opacity: 1;
    padding: 20px 20px 0px 20px; 
}

#sidebar.closed {
    transform: translateX(100%); 
    opacity: 0;
}

.remember-container {
    margin-right: 100px; 
}

/* زر X */
#close-btn {
    display: none;
    position: absolute;
    top: 10px;
    left: 10px; 
    background: transparent;
    border: none;
    font-size: 2rem;
    cursor: pointer;
}

#close-btn i {
    color: #69a564; 
}

/* أيقونة البروفايل */
.profile-icon {
    font-size: 3rem;
    color: #28a745;
    margin-bottom: 0px; 
}

/* الخط الفاصل */
hr {
    border: none; 
    height: 2px;
    background-color: #28a745;
    margin: 15px 0; 
    width: 100%;
    box-sizing: border-box; 
   
}

/* نص تسجيل الدخول */
.sidebar-logo h2 {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 30px;
    color: #000;
}

/* نموذج تسجيل الدخول */
.login-form .form-group {
    width: 100%;
    margin-bottom: 10px;
}

.login-form button {
    width: 30%;
    padding: 5px; 
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 0.7rem;
    cursor: pointer;
    display: block; 
    margin: 20px auto; 
}

.login-form button:hover {
    background-color: #218838;
}

/* إخفاء زر X عند إغلاق الشريط */
#toggle-btn i, #close-btn i {
    transition: transform 0.25s ease-in-out;
}
.input-container {
    position: relative;
    width: 100%;
}
/* الأيقونات داخل الحقول */
.input-container i {
    position: absolute;
    left: 10px; 
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.2rem;
    color: #28a745; 
}

/* حقول الإدخال */
.login-form input {
    width: 100%;
    padding: 5px 5px 5px 20px; 
    border: 1px solid #28a745; 
    border-radius: 10px;
    font-size: 0.7rem;
    color: #000;
}

/* Placeholder*/
.login-form input::placeholder {
    color: #100f0f;
    text-align: left; 
    margin-right: 40px;
}


.form-group{
    color: #28a745;
    font-size: 0.7rem;
}

   </style>
    