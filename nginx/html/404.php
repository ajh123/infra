<?php
http_response_code(404);
$supportId = bin2hex(random_bytes(4));
$host = htmlspecialchars($_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] ?? 'unknown'), ENT_QUOTES, 'UTF-8');
$timestamp = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Page Not Found</title>
    <style>
        :root {
            --bg: #f5f7fb;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --accent: #2563eb;
            --border: #e5e7eb;
        }
        @media (prefers-color-scheme: dark) {
            :root {
                --bg: #0b1020;
                --card: #0f172a;
                --text: #e5e7eb;
                --muted: #9ca3af;
                --accent: #60a5fa;
                --border: #1f2937;
            }
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: var(--bg);
            color: var(--text);
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            line-height: 1.5;
        }
        main {
            width: min(92vw, 560px);
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
        }
        h1 {
            margin: 0 0 8px;
            font-size: 1.75rem;
            letter-spacing: -0.01em;
        }
        p { margin: 8px 0; color: var(--muted); }
        .actions {
            margin-top: 18px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        a.button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid var(--border);
            text-decoration: none;
            color: var(--text);
            background: transparent;
        }
        a.primary {
            background: var(--accent);
            color: #ffffff;
            border-color: transparent;
        }
        a:focus-visible {
            outline: 3px solid var(--accent);
            outline-offset: 2px;
        }
        footer {
            margin-top: 16px;
            padding-top: 12px;
            border-top: 1px dashed var(--border);
            font-size: 0.85rem;
            color: var(--muted);
        }
        .meta {
            display: grid;
            gap: 4px;
            font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
        }
    </style>
</head>
<body>
    <main role="alert" aria-live="assertive">
        <h1>Page Not Found</h1>
        <p>The page you are looking for doesn't exist or has been moved, or this site has not been configured yet.</p>
        <p>You can retry now or return to the home page.</p>

        <div class="actions">
            <a class="button primary" href="" onclick="location.reload(); return false;">Try again</a>
            <a class="button" href="https://www.minersonline.uk">Return home</a>
        </div>

        <footer>
            <div class="meta">
                <div>Support ID: <?= $supportId ?></div>
                <div>Host: <?= $host ?></div>
                <div>Time: <?= $timestamp ?></div>
            </div>
        </footer>
    </main>
</body>
</html>
