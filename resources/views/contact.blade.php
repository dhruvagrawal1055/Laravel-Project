@include('layouts.app')
@include('navbar')
<div class="container">
    <h2>Contact Us</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" action="/thankyou">
        @csrf

        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
