<form method="POST" action="/auth/register">

    <div>
        Name
        <input type="text" name="usr_name" value="{{ old('usr_name') }}">
    </div>

    <div>
        Email
        <input type="email" name="usr_email" value="{{ old('usr_email') }}">
    </div>

    <div>
        Password
        <input type="password" name="usr_password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="usr_password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>