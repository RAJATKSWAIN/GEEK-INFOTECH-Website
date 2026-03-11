<?php
/**
 * schema.php
 * --------------------------------------------------------
 * Structured data for SEO with full social media + exact Google Maps location
 * Author: Rajat Kumar Swain | Geek Infotech
 * --------------------------------------------------------
 */

echo '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Geek Infotech",
  "url": "https://geekinfotech.online/",
  "logo": "https://geekinfotech.online/images/logo.png",
  "description": "Geek Infotech provides industry-ready IT training in Data Engineering, SQL, PL/SQL, Python, and Data Pipeline Development.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Tulasinagar, Near daya petrol pump",
    "addressLocality": "Chatrapur",
    "addressRegion": "Odisha",
    "postalCode": "761020",
    "addressCountry": "India"
  },
  "hasMap": "https://www.google.com/maps/place/Geek+institute/@19.348482,84.9707025,17z/data=!3m1!4b1!4m6!3m5!1s0x3a17fdbcad3a8c0f:0x7cdab83d0cda0aa8!8m2!3d19.348477!4d84.9732774!16s%2Fg%2F11t73n6l0m",
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "Course Counciler",
    "email": "geek_infotech@zohomail.in",
    "telephone": "+91-7045740389"
  },
  "sameAs": [
    "https://www.facebook.com/people/Geek-Institute/100076249534794/#",
    "https://twitter.com",
    "https://www.instagram.com",
    "https://linkedin.com",
    "https://www.youtube.com/@GeekInstitute-z5q",
    "https://wa.me/917045740389"
  ]
}
</script>';
?>