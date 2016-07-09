<!--Navbar-->
<nav class="navbar navbar-dark nav-top-cl">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>
    <div class="container">
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <ul class="nav navbar-nav">
                <center>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">JOHNMARK ABRIL<span class="sr-only">(current)</span></a>
                    </li>
                </center>
            </ul>

            <form class="form-inline">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" id="btn-projects" data-toggle="modal" data-target="#PROJECTS">PROJECTS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="btn-testimonial" data-toggle="modal" data-target="#TESTIMONIAL">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="btn-resume" data-toggle="modal" data-target="#RESUME">RESUME</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="btn-hireme" data-toggle="modal" data-target="#HIREME">HIRE ME</a>
                    </li>
                </ul>
            </form>
        </div>

    </div>

</nav>
<!--/.Navbar-->

<!-- MODALS -->
<?php $this->load->view('modals_project.php'); ?>
<?php $this->load->view('modals_testimonials.php'); ?>
<?php $this->load->view('modals_resume.php'); ?>
<?php $this->load->view('modals_hireme.php'); ?>


