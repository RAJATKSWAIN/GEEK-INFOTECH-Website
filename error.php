<?php
// Get error code from query string
$code = isset($_GET['code']) ? intval($_GET['code']) : 404;

// Define messages for common errors
$messages = [
    400 => "Bad Request — The system couldn't process this request.",
    401 => "Unauthorized — Please login to your Geek Infotech portal.",
    403 => "Forbidden — Restricted access area.",
    404 => "Page Under Development — We are currently engineering this segment of the platform.",
    500 => "Internal Server Error — Our engineers are on it.",
    503 => "Service Unavailable — System maintenance in progress."
];

// Pick message or fallback
$message = isset($messages[$code]) ? $messages[$code] : "An unexpected system interruption occurred.";

// Special subtitle for "Coming Soon" feel
$subtitle = ($code == 404) ? "Innovation takes time." : "System Alert";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error <?php echo $code; ?> | Geek Infotech</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-dark: #0f172a;
            --accent-blue: #3b82f6;
        }
        body { 
            font-family: 'Inter', sans-serif; 
            background: radial-gradient(circle at bottom left, #1e40af, #0f172a);
            color: white; 
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            overflow: hidden;
        }
        .error-container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 50px;
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            max-width: 600px;
            width: 90%;
            text-align: center;
        }
        .brand-text {
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: var(--accent-blue);
            text-transform: uppercase;
            margin-bottom: 20px;
            display: block;
        }
        h1 {
            font-size: 5rem;
            font-weight: 800;
            margin: 0;
            background: linear-gradient(to bottom, #fff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }
        .status-msg {
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 10px;
            color: #f8fafc;
        }
        .description {
            color: #94a3b8;
            margin: 20px 0 40px;
            font-size: 1.1rem;
            line-height: 1.6;
        }
        .btn-geek {
            background: var(--accent-blue);
            color: var(--primary-dark);
            font-weight: 700;
            padding: 12px 35px;
            border-radius: 12px;
            text-decoration: none;
            transition: 0.3s;
            display: inline-block;
            border: none;
        }
        .btn-geek:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
            background: #2563eb;
        }
        .gear-icon {
            font-size: 4rem;
            color: var(--accent-blue);
            margin-bottom: 20px;
            animation: fa-spin 8s linear infinite;
        }
    </style>
</head>
<body>

    <div class="error-container">
        <span class="brand-text">Geek Infotech Platform</span>
        
        <?php if($code == 404): ?>
            <div class="gear-icon"><i class="fas fa-cog"></i></div>
        <?php endif; ?>

        <h1><?php echo $code; ?></h1>
        <div class="status-msg"><?php echo $subtitle; ?></div>
        
        <p class="description">
            <?php echo $message; ?><br>
            <small class="opacity-50">Our technical team is deploying the next phase of Geek Infotech services.</small>
        </p>

        <a href="index.php" class="btn-geek">
            <i class="fas fa-arrow-left me-2"></i> Return to Home
        </a>
    </div>

</body>
</html>