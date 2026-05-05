<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review & Submit | New Zealand Businesses</title>

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
            Ready<br>to submit
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

            <div class="step completed">
                <span>2</span>
                <div>
                    <strong>Contact Details</strong>
                    <small>Name & Address</small>
                </div>
            </div>

            <div class="step active">
                <span>3</span>
                <div>
                    <strong>Review & Submit</strong>
                </div>
            </div>
        </aside>

        <main class="job-form-area">

            <div class="form-heading">
                <span>Step 3 of 3</span>
                <h1>Review & Submit</h1>
                <p>Check your details before sending your request.</p>
            </div>

            <div class="progress-bar">
                <div class="progress-fill step-three"></div>
                <p>Step 3 of 3</p>
            </div>

            <div class="review-wrapper">

                <div class="review-card">
                    <div class="review-card-header">
                        <h3>Job Details</h3>
                        <a href="{{ route('job.details') }}">Edit</a>
                    </div>

                    <div class="review-grid">
                        <div>
                            <span>Service Category</span>
                            <strong>Electrician</strong>
                        </div>

                        <div>
                            <span>Service Needed</span>
                            <strong>Leak repair</strong>
                        </div>

                        <div>
                            <span>Location</span>
                            <strong>Auckland</strong>
                        </div>

                        <div>
                            <span>Property Type</span>
                            <strong>Residential</strong>
                        </div>

                        <div class="review-full">
                            <span>Job Description</span>
                            <strong>Customer job description will appear here.</strong>
                        </div>

                        <div>
                            <span>Budget</span>
                            <strong>$500 - $1,000</strong>
                        </div>

                        <div>
                            <span>Timeline</span>
                            <strong>This week</strong>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <div class="review-card-header">
                        <h3>Contact Details</h3>
                        <a href="{{ route('job.contact') }}">Edit</a>
                    </div>

                    <div class="review-grid">
                        <div>
                            <span>Full Name</span>
                            <strong>Customer Name</strong>
                        </div>

                        <div>
                            <span>Email</span>
                            <strong>customer@email.com</strong>
                        </div>

                        <div>
                            <span>Phone</span>
                            <strong>021 000 0000</strong>
                        </div>

                        <div>
                            <span>Preferred Contact</span>
                            <strong>Either</strong>
                        </div>

                        <div>
                            <span>Contact Time</span>
                            <strong>Anytime</strong>
                        </div>

                        <div>
                            <span>Property Owner</span>
                            <strong>Yes</strong>
                        </div>

                        <div class="review-full">
                            <span>Additional Notes</span>
                            <strong>No additional notes added.</strong>
                        </div>
                    </div>
                </div>

                <label class="checkbox-row final-checkbox">
                    <input type="checkbox">
                    <span>I confirm that the information above is correct and ready to submit.</span>
                </label>

                <div class="form-actions">
                    <a href="{{ route('job.contact') }}" class="back-btn">← Back</a>
                    <button type="button" class="submit-btn">Submit Job Request →</button>
                </div>

                <div class="secure-note soft-note">
                    🔒 Your request will be securely sent to TradieFS and shared only with relevant businesses.
                </div>

            </div>

        </main>

    </div>

</section>

</body>
</html>