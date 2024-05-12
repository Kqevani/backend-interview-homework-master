<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/B Testing Demo</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 40px;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .variant-a { color: #4CAF50; }
        .variant-b { color: #2196F3; }
        .notification {
            padding: 10px 20px;
            margin: 20px 0;
            border-left: 5px solid;
        }
        .variant-a .notification { border-color: #4CAF50; }
        .variant-b .notification { border-color: #2196F3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to A/B Testing Demo</h1>
        <div class="{{ session('ab_test_variant', 'default') }}">
            @if(session('ab_test_variant') === 'Variant A')
                <div class="notification variant-a">
                    <p>You are viewing <strong>Variant A</strong>. This design features green text for highlighting differences.</p>
                </div>
            @elseif(session('ab_test_variant') === 'Variant B')
                <div class="notification variant-b">
                    <p>You are viewing <strong>Variant B</strong>. This version uses blue text to emphasize changes.</p>
                </div>
            @else
                <p class="notification default">No specific A/B test variant is currently assigned to you. This is the default view.</p>
            @endif
        </div>
        <p>If you wish to see changes, please clear your session or open this page in an incognito window to potentially get a different variant.</p>
    </div>
</body>
</html>
