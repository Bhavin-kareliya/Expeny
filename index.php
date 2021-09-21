<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/tabFavicon.svg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>

<body id="dashboard">
    <div class="container-fluid navigation">
        <header class="row">
            <div class="logo col-12 col-lg-6">
                <img src="assets/images/favicon.svg" alt="No Image Loaded" height="78" width="53" />
            </div>
            <div class="profile col-6 d-flex  justify-content-end align-items-center">
                <div class=" input-group searchbar">
                    <span class="input-group-text searchIcon py-0 px-3"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control searchField" placeholder="Search" />
                </div>
                <div class="imgContainer mx-3">
                    <img src="assets/images/male.svg" alt="No Profile Found" width="90" height="90" id="profilePhoto">
                </div>
                <div class="d-flex col-3">
                    <p class="my-0 username">Bhavin Kareliya</p>
                </div>
            </div>
        </header>
    </div>
    <div class="container-fluid">
        <main class="row d-flex">
            <div class="sidebar col-3 menu">
                <ul class="w-100 menuList">
                    <li><a href="index.html" class="active"><i class="fas fa-home fa-lg mx-3"></i>Home</a></li>
                    <li><a href="trash.html"><i class="fas fa-trash fa-lg mx-3"></i> Trash</a></li>
                    <li><a href="profile.html"><i class="fas fa-edit fa-lg mx-3"></i>My Profile</a></li>
                    <li><a href="about_us.html"><i class="fas fa-info-circle fa-lg mx-3"></i>About Us</a></li>
                    <li><a href="signin.html"><i class="fas fa-sign-out-alt fa-lg mx-3"></i>Log Out</a></li>
                </ul>
            </div>
            <div class="col-9 p-0 d-flex flex-column">
                <div class="mainContent">
                    <div class="allUsersData">
                        <h5 class="contentHead">All People</h5>
                        <div class="users d-flex">
                            <a href="#" class="text-center">
                                <div class="singleUser text-center d-flex align-items-center justify-content-center">
                                    <p class="m-0">OY</p>
                                </div>
                                <p class="mt-2 username">Olive Yew</p>
                            </a>

                            <a href="#" class="text-center">
                                <div class="singleUser text-center d-flex align-items-center justify-content-center">
                                    <p class="m-0">JD</p>
                                </div>
                                <p class="mt-2 username">John Doe</p>
                            </a>
                            <a href="#" class="text-center">
                                <div class="singleUser text-center d-flex align-items-center justify-content-center">
                                    <p class="m-0">AG</p>
                                </div>
                                <p class="mt-2 username">Allie Grater</p>
                            </a>
                            <div class="d-flex flex-column justify-content-center">
                                <div class="singleUser">
                                    <a data-bs-toggle="modal" href="#exampleModalToggle"><i
                                            class="fas fa-plus fa-lg d-flex justify-content-center text-white"></i></a>
                                </div>
                                <p class="mt-2 username">Invite New</p>
                            </div>
                        </div>
                    </div>
                    <div class="recents">
                        <div class="d-flex justify-content-between align-items-center my-3">
                            <h5 class="contentHead mb-0">Recents <i class="fas fa-chevron-right mx-3"></i></h5>
                            <a class="btn btn-primary primaryBtn" data-bs-toggle="modal" href="#createExpenseModal"><i
                                    class="fas fa-plus"></i> Add New
                                Expense</a>
                        </div>
                        <div class="cardHolder d-flex g-0">
                            <div class="card col-3">
                                <img src="assets/images/office.jpg" class="card-img-top p-2" height="255" width="255"
                                    alt="No Image Found">
                                <div class="card-body">
                                    <h4 class="card-title mb-1">Office Expense</h4>
                                    <h6><span class="badge bg-secondary mb-3" title="category">Company</span></h6>
                                    <p class="card-text">The Lorem Ipsum is simply dummy text of the composition.</p>
                                    <a href="#expenseDetailModal" class="card-link" data-bs-toggle="modal">Read more <i
                                            class="fas fa-long-arrow-alt-right fa-lg mx-3"></i></a>
                                </div>
                            </div>

                            <div class="card col-3">
                                <img src="assets/images/trip.jpg " class="card-img-top p-2" height="255" width="255"
                                    alt="No Image Found">
                                <div class="card-body">
                                    <h4 class="card-title mb-1">Trip Expense</h4>
                                    <h6><span class="badge bg-secondary mb-3" title="category">Special</span></h6>
                                    <p class="card-text">Reprehenderit esse labore id veniam ut veniam non ex</p>
                                    <a href="#expenseDetailModal" class="card-link" data-bs-toggle="modal">Read more <i
                                            class="fas fa-long-arrow-alt-right fa-lg mx-3"></i></a>
                                </div>
                            </div>
                            <div class="card col-3">
                                <img src="assets/images/mall.jpg " class="card-img-top p-2" height="255" width="255"
                                    alt="No Image Found">
                                <div class="card-body">
                                    <h4 class="card-title mb-1">Daily Expense</h4>
                                    <h6><span class="badge bg-secondary mb-3" title="category">Uncategorized</span></h6>
                                    <p class="card-text">Reprehenderit esse labore id veniam ut veniam non ex</p>
                                    <a href="#expenseDetailModal" class="card-link" data-bs-toggle="modal">Read more <i
                                            class="fas fa-long-arrow-alt-right fa-lg mx-3"></i></a>
                                </div>
                            </div>
                            <div class="card col-3">
                                <img src="assets/images/Image Placeholder.png " class="card-img-top p-2" height="255"
                                    width="255" alt="No Image Found">
                                <div class="card-body">
                                    <h4 class="card-title mb-1">No Image Expense</h4>
                                    <h6><span class="badge bg-secondary mb-3" title="category">Testing</span></h6>
                                    <p class="card-text">Reprehenderit esse labore id veniam ut veniam non ex</p>
                                    <a href="#expenseDetailModal" class="card-link" data-bs-toggle="modal">Read more <i
                                            class="fas fa-long-arrow-alt-right fa-lg mx-3"></i></a>
                                </div>
                            </div>
                            <div class="scroller d-flex align-items-center justify-content-center">
                                <i class="fas fa-chevron-right fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer d-flex justify-content-end px-5">
                    <p class="copyright mx-4">copyright &#169; 2021. All rights reserved.</p>
                    <a href="https://facebook.com/bhavin.kareliya.02" target="_blank"><i
                            class="fab fa-facebook fa-lg mx-2"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter fa-lg mx-2"></i></a>
                    <a href="https://wa.me/+919106715919" target="_blank"><i class="fab fa-whatsapp fa-lg mx-2"></i></a>
                    <a href="https://www.linkedin.com/in/bhavin-kareliya" target="_blank"><i
                            class="fab fa-linkedin fa-lg mx-2"></i></a>
                    <a href="https://www.instagram.com/bhavin__kareliya" target="_blank"><i
                            class="fab fa-instagram fa-lg mx-2"></i></a>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
    crossorigin="anonymous"></script>

