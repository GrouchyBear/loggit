<title>Loggit | Help</title>
@extends('layouts.app')

@section('content')
<main>
<div class="container">

    <div class="row" id="lg--warning">
        <div class="col s12 m12">
            <div class="card-panel deep-orange darken-3">
          <span class="white-text">
              This web application was built with the permission of Basingstoke College of Technology(BCoT),
            no private information has been used in it's creation this includes but is not limited to students private information,
            database information related to or including students details.
            All information in this web application has been created by Benjamin Lack in an attempt to create a replacement and working prototype of Loggit (An EILP replacement).
            <br />
            <br />
            All "student numbers" and "emails" are dummy students to be able to test the application and admin features respectively.
            If any of the dummy student names, numbers and or emails match real students, this is only by coincidence and
            no information was exchanged or taken from Basingstoke College of Technology (BCoT).

          </span>
            </div>
        </div>
    </div>

    <div class="row lg--help-div">
        <div class="col s6 m6">
            <h3>FAQ</h3>
            <ul>
                <li class="lg--faq">How do I upload files? <br /> <a href="#">Uploads</a></li>
                <li>My timetable is wrong. <br /> <a href="#">Notify your teacher</a></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="col s6 m6">
            <h3>Send a support ticket</h3>
            <form method="post">
            <input type="text">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
            </form>
        </div>
    </div>

</div>
</main>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>


@endsection