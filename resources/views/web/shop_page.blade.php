@extends('web.layout.app')

@section('main')
<section class="shoppage__main">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="contact__form shadow">
                    <h4 class="text-center contact__form__title">Shop Page</h4>
                    <form action="{{route('store.order')}}" method="POST">
                        @csrf
                         <div class="inputs">
                             <label for="name">Name</label>
                             <input type="text" name="name" placeholder="Name.." required>
                         </div>
                         <div class="inputs">
                             <label for="email">Email</label>
                             <input type="email" name="email" placeholder="Email.." required>
                         </div>
                         <div class="inputs">
                             <label for="contact">Contact No</label>
                             <input type="text" name="contact" placeholder="Contact.." required>
                         </div>
                         <div class="inputs">
                             <label for="budget">Budget</label>
                             <input type="text" name="budget" placeholder="Budget.." required>
                         </div>
                         <div class="inputs">
                             <label for="description">Description of Project</label>
                             <textarea type="text" name="description" placeholder="Budget.." rows="5" required></textarea>
                         </div>
                         <div class="inputs">
                             <button type="submit" name="submit">Send Request</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