</html>

<div class="modal modal-fullscreen-sm-down fade" id="exampleModalToggle" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Invite User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="input-group mb-3">
                        <input class="form-control" type="search" placeholder="Search username or email"
                            aria-label="Search"><button class="input-group-text" id="basic-addon2"><i
                                class="fas fa-search"></i></button>
                    </div>
                    <div class="searchData col-12 d-flex flex-wrap">
                        <div class="btn-group btn-group-sm col-auto m-1" role="group" aria-label="Basic example">
                            <button class="btn btn-sm btn-danger">
                                Olive Yew
                            </button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="btn-group btn-group-sm col-auto m-1" role="group" aria-label="Basic example">
                            <button class="btn btn-sm btn-danger" value="11">
                                John Doe
                            </button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="btn-group btn-group-sm col-auto m-1" role="group" aria-label="Basic example">
                            <button class="btn btn-sm btn-danger">
                                Allie Grater
                            </button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="btn-group btn-group-sm col-auto m-1" role="group" aria-label="Basic example">
                            <button class="btn btn-sm btn-light">
                                Bob Martin
                            </button>
                            <button class="btn btn-sm btn-light"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="btn-group btn-group-sm col-auto m-1" role="group" aria-label="Basic example">
                            <button class="btn btn-sm btn-light">
                                Anne Teak
                            </button>
                            <button class="btn btn-sm btn-light"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="btn-group btn-group-sm col-auto m-1" role="group" aria-label="Basic example">
                            <button class="btn btn-sm btn-light">
                                Dave Allippa
                            </button>
                            <button class="btn btn-sm btn-light"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="btn-group btn-group-sm col-auto m-1" role="group" aria-label="Basic example">
                            <button class="btn btn-sm btn-light">
                                Penny Black
                            </button>
                            <button class="btn btn-sm btn-light"><i class="fas fa-plus"></i></button>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary inviteUserBtn" data-bs-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-fullscreen-sm-down fade" id="expenseDetailModal" aria-hidden="true"
    aria-labelledby="expenseDetail" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="expenseDetail">Category : Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Office Expense</h3>
                        <h4>32,000 &#8377;</h4>
                    </div>
                    <div class="mb-2">
                        <p>12 AUG, 2021</p>
                    </div>
                    <img src="assets/images/office.jpg" class="mb-3" height="250" width="255" alt="No Image Found">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal modal-fullscreen-sm-down fade" id="createExpenseModal" aria-hidden="true"
    aria-labelledby="createExpense" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createExpense">Create Expense</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select">
                            <option value="0">Uncategorized</option>
                            <option value="1">Company</option>
                            <option value="2">Regular</option>
                            <option value="3">Special</option>
                            <option value="4">School/College</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Expense Name:</label>
                        <input type="text" placeholder="Enter name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="imgFile" class="form-label">Image:</label>
                        <input class="form-control" type="file" id="ExpenseImage" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">&#8377;</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="expenseDescr" class="form-label">Expense Notes:</label>
                        <textarea name="expenseDescr" class="form-control" placeholder="Describe Here ..."
                            id="ExpenseDescr" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                <button type="button" class="btn btn-primary inviteUserBtn" data-bs-dismiss="modal">Create
                    Expense</button>
            </div>
        </div>
    </div>
</div>