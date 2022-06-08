<!DOCTYPE html>

<html lang="en" class="fonts-loaded">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object#">
    <title>Profile</title>
    <link href="https://staticsn.com/_styles/all.css?v=EVb095nwuuMaVJr3GESXuU8e-x8bTuhQCYqa6d7Pbd81" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,900,300i,400i|Open+Sans+Condensed:300,300italic,700"
        rel="stylesheet" />
</head>

<body id="ctl00_mainBody"
    onload="starnow.initSearchFields(0, $(&#39;#ctl00_cphMain_registrationForm_location_countryID&#39;), $(&#39;#ctl00_cphMain_registrationForm_location_regionID&#39;), $(&#39;#ctl00_cphMain_registrationForm_location_zipCode&#39;), &#39;4&#39;)">

    @include('layouts.header')
    <div class="row page-spacer">
        <div class="small-12 columns">
            <h1>Profile</h1>
            @include('common.partials.alerts')

            <div class="section">
                <form method="post" action="{{ route('worker.update.profile') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('common.partials.error-summary')

                    <div class="row">
                        <div class="small-12 columns">
                            <div class="profile-photo" style="margin-bottom:30px;">
                                @if (auth()->user()->profile_photo)
                                    <img src="{{ asset('storage/profiles/' . $user->profile_photo) }}"
                                        alt="{{ $user->name }}"  style="width:200px;border-radius:50%;"/>
                                @else
                                    <img src="https://via.placeholder.com/300" alt="{{ $user->name }}"
                                        style="width:200px;border-radius:50%;" />
                                @endif
                            </div>
                            <div style="margin-bottom:30px;">
                                <label for="profile_photo"> Choose profile photo </label>
                                <input type="file" name="profile_photo" id="profile_photo" />
                            </div>
                        </div>

                        <fieldset class="fieldset-old">
                            <label>Email Address <span class="req">*</span> </label><input
                                class="input-half" id="email" maxlength="50" name="email" type="text"
                                value="{{ old('email', $user->email) }}" disabled />
                        </fieldset>
                        <fieldset class="fieldset-old">
                            <label>First nme <span class="req">*</span> </label><input class="input-half"
                                id="first_name" maxlength="50" name="first_name" type="text"
                                value="{{ old('first_name', $user->first_name) }}" />
                            <label>Last name <span class="req">*</span> </label><input class="input-half"
                                id="last_name" maxlength="50" name="last_name" type="text"
                                value="{{ old('last_name', $user->last_name) }}" />
                        </fieldset>
                        <fieldset class="fieldset-old">
                            <label>Username <span class="req">*</span> </label><input class="input-half"
                                id="username" maxlength="50" name="username" type="text"
                                value="{{ old('username', $user->username) }}" />
                            <label>Phone # <span class="req">*</span> </label><input class="input-half"
                                id="phone" maxlength="50" name="phone" type="text"
                                value="{{ old('phone', $user->phone) }}" />
                        </fieldset>
                        <fieldset class="fieldset-old"><label>Gender <span class="req">*</span></label>
                            <div class="input-group inline">
                                <label><input id="male" type="radio" name="gender" value="male"
                                        @if ($user->gender == 'male') checked @endif /> Male</label>
                                <label><input id="female" type="radio" name="gender" value="female"
                                        @if ($user->gender == 'female') checked @endif />
                                    Female</label>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset-old ">
                            <label class="mt2">Date of Birth <span
                                    class="req">*</span></label><input class="input-half" id="dob"
                                maxlength="255" name="dob" type="date" value="{{ old('dob', $user->dob) }}" />
                        </fieldset>
                        <fieldset class="fieldset-old ">
                            <label>Country <span class="req">*</span>
                            </label><select class="input-half mb2" id="country" name="country">
                                <option value="">Choose country...</option>
                                @foreach ($countries as $country)
                                    <option value="{{ old('country', $country->id) }}"
                                        @if ($country->id == $user->country) selected @endif>
                                        {{ $country->name }}</option>
                                @endforeach
                            </select>
                        </fieldset>

                        <fieldset class="fieldset-old ">
                            <label>Age </label><input class="input-half" id="age" maxlength="255" name="age"
                                type="text" value="{{ $user->worker->age }}" disabled />
                        </fieldset>

                        <fieldset class="fieldset-old ">
                            <label>Heights <span class="req">*</span>
                            </label><select class="input-half mb2" id="height" name="height">
                                <option value="">Choose height...</option>
                                @foreach ($heights as $height)
                                    <option {{ old('height', $height->id) == $height->id ? 'selected' : '' }}
                                        value="{{ $height->id }}">{{ $height->height }}</option>
                                @endforeach
                            </select>
                        </fieldset>

                        <div class="form-actions form-actions--flex"><input type="submit" value="Update profile"
                                class="button form-actions__primary-button" /></div>

                </form>
            </div>
        </div>
    </div>
    <div class="row page-spacer">
        <div class="small-12 columns">
            <h1>Change password</h1>

            <div class="section">
                <form method="post" action="{{ route('worker.change.password') }}">
                    @csrf
                    @method('PUT')
                    <fieldset class="fieldset-old ">
                        <label>Old password <span class="req">*</span></label><input class="input-half"
                            id="old_password" maxlength="50" name="old_password" type="password"
                            value="{{ old('old_password') }}" required />
                    </fieldset>
                    <fieldset class="fieldset-old ">
                        <label>New Password <span class="req">*</span></label><input class="input-half"
                            id="new_password" maxlength="50" name="new_password" type="password"
                            value="{{ old('new_password') }}" required />
                        <label>Confirm Password <span class="req">*</span></label><input
                            class="input-half" id="confirm_password" maxlength="50" name="confirm_password"
                            type="password" value="{{ old('confirm_password') }}" required />
                    </fieldset>

                    <div class="form-actions form-actions--flex"><input type="submit" value="Update password"
                            class="button form-actions__primary-button" /></div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
