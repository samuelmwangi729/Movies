<div class="subscribe-option">
    <div class="section-title">
        <h5>Subscribe</h5>
    </div>
    <p>Subscribe to Our Newsletter to get Timely Update and events.</p>
    <form action="{{route('newsletter.subscribe')}}" method="post">
        @csrf
        <input type="text" placeholder="Name" name="Name">
        <input type="text" placeholder="Email" name="Email">
        <button type="submit"><span>Subscribe</span></button>
    </form>
</div>
