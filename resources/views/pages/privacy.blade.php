<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ config('app.name', '') }}">
        <meta property="og:url" content="{{ config('app.url', '') }}">
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="{{ config('app.app_logo', '') }}">
        <meta property="og:image:width" content="630">
        <meta property="og:image:height" content="630">

        <title>Privacy Policy</title>

        <link rel="canonical" href="{{ config('app.url', '') }}">
        <link rel="shortcut icon" href="{{ config('app.url', '') }}/images/{{ config('app.app_favicon', 'favicon.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/sass/app.scss'])
    </head>
    <body>
    @include('layouts.header', ['background' => '#333333', 'active' => ''])
    <main class="bg-white">
    <div class="container mb-5" style="margin-top: 6rem;">
            <div class="row justify-content-center">
                <h2 class="color-text text-center mb-5 fw-light text-uppercase">Privacy Policy</h2>
                <p class="color-text text-center mb-5">This Privacy Policy is effective till December 31, 2023</p>
                <p class="color-text">This Privacy Policy aims to give you information on how we collect and process your personal data. The Primebustours.com website and any other means of collecting personal data are controlled by Tour Project Limited, referred to as “we”, “us” or “our” throughout this Privacy Policy. We are the primary data controller for the purposes of this website and our registered office is Floor 8, 71 Queen Victoria Street, EC4V 4AY, London, United Kingdom.</p>
                <p class="color-text">It is important that you read this Privacy Policy together with any other privacy notice or fair processing notice we may provide on specific occasions when we are collecting or processing personal data about you so that you are fully aware of how and why we are using your data. This Privacy Policy supplements the other notices and is not intended to override them.</p>
                <p class="color-text">We may amend this Privacy Policy at any time by posting the amended terms herein.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Your consent</h3>
                <p class="color-text">We will only use and retain your personal data with your consent or on another lawful basis. We ask for your consent on those occasions and in those places where we specify what we will use your personal data for.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Contacting us</h3>
                <p class="color-text">If you have any questions about our privacy policy or about how we process your personal data, including any complaints, please contact us by e-mail at info@primebustours.com.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Our commitment</h3>
                <p class="color-text">We respect your right to privacy, and we aim to ensure you have a trustworthy experience with us, including when using our websites and booking with or through us. We understand that you care about how your personal data is used by us, and we want to share with you the policies and practices we’ve adopted. This way you can feel confident about how we handle your personal data.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Whom our privacy policy covers</h3>
                <h3 class="color-text fs-5 text-start fw-normal">Our Customers</h3>
                <p class="color-text">Our privacy policy sets out how we process personal data (including information) relating to Customers who are:</p>
                <ul class="color-text ps-5">
                    <li>booking or enquiring about booking tour services with or through us;</li>
                    <li>the recipients of any tour services booked with or through us;</li>
                    <li>customers or potential customers;</li>
                    <li>customers who are purchasing gift certificates;</li>
                    <li>recipients of tour services that can be booked with or through us.</li>
                </ul>
                <h3 class="color-text fs-5 text-start fw-normal">Examples of whom this policy covers</h3>
                <p class="color-text">We include in this privacy policy personal data we process relating to:</p>
                <ol class="color-text ps-5">
                    <li>Individuals who are making any enquiry or booking with us or through us, and individuals in respect of whom any enquiry or booking is made (such as friends, family members, and tour group members, and officers and employees of businesses and organizations booking with or through us);</li>
                    <li>Individuals in respect of whom any enquiry or booking is made with us by an agent;</li>
                    <li>Where our customer is a business or organization, employees or individuals who are acting as representatives of that business or other organization, and individuals connected to that business or other organization, such as owners, partners, shareholders, and directors;</li>
                    <li>Individuals whose personal data from other companies in our group (such as where you have consented to your personal data being disclosed to other group companies for marketing purposes).</li>
                </ol>
                <h3 class="color-text fs-5 text-start fw-normal">When we are data processor only</h3>
                <p class="color-text">Please however note that this privacy policy does not apply where we are processing personal data strictly as a sub-contractor or data processor on behalf of a third party, and not on our own account. In this case, you should look to that third party and its privacy policy, who will be responsible for how we process that personal data.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Terms used in this policy</h3>
                <p class="color-text">When we refer to "you" and "your" in this privacy policy, we refer to you, any such individual whose personal data we process from time to time.</p>
                <p class="color-text">When we refer to "processing" of your personal data, this includes obtaining, recording, storing, or holding your personal data, and anything we do with it, such as organizing, adapting or altering it, retrieving, consulting or using it, disclosing it or otherwise making it available to others, combining it with other data, and blocking, erasing or destroying it.</p>
                <p class="color-text">When we refer to "tour services" this covers all products and services which may be booked with or through us, such as bespoke holidays, package holidays, accommodation, tours, transport, and transfers (whether by air, coach, bus, train, ferry, taxi or other means), car hire, cruises, and charters, and it includes both (1) all such products and services which we supply or operate ourselves (including where we sub-contract); and (2) any such products and services provided by a third party which we book for you (acting as agent for you or that third party). Tour services also include any services we or a third party provide in association with the tours, such as obtaining visas, foreign exchange, and providing local representatives and support.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">What types of personal data we may process</h3>
                <p class="color-text">This section summarizes the types of personal data about you that we process</p>
                <h3 class="color-text fs-5 text-start fw-normal">Data concerning you as an individual</h3>
                <p class="color-text">We may collect the following:</p>
                <ol class="color-text ps-5">
                    <li>Name</li>
                    <li>Home Address</li>
                    <li>Personal Email</li>
                    <li>Home Telephone Number</li>
                    <li>Mobile Telephone Number</li>
                    <li>Nationality</li>
                    <li>Passport Number</li>
                    <li>Driver’s License Number</li>
                    <li>Special Category Data (for example health/medical information)</li>
                    <li>Payment Card details</li>
                    <li>Address (Billing Address for Card verification)</li>
                    <li>IP address</li>
                    <li>Location data</li>
                    <li>Mobile device related information while you are using our mobile apps (if applicable)</li>
                    <li>Language of the audio guide used.</li>
                </ol>
                <h3 class="color-text fs-5 text-start fw-normal">Data concerning you as an individual</h3>
                <p class="color-text">If you are an individual associated with a business or other organization that is our customer, then your personal data may include the following information that we link to you:</p>
                <ul class="color-text ps-5">
                    <li>business or organization details (such as name, address, telephone numbers, payment arrangements, financial information, etc.),</li>
                    <li>your relationship with that business or organization (such as owner, partner, director, shareholder, employee, or agent)</li>
                    <li>bank details and payment information to collect or refund payments, and</li>
                    <li>your contact details within that business (such as work address, work telephone, and mobile numbers, work fax number, and work e-mail address).</li>
                </ul>
                <h3 class="color-text fs-5 text-start fw-normal">Enquiry and Booking information</h3>
                <p class="color-text">Information concerning enquiries and bookings made with or through us for the tour services, including where you are making the enquiry or booking or are the recipient of the tour services to which the enquiry or booking relates. This information may include:</p>
                <ul class="color-text ps-5">
                    <li>records of enquiries and searches for holiday and tour products made by or on your behalf,</li>
                    <li>details of your personal interests,</li>
                    <li>needs and other data relevant to your enquiry;</li>
                    <li>details of results, quotes, proposals, estimates and other information given in response to enquiries;</li>
                    <li>details of the booking, tour and other tour services booked or enquired about;</li>
                    <li>details of the Customer;</li>
                    <li>dates and times of the tour;</li>
                    <li>оrder and price information;</li>
                    <li>usage of discounts, promo codes and gift certificates,</li>
                    <li>payment details (including card details);</li>
                    <li>foreign exchange requirements and arrangements; and</li>
                    <li>sensitive information such as health, medical, dietary, your food and beverage preferences and allergy information, mobility, disability, or other requirements relevant to the service you are enquiring about or your contract with us.</li>
                </ul>
                <h3 class="color-text fs-5 text-start fw-normal">Performance information</h3>
                <p class="color-text">Information generated concerning the performance of any booking or other contract made with or through us, including information relating to anything arising during any holiday or other tour services, and information relating to payments to be made.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Competition and Survey Information</h3>
                <p class="color-text">Information collected or generated out of any competitions or promotions we run or any surveys we conduct.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Account or Registration</h3>
                <p class="color-text">Information concerning any accounts, registrations, or memberships with us.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Correspondence</h3>
                <p class="color-text">Correspondence, communications, and messages, including between you and us, and between us and third parties, including relating to any booking or booking enquiry, or performance of any contract.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Website Usage Information</h3>
                <p class="color-text">We may collect information about your visits to, browsing of, and use of our website unless your web browser blocks this. The range of data we collect will depend on how you interact with our website. This information may include:</p>
                <ul class="color-text ps-5">
                    <li>your IP address (a unique identifier allocated to your computer for your connection to the internet);</li>
                    <li>your computer device details (PC, tablet, smartphone, watch etc.);</li>
                    <li>the make and version of web browser (e.g. Internet Explorer, Firefox, Safari, Opera, Chrome) you are using;</li>
                    <li>your operating system (e.g. Windows, Windows Phone, OSX, iOS, Android, Linux, etc);</li>
                    <li>your time-zone;</li>
                    <li>your browser plug-ins;</li>
                    <li>any web-page you came from, identified as the referrer web page address by your web browser;</li>
                    <li>cookies;</li>
                    <li>page response times;</li>
                    <li>download error;</li>
                    <li>pages and parts of pages you visit;</li>
                    <li>usage you make of our website, including enquiries and searches undertaken, and registrations for accounts, forums etc.;</li>
                    <li>services and products you viewed;</li>
                    <li>length of visit to website and pages;</li>
                    <li>page interaction information (such as scrolling, keys pressed, mouse clicks, touches, and mouse-overs).</li>
                </ul>
                <p class="color-text">This will normally be collected and used anonymously, and aggregated for analysis, with your name and any characteristics identifying you remaining anonymous, but our privacy policy will apply, and it will be treated as your personal data, if this information is in any way linked to you personally.</p>
                <p class="color-text">This information may also include:</p>
                <ul class="color-text ps-5">
                    <li>data inputted into forms and fields;</li>
                    <li>registrations for any accounts,</li>
                    <li>forum,</li>
                    <li>feedback mechanism,</li>
                    <li>social functionality,</li>
                    <li>newsletters or other features of our site;</li>
                    <li>usernames and passwords,</li>
                    <li>log-in / out history, and settings;</li>
                    <li>actions taken within any account or other registration, including view and update and changes to settings; and posts to any forum, feedback, review, or other social functionality on our website.</li>
                </ul>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">How we collect or generate your personal data</h3>
                <p class="color-text">This section sets out the ways in which we may collect or generate personal data concerning you.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Visiting our website</h3>
                <p class="color-text">By visiting and using our website you or your computer may provide personal data. This includes information which is automatically provided by your browser to our servers; information recorded on our web servers about your interaction with our website and pages viewed; information we capture or place on your computer or generate using cookies or other technologies on our website; and information you input into forms and fields on our website.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Other way to collect the information</h3>
                <p class="color-text">Photograph or video:</p>
                <p class="color-text">When you embark on our vehicle, you may have your photograph taken for marketing purposes. We will always ask for consent to photograph or video. If you consent to having your photo taken and used for marketing or PR purposes, we will hold your name, image, and age (if applicable) on file for future re-use.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Call Recording and Monitoring</h3>
                <p class="color-text">Please be aware that calls to and from Prime Bus Tours may be recorded. We may use the call recordings to monitor our customer service for quality or compliance purposes, to check the accuracy of the information you provide us, for fraud prevention purposes, or to provide training to our staff. We will retain the call recordings for as long as reasonably necessary to perform such activities and then delete them. Any personal information obtained from you during the call will be treated in accordance with the provisions of this Privacy Policy.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Children under 14</h3>
                <p class="color-text">The services offered by Prime Bus Tours are not directed at children under 14 years old travelling alone. The use of any of our services is only allowed with the valid consent of a parent or a guardian. If we receive information from a child under 14 years old, we reserve the right to delete it. If you believe that a child has submitted personal data on or through our sites without consent and supervision of a parent or guardian, please contact us via the details provided above so we can take necessary action.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Cookies and Analytical tools</h3>
                <p class="color-text">We are also collecting information about you by cookies and analytical tools e.g. Google analytics. We use cookies to enhance customer experience on our websites. Cookies mean that www.primebustours.com website will remember you for a particular purpose and particular amount of time. To see our cookies policy, click here.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Data you provide</h3>
                <p class="color-text">Your personal data will include data you provide (or later amend), whether:</p>
                <ul class="color-text ps-5">
                    <li>from correspondence with you;</li>
                    <li>verbally to us over the phone or in person;</li>
                    <li>by filing in any field or form on a website;</li>
                    <li>by filling in any printed form we provide you with;</li>
                    <li>by e-mail;</li>
                    <li>from documents you provide us with; and</li>
                    <li>from updates to any information you provide to us from time to time.</li>
                </ul>
                <p class="color-text">This includes when you:</p>
                <ul class="color-text ps-5">
                    <li>register or subscribe for any service, account, members, or loyalty program,</li>
                    <li>make an enquiry or booking for a holiday or other tour services whether in person, by phone, through our website or otherwise;</li>
                    <li>send us your comments or suggestions;</li>
                    <li>subscribe to any newsletter or other publication;</li>
                    <li>and request sales and advertising information, including brochures.</li>
                </ul>
                <h3 class="color-text fs-5 text-start fw-normal">Data obtained from third parties</h3>
                <p class="color-text">We may obtain personal data concerning you from third parties, including from:</p>
                <ul class="color-text ps-5">
                    <li>providers of any holidays, accommodation, other tour services which are enquired about or booked, and their intermediaries;</li>
                    <li>credit, fraud, identity and other searches we may undertake, including searches with public records and regulatory and private organisations;</li>
                    <li>any business or organisation you are associated with; from telephone numbers identified by the telephone system when you telephone us.</li>
                    <li>Other / Third-Party Websites: On our website, you may find links to third-party websites which are not in our control. Once you leave our website, we cannot be responsible for the protection and privacy of your personal data and information you provide on other websites/third-parties. Their website is covered under their privacy policy and data collection policies and is not covered by this Privacy Policy. In this case, you should take necessary care and review their privacy statement.</li>
                </ul>
                <h3 class="color-text fs-5 text-start fw-normal">Data generated by us</h3>
                <p class="color-text">We and any suppliers or sub-contractors working for us may generate personal data relating to you, including:</p>
                <ul class="color-text ps-5">
                    <li>in connection with responding to and dealing with any enquiry, booking or complaint;</li>
                    <li>in performing any booking or other contract with you; or</li>
                    <li>through the analysis of your personal data; or</li>
                    <li>data gained from your use of our website. </li>
                </ul>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">What do we use your personal data for?</h3>
                <p class="color-text">This section sets out the uses which we make of your personal data and the legal basis on which we rely to do this.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Operate our website</h3>
                <p class="color-text">To operate and provide the search, booking, accounts, review, forums and other services, facilities and functions of our websites. This includes managing any accounts or registrations you have with our websites and making changes to your settings and profile at your request.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Provide information and respond to enquiries</h3>
                <p class="color-text">To provide information to you about our website, systems and services, including to respond to booking enquiries and searches for holidays and tour, and to keep you updated generally.  This is done on the basis of our legitimate interests in ensuring our business is run efficiently.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Bookings and other contracts</h3>
                <p class="color-text">To enable you to make bookings, and to fulfill, provide, perform, administer, manage, and enforce all bookings, orders, and other contracts which relate to you (including if you are a passenger in a booking made by someone else), and to process any transactions authorised or made with us which relate to you. This is done on the basis of our legitimate interests in ensuring our business is run efficiently.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Payments</h3>
                <p class="color-text">To collect and make payments due and administer our accounts. This is necessary for the preparation of any contract between us.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Communication with Customers</h3>
                <p class="color-text">To communicate with you concerning any enquiries, bookings, tour services provided, problems and complaints, and to respond to any submissions, enquiries or requests from you. This is done on the basis of our legitimate interests in ensuring our business is run efficiently.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Record Keeping</h3>
                <p class="color-text">To keep internal records and maintain reasonable archives, including concerning as to enquiries, bookings, contracts, tour services, and complaints. This is done on the basis of our legitimate interests in ensuring our business to run efficiently.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Manage and improve our business</h3>
                <p class="color-text">We may collect information in order:</p>
                <ul class="color-text ps-5">
                    <li>to analyse, audit, provide, operate, administer, maintain and improve our business, website, systems, and services;</li>
                    <li>to carry out surveys and analyse the results;</li>
                    <li>to run promotions and competitions;</li>
                    <li>to undertake product or customer research/development; </li>
                    <li>to assist us in and help us to improve our sales, </li>
                    <li>for editorial, advertising and marketing processes; </li>
                    <li>to carry out other business development and improvement activities; and</li>
                    <li>to provide training to our staff, sub-contractors and suppliers. </li>
                </ul>
                <p class="color-text">For example, we may use your personal data to help us profile how our customers generally are using our websites and booking tour services with (or through) us. We may also use this information to ascertain interests so that we can better tailor our business offerings. This is done on the basis of our legitimate interests in ensuring our business to run efficiently.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Direct marketing</h3>
                <p class="color-text">To carry out direct marketing to you.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Advertising</h3>
                <p class="color-text">To report aggregate information concerning usage of our websites to our advertisers. We normally create anonymous statistical data about browsing actions and patterns, and do not identify any individual.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Anything you have specifically consented to</h3>
                <p class="color-text">For any purpose which we have obtained your consent to. We will do this only where you have a choice whether to consent or not, you have control over that data and you have had to take an affirmative step to give consent on an informed basis.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Consequences of Not Providing your Data</h3>
                <p class="color-text">You are not obligated to provide your personal information, however, where the information is required for us to provide you with our services/deliver your products, we may not be able to offer some/all our services without it.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Period for retaining your data</h3>
                <p class="color-text">We will only retain your personal data for as long as necessary to fulfil the purposes we collected it for, including for the purposes of satisfying any legal, accounting, or reporting requirements.</p>
                <p class="color-text">To determine the appropriate retention period for personal data, we consider the amount, nature, and sensitivity of the personal data, the potential risk of harm from unauthorised use or disclosure of your personal data, the purposes for which we process your personal data and whether we can achieve those purposes through other means, and the applicable legal requirements.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Use of your personal data for direct marketing</h3>
                <p class="color-text">We do not use or disclose your personal data for direct marketing purposes unless:</p>
                <ul class="color-text ps-5">
                    <li>we have obtained your consent to this, such as through an opt-in box on any form or website of ours; and/or</li>
                    <li>you have made a booking with us and there is a legitimate interest to do is.</li>
                </ul>
                <p class="color-text">In addition to data protection law if we use your personal information for direct marketing purposes we may also be subject to additional rules that regulate direct marketing. The term “direct marketing” essentially means direct marketing material or advertising at a particular individual.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Direct marketing by us</h3>
                <p class="color-text">We will use your personal data to send you marketing information (including adverts and details of promotions) about services:</p>
                <ul class="color-text ps-5">
                    <li>offered by us;</li>
                    <li>which can be booked with third parties through us;</li>
                    <li>which can be booked with other companies within our group; and</li>
                    <li>offered by third parties selected by us.</li>
                </ul>
                <p class="color-text">Where applicable we will only send you marketing information about the categories of tour services you have selected. Also, we will only contact you in the manner you agreed to (e.g. by email).</p>
                <h3 class="color-text fs-5 text-start fw-normal">Withdrawing from Direct Marketing</h3>
                <p class="color-text">You are free to stop receiving marketing information from us at any time by contacting us as detailed in this privacy notice or by following the instructions set out in our marketing communications. If you email us to withdraw your consent, it would be helpful if you could insert the word “Unsubscribe” as the subject heading.</p>
                <p class="color-text">When you elect to stop receiving marketing information we will, from that point onwards, not share you information further with any other third parties.</p>
                <p class="color-text">You are also free, at any time, to notify any third party to whom we have previously passed your contact details to, that you no longer wish to receive marketing communications from them.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Disclosure of your personal data</h3>
                <p class="color-text">We transfer your personal data to third parties in the following circumstances:</p>
                <h3 class="color-text fs-5 text-start fw-normal">Credit Checks etc.</h3>
                <p class="color-text">We may disclose your personal data to third parties (including intermediaries) as necessary to carry out any checks regarding your financial standing. The identities of these parties may change from time to time. They may include credit reference agencies and other companies for use in credit decisions, for fraud prevention and to pursue debtors.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Bookings and performance of contracts</h3>
                <p class="color-text">We disclose your personal data to third parties (including intermediaries) as necessary to deal with any booking enquiry being made by or for you, to make any booking requested by or for you, to perform and administer any booking for you or other contract with or in respect of you. This may include:</p>
                <ul class="color-text ps-5">
                    <li>to collect payments to be made by you,</li>
                    <li>to investigate and respond to complaints, and</li>
                    <li>to enforce any booking or other contract with you.</li>
                </ul>
                <p class="color-text">Such third parties may include any suppliers or sub-contractors and their agents. The identities of these parties may change from time to time and are engaged so we can provide our services to you.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Suppliers of tour and other services</h3>
                <p class="color-text">We may disclose your personal data to any third party (e.g. supplier, contractor sub-contractor) we make any enquiries with concerning or engage or sub-contract to perform any booking or other contract, including to provide any tour or other products or services we have agreed to provide to you in order to perform our contract with you.</p>
                <p class="color-text">We may disclose your personal data to any supplier with whom we make any enquiry concerning or book any tour or other products and services for you as agent (whether as agent for you, someone representing you, or the supplier), such as a tour operator. Details of any third party tour operators or other third parties who will be responsible for or supply you with the tour services booked or enquired about, may be obtained from us on request, and may be stated in any tour or other brochure provided by us.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Insurance</h3>
                <p class="color-text">If any application is made through us for any tour or other insurance to cover you, we will pass your personal data on to the insurer. Information provided by you may be put on to a register of claims and shared with other insurers to prevent fraudulent claims.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Business Function Outsourcing</h3>
                <p class="color-text">Where we use third parties to host, provide, operate or supply any part of our websites, databases, systems, business, or services, or carry out on our behalf any of our business functions or actions (including sending mail, processing payments, providing marketing assistance, providing customer and advertising analysis, and providing customer services), then then we may provide your personal data to them as required for use for or processing as part of those purposes.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Public forums etc.</h3>
                <p class="color-text">Where any facility on our website is clearly designed to make certain of your personal data public (e.g. posts you make to any public forum or reviews facility) then any personal data you provide in relation to that forum or other facility, which is provided in circumstance where it is clear that it is intended to be published, will be disclosed to the public accordingly, subject to moderation by us and to the terms of this privacy policy.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Legal requirements</h3>
                <p class="color-text">We may supply personal data to a government authority or regulator where required to:</p>
                <ul class="color-text ps-5">
                    <li>comply with a legal requirement,</li>
                    <li>for the administration of justice,</li>
                    <li>for the purposes of customs, visas and immigration, or</li>
                    <li>where reasonably required to protect your vital interests or</li>
                    <li>enforce any booking or other contract.</li>
                </ul>
                
                <h3 class="color-text fs-5 text-start fw-normal">Business Customers who are businesses (not individuals)</h3>
                <p class="color-text">If you are a business or organization (“Business Customer”), and we are holding personal data of any authorized representative (such as an employee agent, employee, officer, owner, partner, or director), then we may disclose to them that personal data.</p>
                <p class="color-text">If a Business Customer is making a booking or booking enquiry on behalf of an individual, with that person’s authority, then we may disclose to our Business Customer that individual’s personal data as reasonably required in connection with such booking or enquiry, or the subsequent performance of or payment for any booking made.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Business acquirers</h3>
                <p class="color-text">If our business is ever transferred to a third party, then your personal data will be transferred to the acquirer to enable them to continue our business.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">How third parties will handle your personal data</h3>
                <p class="color-text">Where we provide your personal data to a third party one of the following two circumstances will apply:</p>
                <h3 class="color-text fs-5 text-start fw-normal">Processing on our behalf</h3>
                <p class="color-text">In some cases, your personal data may be held and otherwise processed by others on our behalf. We have not included the names of our service partners as these will change over time. We will remain responsible for what they do with your personal data, and your personal data will only be held and processed by them in accordance with our instructions and this privacy policy. The sharing of your data is necessary for the performance of any contract with you and for the efficient provision of our services.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Processing on their own account</h3>
                <p class="color-text">In other cases, your personal data may need to be provided to them to be held and processed by them in their own right and on their own account. In such case, they will have their own responsibility for your personal data, subject to their own privacy policy, and we will not be responsible for what they do with it following disclosure. This will only be done to perform the contract.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Location of your personal data</h3>
                <p class="color-text">We (and any affiliate, subcontractor or other person processing your personal data on our behalf) may transfer, store and otherwise process your personal data anywhere within the Data Protection Act 2018 and the General Data Protection Regulation 2016/679 (‘GDPR”).</p>
                <p class="color-text">We will only send your personal data outside the GDPR to companies either within our group or to parties with whom we have a contract. We ensure your personal data is protected by requiring all our group companies to follow the same rules when processing your personal data. This means within our group and for those other organizations with whom we have contracts we ensure that we have in place adequate safeguards in respect of such transfers outside the GDPR. You can find out about what adequate safeguards these are by contacting us using the details provided in this privacy notice.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Keeping your data secure</h3>
                <h3 class="color-text fs-5 text-start fw-normal">Our security measures</h3>
                <p class="color-text">We take appropriate technical and organizational measures to secure your information and to protect it against unauthorized or unlawful use and accidental loss or destruction, including:</p>
                <ul class="color-text ps-5">
                    <li>only sharing and providing access to your information to the minimum extent necessary, subject to confidentiality restrictions where appropriate, and on an anonymized basis wherever possible;</li>
                    <li>using secure servers to store your information;</li>
                    <li>verifying the identity of any individual who requests access to information prior to granting them access to information;</li>
                    <li>using Secure Sockets Layer (SSL) and Transport Layer Security (TLS) software or other similar encryption technologies to encrypt your personal and payment transactions.</li>
                </ul>
                <p class="color-text">Transmission of information over email is not secure, and if you submit any information to us over the internet by email you do so entirely at your own risk. We cannot be responsible for any costs, expenses, loss of profits, harm to reputation, damages, liabilities or any other form of loss or damage suffered by you as a result of your decision to transmit information to us by email.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Your security measures</h3>
                <p class="color-text">For your own privacy protection, we encourage you to maintain anti-virus and other malware protection software on your computers and other devices, and to maintain your own measures to protect your personal data. Please do not include sensitive personal data in any e-mails you may send to us, including payment card information.</p>
                <p class="color-text">We also encourage you to be careful about who you give personal data to. We never contact you to ask you for sensitive personal data, such as payment card information, or sensitive personal data such as passport numbers or log-in details, and we will only ask you for such information in person or through our website, or by telephone in connection with a booking you are making or have made. Please let us know if you someone purports to contact you in our name.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Your Rights</h3>
                <p class="color-text">Our privacy policy is not intended to create a contract or form part of any contract. You have certain non-contractual rights under the laws noted above, which we summarize below. If you contact us about these rights, we may ask for proof of your identity before we act, and may refuse to act if you do not provide this or your identity is not established by you. This is to ensure that your data is protected and kept secure.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Access to your personal data</h3>
                <p class="color-text">You may request us to tell you whether we are processing personal data about you, to tell you what personal data we are processing and for what purposes, and to provide you with a copy of your personal data that we hold.</p>
                <p class="color-text">The law does allow us, in certain cases to refuse your request, and we will advise you at the time if this is the case.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Rectification</h3>
                <p class="color-text">You have the right to have your personal data amended if it is inaccurate or incomplete.</p>
                <h3 class="color-text fs-5 text-start fw-normal">A right to object</h3>
                <p class="color-text">You have the right to object to the use of your personal information for direct marketing or where we use it on the basis that we say we have a legitimate interest in using it.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Deletion of Data inaccuracies</h3>
                <p class="color-text">You have the right to have your personal information deleted or removed in certain circumstances and we may have the right in some cases to refuse to do so.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Portability</h3>
                <p class="color-text">You have the right to obtain and re-use your personal information for your own use in certain circumstances.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Restrict Processing</h3>
                <p class="color-text">You may prevent or suppress the processing of your personal information in certain circumstances.</p>
                <h3 class="color-text fs-5 text-start fw-normal">Right to withdraw your consent</h3>
                <p class="color-text">You are free to withdraw your consent at any time. Please contact us.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Changes to this privacy policy</h3>
                <p class="color-text">We may change this privacy policy at any time and from time to time without notice to you, including by publishing a new version on our website. You should check this privacy policy for updates each time you visit our website to be sure that you are aware of any changes. You should check the top of the document to see the latest version in force. Any change will be prospective only, and we will not make any changes that have retroactive effect unless legally required to do so.</p>
                <h3 class="color-text fs-5 text-start fw-normal text-uppercase">Applicable Law And Disputes</h3>
                <p class="color-text">Our privacy policy is subject to the law of the United Kingdom and disputes can be determined by the courts of the United Kingdom.</p>
            </div>
    </div>
    </main>        
    @include('layouts.footer')

        @vite(['resources/js/app.js'])
    </body>
</html>
