<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details | New Zealand Businesses</title>

    <link rel="stylesheet" href="{{ asset('css/job-form.css') }}">
</head>
<body>

<section class="job-page">

    <header class="job-header">
        <div>
            <p>Find Trusted Businesses</p>
            <h2>Across New Zealand</h2>
        </div>

        <div class="header-badge">
            Builder<br>on site
        </div>
    </header>

    <div class="job-layout">

        <aside class="job-sidebar">
            <h4>Job Registration</h4>
            <p>Complete all steps to get listed</p>

            <div class="step completed">
                <span>1</span>
                <div>
                    <strong>Job Details</strong>
                    <small>Job + Contact</small>
                </div>
            </div>

            <div class="step active">
                <span>2</span>
                <div>
                    <strong>Contact Details</strong>
                    <small>Name & Address</small>
                </div>
            </div>

            <div class="step">
                <span>3</span>
                <div>
                    <strong>Review & Submit</strong>
                </div>
            </div>
        </aside>

        <main class="job-form-area">

            <div class="form-heading">
                <span>Step 2 of 3</span>
                <h1>Contact Details</h1>
                <p>Let verified businesses know how to reach you.</p>
            </div>

            <div class="progress-bar">
                <div class="progress-fill step-two"></div>
                <p>Step 2 of 3</p>
            </div>

            <form class="job-form">

                <h3 class="form-section-title">Contact Details</h3>

                <div class="form-row">
                    <div class="form-group">
                        <input type="text" placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group full-width">
                    <input type="email" placeholder="Email address">
                </div>

                <div class="form-group full-width">
                    <input type="text" placeholder="Phone number">
                </div>

                <div class="radio-section">
                    <p>Preferred Contact Method</p>

                    <div class="radio-row">
                        <label><input type="radio" name="contact_method"> Phone</label>
                        <label><input type="radio" name="contact_method"> Email</label>
                        <label><input type="radio" name="contact_method"> Either</label>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label>Preferred Contact Time</label>
                    <input type="text" placeholder="Select a time  (Morning / Afternoon / Evening / Anytime)">
                </div>

                <div class="radio-section">
                    <p>Are you the property owner?</p>

                    <div class="radio-row">
                        <label><input type="radio" name="property_owner"> Yes</label>
                        <label><input type="radio" name="property_owner"> No</label>
                        <label><input type="radio" name="property_owner"> On behalf of someone else</label>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label>Additional Notes</label>
                    <textarea placeholder="Any access info, urgency, or special requests... (optional)"></textarea>
                </div>

                <label class="checkbox-row">
                    <input type="checkbox">
                    <span>I agree to share my details with relevant verified businesses so they can respond to my request.</span>
                </label>

                <div class="form-actions">
                    <a href="{{ route('job.details') }}" class="back-btn">← Back</a>
                    <a href="{{ route('job.review') }}" class="continue-btn action-link">Continue to Review & Submit →</a>
                </div>

                <div class="secure-note soft-note">
                    🔒 By submitting, you agree to share these details with verified businesses only.
                </div>

            </form>

        </main>

    </div>

</section>

</body>
</html>