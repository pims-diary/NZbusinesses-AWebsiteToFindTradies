<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details | New Zealand Businesses</title>

    <link rel="stylesheet" href="{{ asset('css/job-form.css') }}">
</head>
<body>

<section class="job-page">

    <!-- Top Header -->
    <header class="job-header">
        <div>
            <p>Find Trusted Businesses</p>
            <h2>Across New Zealand</h2>
        </div>

    </header>

    <div class="job-layout">

        <!-- Sidebar Steps -->
        <aside class="job-sidebar">
            <h4>Job Registration</h4>
            <p>Complete all steps to get listed</p>

            <div class="step active">
                <span>1</span>
                <div>
                    <strong>Job Details</strong>
                    <small>Job + Contact</small>
                </div>
            </div>

            <div class="step">
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

        <!-- Main Form -->
        <main class="job-form-area">

            <div class="form-heading">
                <span>Step 1 of 3</span>
                <h1>Job Details</h1>
                <p>Create your job credentials and primary contact information.</p>
            </div>

            <div class="progress-bar">
                <div class="progress-fill"></div>
                <p>Step 1 of 3</p>
            </div>

            <form class="job-form">

                <div class="form-row">
                    <div class="form-group">
                        <label>What are you looking for? <span>*</span></label>
                        <select>
                            <option>Enter the services category...</option>
                            <option>Electrician</option>
                            <option>Plumber</option>
                            <option>Builder</option>
                            <option>Painter</option>
                            <option>Cleaner</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Service Needed <span>*</span></label>
                        <input type="text" placeholder="e.g. Leak repair, house cleaning...">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" placeholder="Suburb or city">
                    </div>

                    <div class="form-group">
                        <label>Property Type <span>*</span></label>
                        <select>
                            <option>Select...</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Rental Property</option>
                        </select>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label>Job Description</label>
                    <textarea placeholder="Describe your project....."></textarea>
                </div>

                <div class="form-group full-width">
                    <label>Add Image <span class="optional">(optional)</span></label>
                    <div class="upload-box">
                        <span>＋</span>
                        <p>Add Image (optional)</p>
                    </div>
                </div>

                <div class="budget-title">Budget & Timeline</div>

                <div class="form-row">
                    <div class="form-group">
                        <select>
                            <option>Budget $</option>
                            <option>Under $500</option>
                            <option>$500 - $1,000</option>
                            <option>$1,000 - $5,000</option>
                            <option>$5,000+</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select>
                            <option>Timeline</option>
                            <option>ASAP</option>
                            <option>This week</option>
                            <option>This month</option>
                            <option>Flexible</option>
                        </select>
                    </div>
                </div>

                <label class="checkbox-row">
                    <input type="checkbox">
                    <span>I agree to the Terms & Conditions and Privacy Policy</span>
                </label>

               <a href="{{ route('job.contact') }}" class="continue-btn action-link">
    Continue to Contact Details →
</a>

                <div class="secure-note">
                    🔒 Your information is encrypted and secure. We never share your data without consent.
                </div>

            </form>

        </main>

    </div>

</section>

</body>
</html>