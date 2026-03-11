@props(['number' => '0', 'label' => 'Label', 'icon' => 'fa-chart-line'])

<style>
    .stat-outer {
        width: 100%;
        max-width: 180px;
        height: 160px;
        border-radius: 10px;
        padding: 1px;
        background: radial-gradient(circle 150px at 0% 0%, #e0f2fe, #0c2d47);
        position: relative;
        margin: 0 auto;
    }

    .stat-dot {
        width: 3px;
        aspect-ratio: 1;
        position: absolute;
        background-color: #0066cc;
        box-shadow: 0 0 8px #0066cc;
        border-radius: 100px;
        z-index: 2;
        right: 10%;
        top: 10%;
        animation: moveDot 6s linear infinite;
    }

    @keyframes moveDot {
        0%, 100% {
            top: 10%;
            right: 10%;
        }
        25% {
            top: 10%;
            right: calc(100% - 25px);
        }
        50% {
            top: calc(100% - 20px);
            right: calc(100% - 25px);
        }
        75% {
            top: calc(100% - 20px);
            right: 10%;
        }
    }

    .stat-card {
        z-index: 1;
        width: 100%;
        height: 100%;
        border-radius: 9px;
        border: solid 1px #0052a3;
        background: radial-gradient(circle 180px at 0% 0%, #1e5a96, #0c2d47);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        flex-direction: column;
        color: #fff;
    }

    .stat-ray {
        width: 140px;
        height: 30px;
        border-radius: 100px;
        position: absolute;
        background-color: #0099ff;
        opacity: 0.5;
        box-shadow: 0 0 40px #0099ff;
        filter: blur(8px);
        transform-origin: 10%;
        top: 0%;
        left: 0;
        transform: rotate(40deg);
    }

    .stat-card .stat-text {
        font-weight: bolder;
        font-size: 2rem;
        background: linear-gradient(45deg, #0066cc 4%, #00d4ff, #0066cc);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        z-index: 3;
        line-height: 1;
    }

    .stat-card .stat-label {
        font-size: 0.7rem;
        color: #a0d8ff;
        z-index: 3;
        margin-top: 0.3rem;
        text-align: center;
    }

    .stat-line {
        width: 100%;
        height: 1px;
        position: absolute;
        background-color: #0052a3;
    }

    .stat-line.topl {
        top: 10%;
        background: linear-gradient(90deg, #0099ff 30%, #0052a3 70%);
    }

    .stat-line.bottoml {
        bottom: 10%;
    }

    .stat-line.leftl {
        left: 10%;
        width: 1px;
        height: 100%;
        background: linear-gradient(180deg, #0099ff 30%, #0052a3 70%);
    }

    .stat-line.rightl {
        right: 10%;
        width: 1px;
        height: 100%;
    }
</style>

<div class="stat-outer">
    <div class="stat-dot"></div>
    <div class="stat-card">
        <div class="stat-ray"></div>
        <div class="stat-text">{{ $number }}</div>
        <div class="stat-label">{{ $label }}</div>
        <div class="stat-line topl"></div>
        <div class="stat-line leftl"></div>
        <div class="stat-line bottoml"></div>
        <div class="stat-line rightl"></div>
    </div>
</div>

