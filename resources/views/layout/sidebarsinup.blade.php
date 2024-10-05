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
            <h2> CREATE ACCOUNT </h2>
        </div>

        <form class="login-form" action="#" method="POST">
            {{-- @csrf --}}
            <div class="form-group d-flex justify-content-between">
                <div class="input-container" style="width: 48%;">
                    <input type="text" class="form-control" id="first-name" name="first-name" placeholder=" First Name* " required>
                </div>
                <div class="input-container" style="width: 48%;">
                    <input type="text" class="form-control" id="last-name" name="last-name" placeholder=" Last Name* " required>
                </div>
            </div>
            <div class="form-group input-container">
                <input type="text" class="form-control" id="email-address" name="email-address" placeholder=" your email address* " required>
            </div>
            <div class="form-group input-container">
                <input type="number" class="form-control" id="Phone-no" name="Phone-no" placeholder=" youre Phone no* " required>
            </div>
            <button type="submit" class="btn btn-primary mt-3"> SINUP </button>
        </form>
    </div>
</aside>
