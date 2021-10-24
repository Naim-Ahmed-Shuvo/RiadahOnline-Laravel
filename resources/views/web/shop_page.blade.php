@extends('web.layout.app')

@section('main')
<section class="shoppage__main">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="contact__form shadow">
                    <h4 class="text-center contact__form__title">Shop Page</h4>
                    <form action="#">
                         <div class="inputs">
                             <label for="name">Name</label>
                             <input type="text" name="name" placeholder="Name..">
                         </div>
                         <div class="inputs">
                             <label for="email">Email</label>
                             <input type="email" name="email" placeholder="Email..">
                         </div>
                         <div class="inputs">
                             <label for="contact">Contact</label>
                             <input type="test" name="contact" placeholder="Contact..">
                         </div>
                         <div class="inputs">
                             <label for="budget">Budget</label>
                             <input type="test" name="budget" placeholder="Budget..">
                         </div>
                         <div class="inputs">
                             <label for="description">Description of Project</label>
                             <textarea type="test" name="description" placeholder="Budget.." rows="5"></textarea>
                         </div>
                         <div class="inputs">
                             <a type="submit" name="submit">Send Request</a>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
