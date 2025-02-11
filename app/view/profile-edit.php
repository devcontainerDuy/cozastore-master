<div class="container" style="background-color: #f8f9fa; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 30px; margin-top: 50px; margin-bottom: 50px;">
    <h2 class="mb-4 text-center">Edit Personal Information</h2>
    <form action="/xl-profile" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <?php if (isset($_SESSION['role'])) : ?>
                    <div class="text-center mb-4">
                        <?php if (!isset($_SESSION['img']) || $_SESSION['img'] == null) : ?>
                            <label for="profileImage">
                                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="profile-image img-fluid rounded-circle" alt="profile-image" id="profileImage" style="max-width: 100%; width: 192px; height: 192px; border-radius: 50%;">
                            </label>
                        <?php else : ?>
                            <label for="img">
                                <img src="public/upload/<?= $_SESSION['img'] ?>" class="profile-image img-fluid rounded-circle" alt="profile-image" id="profileImage" style="max-width: 100%; width: 192px; height: 192px; border-radius: 50%;">
                            </label>
                        <?php endif; ?>
                        <input class="m-l-80" type="file" name="img" id="inputimg">
                    </div>
                    <div class="name-below-image" style="text-align: center; margin-top: 10px;">
                        <h5><?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?></h5>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-md-8">

                <?php if (isset($_SESSION['role'])) : ?>
                    <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputUsername">Username:</label>
                            <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Your Username" value="<?= $_SESSION['username'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputName">First Name:</label>
                            <input type="text" class="form-control" id="inputName" name="firstname" placeholder="Your Name" value="<?= $_SESSION['firstname'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Last Name:</label>
                            <input type="text" class="form-control" id="inputName" name="lastname" placeholder="Your Name" value="<?= $_SESSION['lastname'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Phone:</label>
                            <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Your Phone" value="<?= $_SESSION['phone'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email:</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Your Email" value="<?= $_SESSION['email'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Address:</label>
                            <textarea class="form-control" id="inputAddress" name="address" placeholder="Your Address"><?= $_SESSION['address'] ?></textarea>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 1) : ?>
                            <button type="submit" class="btn btn-primary" name="btnsave"><i class="fa fa-save"></i> Save Changes</button>
                            <a href="/admin" class="btn btn-success"><i class="fa fa-user-circle-o"></i> Admin</a>
                        <?php else : ?>
                            <button type="submit" class="btn btn-primary" name="btnsave"><i class="fa fa-save"></i> Save Changes</button>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-md-6">
                        <a href="/logout" class="btn btn-danger float-right" name="logout"><i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>

<script>
    let img = document.getElementById('profileImage');
    let input = document.getElementById('inputimg');

    input.onchange = (e) => {
        if (input.files[0]) {
            img.src = URL.createObjectURL(input.files[0]);
        }
    }
</script>