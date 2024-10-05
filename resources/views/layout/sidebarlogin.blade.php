<aside id="sidebar" class="light-mode closed">
    <div class="d-flex flex-column align-items-center">
           <button id="close-btn" type="button">
            <i class="lni lni-cross-circle"></i>
        </button>
        <div class="profile-icon">
            <img src="File/1-12.png" alt="" width="60px" height="65px">
        </div>
        <hr>
        <div class="sidebar-logo text-center" style="margin-bottom: 50px">
            <h2> Your Account </h2>
        </div>

        <div class="sidebar-logo text-center">
            <p style="color: #28a745"> USER LOGIN </p>
        </div>

        <form class="login-form" action="#" method="POST">
            {{-- @csrf --}}
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
