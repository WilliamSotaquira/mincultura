<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Casa Común</title>
    <meta name="description" content="Casa Común: territorios de encuentro, temáticas y destacados culturales.">
    <style>
        @font-face {
            font-family: 'Alternate Gothic';
            src: url('https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/AlternateGothicExCondATF-Bold.otf') format('opentype');
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: 'Google Sans';
            src: url('https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/GoogleSans-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'Google Sans';
            src: url('https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/GoogleSans-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal
        }

        :root {
            --ink: #06090f;
            --poster: #5b6484;
            --poster-deep: #4e5876;
            --cream: #f4ebbe;
            --butter: #eed367;
            --teal: #58d7c9;
            --teal-deep: #2fc2b0;
            --mint: #70d7b5;
            --mint-dark: #4cc4ab;
            --pink: #e88bc1;
            --orange: #ef9141;
            --red: #c85c4f;
            --aqua: #4cd0c7;
            --line: rgba(18, 26, 35, .16);
            --text: #162127;
            --shadow: 0 28px 70px rgba(0, 0, 0, .28);
            --font-scale: 1;
            --focus-ring: #fff2a8
        }

        * {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            min-width: 320px;
            background: #020305;
            font-family: 'Google Sans', sans-serif;
            color: var(--cream);
            font-size: 16px;
            line-height: 1.5
        }

        a {
            color: inherit;
            text-decoration: none
        }

        img,
        video,
        svg {
            display: block;
            max-width: 100%
        }

        a:focus-visible,
        button:focus-visible,
        input:focus-visible,
        summary:focus-visible,
        [tabindex]:focus-visible {
            outline: 3px solid var(--focus-ring);
            outline-offset: 3px
        }

        p,
        li,
        label,
        input,
        summary,
        button,
        .hero-kicker,
        .themes-summary,
        .catalog-search-copy,
        .catalog-hint,
        .catalog-active-filters,
        .filter-empty,
        .topic-meta-line,
        .tooltip-description,
        .tooltip-detail-list p,
        .catalog-empty,
        .footer-pill,
        .catalog-keywords-list,
        .stat-pill,
        .partner-item,
        .accessibility-label {
            font-size: calc(1em * var(--font-scale))
        }

        .skip-link {
            position: fixed;
            left: 14px;
            top: 14px;
            z-index: 70;
            padding: 12px 16px;
            border-radius: 12px;
            background: #111823;
            color: #fff5ce;
            font-size: 13px;
            font-weight: 700;
            transform: translateY(-150%);
            transition: transform .18s ease
        }

        .skip-link:focus {
            transform: translateY(0)
        }

        .accessibility-bar {
            position: fixed;
            top: 10px;
            left: 0;
            right: 0;
            z-index: 60;
            display: flex;
            justify-content: flex-end;
            padding: 0 14px;
            background: transparent;
            pointer-events: none
        }

        .accessibility-tools {
            display: inline-flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: center;
            gap: 6px;
            min-height: 48px;
            padding: 6px 8px;
            border: 1px solid rgba(244, 235, 190, .16);
            border-radius: 999px;
            background: rgba(6, 9, 15, .62);
            backdrop-filter: blur(10px);
            box-shadow: 0 12px 26px rgba(0, 0, 0, .18);
            pointer-events: auto
        }

        .accessibility-label {
            padding: 0 8px 0 6px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: rgba(244, 235, 190, .66);
            white-space: nowrap
        }

        .accessibility-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 36px;
            min-height: 36px;
            padding: 0 12px;
            border: 1px solid rgba(244, 235, 190, .18);
            border-radius: 999px;
            background: rgba(255, 255, 255, .05);
            color: var(--cream);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .04em;
            cursor: pointer;
            transition: background-color .18s ease, border-color .18s ease, color .18s ease, opacity .18s ease
        }

        .accessibility-btn[data-size] {
            padding: 0;
            line-height: 1
        }

        .accessibility-btn:hover {
            background: rgba(255, 255, 255, .12)
        }

        .accessibility-btn.is-active {
            background: var(--cream);
            color: #172029;
            border-color: var(--cream)
        }

        .accessibility-btn:disabled {
            opacity: .46;
            cursor: not-allowed
        }

        .page {
            position: relative;
            overflow-x: clip;
            background: #49556f
        }

        .page::before {
            content: "";
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(180deg, rgba(255, 255, 255, .13) 0 1px, transparent 1px 5px);
            mix-blend-mode: screen;
            opacity: .55;
            pointer-events: none;
            z-index: 0
        }

        .page>* {
            position: relative;
            z-index: 1
        }

        .wrap,
        .wrap-contained {
            width: min(100%, 1200px);
            margin: 0 auto
        }

        .wrap-full {
            width: 100%;
            max-width: none;
            margin: 0 auto
        }

        .poster-hero {
            position: relative;
            background: #49556f;
            overflow: hidden
        }

        .poster-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(180deg, rgba(255, 255, 255, .13) 0 1px, transparent 1px 5px);
            mix-blend-mode: screen;
            opacity: .55;
            pointer-events: none
        }

        .sky-media {
            position: absolute;
            inset: 0 0 auto;
            height: 380px;
            overflow: hidden
        }

        .sky-media img,
        .sky-media video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .sky-media img {
            filter: saturate(.65) brightness(1.05)
        }

        .sky-media video {
            opacity: .22;
            mix-blend-mode: multiply
        }

        .poster-shell {
            position: relative;
            padding: 0 0 28px
        }

        .hero-intro {
            position: relative;
            z-index: 6;
            display: grid;
            grid-template-columns: minmax(0, 520px) minmax(320px, 1fr);
            align-items: end;
            gap: 24px;
            width: min(100% - 48px, 1180px);
            margin: 0 auto;
            padding: 24px 0 0
        }

        .hero-copy {
            max-width: 560px
        }

        .hero-kicker {
            margin: 0 0 10px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: rgba(244, 235, 190, .72)
        }

        .hero-copy h1 {
            margin: 0;
            font-family: 'Alternate Gothic', sans-serif;
            font-size: calc(clamp(54px, 7vw, 96px) * var(--font-scale));
            line-height: .92;
            letter-spacing: .03em;
            text-transform: uppercase;
            color: var(--cream);
            text-wrap: balance
        }

        .hero-copy p {
            margin: 14px 0 0;
            max-width: 44ch;
            font-size: 18px;
            line-height: 1.6;
            color: rgba(244, 235, 190, .88)
        }

        .hero-side {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: flex-end;
            gap: 28px;
            min-height: 100%;
            padding-bottom: 10px
        }

        .hero-window {
            width: min(36vw, 460px);
            margin-right: 18px;
            pointer-events: none
        }

        .hero-window video {
            display: block;
            width: 100%;
            height: auto;
            object-fit: contain;
            filter: drop-shadow(0 20px 24px rgba(17, 22, 41, .18));
            opacity: .96
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            align-items: center;
            justify-content: flex-end
        }

        .hero-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 18px;
            border-radius: 999px;
            background: var(--cream);
            color: #172029;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase
        }

        .hero-btn.is-secondary {
            background: rgba(255, 255, 255, .08);
            color: var(--cream);
            border: 1px solid rgba(244, 235, 190, .24)
        }


        .collage-left,
        .collage-right {
            display: none
        }

        .collage-right {
            right: -72px;
            top: 160px;
            width: min(34vw, 320px);
            height: 640px;
            opacity: .78
        }

        .collage-right::before {
            content: "";
            position: absolute;
            left: -32px;
            top: 118px;
            width: 112px;
            height: 250px;
            background: linear-gradient(180deg, rgba(255, 255, 255, .24), transparent)
        }

        .right-ghost,
        .right-main {
            position: absolute;
            inset: 0
        }

        .right-ghost img,
        .right-main img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: right bottom
        }

        .right-ghost {
            left: -12px;
            top: -10px;
            opacity: .3;
            mix-blend-mode: screen;
            filter: hue-rotate(6deg) saturate(1.1) brightness(.92)
        }

        .right-main {
            filter: drop-shadow(-12px 22px 24px rgba(17, 22, 41, .16))
        }

        .right-main img {
            opacity: .82
        }

        .house-panel {
            position: relative;
            z-index: 5;
            width: min(100% - 48px, 1180px);
            height: clamp(320px, 35.3vw, 420px);
            margin: 0 auto 0;
            padding: 0;
            background: transparent;
            clip-path: polygon(50% 0, 100% 14%, 100% 100%, 0 100%, 0 14%);
            box-shadow: none;
            overflow: hidden
        }

        .house-panel::before,
        .house-panel::after {
            content: none
        }

        .roof-carousel {
            position: absolute;
            inset: 0;
            z-index: 3;
            overflow: hidden
        }

        .roof-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity .55s ease
        }

        .roof-slide.is-active {
            opacity: 1
        }

        .roof-slide::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(255, 255, 255, .03), transparent 62%)
        }

        .roof-slide-media {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center
        }

        .roof-slide-content {
            position: absolute;
            left: 50%;
            bottom: 28px;
            z-index: 5;
            display: flex;
            justify-content: center;
            transform: translateX(-50%)
        }

        .roof-slide-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 18px;
            border: 1px solid rgba(20, 33, 38, .2);
            border-radius: 999px;
            background: rgba(255, 245, 206, .94);
            color: #172029;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .05em;
            text-transform: uppercase;
            box-shadow: 0 10px 24px rgba(0, 0, 0, .18)
        }

        .roof-dots {
            position: absolute;
            right: 22px;
            bottom: 18px;
            z-index: 6;
            display: flex;
            gap: 10px
        }

        .roof-dot {
            width: 12px;
            height: 12px;
            padding: 0;
            border: 0;
            border-radius: 999px;
            background: rgba(244, 235, 190, .34);
            box-shadow: 0 0 0 1px rgba(9, 14, 18, .18);
            cursor: pointer;
            transition: transform .18s ease, background-color .18s ease
        }

        .roof-dot[aria-selected="true"] {
            background: var(--cream);
            transform: scale(1.16)
        }

        .roof-dot:focus-visible {
            outline: 2px solid rgba(244, 235, 190, .92);
            outline-offset: 3px
        }

        .roof-carousel.is-modal-open .roof-dots {
            opacity: .2;
            pointer-events: none
        }

        .themes-section {
            position: relative;
            z-index: 4;
            padding: 72px 0 34px
        }

        .themes-title {
            position: relative;
            z-index: 4;
            max-width: 1120px;
            margin: 0 auto 42px;
            text-align: right;
            font-family: 'Alternate Gothic', sans-serif;
            font-size: calc(48px * var(--font-scale));
            letter-spacing: .05em;
            text-transform: uppercase;
            color: var(--cream)
        }

        .themes-summary {
            position: relative;
            z-index: 2;
            max-width: 1120px;
            margin: 0 auto 18px;
            padding: 0 0 4px;
            font-size: 16px;
            line-height: 1.65;
            color: rgba(244, 235, 190, .84)
        }

        .themes-stage {
            position: relative;
            max-width: 1120px;
            margin: 0 auto;
            padding-top: 70px
        }

        .board {
            position: relative;
            z-index: 2;
            overflow: visible;
            color: var(--text);
            background: linear-gradient(180deg, var(--theme-chip-color, var(--mint)) 0 232px, var(--mint-dark) 232px 100%);
            box-shadow: 0 22px 44px rgba(14, 27, 34, .28);
            transition: background .2s ease
        }

        .board::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 38px;
            background: var(--theme-chip-color, var(--mint));
            z-index: 4;
            pointer-events: none
        }

        .chip-row {
            position: absolute;
            left: 14px;
            right: 14px;
            top: -54px;
            display: grid;
            grid-template-columns: repeat(var(--chip-count, 8), 1fr);
            gap: 8px;
            z-index: 3
        }

        .board-layers {
            position: absolute;
            inset: 0;
            z-index: 1;
            pointer-events: none
        }

        .board-collage-left {
            position: absolute;
            left: -102px;
            top: -546px;
            width: min(71vw, 700px);
            height: 1060px
        }

        .board-collage-right {
            position: absolute;
            right: -112px;
            top: -102px;
            width: min(24vw, 214px);
            height: 382px;
            opacity: .9
        }

        .board-panel,
        .topic-grid {
            position: relative;
            z-index: 2
        }

        .chip {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 58px;
            min-height: 58px;
            padding: 12px 6px 0;
            border: 0;
            clip-path: polygon(50% 0, 100% 32%, 100% 100%, 0 100%, 0 32%);
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
            color: #1c2730;
            background: transparent;
            cursor: pointer;
            transition: transform .18s ease, box-shadow .18s ease, height .18s ease, padding-top .18s ease, z-index .18s ease
        }

        .chip:hover {
            z-index: 6;
            transform: translateY(-2px)
        }

        .chip:focus-visible {
            outline: 2px solid rgba(24, 33, 39, .7);
            outline-offset: 2px
        }

        .chip[aria-selected="true"] {
            z-index: 5;
            height: 76px;
            padding-top: 18px;
            transform: translateY(-8px);
            filter: none;
            box-shadow: none
        }

        .chip[aria-selected="false"]:focus-visible {
            z-index: 6
        }

        .chip-icon {
            width: 26px;
            height: 26px;
            object-fit: contain
        }

        .chip[aria-selected="true"] .chip-icon {
            width: 30px;
            height: 30px
        }

        .chip:nth-child(1) {
            background: #f3d44f
        }

        .chip:nth-child(2) {
            background: #76d677
        }

        .chip:nth-child(3) {
            background: #f2a857
        }

        .chip:nth-child(4) {
            background: #f5a1cf
        }

        .chip:nth-child(5) {
            background: #ff9464
        }

        .chip:nth-child(6) {
            background: #d1ef8d
        }

        .chip:nth-child(7) {
            background: #b8e6ef
        }

        .chip:nth-child(8) {
            background: #c8dbef
        }

        .board-panel {
            display: block;
            padding-top: 24px;
            background: var(--theme-chip-color, rgba(255, 255, 255, .16));
            transition: background-color .2s ease
        }

        .board-intro {
            display: grid;
            grid-template-columns: 1.2fr .92fr;
            align-items: stretch;
            min-height: 196px;
            border-bottom: 1px solid var(--line);
            background: transparent
        }

        .board-copy {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 22px 18px 14px
        }

        .board-copy:first-child {
            border-right: 1px solid var(--line)
        }

        .board-copy-search {
            gap: 10px
        }

        .board-eyebrow {
            margin: 0 0 8px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: rgba(20, 33, 38, .56)
        }

        .board-copy h2 {
            margin: 0;
            font-family: 'Alternate Gothic', sans-serif;
            font-size: calc(40px * var(--font-scale));
            line-height: .96;
            letter-spacing: .02em;
            text-transform: uppercase;
            overflow-wrap: anywhere
        }

        .board-copy p {
            margin: 0;
            font-size: 17px;
            line-height: 1.58;
            color: rgba(20, 33, 38, .86)
        }

        .board-copy .lead {
            margin-top: 10px;
            max-width: 34ch
        }

        .catalog-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 8px
        }

        .stat-pill {
            display: inline-flex;
            align-items: center;
            min-height: 34px;
            padding: 0 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .22);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .04em;
            text-transform: uppercase;
            color: #172128
        }

        .catalog-keywords {
            display: grid;
            gap: 6px;
            margin-top: 14px
        }

        .catalog-keywords-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: rgba(20, 33, 38, .56)
        }

        .catalog-keywords-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0;
            font-size: 14px;
            line-height: 1.6;
            color: rgba(20, 33, 38, .78)
        }

        .catalog-keywords-list span {
            display: inline;
            color: inherit
        }

        .catalog-keywords-list span+span::before {
            content: " / ";
            color: rgba(20, 33, 38, .42)
        }

        .catalog-layout {
            position: relative;
            border-top: 1px solid var(--line)
        }

        .catalog-main {
            min-width: 0
        }

        .catalog-main-toolbar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 14px 16px;
            border-bottom: 1px solid rgba(20, 33, 38, .12);
            background: rgba(255, 255, 255, .08)
        }

        .catalog-toolbar-main-actions {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px
        }

        .catalog-sidebar-toggle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 16px;
            border: 1px solid rgba(20, 33, 38, .16);
            border-radius: 999px;
            background: rgba(255, 255, 255, .42);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: #162127;
            cursor: pointer
        }

        .catalog-sidebar-toggle:hover {
            background: rgba(255, 255, 255, .56)
        }

        .catalog-sidebar-toggle:focus-visible {
            outline: 2px solid rgba(24, 33, 39, .46);
            outline-offset: 2px
        }

        .catalog-sidebar-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(7, 12, 16, .38);
            backdrop-filter: blur(2px);
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity .22s ease, visibility .22s linear;
            z-index: 44
        }

        .catalog-layout.is-sidebar-open .catalog-sidebar-backdrop {
            opacity: 1;
            visibility: visible;
            pointer-events: auto
        }

        .catalog-tools {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 45;
            display: flex;
            flex-direction: column;
            gap: 14px;
            width: min(420px, 100vw);
            padding: 18px;
            border-left: 1px solid rgba(20, 33, 38, .12);
            background: rgba(113, 224, 197, .96);
            box-shadow: -20px 0 48px rgba(0, 0, 0, .24);
            overflow-y: auto;
            transform: translateX(100%);
            transition: transform .24s ease
        }

        .catalog-layout.is-sidebar-open .catalog-tools {
            transform: translateX(0)
        }

        .catalog-sidebar-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px
        }

        .catalog-sidebar-title {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #162127
        }

        .catalog-sidebar-close {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 44px;
            height: 44px;
            padding: 0;
            border: 1px solid rgba(20, 33, 38, .16);
            border-radius: 999px;
            background: rgba(255, 255, 255, .34);
            font-size: 18px;
            line-height: 1;
            color: #162127;
            cursor: pointer
        }

        .catalog-sidebar-close:focus-visible {
            outline: 2px solid rgba(24, 33, 39, .46);
            outline-offset: 2px
        }

        .catalog-sidebar-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: auto;
            padding-top: 6px
        }

        .catalog-sidebar-accept {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 18px;
            border: 0;
            border-radius: 999px;
            background: rgba(20, 33, 38, .92);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: #fff5ce;
            cursor: pointer
        }

        .catalog-sidebar-accept:focus-visible {
            outline: 2px solid rgba(24, 33, 39, .46);
            outline-offset: 2px
        }

        .catalog-search-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
            align-items: end
        }

        .catalog-search-compact {
            display: flex;
            flex-direction: column;
            gap: 6px
        }

        .catalog-search-label {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: rgba(20, 33, 38, .66)
        }

        .catalog-search-compact input {
            width: 100%;
            min-height: 50px;
            padding: 0 16px;
            border: 1px solid rgba(20, 33, 38, .14);
            background: rgba(255, 255, 255, .3);
            font-size: 18px;
            color: #10171c
        }

        .catalog-search-compact input::placeholder {
            color: rgba(16, 23, 28, .52)
        }

        .catalog-search-compact input:focus-visible {
            outline: 2px solid rgba(24, 33, 39, .46);
            outline-offset: 2px
        }

        .catalog-search-copy {
            font-size: 14px;
            line-height: 1.55;
            color: rgba(20, 33, 38, .68)
        }

        .catalog-filters-shell {
            border: 1px solid rgba(20, 33, 38, .12);
            background: rgba(255, 255, 255, .12)
        }

        .catalog-filters-shell[open] {
            background: rgba(255, 255, 255, .18)
        }

        .catalog-filters-shell summary {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            min-height: 44px;
            padding: 12px 14px;
            cursor: pointer;
            list-style: none
        }

        .catalog-filters-shell summary::-webkit-details-marker {
            display: none
        }

        .catalog-filters-shell summary span {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #162127
        }

        .catalog-filters-shell summary strong {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 34px;
            min-height: 34px;
            padding: 0 10px;
            border-radius: 999px;
            background: rgba(20, 33, 38, .12);
            font-size: 12px;
            color: #162127
        }

        .catalog-filters-content {
            display: flex;
            flex-direction: column;
            gap: 12px;
            padding: 0 14px 14px
        }

        .catalog-search {
            display: flex;
            flex-direction: column;
            gap: 8px
        }

        .catalog-search span {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: rgba(20, 33, 38, .66)
        }

        .catalog-search input {
            width: 100%;
            min-height: 42px;
            padding: 0 14px;
            border: 1px solid rgba(20, 33, 38, .14);
            background: rgba(255, 255, 255, .3);
            font: inherit;
            color: #10171c
        }

        .catalog-search input::placeholder {
            color: rgba(16, 23, 28, .52)
        }

        .catalog-search input:focus-visible {
            outline: 2px solid rgba(24, 33, 39, .46);
            outline-offset: 2px
        }

        .catalog-hint {
            font-size: 14px;
            line-height: 1.55;
            color: rgba(20, 33, 38, .68)
        }

        .catalog-filter-toolbar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 8px
        }

        .catalog-active-filters {
            display: flex;
            flex: 1 1 260px;
            flex-wrap: wrap;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            line-height: 1.5;
            color: rgba(20, 33, 38, .68)
        }

        .catalog-filter-placeholder {
            color: rgba(20, 33, 38, .68)
        }

        .catalog-filter-chip {
            display: inline-flex;
            align-items: center;
            min-height: 32px;
            padding: 0 12px;
            border-radius: 999px;
            background: rgba(20, 33, 38, .84);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .03em;
            color: #fff7de
        }

        .catalog-clear-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 16px;
            border: 0;
            border-radius: 999px;
            background: rgba(20, 33, 38, .9);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: #fff5ce;
            cursor: pointer
        }

        .catalog-clear-btn[hidden] {
            display: none
        }

        .catalog-filters-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px
        }

        .filter-card {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 14px;
            border: 1px solid rgba(20, 33, 38, .12);
            background: rgba(255, 255, 255, .16)
        }

        .filter-card-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px
        }

        .filter-card-head span {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #162127
        }

        .filter-card-head strong {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 34px;
            height: 34px;
            padding: 0 10px;
            border-radius: 999px;
            background: rgba(20, 33, 38, .12);
            font-size: 12px;
            color: #162127
        }

        .type-filter-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px
        }

        .type-filter-option {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 44px;
            padding: 0 14px;
            border: 1px solid rgba(20, 33, 38, .12);
            background: rgba(255, 255, 255, .34);
            font-size: 14px;
            color: #162127;
            cursor: pointer
        }

        .type-filter-option input {
            margin: 0
        }

        .type-filter-option small {
            font-size: 12px;
            color: rgba(22, 33, 39, .62)
        }

        .responsable-filter-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
            max-height: 220px;
            overflow-y: auto;
            padding-right: 4px
        }

        .responsable-filter-option {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 10px;
            width: 100%;
            padding: 12px 14px;
            border: 1px solid rgba(20, 33, 38, .12);
            background: rgba(255, 255, 255, .34);
            font: inherit;
            font-size: 14px;
            line-height: 1.4;
            color: #162127;
            text-align: left;
            cursor: pointer
        }

        .responsable-filter-option.is-active {
            background: rgba(20, 33, 38, .88);
            border-color: rgba(20, 33, 38, .88);
            color: #fff7de
        }

        .responsable-filter-option span {
            flex: 1 1 auto;
            min-width: 0;
            overflow-wrap: anywhere
        }

        .responsable-filter-option small {
            flex: 0 0 auto;
            font-size: 12px;
            color: rgba(22, 33, 39, .62)
        }

        .responsable-filter-option.is-active small {
            color: rgba(255, 247, 222, .78)
        }

        .keyword-search-row {
            display: flex;
            gap: 8px
        }

        .keyword-search-row input {
            flex: 1 1 auto;
            min-height: 44px;
            padding: 0 14px;
            border: 1px solid rgba(20, 33, 38, .12);
            background: rgba(255, 255, 255, .4);
            font: inherit;
            font-size: 15px;
            color: #162127
        }

        .keyword-search-row button {
            flex: 0 0 auto;
            min-width: 92px;
            min-height: 44px;
            padding: 0 14px;
            border: 0;
            background: rgba(20, 33, 38, .9);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: #fff5ce;
            cursor: pointer
        }

        .keyword-search-row input::placeholder {
            color: rgba(22, 33, 39, .48)
        }

        .keyword-suggestions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            max-height: 120px;
            overflow-y: auto
        }

        .keyword-suggestion {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 44px;
            padding: 0 12px;
            border: 1px solid rgba(20, 33, 38, .12);
            background: rgba(255, 255, 255, .34);
            font-size: 12px;
            color: #162127;
            cursor: pointer
        }

        .keyword-suggestion small {
            font-size: 12px;
            color: rgba(22, 33, 39, .62)
        }

        .keyword-selected {
            display: flex;
            flex-wrap: wrap;
            gap: 8px
        }

        .keyword-chip {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 36px;
            padding: 0 14px;
            border-radius: 999px;
            background: rgba(20, 33, 38, .86);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .04em;
            color: #fff7de
        }

        .keyword-chip button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 24px;
            min-height: 24px;
            padding: 0;
            border: 0;
            background: none;
            font: inherit;
            color: inherit;
            cursor: pointer
        }

        .filter-empty {
            font-size: 14px;
            line-height: 1.5;
            color: rgba(20, 33, 38, .64)
        }

        .topic-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 8px;
            padding: 24px;
            align-content: start;
            background: rgba(20, 33, 38, .12);
            overflow: visible
        }

        .topic-grid::-webkit-scrollbar {
            width: 10px
        }

        .topic-grid::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, .06)
        }

        .topic-grid::-webkit-scrollbar-thumb {
            background: rgba(20, 33, 38, .32)
        }

        .topic-grid::-webkit-scrollbar-thumb:hover {
            background: rgba(20, 33, 38, .46)
        }

        .topic-card {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 10px;
            min-height: 196px;
            padding: 14px 14px 16px;
            background: rgba(255, 255, 255, .08);
            transition: background-color .2s ease, box-shadow .2s ease;
            overflow: visible
        }

        .topic-card:hover,
        .topic-card:focus-within,
        .topic-card.is-tooltip-open {
            background: rgba(255, 255, 255, .16);
            box-shadow: inset 0 0 0 1px rgba(20, 33, 38, .1)
        }

        .topic-card.is-hidden {
            display: none
        }

        .topic-card-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 8px
        }

        .topic-type {
            display: inline-flex;
            align-items: center;
            min-height: 30px;
            padding: 0 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .05em;
            text-transform: uppercase
        }

        .topic-type {
            background: rgba(255, 255, 255, .42)
        }

        .topic-card h3 {
            margin: 0;
            font-size: 17px;
            font-weight: 700;
            line-height: 1.34;
            text-transform: uppercase;
            overflow-wrap: anywhere
        }

        .topic-card p {
            margin: 0;
            font-size: 14px;
            line-height: 1.6;
            color: rgba(20, 33, 38, .82)
        }

        .topic-meta-line {
            margin-top: auto;
            font-size: 13px;
            line-height: 1.5;
            color: rgba(20, 33, 38, .64)
        }

        .topic-link {
            margin-top: 0;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 44px;
            padding: 0;
            border: 0;
            background: none;
            font: inherit;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .05em;
            color: inherit;
            cursor: pointer
        }

        .topic-link::before {
            content: "";
            width: 18px;
            height: 2px;
            background: rgba(20, 33, 38, .56)
        }

        .catalog-tooltip {
            position: fixed;
            left: var(--tooltip-left, 16px);
            top: var(--tooltip-top, 16px);
            z-index: 52;
            width: min(420px, calc(100vw - 32px));
            max-height: calc(100vh - 32px);
            padding: 16px 16px 14px;
            border: 1px solid rgba(20, 33, 38, .12);
            background: #fff5ce;
            color: #162127;
            box-shadow: 0 18px 38px rgba(0, 0, 0, .2);
            overflow: auto;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: opacity .18s ease, transform .18s ease, visibility .18s linear
        }

        .topic-card.is-tooltip-open .catalog-tooltip {
            opacity: 1;
            visibility: visible;
            transform: translateY(0)
        }

        .tooltip-head {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 8px
        }

        .tooltip-head>div {
            min-width: 0
        }

        .tooltip-theme {
            margin: 0 0 8px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: rgba(22, 33, 39, .56)
        }

        .tooltip-description {
            margin: 0 0 14px;
            font-size: 14px;
            line-height: 1.65;
            color: rgba(20, 33, 38, .86)
        }

        .tooltip-close {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 auto;
            min-width: 44px;
            min-height: 44px;
            padding: 0;
            border: 1px solid rgba(20, 33, 38, .16);
            border-radius: 999px;
            background: rgba(20, 33, 38, .06);
            font-size: 20px;
            line-height: 1;
            color: #162127;
            cursor: pointer
        }

        .tooltip-cluster {
            display: grid;
            gap: 12px;
            padding-top: 12px;
            border-top: 1px solid rgba(20, 33, 38, .1)
        }

        .tooltip-group {
            display: grid;
            gap: 6px
        }

        .tooltip-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: rgba(22, 33, 39, .54)
        }

        .tooltip-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px
        }

        .tooltip-tags span {
            display: inline-flex;
            align-items: center;
            min-height: 26px;
            padding: 0 10px;
            border-radius: 999px;
            background: rgba(20, 33, 38, .08);
            font-size: 11px;
            font-weight: 700;
            color: #162127
        }

        .tooltip-detail-list {
            display: flex;
            flex-direction: column;
            gap: 6px
        }

        .tooltip-detail-list p {
            margin: 0;
            font-size: 13px;
            line-height: 1.6;
            color: rgba(20, 33, 38, .82)
        }

        .tooltip-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 2px
        }

        .tooltip-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 16px;
            border-radius: 999px;
            background: rgba(20, 33, 38, .92);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .05em;
            text-transform: uppercase;
            color: #fff9e2
        }

        .catalog-empty {
            padding: 18px 16px;
            font-size: 14px;
            line-height: 1.6;
            color: rgba(20, 33, 38, .74);
            background: rgba(255, 255, 255, .1)
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }

        .highlights {
            position: relative;
            z-index: 2;
            padding: 36px 0 52px
        }

        .highlights::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url('https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/layer-stripes.png');
            background-size: 280px auto;
            background-repeat: repeat;
            opacity: .1;
            mix-blend-mode: screen;
            pointer-events: none
        }

        .highlights-title {
            max-width: 1120px;
            margin: 0 auto 18px;
            font-family: 'Alternate Gothic', sans-serif;
            font-size: calc(50px * var(--font-scale));
            letter-spacing: .05em;
            text-transform: uppercase;
            color: var(--cream)
        }

        .cards {
            max-width: 1120px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px
        }

        .card {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            min-height: 100%;
            box-shadow: 0 18px 40px rgba(0, 0, 0, .16)
        }

        .card img {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover
        }

        .card-body {
            display: flex;
            flex: 1 1 auto;
            flex-direction: column;
            gap: 10px;
            padding: 12px 12px 14px;
            color: #261d1f
        }

        .card-pink {
            background: linear-gradient(180deg, #ef8abd, #e680b1)
        }

        .card-yellow {
            background: linear-gradient(180deg, #f2c83d, #ebbf2d)
        }

        .card-orange {
            background: linear-gradient(180deg, #f39a49, #ef8740)
        }

        .card h3 {
            margin: 0;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.34;
            text-transform: uppercase
        }

        .card p {
            margin: 0;
            font-size: 11px;
            line-height: 1.48;
            color: rgba(30, 22, 25, .76)
        }

        .mini-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            align-self: flex-start;
            min-height: 44px;
            padding: 0 16px;
            border-radius: 999px;
            background: #fff7de;
            color: #172029;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .05em
        }

        .memory-carousel-section {
            position: relative;
            padding: 0 0 56px;
            background: #49556f
        }

        .memory-carousel-shell {
            position: relative;
            max-width: 1120px;
            margin: 0 auto;
            padding: 0 12px
        }

        .memory-carousel-shell::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -28px;
            height: 176px;
            background: repeating-linear-gradient(90deg, rgba(255, 255, 255, .1) 0 8px, transparent 8px 32px);
            opacity: .3;
            pointer-events: none
        }

        .memory-carousel {
            position: relative;
            overflow: hidden;
            min-height: 300px;
            background: #d8b92a;
            border-radius: 18px;
            box-shadow: 0 18px 42px rgba(0, 0, 0, .18)
        }

        .memory-slide {
            position: absolute;
            inset: 0;
            display: grid;
            grid-template-columns: minmax(0, 65%) minmax(0, 35%);
            min-height: 300px;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity .32s ease, visibility .32s ease
        }

        .memory-slide.is-active {
            opacity: 1;
            visibility: visible;
            pointer-events: auto
        }

        .memory-slide::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(216, 185, 42, .94) 0%, rgba(216, 185, 42, .86) 42%, rgba(216, 185, 42, .34) 68%, rgba(62, 75, 110, .44) 100%);
            z-index: 1
        }

        .memory-slide::after {
            content: "";
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(180deg, rgba(255, 255, 255, .16) 0 1px, transparent 1px 5px);
            mix-blend-mode: screen;
            opacity: .44;
            z-index: 2;
            pointer-events: none
        }

        .memory-slide-media {
            position: absolute;
            inset: 0
        }

        .memory-slide-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center
        }

        .memory-slide-content {
            position: relative;
            z-index: 3;
            grid-column: 1 / 2;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 12px;
            width: 100%;
            max-width: none;
            min-height: 300px;
            padding: 28px 42px 96px;
            color: #fff8dd
        }

        .memory-slide-content h2 {
            margin: 0;
            max-width: 11ch;
            font-family: 'Alternate Gothic', sans-serif;
            font-size: calc(clamp(24px, 2.7vw, 40px) * var(--font-scale));
            line-height: .9;
            letter-spacing: .02em;
            text-transform: uppercase;
            text-wrap: balance;
            text-shadow: 0 2px 10px rgba(0, 0, 0, .12)
        }

        .memory-slide-content p {
            margin: 0;
            max-width: 24ch;
            font-size: 17px;
            line-height: 1.35;
            color: rgba(255, 248, 221, .95)
        }

        .memory-slide-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 0 24px;
            border-radius: 999px;
            background: #f8f0d2;
            color: #1b222c;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12)
        }

        .memory-carousel-controls {
            position: absolute;
            inset: auto 0 12px 0;
            z-index: 4;
            display: block;
            pointer-events: none
        }

        .memory-carousel-actions {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 6px 8px;
            border-radius: 999px;
            background: rgba(16, 22, 29, .12);
            backdrop-filter: blur(6px)
        }

        .memory-carousel-control {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 34px;
            min-height: 34px;
            padding: 0 10px;
            border: 1px solid rgba(255, 248, 221, .14);
            border-radius: 999px;
            background: rgba(16, 22, 29, .18);
            color: #fff8dd;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .04em;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color .18s ease, border-color .18s ease, color .18s ease, transform .18s ease
        }

        .memory-carousel-control.is-icon {
            min-width: 34px;
            padding: 0;
            font-size: 14px;
            line-height: 1
        }

        .memory-carousel-control:hover {
            background: rgba(16, 22, 29, .34);
            border-color: rgba(255, 248, 221, .24);
            transform: translateY(-1px)
        }

        .memory-carousel-dot {
            width: 9px;
            height: 9px;
            padding: 0;
            border: 0;
            border-radius: 999px;
            background: rgba(255, 248, 221, .28);
            cursor: pointer;
            transition: transform .18s ease, background-color .18s ease
        }

        .memory-carousel-dot[aria-selected="true"] {
            background: #fff8dd;
            transform: scale(1.14)
        }

        .memory-carousel-nav {
            position: absolute;
            left: 50%;
            bottom: 46px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            transform: translateX(-50%);
            pointer-events: auto
        }

        .memory-carousel-actions {
            position: absolute;
            right: 16px;
            bottom: 0;
            pointer-events: auto
        }

        .feature-strip {
            position: relative;
            overflow: hidden
        }

        .strip-grid {
            display: grid;
            grid-template-columns: 1.12fr .88fr;
            align-items: stretch;
            height: 280px
        }

        .strip-copy {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 280px;
            padding: 22px 20px;
            text-align: center;
            overflow: hidden
        }

        .strip-copy h2 {
            margin: 0 0 8px;
            font-family: 'Alternate Gothic', sans-serif;
            font-size: calc(54px * var(--font-scale));
            letter-spacing: .05em;
            text-transform: uppercase
        }

        .strip-copy p {
            margin: 0 0 12px;
            font-size: 15px;
            line-height: 1.54
        }

        .strip-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 18px;
            border-radius: 999px;
            background: rgba(255, 248, 223, .92);
            color: #172029;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .05em
        }

        .strip-art {
            position: relative;
            height: 280px;
            min-height: 280px;
            overflow: hidden
        }

        .strip-art svg {
            width: 100%;
            height: 100%
        }

        .strip-mirada {
            background: linear-gradient(90deg, var(--red) 0%, #cb5c4f 52%, #c55a4d 100%)
        }

        .strip-mirada::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 20px;
            background: radial-gradient(circle at 10px 0, #47547b 11px, transparent 12px) 0 0/22px 20px repeat-x;
            opacity: .92
        }

        .strip-mirada .strip-grid {
            grid-template-columns: 1.02fr .98fr
        }

        .strip-mirada .strip-art {
            background: url('https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/strip-mirada-art.png') 18% bottom/auto 108% no-repeat
        }

        .strip-mirada .strip-copy {
            align-items: flex-start;
            padding-left: 34px;
            text-align: left
        }

        .strip-sonido {
            background: linear-gradient(90deg, #49cfc4 0%, #46c9c5 56%, #44bfc0 100%)
        }

        .strip-sonido::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 12px;
            background: repeating-linear-gradient(90deg, #f0d567 0 6px, transparent 6px 16px);
            opacity: .88
        }

        .strip-sonido .strip-art {
            background: url('https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/strip-sonido-art.png') 82% bottom/auto 108% no-repeat
        }

        .strip-sonido .strip-grid {
            grid-template-columns: .98fr 1.02fr
        }

        .strip-sonido .strip-copy {
            align-items: flex-start;
            text-align: left;
            padding-left: 34px
        }

        .partners-section {
            position: relative;
            padding: 0 0 32px;
            background: #000
        }

        .partners-section::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 20px;
            background: linear-gradient(90deg, #57c6b5 0 8%, #f1b65b 8% 9.5%, #57c6b5 9.5% 12%, #f1b65b 12% 13.5%, #57c6b5 13.5% 16%, #f1b65b 16% 17.5%, #57c6b5 17.5% 20%, #f1b65b 20% 21.5%, #57c6b5 21.5% 24%, #f1b65b 24% 25.5%, #57c6b5 25.5% 28%, #f1b65b 28% 29.5%, #57c6b5 29.5% 32%, #f1b65b 32% 33.5%, #57c6b5 33.5% 36%, #f1b65b 36% 37.5%, #57c6b5 37.5% 40%, #f1b65b 40% 41.5%, #57c6b5 41.5% 44%, #f1b65b 44% 45.5%, #57c6b5 45.5% 48%, #f1b65b 48% 49.5%, #57c6b5 49.5% 52%, #f1b65b 52% 53.5%, #57c6b5 53.5% 56%, #f1b65b 56% 57.5%, #57c6b5 57.5% 60%, #f1b65b 60% 61.5%, #57c6b5 61.5% 64%, #f1b65b 64% 65.5%, #57c6b5 65.5% 68%, #f1b65b 68% 69.5%, #57c6b5 69.5% 72%, #f1b65b 72% 73.5%, #57c6b5 73.5% 76%, #f1b65b 76% 77.5%, #57c6b5 77.5% 80%, #f1b65b 80% 81.5%, #57c6b5 81.5% 84%, #f1b65b 84% 85.5%, #57c6b5 85.5% 88%, #f1b65b 88% 89.5%, #57c6b5 89.5% 100%)
        }

        .partners-shell {
            position: relative;
            max-width: 1120px;
            margin: 0 auto;
            padding: 54px 18px 10px
        }

        .partners-panel {
            position: relative;
            padding: 40px 24px 26px;
            border-top: 1px solid rgba(255, 255, 255, .2);
            border-bottom: 1px solid rgba(255, 255, 255, .14);
            background: #000
        }

        .partners-title {
            margin: 0 0 36px;
            text-align: center;
            font-size: 15px;
            font-weight: 400;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .9)
        }

        .partners-grid {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            align-items: center;
            gap: 24px
        }

        .partner-item {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 92px
        }

        .partner-item img {
            display: block;
            max-width: 100%;
            max-height: 76px;
            width: auto;
            height: auto;
            object-fit: contain
        }

        .partner-item.is-caro img,
        .partner-item.is-icanh img {
            max-height: 86px
        }

        .program-modal[hidden] {
            display: none
        }

        .program-modal {
            position: fixed;
            inset: 0;
            z-index: 90
        }

        .program-modal-backdrop {
            position: absolute;
            inset: 0;
            background: rgba(3, 7, 12, .72);
            backdrop-filter: blur(6px)
        }

        .program-modal-dialog {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 24px
        }

        .program-modal-panel {
            width: min(760px, 100%);
            max-height: min(88vh, 900px);
            padding: 24px;
            border: 1px solid rgba(244, 235, 190, .16);
            background: #fff5ce;
            color: #172029;
            box-shadow: 0 28px 70px rgba(0, 0, 0, .32);
            overflow: auto
        }

        .program-modal-head {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 18px
        }

        .program-modal-title {
            margin: 0;
            font-family: 'Alternate Gothic', sans-serif;
            font-size: 42px;
            line-height: .92;
            letter-spacing: .03em;
            text-transform: uppercase;
            color: #111920
        }

        .program-modal-copy {
            margin: 8px 0 0;
            font-size: 15px;
            line-height: 1.6;
            color: rgba(17, 25, 32, .82)
        }

        .program-modal-close {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 auto;
            min-width: 44px;
            min-height: 44px;
            padding: 0;
            border: 1px solid rgba(20, 33, 38, .18);
            border-radius: 999px;
            background: #fff9e2;
            color: #172029;
            font-size: 22px;
            line-height: 1;
            cursor: pointer
        }

        .program-modal-list {
            display: grid;
            gap: 12px
        }

        .program-modal-day {
            display: grid;
            gap: 10px
        }

        .program-modal-day-title {
            margin: 6px 0 0;
            font-family: 'Alternate Gothic', sans-serif;
            font-size: 28px;
            line-height: .96;
            letter-spacing: .03em;
            text-transform: uppercase;
            color: #111920
        }

        .program-modal-item {
            display: grid;
            gap: 6px;
            padding: 16px 18px;
            border: 1px solid rgba(20, 33, 38, .12);
            background: rgba(255, 255, 255, .42)
        }

        .program-modal-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .05em;
            text-transform: uppercase;
            color: rgba(17, 25, 32, .68)
        }

        .program-modal-item h4 {
            margin: 0;
            font-size: 20px;
            line-height: 1.2;
            text-transform: uppercase
        }

        .program-modal-item p {
            margin: 0;
            font-size: 15px;
            line-height: 1.58;
            color: rgba(17, 25, 32, .8)
        }

        .footer {
            padding: 24px 14px 34px;
            background: #020305;
            text-align: center
        }

        .footer-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 30px;
            padding: 0 16px;
            border-radius: 999px;
            background: #f7f0ce;
            color: #18202a;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 16px
        }

        .socials {
            display: flex;
            justify-content: center;
            gap: 10px
        }

        .socials a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .08)
        }

        .socials svg {
            width: 13px;
            height: 13px;
            fill: #fff
        }

        body.is-high-contrast {
            --poster: #131820;
            --poster-deep: #0f131a;
            --cream: #fff9d7;
            --mint: #d7f178;
            --mint-dark: #bdd656;
            --line: rgba(255, 249, 215, .2);
            --text: #0f1115;
            --focus-ring: #ffffff
        }

        body.is-high-contrast .page {
            background: #0f131a
        }

        body.is-high-contrast .mini-btn,
        body.is-high-contrast .strip-btn,
        body.is-high-contrast .hero-btn {
            background: #fff9d7;
            color: #000
        }

        body.is-high-contrast .hero-btn.is-secondary,
        body.is-high-contrast .accessibility-btn {
            background: rgba(0, 0, 0, .76);
            color: #fff9d7;
            border-color: #fff9d7
        }

        body.is-high-contrast .accessibility-btn.is-active {
            background: #fff9d7;
            color: #000
        }

        @media (max-width:1100px) {
            .topic-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (max-width:900px) {
            .hero-intro {
                grid-template-columns: minmax(0, 460px) minmax(260px, 1fr);
                padding: 28px 0 16px
            }

            .hero-side {
                padding-bottom: 10px
            }

            .hero-window {
                width: min(34vw, 320px);
                margin-right: 8px;
                opacity: .92
            }

            .house-panel {
                width: min(100% - 32px, 1180px);
                height: clamp(280px, 35.3vw, 380px);
                padding-top: 0
            }

            .roof-carousel {
                inset: 0
            }

            .roof-dots {
                right: 18px;
                bottom: 18px
            }

            .roof-slide-content {
                bottom: 26px
            }

            .themes-section {
                padding-top: 56px
            }

            .themes-title {
                max-width: 1080px;
                margin-bottom: 36px;
                font-size: 44px
            }

            .themes-stage {
                max-width: 1080px
            }

            .board-collage-left {
                left: -66px;
                top: -450px;
                width: min(69vw, 580px);
                height: 874px
            }

            .board-collage-right {
                right: -88px;
                top: -82px;
                width: min(24vw, 182px);
                height: 336px
            }

            .board-intro,
            .strip-grid,
            .strip-sonido .strip-grid {
                grid-template-columns: 1fr
            }

            .catalog-search-row,
            .catalog-filters-grid {
                grid-template-columns: 1fr
            }

            .catalog-tools {
                width: min(100vw, 380px)
            }

            .strip-grid {
                height: auto
            }

            .strip-copy,
            .strip-art {
                height: auto;
                min-height: 0
            }

            .board-copy:first-child {
                border-right: 0;
                border-bottom: 1px solid var(--line)
            }

            .strip-copy,
            .strip-mirada .strip-copy,
            .strip-sonido .strip-copy {
                align-items: center;
                text-align: center;
                padding: 18px 18px 24px
            }

            .memory-slide {
                grid-template-columns: minmax(0, 68%) minmax(0, 32%)
            }

            .partners-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }
        }

        @media (max-width:720px) {
            .accessibility-bar {
                top: 8px;
                padding: 0 10px
            }

            .accessibility-tools {
                justify-content: flex-start;
                max-width: 100%;
                overflow-x: auto
            }

            .accessibility-label {
                padding-right: 4px
            }

            .wrap,
            .wrap-contained {
                width: min(100%, 1040px)
            }

            .wrap-full {
                width: 100%
            }

            .sky-media {
                height: 300px
            }

            .hero-intro {
                grid-template-columns: 1fr;
                width: min(100% - 24px, 1080px);
                padding: 22px 0 12px
            }

            .hero-copy p {
                font-size: 15px
            }

            .hero-side {
                align-items: flex-start;
                min-height: 0;
                margin-top: 18px;
                padding-bottom: 0
            }

            .hero-window {
                display: none
            }

            .hero-actions {
                justify-content: flex-start;
                min-height: 0;
                margin-top: 18px;
                padding-bottom: 0
            }

            .roof-carousel {
                inset: 0
            }

            .roof-dots {
                right: 14px;
                bottom: 14px;
                gap: 8px
            }

            .roof-dot {
                width: 10px;
                height: 10px
            }

            .roof-slide-content {
                left: 14px;
                right: 56px;
                bottom: 14px;
                justify-content: flex-start;
                transform: none;
                width: auto
            }

            .roof-slide-btn {
                width: 100%;
                max-width: 240px
            }

            .themes-section {
                padding-top: 40px
            }

            .board-layers {
                display: none
            }

            .house-panel {
                width: 100%;
                height: clamp(180px, 35.3vw, 260px);
                margin-top: 0;
                padding: 0;
                clip-path: polygon(50% 0, 100% 10%, 100% 100%, 0 100%, 0 10%)
            }

            .themes-title,
            .highlights-title,
            .strip-copy h2 {
                font-size: 40px
            }

            .themes-title {
                margin-bottom: 32px
            }

            .themes-stage,
            .cards,
            .highlights-title {
                max-width: 100%
            }

            .chip-row {
                grid-template-columns: repeat(4, 1fr);
                row-gap: 6px;
                top: -54px
            }

            .board-panel {
                padding-top: 48px
            }

            .board-intro {
                min-height: 0
            }

            .board-copy {
                padding: 36px 16px 16px
            }

            .board-copy h2 {
                font-size: 34px
            }

            .board-copy p {
                font-size: 15px
            }

            .catalog-search-compact input {
                font-size: 16px
            }

            .catalog-search-copy,
            .catalog-hint,
            .catalog-active-filters,
            .filter-empty {
                font-size: 13px
            }

            .topic-card h3 {
                font-size: 15px
            }

            .topic-card p {
                font-size: 13px
            }

            .topic-meta-line,
            .tooltip-detail-list p {
                font-size: 12px
            }

            .card h3 {
                font-size: 13px
            }

            .card p {
                font-size: 11px
            }

            .strip-copy p {
                font-size: 13px
            }

            .topic-grid,
            .cards {
                grid-template-columns: 1fr
            }

            .topic-card {
                min-height: 0;
                padding: 14px 16px
            }

            .topic-meta-line {
                margin-top: 0
            }

            .catalog-tools {
                width: 100vw;
                padding: 16px
            }

            .catalog-main-toolbar {
                padding: 14px
            }

            .catalog-active-filters {
                font-size: 12px
            }

            .catalog-tooltip {
                position: static;
                left: auto;
                right: auto;
                top: auto;
                display: none;
                width: auto;
                max-height: none;
                margin-top: 12px;
                opacity: 1;
                visibility: visible;
                transform: none;
                overflow: visible
            }

            .topic-card.is-tooltip-open .catalog-tooltip {
                display: block
            }

            .card img {
                aspect-ratio: 1.1/1
            }

            .memory-carousel-section {
                padding-bottom: 42px
            }

            .memory-carousel-shell {
                padding: 0
            }

            .memory-carousel-shell::before {
                top: -18px;
                height: 110px
            }

            .memory-carousel {
                min-height: 360px
            }

            .memory-slide {
                grid-template-columns: 1fr;
                min-height: 360px
            }

            .memory-slide::before {
                background: linear-gradient(180deg, rgba(216, 185, 42, .94) 0%, rgba(216, 185, 42, .88) 56%, rgba(216, 185, 42, .56) 100%)
            }

            .memory-slide-content {
                grid-column: 1 / -1;
                max-width: 100%;
                min-height: 360px;
                padding: 24px 24px 98px
            }

            .memory-slide-content h2 {
                max-width: 10ch
            }

            .memory-slide-content p {
                font-size: 16px;
                max-width: 22ch
            }

            .memory-carousel-controls {
                inset: auto 0 12px 0
            }

            .memory-carousel-actions {
                justify-content: center
            }

            .partners-shell {
                padding: 46px 0 0
            }

            .partners-panel {
                padding: 34px 18px 24px
            }

            .partners-title {
                margin-bottom: 28px;
                font-size: 14px
            }

            .partners-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 18px 14px
            }

            .partner-item {
                min-height: 76px
            }

            .partner-item img {
                max-height: 62px
            }

            .partner-item.is-caro img,
            .partner-item.is-icanh img {
                max-height: 72px
            }

            .strip-art {
                min-height: 108px
            }

            .strip-sonido .strip-art {
                order: 2
            }

            .strip-sonido .strip-copy {
                order: 1
            }
        }

        @media (max-width:560px) {
            .accessibility-bar {
                justify-content: center
            }

            .accessibility-tools {
                width: min(100%, 340px);
                justify-content: space-between;
                padding: 6px
            }

            .accessibility-label {
                display: none
            }

            .accessibility-btn {
                min-width: 34px;
                min-height: 34px;
                padding: 0 10px;
                font-size: 10px
            }

            .hero-copy h1 {
                font-size: clamp(42px, 14vw, 64px)
            }

            .themes-title,
            .highlights-title,
            .strip-copy h2 {
                font-size: 34px
            }

            .memory-carousel-shell::before {
                display: none
            }

            .memory-carousel {
                min-height: 390px
            }

            .memory-slide {
                min-height: 390px
            }

            .memory-slide-content {
                min-height: 390px;
                padding: 22px 18px 114px
            }

            .memory-slide-content h2 {
                max-width: 9ch;
                font-size: calc(clamp(24px, 7.2vw, 34px) * var(--font-scale))
            }

            .memory-slide-content p {
                font-size: 15px;
                max-width: 22ch
            }

            .memory-carousel-controls {
                inset: auto 0 12px 0
            }

            .memory-carousel-nav {
                bottom: 46px
            }

            .memory-carousel-actions {
                left: 50%;
                right: auto;
                bottom: 0;
                width: auto;
                gap: 8px;
                transform: translateX(-50%)
            }

            .memory-carousel-control {
                padding: 0 10px;
                font-size: 10px
            }

            .memory-carousel-control.is-icon {
                flex: 0 0 36px
            }

            .memory-carousel-nav {
                gap: 8px
            }

            .partners-grid {
                grid-template-columns: 1fr
            }

            .partners-panel {
                padding: 30px 16px 22px
            }

            .partner-item {
                min-height: 70px
            }

            .partner-item img {
                max-height: 58px
            }

            .partner-item.is-caro img,
            .partner-item.is-icanh img {
                max-height: 68px
            }

            .footer-pill {
                max-width: 100%;
                padding: 8px 14px;
                text-align: center;
                overflow-wrap: anywhere
            }

            .program-modal-dialog {
                padding: 12px
            }

            .program-modal-panel {
                padding: 18px
            }

            .program-modal-title {
                font-size: 34px
            }
        }

        @media (max-width:400px) {
            .memory-carousel {
                min-height: 410px
            }

            .memory-slide {
                min-height: 410px
            }

            .memory-slide-content {
                min-height: 410px;
                padding: 20px 16px 124px
            }

            .memory-slide-content h2 {
                max-width: 8.5ch;
                font-size: calc(28px * var(--font-scale))
            }

            .memory-slide-content p {
                font-size: 14px
            }

            .memory-carousel-actions {
                flex-wrap: nowrap
            }

            .memory-carousel-control {
                min-width: 0
            }

            .partners-title {
                font-size: 13px;
                letter-spacing: .1em
            }

            .program-modal-head {
                gap: 12px
            }

            .program-modal-title {
                font-size: 30px
            }

            .program-modal-item h4 {
                font-size: 17px
            }
        }

        @media (prefers-reduced-motion:reduce) {
            html {
                scroll-behavior: auto
            }

            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important
            }
        }
    </style>
</head>

<body>
    <a class="skip-link" href="#contenido-principal">Saltar al contenido</a>
    <div class="accessibility-bar" aria-label="Herramientas de accesibilidad">
        <div class="accessibility-tools" role="toolbar" aria-label="Ajustes de accesibilidad">
            <span class="accessibility-label">Accesibilidad</span>
            <button class="accessibility-btn" id="font-decrease" data-size type="button"
                aria-label="Disminuir tamaño de texto">A-</button>
            <button class="accessibility-btn" id="font-reset" data-size type="button"
                aria-label="Restablecer tamaño de texto">A</button>
            <button class="accessibility-btn" id="font-increase" data-size type="button"
                aria-label="Aumentar tamaño de texto">A+</button>
            <button class="accessibility-btn" id="contrast-toggle" type="button" aria-pressed="false">Alto
                contraste</button>
        </div>
    </div>
    <div class="page">
        <main id="contenido-principal">
            <section class="poster-hero" id="inicio">
                <div class="sky-media" aria-hidden="true">
                    <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/hero-bg.png"
                        alt="">
                    <video autoplay muted loop playsinline preload="metadata"
                        poster="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/hero-bg.png">
                        <source
                            src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/hero-video.mp4"
                            type="video/mp4">
                    </video>
                </div>

                <div class="wrap poster-shell">
                    <div class="collage-right" aria-hidden="true">
                        <span class="right-ghost">
                            <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/layer-right-figure.png"
                                alt="">
                        </span>
                        <span class="right-main">
                            <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/layer-right-figure.png"
                                alt="">
                        </span>
                    </div>

                    <div class="house-panel">
                        <div class="roof-carousel" data-roof-carousel>
                            <div class="roof-slide is-active" data-roof-slide="0">
                                <img class="roof-slide-media"
                                    src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/banner-casa-comun.png"
                                    alt="Banner Casa Común">
                            </div>
                            <div class="roof-slide" data-roof-slide="1" aria-hidden="true">
                                <img class="roof-slide-media"
                                    src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/banner-filbo.png"
                                    alt="Banner FILBo Conferias 2026">
                                <div class="roof-slide-content">
                                    <button class="roof-slide-btn" type="button" data-open-program-modal
                                        aria-haspopup="dialog" aria-controls="filbo-program-modal">Ver
                                        programación</button>
                                </div>
                            </div>
                        </div>

                        <div class="roof-dots" aria-label="Carrusel del techo">
                            <button class="roof-dot" type="button" aria-label="Ver diapositiva 1"
                                aria-selected="true"></button>
                            <button class="roof-dot" type="button" aria-label="Ver diapositiva 2"
                                aria-selected="false"></button>
                        </div>
                    </div>

                    <div class="hero-intro">
                        <div class="hero-copy">
                            <p class="hero-kicker">Diversidad cultural y lingüística</p>
                            <h1>Colombia pluriétnica, saberes en casa común</h1>
                            <p>Un espacio para visibilizar pueblos, memorias, lenguas nativas y derechos culturales
                                desde una lectura amplia del territorio, las comunidades y sus procesos.</p>
                        </div>
                        <div class="hero-side">
                            <div class="hero-window" aria-hidden="true">
                                <video autoplay muted loop playsinline preload="metadata">
                                    <source
                                        src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/ventana-casa-01.mp4"
                                        type="video/mp4">
                                </video>
                            </div>
                            <div class="hero-actions">
                                <a class="hero-btn" href="#tematicas">Explorar contenidos</a>
                                <a class="hero-btn is-secondary" href="#destacados">Ver destacados</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="themes-section" id="tematicas">
                <h2 class="themes-title">Tematicas</h2>
                <p class="themes-summary">La matriz actual permite navegar contenidos por tema, responsable, formato y
                    palabras clave. Sigue pendiente reorganizar esta navegación con eje principal por pueblos étnicos y
                    capas territoriales y lingüísticas.</p>
                <div class="themes-stage">
                    <div class="board-layers" aria-hidden="true">
                        <div class="board-collage-left">
                            <span class="performer-ghost">
                                <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/layer-performer.png"
                                    alt="">
                            </span>
                            <span class="performer-main">
                                <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/layer-performer.png"
                                    alt="">
                            </span>
                        </div>

                    </div>

                    <div class="board">
                        <div class="chip-row" id="themes-tablist" role="tablist"
                            aria-label="Tematicas de Casa Común" style="--chip-count: 7;"></div>

                        <div class="board-panel" id="temas-panel" role="tabpanel" tabindex="0"
                            aria-labelledby="tema-tab-1">
                            <div class="board-intro">
                                <div class="board-copy">
                                    <h2 id="themes-panel-title">Cargando temáticas...</h2>
                                    <p class="lead" id="themes-panel-lead">La información de la matriz se está
                                        preparando dentro de esta página.</p>
                                    <div class="catalog-keywords" id="themes-panel-keywords" hidden></div>
                                </div>
                                <div class="board-copy board-copy-search">
                                    <p id="themes-panel-copy">Espere un momento mientras se organizan los contenidos
                                        disponibles.</p>
                                    <div class="catalog-stats" aria-live="polite">
                                        <span class="stat-pill" id="themes-results-count">0 contenidos</span>
                                        <span class="stat-pill" id="themes-panel-types">Sin datos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-layout">
                            <div class="catalog-sidebar-backdrop" id="catalog-sidebar-backdrop" hidden></div>
                            <aside class="catalog-tools" id="catalog-tools-sidebar"
                                aria-labelledby="catalog-sidebar-title" aria-hidden="true" tabindex="-1">
                                <div class="catalog-sidebar-head">
                                    <span class="catalog-sidebar-title" id="catalog-sidebar-title">Filtros de la
                                        matriz</span>
                                    <button class="catalog-sidebar-close" id="catalog-sidebar-close" type="button"
                                        aria-label="Cerrar filtros">×</button>
                                </div>
                                <div class="catalog-search-row">
                                    <label class="catalog-search-compact" for="themes-search">
                                        <span class="catalog-search-label">Buscar en la matriz</span>
                                        <input id="themes-search" type="search"
                                            placeholder="Producto, responsable, tema o formato">
                                        <span class="catalog-search-copy">La búsqueda textual recorre nombre,
                                            descripción, entidad, tipo de contenido y términos asociados dentro de la
                                            temática activa.</span>
                                    </label>
                                </div>
                                <details class="catalog-filters-shell" id="catalog-filters-shell" open>
                                    <summary>
                                        <span>Filtros avanzados</span>
                                        <strong id="catalog-filters-toggle-count">0</strong>
                                    </summary>
                                    <div class="catalog-filters-content">
                                        <div class="catalog-filters-grid">
                                            <section class="filter-card" aria-labelledby="filter-type-title">
                                                <div class="filter-card-head">
                                                    <span id="filter-type-title">Tipos</span>
                                                    <strong id="filter-type-count">0</strong>
                                                </div>
                                                <div class="type-filter-list" id="filter-type-options"></div>
                                                <p class="filter-empty" id="filter-type-empty" hidden>No hay tipos
                                                    disponibles para esta temática.</p>
                                            </section>
                                            <section class="filter-card" aria-labelledby="filter-responsable-title">
                                                <div class="filter-card-head">
                                                    <span id="filter-responsable-title">Responsable</span>
                                                    <strong id="filter-responsable-count">0</strong>
                                                </div>
                                                <div class="responsable-filter-list" id="filter-responsable-options">
                                                </div>
                                                <p class="catalog-hint">Selecciona una entidad o dependencia para
                                                    concentrar la revisión en un origen específico.</p>
                                            </section>
                                            <section class="filter-card" aria-labelledby="filter-keyword-title">
                                                <div class="filter-card-head">
                                                    <span id="filter-keyword-title">Palabras clave</span>
                                                    <strong id="filter-keyword-count">0</strong>
                                                </div>
                                                <div class="keyword-search-row">
                                                    <input id="filter-keyword-input" type="search"
                                                        placeholder="Buscar palabra clave">
                                                    <button id="filter-keyword-clear" type="button"
                                                        hidden>Limpiar</button>
                                                </div>
                                                <div class="keyword-selected" id="filter-keyword-selected"></div>
                                                <div class="keyword-suggestions" id="filter-keyword-suggestions">
                                                </div>
                                                <p class="filter-empty" id="filter-keyword-empty" hidden>No hay
                                                    coincidencias para esa palabra clave.</p>
                                            </section>
                                        </div>
                                    </div>
                                </details>
                                <div class="catalog-sidebar-actions">
                                    <button class="catalog-sidebar-accept" id="catalog-sidebar-accept"
                                        type="button">Aceptar</button>
                                </div>
                            </aside>

                            <div class="catalog-main">
                                <div class="catalog-main-toolbar">
                                    <div class="catalog-toolbar-main-actions">
                                        <button class="catalog-sidebar-toggle" id="catalog-sidebar-toggle"
                                            type="button" aria-expanded="false"
                                            aria-controls="catalog-tools-sidebar">Mostrar filtros</button>
                                        <button class="catalog-clear-btn" id="catalog-clear-filters" type="button"
                                            hidden>Limpiar filtros</button>
                                    </div>
                                    <div class="catalog-active-filters" id="catalog-active-filters">
                                        <span class="catalog-filter-placeholder">Sin filtros adicionales
                                            activos.</span>
                                    </div>
                                </div>
                                <div class="topic-grid" id="themes-catalog-grid"></div>
                                <p class="catalog-empty" id="themes-empty" hidden>No hay coincidencias para la
                                    búsqueda actual. Ajusta el término o cambia la temática activa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="highlights" id="destacados">
                <h2 class="highlights-title">Destacados</h2>
                <div class="cards">
                    <article class="card d1">
                        <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/destacado-musica.jpeg"
                            alt="Artista en escenario">
                        <div class="card-body card-pink">
                            <h3>Cantaoras, rituales y encuentros donde la voz sostiene memoria y comunidad.</h3>
                            <p>Relatos sonoros, transmisión oral y celebraciones que continúan moviendo la cultura desde
                                el territorio.</p>
                            <a class="mini-btn" href="#tematicas">Explorar contenidos</a>
                        </div>
                    </article>

                    <article class="card d2">
                        <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/destacado-teatro.jpeg"
                            alt="Interior de teatro">
                        <div class="card-body card-yellow">
                            <h3>Escenas y públicos que hacen del espacio cultural un punto de encuentro abierto.</h3>
                            <p>Experiencias de circulación, creación escénica y gestión local que fortalecen la vida
                                cultural.</p>
                            <a class="mini-btn" href="#tematicas">Explorar contenidos</a>
                        </div>
                    </article>

                    <article class="card d3">
                        <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/destacado-danza.jpeg"
                            alt="Grupo cultural">
                        <div class="card-body card-orange">
                            <h3>Procesos colectivos que convierten la cultura en motor de economías populares.</h3>
                            <p>Redes, emprendimientos y prácticas colaborativas que activan producción simbólica y
                                bienestar local.</p>
                            <a class="mini-btn" href="#tematicas">Explorar contenidos</a>
                        </div>
                    </article>
                </div>
            </section>

            <section class="memory-carousel-section" aria-label="Carrusel de memorias destacadas">
                <div class="memory-carousel-shell">
                    <div class="memory-carousel" data-memory-carousel aria-roledescription="carrusel">
                        <article class="memory-slide is-active" data-memory-slide="0" aria-hidden="false">
                            <div class="memory-slide-media" aria-hidden="true">
                                <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/memory-slide-01.png"
                                    alt="">
                            </div>
                            <div class="memory-slide-content">
                                <h2>Historias que sostienen la memoria</h2>
                                <p>Territorios en resistencia</p>
                                <a class="memory-slide-btn" href="#tematicas">Leer mas</a>
                            </div>
                        </article>
                        <article class="memory-slide" data-memory-slide="1" aria-hidden="true">
                            <div class="memory-slide-media" aria-hidden="true">
                                <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/memory-slide-02.png"
                                    alt="">
                            </div>
                            <div class="memory-slide-content">
                                <h2>Voces que cuidan el territorio</h2>
                                <p>Relatos colectivos y saberes en movimiento</p>
                                <a class="memory-slide-btn" href="#destacados">Explorar</a>
                            </div>
                        </article>
                        <div class="memory-carousel-controls">
                            <div class="memory-carousel-nav" aria-label="Indicadores del carrusel de memorias">
                                <button class="memory-carousel-dot" type="button" aria-label="Ver memoria 1"
                                    aria-selected="true"></button>
                                <button class="memory-carousel-dot" type="button" aria-label="Ver memoria 2"
                                    aria-selected="false"></button>
                            </div>
                            <div class="memory-carousel-actions" aria-label="Controles del carrusel">
                                <button class="memory-carousel-control is-icon" type="button" data-memory-prev
                                    aria-label="Ver banner anterior">‹</button>
                                <button class="memory-carousel-control is-icon" type="button" data-memory-toggle
                                    aria-pressed="false" aria-label="Pausar carrusel">❚❚</button>
                                <button class="memory-carousel-control is-icon" type="button" data-memory-next
                                    aria-label="Ver banner siguiente">›</button>
                            </div>
                        </div>
                        <p class="sr-only" aria-live="polite" data-memory-status>Memoria 1 de 2</p>
                    </div>
                </div>
            </section>

            <section class="feature-strip strip-mirada" id="mirada">
                <div class="wrap-full strip-grid">
                    <div class="strip-art" aria-hidden="true"></div>
                    <div class="strip-copy">
                        <h2>Somos mirada</h2>
                        <p>Galerias, piezas y relatos visuales para recorrer el territorio desde otras perspectivas.</p>
                        <a class="strip-btn" href="#destacados">Descubre aquí</a>
                    </div>
                </div>
            </section>

            <section class="feature-strip strip-sonido" id="sonido">
                <div class="wrap-full strip-grid">
                    <div class="strip-copy">
                        <h2>Somos sonido, somos voces</h2>
                        <p>Escuchas abiertas para conocer acentos, memorias, archivos y ritmos que habitan Casa Comun.
                        </p>
                        <a class="strip-btn" href="#tematicas">Escucha aquí</a>
                    </div>
                    <div class="strip-art" aria-hidden="true"></div>
                </div>
            </section>

            <section class="partners-section" aria-labelledby="partners-title">
                <div class="partners-shell">
                    <div class="partners-panel">
                        <h2 class="partners-title" id="partners-title">Entidades participantes</h2>
                        <div class="partners-grid">
                            <div class="partner-item">
                                <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/partner-biblioteca-nacional.png"
                                    alt="Biblioteca Nacional de Colombia">
                            </div>
                            <div class="partner-item is-caro">
                                <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/partner-caro-cuervo.png"
                                    alt="Instituto Caro y Cuervo">
                            </div>
                            <div class="partner-item is-icanh">
                                <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/partner-icanh.png"
                                    alt="ICANH">
                            </div>
                            <div class="partner-item">
                                <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/partner-dacmi.png"
                                    alt="DACMI">
                            </div>
                            <div class="partner-item">
                                <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/partner-grupo-cine-comunitario.png"
                                    alt="Grupo Cine Comunitario">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="program-modal" id="filbo-program-modal" hidden>
                <div class="program-modal-backdrop" data-close-program-modal></div>
                <div class="program-modal-dialog">
                    <div class="program-modal-panel" role="dialog" aria-modal="true"
                        aria-labelledby="filbo-program-title" aria-describedby="filbo-program-description"
                        tabindex="-1">
                        <div class="program-modal-head">
                            <div>
                                <h2 class="program-modal-title" id="filbo-program-title">Programación FILBo 2026</h2>
                                <p class="program-modal-copy" id="filbo-program-description">Consulte la agenda de
                                    actividades programadas para el auditorio de Colombia, casa común en FILBo 2026.</p>
                            </div>
                            <button class="program-modal-close" type="button" data-close-program-modal
                                aria-label="Cerrar programación">×</button>
                        </div>
                        <div class="program-modal-list" id="filbo-program-list">
                            <p class="program-modal-copy">Cargando programación...</p>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer" id="contacto">
                <a class="footer-pill" href="https://www.mincultura.gov.co/" target="_blank"
                    rel="noreferrer">https://www.mincultura.gov.co/</a>
                <div class="socials" aria-label="Redes sociales">
                    <a href="https://www.facebook.com/MinisterioCultura/" target="_blank" rel="noreferrer"
                        aria-label="Facebook"><svg viewBox="0 0 24 24">
                            <path
                                d="M13.4 21v-8h2.7l.4-3.1h-3.1V8.2c0-.9.3-1.5 1.6-1.5h1.7V4c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.4v1.7H7.6V13h2.9v8h2.9Z" />
                        </svg></a>
                    <a href="https://www.instagram.com/mincultura/" target="_blank" rel="noreferrer"
                        aria-label="Instagram"><svg viewBox="0 0 24 24">
                            <path
                                d="M12 7.2A4.8 4.8 0 1 0 12 17a4.8 4.8 0 0 0 0-9.8Zm0 8A3.2 3.2 0 1 1 12 8.8a3.2 3.2 0 0 1 0 6.4Zm6.1-8.3a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0ZM21 7c-.1-1.5-.4-2.5-1.1-3.2-.7-.8-1.7-1-3.2-1.1C15.3 2.6 15 2.6 12 2.6s-3.3 0-4.7.1c-1.5.1-2.5.3-3.2 1.1C3.3 4.5 3 5.5 3 7c-.1 1.4-.1 1.8-.1 5s0 3.6.1 5c.1 1.5.3 2.5 1.1 3.2.7.8 1.7 1 3.2 1.1 1.4.1 1.7.1 4.7.1s3.3 0 4.7-.1c1.5-.1 2.5-.3 3.2-1.1.8-.7 1-1.7 1.1-3.2.1-1.4.1-1.7.1-5s0-3.6-.1-5Zm-2 10.2c-.1 1.1-.2 1.7-.5 2-.4.4-1 .5-2 .5-1.5.1-1.7.1-4.5.1s-3 0-4.5-.1c-1-.1-1.6-.2-2-.5-.3-.3-.4-.9-.5-2C5 15.8 5 15.5 5 12s0-3.8.1-5.2c.1-1.1.2-1.7.5-2 .4-.4 1-.5 2-.5C9 4.2 9.2 4.2 12 4.2s3 0 4.5.1c1 .1 1.6.2 2 .5.3.3.4.9.5 2 .1 1.4.1 1.7.1 5.2s0 3.8-.1 5.2Z" />
                        </svg></a>
                    <a href="https://x.com/mincultura" target="_blank" rel="noreferrer" aria-label="X"><svg
                            viewBox="0 0 24 24">
                            <path
                                d="M18.8 3H21l-4.8 5.5L22 21h-4.6l-3.7-5.1L9.1 21H7l5-5.8L2.5 3h4.6l3.4 4.7L18.8 3Zm-1.6 16.3h1.3L7.3 4.6H6l11.2 14.7Z" />
                        </svg></a>
                    <a href="https://www.youtube.com/@Mincultura" target="_blank" rel="noreferrer"
                        aria-label="YouTube"><svg viewBox="0 0 24 24">
                            <path
                                d="M21.4 7.3a2.8 2.8 0 0 0-2-2c-1.7-.5-7.4-.5-7.4-.5s-5.7 0-7.4.5a2.8 2.8 0 0 0-2 2A30 30 0 0 0 2.2 12a30 30 0 0 0 .4 4.7 2.8 2.8 0 0 0 2 2c1.7.5 7.4.5 7.4.5s5.7 0 7.4-.5a2.8 2.8 0 0 0 2-2 30 30 0 0 0 .4-4.7 30 30 0 0 0-.4-4.7ZM10.2 15.3V8.7L15.9 12l-5.7 3.3Z" />
                        </svg></a>
                </div>
            </footer>
        </main>
    </div>

    <script id="casa-comun-catalog-data" type="application/json">
{
  "updated_at": "2026-04-21T08:48:55",
  "source_file": "LANDING Registro de acciones y productos – Colombia Casa Común (3).xlsx",
  "total_items": 174,
  "themes": [
    {
      "slug": "somos-diversidad-linguistica",
      "name": "Somos diversidad lingüística",
      "symbol": "+",
      "lead": "Lenguas, oralidades y memorias que preservan conocimientos, relatos y formas propias de nombrar el mundo.",
      "copy": "Aquí se reúnen contenidos sobre lenguas nativas, documentación lingüística, tradición oral y repositorios que fortalecen la memoria viva desde múltiples pueblos y territorios.",
      "count": 31,
      "types": [
        "Video",
        "Documental",
        "Multimedia",
        "Libro"
      ],
      "keywords": [
        "Tradición oral",
        "Memoria ancestral",
        "Documentación lingüística",
        "Lenguas nativas",
        "Saberes ancestrales",
        "Pervivencia cultural"
      ]
    },
    {
      "slug": "somos-un-pais-plurietnico-y-multicultural",
      "name": "Somos un país pluriétnico y multicultural",
      "symbol": "✦",
      "lead": "Relatos campesinos, regionales y comunitarios que amplían la mirada sobre la diversidad cultural del país.",
      "copy": "Esta temática integra piezas que reconocen identidades rurales, memorias colectivas, expresiones sonoras y procesos de representación cultural construidos desde distintos contextos territoriales.",
      "count": 29,
      "types": [
        "Sonoro",
        "Video",
        "Documental",
        "Podcast"
      ],
      "keywords": [
        "Vidas campesinas",
        "Diversidad cultural",
        "Cultura campesina",
        "Participación comunitaria",
        "Memoria campesina",
        "Prácticas culturales"
      ]
    },
    {
      "slug": "somos-economias-populares",
      "name": "Somos economías populares",
      "symbol": "◌",
      "lead": "Historias de trabajo, oficio y creación que muestran cómo la cultura también circula como sustento cotidiano.",
      "copy": "La selección agrupa videoclips y piezas audiovisuales donde las economías populares aparecen como una práctica viva, territorial y profundamente conectada con identidades locales.",
      "count": 5,
      "types": [
        "Videoclip",
        "Video"
      ],
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Videoclip",
        "Narrativas audiovisuales",
        "Representación territorial",
        "Identidad cultural"
      ]
    },
    {
      "slug": "somos-cultura-de-paz",
      "name": "Somos cultura de paz",
      "symbol": "∞",
      "lead": "Procesos narrativos y comunitarios que ponen en circulación memoria, participación y construcción de tejido social.",
      "copy": "En esta línea aparecen contenidos documentales, sonoros y transmedia orientados a la convivencia, la memoria colectiva, el diálogo intercultural y la participación desde los territorios.",
      "count": 40,
      "types": [
        "Cortometraje",
        "Podcast",
        "Video",
        "Audiovisual"
      ],
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "ICANH",
        "2025",
        "Memoria colectiva",
        "Narrativa participativa"
      ]
    },
    {
      "slug": "somos-territorios-bioculturales-y-economias-populares",
      "name": "Somos territorios bioculturales y economías populares",
      "symbol": "✳",
      "lead": "Saberes, oficios y prácticas que articulan territorio, biodiversidad, producción cultural y vida comunitaria.",
      "copy": "La temática conecta series, cápsulas y relatos donde convergen economías locales, patrimonio, trabajo colectivo y formas de habitar los territorios desde una perspectiva biocultural.",
      "count": 31,
      "types": [
        "Video",
        "Sonoro",
        "Documental",
        "Podcast"
      ],
      "keywords": [
        "Proyecto Vidas campesinas",
        "Serie audiovisual y sonora",
        "Economías populares",
        "Saberes ancestrales",
        "Economía local",
        "Patrimonio cultural"
      ]
    },
    {
      "slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "name": "Somos lenguas de Colombia, señas e inclusión",
      "symbol": "✷",
      "lead": "Publicaciones y relatos que visibilizan inclusión, diversidad lingüística y transmisión de saberes en distintos formatos editoriales.",
      "copy": "Este grupo organiza contenidos centrados en la pervivencia de lenguas, memoria ancestral, documentación cultural y circulación editorial accesible para distintos públicos.",
      "count": 16,
      "types": [
        "Editorial"
      ],
      "keywords": [
        "Identidad cultural",
        "Saberes ancestrales",
        "Patrimonio intangible",
        "Documentación lingüística",
        "Memoria ancestral",
        "Pervivencia indígena"
      ]
    },
    {
      "slug": "somos-territorios-bioculturales",
      "name": "Somos territorios bioculturales",
      "symbol": "↗",
      "lead": "Documentales, podcasts y piezas audiovisuales que leen el territorio como espacio de memoria, agua, oficio y sostenibilidad.",
      "copy": "Aquí se clasifican contenidos donde la vida cotidiana, los ecosistemas, los oficios tradicionales y las tramas locales se narran desde una relación estrecha entre cultura y naturaleza.",
      "count": 22,
      "types": [
        "Documental",
        "Video",
        "Podcast",
        "Cortometraje"
      ],
      "keywords": [
        "ICANH",
        "Diarios del Agua",
        "Serie Economías populares",
        "Territorio",
        "Historia",
        "Serie documental Diarios del agua ICANH"
      ]
    }
  ],
  "items": [
    {
      "id": "somos-diversidad-linguistica-2",
      "row": 2,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Oraloteca",
      "type": "Sonoro",
      "description": "Grabaciones en lengua nativa y español que recogen relatos de origen y saberes ancestrales. A través de la oralidad, se destacan prácticas como el diálogo y la conversación, fundamentales para la vida comunitaria, social y política, y para la transmisión de la memoria colectiva.",
      "keywords": [
        "Grabaciones sonoras",
        "Lenguas nativas",
        "Español (bilingüismo)",
        "Relatos de origen",
        "Saberes ancestrales",
        "Oralidad",
        "Tradición oral",
        "Diálogo",
        "Conversación",
        "Vida comunitaria",
        "Vida social",
        "Participación política",
        "Memoria colectiva",
        "Transmisión cultural",
        "Prácticas culturales",
        "Identidad cultural"
      ],
      "link": "https://www.bibliotecanacional.gov.co/es-co/actividades/noticias/en-la-bnc/podcast-oraloteca-nacional-colombia",
      "asset_link": "",
      "force_message": "La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística BIBLIOTECA NACIONAL DE COLOMBIA Oraloteca Sonoro Grabaciones en lengua nativa y español que recogen relatos de origen y saberes ancestrales. A través de la oralidad, se destacan prácticas como el diálogo y la conversación, fundamentales para la vida comunitaria, social y política, y para la transmisión de la memoria colectiva. La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política. Grabaciones sonoras Lenguas nativas Español (bilingüismo) Relatos de origen Saberes ancestrales Oralidad Tradición oral Diálogo Conversación Vida comunitaria Vida social Participación política Memoria colectiva Transmisión cultural Prácticas culturales Identidad cultural https://www.bibliotecanacional.gov.co/es-co/actividades/noticias/en-la-bnc/podcast-oraloteca-nacional-colombia"
    },
    {
      "id": "somos-diversidad-linguistica-3",
      "row": 3,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Mapa vivo de lenguas nativas",
      "type": "Mapa",
      "description": "Se incluyen en el mapa las Bibliotecas Pública (BP) y Bibliotecas Rurales Itinerantes (BRI) presentes en comunidades étnicas. La tradición oral y la oralitura reflejan la importancia de la oralidad en la vida cotidiana, donde el diálogo, la conversación y la deliberación son esenciales para la construcción comunitaria, social y política.",
      "keywords": [
        "Bibliotecas Públicas (BP)",
        "Bibliotecas Rurales Itinerantes (BRI)",
        "Mapeo de bibliotecas",
        "Acceso a la lectura",
        "Cobertura territorial",
        "Comunidades étnicas",
        "Enfoque territorial",
        "Oralidad",
        "Oralitura",
        "Tradición oral",
        "Diálogo",
        "Conversación",
        "Deliberación",
        "Construcción comunitaria",
        "Participación social",
        "Vida política",
        "Tejido comunitario",
        "Memoria colectiva"
      ],
      "link": "https://www.bibliotecanacional.gov.co/es-co/actividades/noticias/Documents/Mapa_Etnicas_2026_Red.pdf",
      "asset_link": "",
      "force_message": "La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística BIBLIOTECA NACIONAL DE COLOMBIA Mapa vivo de lenguas nativas Mapa Se incluyen en el mapa las Bibliotecas Pública (BP) y Bibliotecas Rurales Itinerantes (BRI) presentes en comunidades étnicas. La tradición oral y la oralitura reflejan la importancia de la oralidad en la vida cotidiana, donde el diálogo, la conversación y la deliberación son esenciales para la construcción comunitaria, social y política. La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política. Bibliotecas Públicas (BP) Bibliotecas Rurales Itinerantes (BRI) Mapeo de bibliotecas Acceso a la lectura Cobertura territorial Comunidades étnicas Enfoque territorial Oralidad Oralitura Tradición oral Diálogo Conversación Deliberación Construcción comunitaria Participación social Vida política Tejido comunitario Memoria colectiva https://www.bibliotecanacional.gov.co/es-co/actividades/noticias/Documents/Mapa_Etnicas_2026_Red.pdf"
    },
    {
      "id": "somos-diversidad-linguistica-4",
      "row": 4,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Memoria de lenguas andinas, resguardada en Bibliotecas Nacionales CAN",
      "type": "Multimedia",
      "description": "Este proyecto busca crear un producto multimedia que visibilice el patrimonio bibliográfico sobre lenguas nativas de los pueblos originarios presentes en las bibliotecas nacionales de la Comunidad Andina. Incluirá elementos para contextualizar y facilitar su consulta, mediante una curaduría web o un mapeo digital que reúna distintos formatos en un micrositio, a lanzarse con un evento a mediados de este año.",
      "keywords": [
        "Producto multimedia",
        "Patrimonio bibliográfico",
        "Lenguas nativas",
        "Pueblos originarios",
        "Bibliotecas nacionales",
        "Comunidad Andina",
        "Visibilización cultural",
        "Curaduría web",
        "Mapeo digital",
        "Micrositio",
        "Acceso a la información",
        "Consulta digital",
        "Contenidos multiformato",
        "Gestión del conocimiento",
        "Difusión cultural",
        "Lanzamiento de proyecto"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política.",
      "availability_note": "Este proyecto se lanza en julio. Aún no hay link.",
      "search_text": "Somos diversidad lingüística BIBLIOTECA NACIONAL DE COLOMBIA Memoria de lenguas andinas, resguardada en Bibliotecas Nacionales CAN Multimedia Este proyecto busca crear un producto multimedia que visibilice el patrimonio bibliográfico sobre lenguas nativas de los pueblos originarios presentes en las bibliotecas nacionales de la Comunidad Andina. Incluirá elementos para contextualizar y facilitar su consulta, mediante una curaduría web o un mapeo digital que reúna distintos formatos en un micrositio, a lanzarse con un evento a mediados de este año. La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política. Producto multimedia Patrimonio bibliográfico Lenguas nativas Pueblos originarios Bibliotecas nacionales Comunidad Andina Visibilización cultural Curaduría web Mapeo digital Micrositio Acceso a la información Consulta digital Contenidos multiformato Gestión del conocimiento Difusión cultural Lanzamiento de proyecto Este proyecto se lanza en julio. Aún no hay link."
    },
    {
      "id": "somos-diversidad-linguistica-5",
      "row": 5,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Catálogo de materiales en la Biblioteca Nacional de Colombia",
      "type": "Catálogo",
      "description": "Colección Afro en la Biblioteca Nacional de Colombia.",
      "keywords": [
        "Colección Afro",
        "Biblioteca Nacional de Colombia",
        "Memoria de las lenguas",
        "Patrimonio documental",
        "Diversidad cultural",
        "Investigación preliminar",
        "Colecciones especializadas",
        "Curaduría bibliográfica",
        "Visibilización étnica",
        "Gestión de colecciones"
      ],
      "link": "https://bibliotecanacionalcolombia-my.sharepoint.com/:x:/g/personal/vbaena_bibliotecanacional_gov_co/IQATkxvyqn2OQZCswT2mG1GsAU2Xin7buWwkYOH7rvpclx0?e=RyBiTI",
      "asset_link": "",
      "force_message": "La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística BIBLIOTECA NACIONAL DE COLOMBIA Catálogo de materiales en la Biblioteca Nacional de Colombia Catálogo Colección Afro en la Biblioteca Nacional de Colombia. La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política. Colección Afro Biblioteca Nacional de Colombia Memoria de las lenguas Patrimonio documental Diversidad cultural Investigación preliminar Colecciones especializadas Curaduría bibliográfica Visibilización étnica Gestión de colecciones https://bibliotecanacionalcolombia-my.sharepoint.com/:x:/g/personal/vbaena_bibliotecanacional_gov_co/IQATkxvyqn2OQZCswT2mG1GsAU2Xin7buWwkYOH7rvpclx0?e=RyBiTI"
    },
    {
      "id": "somos-diversidad-linguistica-6",
      "row": 6,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Editorial El caminar de los hijos del tabaco, la coca y la yuca dulce",
      "type": "Libro",
      "description": "Libro escrito por líderes Uitoto Mɨnɨka, Pɨɨnemuna (Bora), Ivhuza (Okaina) y Gáigómɨjo (Muinane), conocidos como gente de centro. Narra su historia desde los orígenes hasta hoy en tres capítulos: el primero aborda el origen y sus principios filosóficos; el segundo, las “bonanzas” y las resistencias; y el tercero, la organización indígena y la reconstrucción sociocultural con un sistema de gobierno propio.",
      "keywords": [
        "Autoría indígena",
        "Gente de centro",
        "Uitoto Mɨnɨka",
        "Bora (Pɨɨnemuna)",
        "Okaina (Ivhuza)",
        "Muinane (Gáigómɨjo)",
        "Relatos de origen",
        "Filosofía indígena",
        "Memoria histórica",
        "Bonanzas",
        "Extractivismo",
        "Resistencias indígenas",
        "Organización indígena",
        "Gobierno propio",
        "Autonomía",
        "Reconstrucción sociocultural",
        "Saberes ancestrales",
        "Narrativa propia"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política.",
      "availability_note": "Este libro está impreso. Estamos en proceso de subirlo a la Biblioteca Digital",
      "search_text": "Somos diversidad lingüística BIBLIOTECA NACIONAL DE COLOMBIA Editorial El caminar de los hijos del tabaco, la coca y la yuca dulce Libro Libro escrito por líderes Uitoto Mɨnɨka, Pɨɨnemuna (Bora), Ivhuza (Okaina) y Gáigómɨjo (Muinane), conocidos como gente de centro. Narra su historia desde los orígenes hasta hoy en tres capítulos: el primero aborda el origen y sus principios filosóficos; el segundo, las “bonanzas” y las resistencias; y el tercero, la organización indígena y la reconstrucción sociocultural con un sistema de gobierno propio. La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política. Autoría indígena Gente de centro Uitoto Mɨnɨka Bora (Pɨɨnemuna) Okaina (Ivhuza) Muinane (Gáigómɨjo) Relatos de origen Filosofía indígena Memoria histórica Bonanzas Extractivismo Resistencias indígenas Organización indígena Gobierno propio Autonomía Reconstrucción sociocultural Saberes ancestrales Narrativa propia Este libro está impreso. Estamos en proceso de subirlo a la Biblioteca Digital"
    },
    {
      "id": "somos-diversidad-linguistica-7",
      "row": 7,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Editorial Una tribu cosmopolita. Memoria de la Gente de Centro",
      "type": "Libro",
      "description": "Esta obra es una compilación de testimonios de los pueblos indígenas que sufrieron el holocausto cauchero, a finales del siglo xix e inicios del xx. A lo largo de sus páginas, los miembros de los pueblos bora, uitoto, muinane y ocaina relatan e ilustran los procesos de violencia que los llevó casi a la exterminación. Este texto, además de ser un documento testimonial, pone en relieve un proceso sistemático de memoria que solo fue posible gracias al proceso de sanación que lo acompañó. ​ \n\n\"Endulzar la palabra nace de los mayores. Ellos nos han explicado, porque lo hemos preguntado, cómo podemos sanar esa herida de la época de la cauchería, la barbarie, las masacres, las torturas y las violaciones de derechos. Lo primero que nos han encomedado los mayores es endulzar; endulzar ese aire, ese ambiente de dolor, esos recuerdos, esos malos momentos. En dulzando la palabra se pudieron contar estos episodios fuertes para nosotros\". Manuel Sueche y Juan Carlos Gittoma.",
      "keywords": [
        "Autoría indígena",
        "Indígenas del Amazonas",
        "Indígenas del Amazonas",
        "Industria del caucho",
        "Memoria histórica",
        "Bonanzas",
        "Extractivismo",
        "Resistencias indígenas",
        "Organización indígena",
        "Gobierno propio",
        "Autonomía",
        "Reconstrucción sociocultural",
        "Saberes ancestrales",
        "Narrativa propia"
      ],
      "link": "https://www.bibliotecanacional.gov.co/es-co/actividades/actividad-cultural/exposiciones/capitulos?Expo=3&Cap=15",
      "asset_link": "",
      "force_message": "La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística BIBLIOTECA NACIONAL DE COLOMBIA Editorial Una tribu cosmopolita. Memoria de la Gente de Centro Libro Esta obra es una compilación de testimonios de los pueblos indígenas que sufrieron el holocausto cauchero, a finales del siglo xix e inicios del xx. A lo largo de sus páginas, los miembros de los pueblos bora, uitoto, muinane y ocaina relatan e ilustran los procesos de violencia que los llevó casi a la exterminación. Este texto, además de ser un documento testimonial, pone en relieve un proceso sistemático de memoria que solo fue posible gracias al proceso de sanación que lo acompañó. ​ \"Endulzar la palabra nace de los mayores. Ellos nos han explicado, porque lo hemos preguntado, cómo podemos sanar esa herida de la época de la cauchería, la barbarie, las masacres, las torturas y las violaciones de derechos. Lo primero que nos han encomedado los mayores es endulzar; endulzar ese aire, ese ambiente de dolor, esos recuerdos, esos malos momentos. En dulzando la palabra se pudieron contar estos episodios fuertes para nosotros\". Manuel Sueche y Juan Carlos Gittoma. La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política. Autoría indígena Indígenas del Amazonas Indígenas del Amazonas Industria del caucho Memoria histórica Bonanzas Extractivismo Resistencias indígenas Organización indígena Gobierno propio Autonomía Reconstrucción sociocultural Saberes ancestrales Narrativa propia https://www.bibliotecanacional.gov.co/es-co/actividades/actividad-cultural/exposiciones/capitulos?Expo=3&Cap=15"
    },
    {
      "id": "somos-diversidad-linguistica-8",
      "row": 8,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR",
      "title": "Cartillas El poder de nuestra palabra con relatos de origen arhuacos",
      "type": "Cartillas",
      "description": "Colección de cinco relatos: Ka’gʉmʉ A’bʉnna (origen de la tierra), Matuna zʉ ɉumamʉ (poder de Matuna), Nʉnbo’ (pájaro atrapa gente), Terunna (padre del ayu) y Tupe (hombres come gente). Surge del trabajo colectivo ɄNGɄNAMɄSI, dentro del proyecto IKɄ ZɄ ANUGWE ARUNHAMɄ, con participación de comunidades, sabedores e instituciones, como un aporte a la memoria y pagamento a la Madre Tierra.",
      "keywords": [
        "Relatos tradicionales",
        "Narrativas indígenas",
        "Cosmogonía",
        "Origen de la tierra",
        "Mitología indígena",
        "Matuna (poder espiritual)",
        "Seres míticos",
        "Tradición oral",
        "Memoria colectiva",
        "Sabedores",
        "Trabajo colectivo",
        "Comunidades indígenas",
        "ɄNGɄNAMɄSI",
        "IKɄ ZɄ ANUGWE ARUNHAMɄ",
        "Espiritualidad indígena",
        "Pagamento a la madre tierra",
        "Relación con la naturaleza",
        "Transmisión de saberes"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política.",
      "availability_note": "Este material es impreso, por lo que no hay enlace",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR Cartillas El poder de nuestra palabra con relatos de origen arhuacos Cartillas Colección de cinco relatos: Ka’gʉmʉ A’bʉnna (origen de la tierra), Matuna zʉ ɉumamʉ (poder de Matuna), Nʉnbo’ (pájaro atrapa gente), Terunna (padre del ayu) y Tupe (hombres come gente). Surge del trabajo colectivo ɄNGɄNAMɄSI, dentro del proyecto IKɄ ZɄ ANUGWE ARUNHAMɄ, con participación de comunidades, sabedores e instituciones, como un aporte a la memoria y pagamento a la Madre Tierra. La tradición oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el diálogo, la deliberación, la conversación, como prácticas necesarias para la vida comunitaria, social y política. Relatos tradicionales Narrativas indígenas Cosmogonía Origen de la tierra Mitología indígena Matuna (poder espiritual) Seres míticos Tradición oral Memoria colectiva Sabedores Trabajo colectivo Comunidades indígenas ɄNGɄNAMɄSI IKɄ ZɄ ANUGWE ARUNHAMɄ Espiritualidad indígena Pagamento a la madre tierra Relación con la naturaleza Transmisión de saberes Este material es impreso, por lo que no hay enlace"
    },
    {
      "id": "somos-diversidad-linguistica-9",
      "row": 9,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR",
      "title": "Documental La Ceiba",
      "type": "Documental",
      "description": "Documental en palenquero con subtítulos en español. La Ceiba explora la medicina ancestral palenquera y sus raíces mágicas y religiosas, evidenciando la herencia africana en el Caribe colombiano. A través del árbol sagrado de la ceiba, conecta cielo, tierra y espíritu, y dialoga con el baobab como símbolo de resistencia. Producción de la Escuela de Comunicación Audiovisual Konda Ku Monikongo (Mahates–Palenque).",
      "keywords": [
        "Documental",
        "Lengua palenquera",
        "Subtítulos en español",
        "Medicina ancestral",
        "Saberes afrodescendientes",
        "Espiritualidad afro",
        "Herencia africana",
        "Caribe colombiano",
        "Ceiba (árbol sagrado)",
        "Baobab",
        "Cosmovisión",
        "Conexión cielo–tierra–espíritu",
        "Simbolismo",
        "Resistencia cultural",
        "Memoria afro",
        "Producción comunitaria",
        "Konda Ku Monikongo",
        "Comunicación audiovisual comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/6_Consejo%20Comunitario%20Ma-Kankamana%20de%20la%20Comunidad%20de%20San%20Basilio%20De%20Palenque/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/1.%20PRODUCTO/LA%20CEIBA%20CORTE%201.1.mp4?csf=1&web=1&e=QUjJhm",
      "asset_link": "",
      "force_message": "La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país.\n\nRelatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR Documental La Ceiba Documental Documental en palenquero con subtítulos en español. La Ceiba explora la medicina ancestral palenquera y sus raíces mágicas y religiosas, evidenciando la herencia africana en el Caribe colombiano. A través del árbol sagrado de la ceiba, conecta cielo, tierra y espíritu, y dialoga con el baobab como símbolo de resistencia. Producción de la Escuela de Comunicación Audiovisual Konda Ku Monikongo (Mahates–Palenque). La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país. Relatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir. Documental Lengua palenquera Subtítulos en español Medicina ancestral Saberes afrodescendientes Espiritualidad afro Herencia africana Caribe colombiano Ceiba (árbol sagrado) Baobab Cosmovisión Conexión cielo–tierra–espíritu Simbolismo Resistencia cultural Memoria afro Producción comunitaria Konda Ku Monikongo Comunicación audiovisual comunitaria https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/6_Consejo%20Comunitario%20Ma-Kankamana%20de%20la%20Comunidad%20de%20San%20Basilio%20De%20Palenque/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/1.%20PRODUCTO/LA%20CEIBA%20CORTE%201.1.mp4?csf=1&web=1&e=QUjJhm"
    },
    {
      "id": "somos-diversidad-linguistica-10",
      "row": 10,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR",
      "title": "Documental Lendro Ri Monde",
      "type": "Documental",
      "description": "Documental en palenquero con subtítulos en español. Lendro ri Monde explora la relación entre el monte y la vida palenquera, como fuente económica, cultural y social. Este espacio de trabajo y sustento se entrelaza con la música y la identidad del pueblo, reflejando su resiliencia. La obra resalta la transmisión de saberes a nuevas generaciones. Producción de la Escuela de Comunicación Audiovisual Konda Ku Monikongo.",
      "keywords": [
        "Documental",
        "Lengua palenquera",
        "Subtítulos en español",
        "Monte / territorio",
        "Relación naturaleza–cultura",
        "Vida palenquera",
        "Economía comunitaria",
        "Sustento tradicional",
        "Identidad cultural",
        "Música tradicional",
        "Resiliencia",
        "Saberes ancestrales",
        "Transmisión generacional",
        "Juventudes",
        "Memoria colectiva",
        "Producción comunitaria",
        "Konda Ku Monikongo",
        "Comunicación audiovisual comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/6_Consejo%20Comunitario%20Ma-Kankamana%20de%20la%20Comunidad%20de%20San%20Basilio%20De%20Palenque/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/2.%20PRODUCTO/Lendro%20ri%20monde.mp4?csf=1&web=1&e=4JXROZ",
      "asset_link": "",
      "force_message": "La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país.\n\nRelatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR Documental Lendro Ri Monde Documental Documental en palenquero con subtítulos en español. Lendro ri Monde explora la relación entre el monte y la vida palenquera, como fuente económica, cultural y social. Este espacio de trabajo y sustento se entrelaza con la música y la identidad del pueblo, reflejando su resiliencia. La obra resalta la transmisión de saberes a nuevas generaciones. Producción de la Escuela de Comunicación Audiovisual Konda Ku Monikongo. La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país. Relatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir. Documental Lengua palenquera Subtítulos en español Monte / territorio Relación naturaleza–cultura Vida palenquera Economía comunitaria Sustento tradicional Identidad cultural Música tradicional Resiliencia Saberes ancestrales Transmisión generacional Juventudes Memoria colectiva Producción comunitaria Konda Ku Monikongo Comunicación audiovisual comunitaria https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/6_Consejo%20Comunitario%20Ma-Kankamana%20de%20la%20Comunidad%20de%20San%20Basilio%20De%20Palenque/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/2.%20PRODUCTO/Lendro%20ri%20monde.mp4?csf=1&web=1&e=4JXROZ"
    },
    {
      "id": "somos-diversidad-linguistica-11",
      "row": 11,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR",
      "title": "Documental The Dogs Hero Kella – Alberto May Williams",
      "type": "Documental",
      "description": "Documental en creole con subtítulos en español. The Dogs Hero Kella, de Alberto May Williams, retrata a un hombre raizal, antes conocido por su emblemático bar, que hoy dedica su vida a proteger a los animales de la isla, especialmente perros, mediante un refugio canino. Producción de la Escuela de Comunicación Native Films Fundation, en el Archipiélago de San Andrés, Providencia y Santa Catalina.",
      "keywords": [
        "Documental",
        "Lengua creole",
        "Subtítulos en español",
        "Pueblo raizal",
        "San Andrés, Providencia y Santa Catalina",
        "Identidad isleña",
        "Historia de vida",
        "Liderazgo comunitario",
        "Protección animal",
        "Bienestar animal",
        "Refugio canino",
        "Relación humano–animal",
        "Transformación personal",
        "Trabajo comunitario",
        "Resiliencia",
        "Producción comunitaria",
        "Native Films Fundation",
        "Comunicación audiovisual comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CMI%202023/02_Proyectos%20Grupo%20CMI%202023/01_Comunicaci%C3%B3n%20para%20el%20buen%20vivir/02_Afrocolombias/3.%20Formaci%C3%B3n%20en%20comunicaci%C3%B3n/ESCUELAS%20DE%20FORMACI%C3%93N%202023/01.%20Escuelas%20de%20Formaci%C3%B3n/12.%20NATIVE%20FILMS/02.%20DOCUMENTACION%20-%20SEGUNDO%20DESEMBOLSO/02.%20Productos%20-%20Entregables/Documentales/Kella_TheDogsHero2_RS.mp4?csf=1&web=1&e=AL7AR1",
      "asset_link": "",
      "force_message": "La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país.\n\nRelatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR Documental The Dogs Hero Kella – Alberto May Williams Documental Documental en creole con subtítulos en español. The Dogs Hero Kella, de Alberto May Williams, retrata a un hombre raizal, antes conocido por su emblemático bar, que hoy dedica su vida a proteger a los animales de la isla, especialmente perros, mediante un refugio canino. Producción de la Escuela de Comunicación Native Films Fundation, en el Archipiélago de San Andrés, Providencia y Santa Catalina. La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país. Relatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir. Documental Lengua creole Subtítulos en español Pueblo raizal San Andrés, Providencia y Santa Catalina Identidad isleña Historia de vida Liderazgo comunitario Protección animal Bienestar animal Refugio canino Relación humano–animal Transformación personal Trabajo comunitario Resiliencia Producción comunitaria Native Films Fundation Comunicación audiovisual comunitaria https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CMI%202023/02_Proyectos%20Grupo%20CMI%202023/01_Comunicaci%C3%B3n%20para%20el%20buen%20vivir/02_Afrocolombias/3.%20Formaci%C3%B3n%20en%20comunicaci%C3%B3n/ESCUELAS%20DE%20FORMACI%C3%93N%202023/01.%20Escuelas%20de%20Formaci%C3%B3n/12.%20NATIVE%20FILMS/02.%20DOCUMENTACION%20-%20SEGUNDO%20DESEMBOLSO/02.%20Productos%20-%20Entregables/Documentales/Kella_TheDogsHero2_RS.mp4?csf=1&web=1&e=AL7AR1"
    },
    {
      "id": "somos-diversidad-linguistica-12",
      "row": 12,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR",
      "title": "Documental A Raizal Woman – Silvia Archbold",
      "type": "Documental",
      "description": "Documental en creole con subtítulos en español. A Raizal Woman, de Silvia Archbold, narra la vida de Silvia Archbold Livingston, quien superó una grave enfermedad y la oposición familiar para convertirse en una líder raizal comprometida con su comunidad. Producción de la Escuela de Comunicación Native Films Fundation, en el Archipiélago de San Andrés, Providencia y Santa Catalina.",
      "keywords": [
        "Documental",
        "Lengua creole",
        "Subtítulos en español",
        "Pueblo raizal",
        "San Andrés, Providencia y Santa Catalina",
        "Identidad raizal",
        "Liderazgo femenino",
        "Mujer raizal",
        "Historia de vida",
        "Superación personal",
        "Enfermedad y resiliencia",
        "Liderazgo comunitario",
        "Compromiso social",
        "Empoderamiento",
        "Memoria comunitaria",
        "Producción audiovisual comunitaria",
        "Native Films Fundation",
        "Cultura caribe insular"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CMI%202023/02_Proyectos%20Grupo%20CMI%202023/01_Comunicaci%C3%B3n%20para%20el%20buen%20vivir/02_Afrocolombias/3.%20Formaci%C3%B3n%20en%20comunicaci%C3%B3n/ESCUELAS%20DE%20FORMACI%C3%93N%202023/01.%20Escuelas%20de%20Formaci%C3%B3n/12.%20NATIVE%20FILMS/02.%20DOCUMENTACION%20-%20SEGUNDO%20DESEMBOLSO/02.%20Productos%20-%20Entregables/Documentales/MISS%20SILVIA_2_RS.mp4?csf=1&web=1&e=ishaZB",
      "asset_link": "",
      "force_message": "La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país.\n\nRelatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR Documental A Raizal Woman – Silvia Archbold Documental Documental en creole con subtítulos en español. A Raizal Woman, de Silvia Archbold, narra la vida de Silvia Archbold Livingston, quien superó una grave enfermedad y la oposición familiar para convertirse en una líder raizal comprometida con su comunidad. Producción de la Escuela de Comunicación Native Films Fundation, en el Archipiélago de San Andrés, Providencia y Santa Catalina. La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país. Relatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir. Documental Lengua creole Subtítulos en español Pueblo raizal San Andrés, Providencia y Santa Catalina Identidad raizal Liderazgo femenino Mujer raizal Historia de vida Superación personal Enfermedad y resiliencia Liderazgo comunitario Compromiso social Empoderamiento Memoria comunitaria Producción audiovisual comunitaria Native Films Fundation Cultura caribe insular https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CMI%202023/02_Proyectos%20Grupo%20CMI%202023/01_Comunicaci%C3%B3n%20para%20el%20buen%20vivir/02_Afrocolombias/3.%20Formaci%C3%B3n%20en%20comunicaci%C3%B3n/ESCUELAS%20DE%20FORMACI%C3%93N%202023/01.%20Escuelas%20de%20Formaci%C3%B3n/12.%20NATIVE%20FILMS/02.%20DOCUMENTACION%20-%20SEGUNDO%20DESEMBOLSO/02.%20Productos%20-%20Entregables/Documentales/MISS%20SILVIA_2_RS.mp4?csf=1&web=1&e=ishaZB"
    },
    {
      "id": "somos-diversidad-linguistica-13",
      "row": 13,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR",
      "title": "Podcast Rezos y santiguos: herencia espiritual de Palenque",
      "type": "Podcast",
      "description": "Podcast en lengua palenquera. Rezos y Santiguos: Herencia espiritual de San Basilio de Palenque honra las raíces y la tradición oral del territorio. Los rezos y santiguos se entienden como resistencia espiritual. Participan niños, jóvenes y adultos de La Bonga, del proceso “Escuela de Comunicación y Territorio para la Vida” (Afrocolombias). Producción del colectivo Narradoras y Narradores de la memoria Kuchá Suto de San Basilio de Palenque.",
      "keywords": [
        "Podcast",
        "Lengua palenquera",
        "Tradición oral",
        "Rezos",
        "Santiguos",
        "Espiritualidad afrodescendiente",
        "Resistencia espiritual",
        "Memoria colectiva",
        "Saberes ancestrales",
        "San Basilio de Palenque",
        "Comunidad afro",
        "Transmisión generacional",
        "Niñez y juventudes",
        "Participación comunitaria",
        "Educación comunitaria",
        "Escuela de Comunicación y Territorio para la Vida",
        "Narradoras y Narradores de la memoria Kuchá Suto",
        "Comunicación comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:u:/s/DACMI/IQDYIk3NV06SRJMalScNzuHJAevj99b6qA1kdjVhahiKIAw?e=nonHSO",
      "asset_link": "",
      "force_message": "La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país.\n\nRelatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR Podcast Rezos y santiguos: herencia espiritual de Palenque Podcast Podcast en lengua palenquera. Rezos y Santiguos: Herencia espiritual de San Basilio de Palenque honra las raíces y la tradición oral del territorio. Los rezos y santiguos se entienden como resistencia espiritual. Participan niños, jóvenes y adultos de La Bonga, del proceso “Escuela de Comunicación y Territorio para la Vida” (Afrocolombias). Producción del colectivo Narradoras y Narradores de la memoria Kuchá Suto de San Basilio de Palenque. La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país. Relatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir. Podcast Lengua palenquera Tradición oral Rezos Santiguos Espiritualidad afrodescendiente Resistencia espiritual Memoria colectiva Saberes ancestrales San Basilio de Palenque Comunidad afro Transmisión generacional Niñez y juventudes Participación comunitaria Educación comunitaria Escuela de Comunicación y Territorio para la Vida Narradoras y Narradores de la memoria Kuchá Suto Comunicación comunitaria https://mcultura.sharepoint.com/:u:/s/DACMI/IQDYIk3NV06SRJMalScNzuHJAevj99b6qA1kdjVhahiKIAw?e=nonHSO"
    },
    {
      "id": "somos-diversidad-linguistica-14",
      "row": 14,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR",
      "title": "Documental Memoria de un pescador: donde la historia y el mañana se encuentran",
      "type": "Documental",
      "description": "Documental en creole con subtítulos en español. Memoria de un pescador: donde la historia y el mañana se encuentran Explora la pesca artesanal y su vínculo con la identidad cultural de Providencia. Recupera memorias transmitidas entre generaciones y aborda los retos actuales del oficio, como la preservación de técnicas ancestrales y las restricciones legales. Producción del proceso Sucomedia de San Andrés Islas.",
      "keywords": [
        "Documental",
        "Lengua creole",
        "Subtítulos en español",
        "Pesca artesanal",
        "Providencia",
        "Identidad cultural",
        "Cultura isleña",
        "Oficios tradicionales",
        "Saberes ancestrales",
        "Transmisión generacional",
        "Memoria colectiva",
        "Relación con el mar",
        "Economía local",
        "Sostenibilidad",
        "Restricciones legales",
        "Transformaciones del oficio",
        "Producción comunitaria",
        "Sucomedia",
        "Caribe insular"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/4_Suco%20Media%20SAS/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/1.%20PRODUCTO/Documental%20Memoria%20de%20un%20Pescador.mp4?csf=1&web=1&e=VXULA7",
      "asset_link": "",
      "force_message": "La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país.\n\nRelatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACIÓN PARA EL BUEN VIVIR Documental Memoria de un pescador: donde la historia y el mañana se encuentran Documental Documental en creole con subtítulos en español. Memoria de un pescador: donde la historia y el mañana se encuentran Explora la pesca artesanal y su vínculo con la identidad cultural de Providencia. Recupera memorias transmitidas entre generaciones y aborda los retos actuales del oficio, como la preservación de técnicas ancestrales y las restricciones legales. Producción del proceso Sucomedia de San Andrés Islas. La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país. Relatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir. Documental Lengua creole Subtítulos en español Pesca artesanal Providencia Identidad cultural Cultura isleña Oficios tradicionales Saberes ancestrales Transmisión generacional Memoria colectiva Relación con el mar Economía local Sostenibilidad Restricciones legales Transformaciones del oficio Producción comunitaria Sucomedia Caribe insular https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/4_Suco%20Media%20SAS/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/1.%20PRODUCTO/Documental%20Memoria%20de%20un%20Pescador.mp4?csf=1&web=1&e=VXULA7"
    },
    {
      "id": "somos-diversidad-linguistica-15",
      "row": 15,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - internacionalización",
      "title": "Multimedia Relatos propios: lenguas nativas",
      "type": "Multimedia",
      "description": "La Multimedia Relatos Propios Lenguas Nativas es una plataforma digital que reúne producciones sonoras, audiovisuales y narrativas de Comunicación para el Buen Vivir y Afrocolombias. Organiza contenidos por pueblos, lenguas y territorios, con recorridos interactivos que acercan a la diversidad cultural del país. Integra mapas, fichas, catálogos y recursos creados entre 2023 y 2025, además de espacios de consulta, juego y eventos, como un espacio vivo de narrativas propias.",
      "keywords": [
        "Plataforma digital",
        "Multimedia",
        "Relatos propios",
        "Lenguas nativas",
        "Diversidad cultural",
        "Comunicación para el Buen Vivir",
        "Afrocolombias",
        "Producción sonora",
        "Producción audiovisual",
        "Narrativas digitales",
        "Organización por pueblos",
        "Organización por territorios",
        "Organización por lenguas",
        "Recorridos interactivos",
        "Mapas interactivos"
      ],
      "link": "http://lenguasnativas.conectacultura.co/relatos-propios",
      "asset_link": "",
      "force_message": "La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país.\n\nRelatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - internacionalización Multimedia Relatos propios: lenguas nativas Multimedia La Multimedia Relatos Propios Lenguas Nativas es una plataforma digital que reúne producciones sonoras, audiovisuales y narrativas de Comunicación para el Buen Vivir y Afrocolombias. Organiza contenidos por pueblos, lenguas y territorios, con recorridos interactivos que acercan a la diversidad cultural del país. Integra mapas, fichas, catálogos y recursos creados entre 2023 y 2025, además de espacios de consulta, juego y eventos, como un espacio vivo de narrativas propias. La comunicación en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A través de narrativas propias, estos procesos comunicativos fortalecen la transmisión intergeneracional, la resistencia cultural y el diálogo intercultural, convirtiéndose en un aporte clave para la construcción de paz y el reconocimiento de la diversidad que sostiene el país. Relatos Propios – Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos indígenas y afrocolombianos para narrar el país desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminación y el Buen Vivir. Plataforma digital Multimedia Relatos propios Lenguas nativas Diversidad cultural Comunicación para el Buen Vivir Afrocolombias Producción sonora Producción audiovisual Narrativas digitales Organización por pueblos Organización por territorios Organización por lenguas Recorridos interactivos Mapas interactivos http://lenguasnativas.conectacultura.co/relatos-propios"
    },
    {
      "id": "somos-diversidad-linguistica-16",
      "row": 16,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - internacionalización",
      "title": "Guías gráficas Destinos para la internacionalización del cine afrocolombiano",
      "type": "Guías gráficas",
      "description": "Estas rutas son guías gráficas de consulta que orientan la internacionalización del cine colombiano, especialmente en clave afro e indígena. Ofrecen información sobre financiación, circulación y distribución para la industria audiovisual. Cine en Ruta apoya estrategias para cine afrocolombiano en festivales, mercados y espacios internacionales. La Ruta Muntu impulsa el cine afrocolombiano, promoviendo conexiones con África, Brasil, EE. UU. y Europa y nuevos públicos globales.",
      "keywords": [
        "Rutas de internacionalización",
        "Cine colombiano",
        "Cine indígena",
        "Cine afrocolombiano",
        "Industria audiovisual",
        "Circulación internacional",
        "Distribución audiovisual",
        "Financiación",
        "Mercados audiovisuales",
        "Festivales de cine",
        "Estrategias de circulación",
        "Cine en Ruta",
        "Ruta Muntu",
        "Conexiones internacionales",
        "África",
        "Brasil",
        "Estados Unidos",
        "Europa",
        "Públicos globales",
        "Diversidad cultural",
        "Redes de colaboración",
        "Proyección internacional"
      ],
      "link": "https://drive.google.com/file/d/18BavPBhVzTdCCFU_l9v9_iWxozJse1ef/view",
      "asset_link": "",
      "force_message": "Estos instrumentos hacen parte de la estrategia de internacionalización: Cine Biocultural Colombiano de la Dirección de Audiovisuales, Cine y Medios Interactivos. El objetivo es abrir caminos para las producciones nacionales y nuevas oportunidades en el mundo, para agentes del sector cinematográfico del país.",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - internacionalización Guías gráficas Destinos para la internacionalización del cine afrocolombiano Guías gráficas Estas rutas son guías gráficas de consulta que orientan la internacionalización del cine colombiano, especialmente en clave afro e indígena. Ofrecen información sobre financiación, circulación y distribución para la industria audiovisual. Cine en Ruta apoya estrategias para cine afrocolombiano en festivales, mercados y espacios internacionales. La Ruta Muntu impulsa el cine afrocolombiano, promoviendo conexiones con África, Brasil, EE. UU. y Europa y nuevos públicos globales. Estos instrumentos hacen parte de la estrategia de internacionalización: Cine Biocultural Colombiano de la Dirección de Audiovisuales, Cine y Medios Interactivos. El objetivo es abrir caminos para las producciones nacionales y nuevas oportunidades en el mundo, para agentes del sector cinematográfico del país. Rutas de internacionalización Cine colombiano Cine indígena Cine afrocolombiano Industria audiovisual Circulación internacional Distribución audiovisual Financiación Mercados audiovisuales Festivales de cine Estrategias de circulación Cine en Ruta Ruta Muntu Conexiones internacionales África Brasil Estados Unidos Europa Públicos globales Diversidad cultural Redes de colaboración Proyección internacional https://drive.google.com/file/d/18BavPBhVzTdCCFU_l9v9_iWxozJse1ef/view"
    },
    {
      "id": "somos-diversidad-linguistica-17",
      "row": 17,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - internacionalización",
      "title": "Guías gráficas Conexiones y destinos internacionales para el cine indígena colombiano.",
      "type": "Guías gráficas",
      "description": "Estas rutas son guías gráficas de consulta que orientan la internacionalización del cine colombiano, especialmente en clave afro e indígena. Ofrecen información sobre financiación, circulación y distribución para la industria audiovisual. Cine en Ruta apoya estrategias para cine indígena en festivales, mercados y espacios internacionales. La Ruta Muntu impulsa el cine afrocolombiano, promoviendo conexiones con África, Brasil, EE. UU., Europa y nuevos públicos globales.",
      "keywords": [
        "Rutas de internacionalización",
        "Cine colombiano",
        "Cine indígena",
        "Cine afrocolombiano",
        "Industria audiovisual",
        "Circulación internacional",
        "Distribución audiovisual",
        "Financiación",
        "Mercados audiovisuales",
        "Festivales de cine",
        "Estrategias de circulación",
        "Cine en Ruta",
        "Ruta Muntu",
        "Conexiones internacionales",
        "África",
        "Brasil",
        "Estados Unidos",
        "Europa",
        "Públicos globales",
        "Diversidad cultural",
        "Redes de colaboración",
        "Proyección internacional"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Estos instrumentos hacen parte de la estrategia de internacionalización: Cine Biocultural Colombiano de la Dirección de Audiovisuales, Cine y Medios Interactivos. El objetivo es abrir caminos para las producciones nacionales y nuevas oportunidades en el mundo, para agentes del sector cinematográfico del país.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos diversidad lingüística MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - internacionalización Guías gráficas Conexiones y destinos internacionales para el cine indígena colombiano. Guías gráficas Estas rutas son guías gráficas de consulta que orientan la internacionalización del cine colombiano, especialmente en clave afro e indígena. Ofrecen información sobre financiación, circulación y distribución para la industria audiovisual. Cine en Ruta apoya estrategias para cine indígena en festivales, mercados y espacios internacionales. La Ruta Muntu impulsa el cine afrocolombiano, promoviendo conexiones con África, Brasil, EE. UU., Europa y nuevos públicos globales. Estos instrumentos hacen parte de la estrategia de internacionalización: Cine Biocultural Colombiano de la Dirección de Audiovisuales, Cine y Medios Interactivos. El objetivo es abrir caminos para las producciones nacionales y nuevas oportunidades en el mundo, para agentes del sector cinematográfico del país. Rutas de internacionalización Cine colombiano Cine indígena Cine afrocolombiano Industria audiovisual Circulación internacional Distribución audiovisual Financiación Mercados audiovisuales Festivales de cine Estrategias de circulación Cine en Ruta Ruta Muntu Conexiones internacionales África Brasil Estados Unidos Europa Públicos globales Diversidad cultural Redes de colaboración Proyección internacional NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-diversidad-linguistica-18",
      "row": 18,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Editorial Los indigenismos léxicos en el español de Colombia",
      "type": "Publicaciones",
      "description": "Los “préstamos léxicos” son palabras que pasan de una lengua a otra por contacto cultural. En América, los indigenismos han enriquecido el español desde la Conquista, nombrando nuevas realidades. Esta acción visibiliza palabras de origen caribe, tupí-guaraní y muisca como arepa, totuma o maracuyá, resaltando la presencia viva de lenguas nativas. A través de la alianza entre La Casa de las Palabras y El Tiempo, se promueve su reconocimiento en formatos impresos y digitales.",
      "keywords": [
        "Préstamos léxicos",
        "Contacto cultural",
        "Indigenismos",
        "Lenguas nativas",
        "Español en América",
        "Diversidad lingüística",
        "Caribe",
        "Tupí-guaraní",
        "Muisca",
        "Arepa",
        "Totuma",
        "Maracuyá",
        "Patrimonio lingüístico",
        "Visibilización cultural",
        "Lengua viva",
        "Intercambio cultural",
        "Historia lingüística",
        "La Casa de las Palabras",
        "El Tiempo",
        "Difusión en medios",
        "Formatos impresos",
        "Contenidos digitales"
      ],
      "link": "https://lenguasyliteraturasnativas.caroycuervo.gov.co/los-indigenismos-lexicos-en-el-espanol-de-colombia/",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Editorial Los indigenismos léxicos en el español de Colombia Publicaciones Los “préstamos léxicos” son palabras que pasan de una lengua a otra por contacto cultural. En América, los indigenismos han enriquecido el español desde la Conquista, nombrando nuevas realidades. Esta acción visibiliza palabras de origen caribe, tupí-guaraní y muisca como arepa, totuma o maracuyá, resaltando la presencia viva de lenguas nativas. A través de la alianza entre La Casa de las Palabras y El Tiempo, se promueve su reconocimiento en formatos impresos y digitales. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Préstamos léxicos Contacto cultural Indigenismos Lenguas nativas Español en América Diversidad lingüística Caribe Tupí-guaraní Muisca Arepa Totuma Maracuyá Patrimonio lingüístico Visibilización cultural Lengua viva Intercambio cultural Historia lingüística La Casa de las Palabras El Tiempo Difusión en medios Formatos impresos Contenidos digitales https://lenguasyliteraturasnativas.caroycuervo.gov.co/los-indigenismos-lexicos-en-el-espanol-de-colombia/"
    },
    {
      "id": "somos-diversidad-linguistica-19",
      "row": 19,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Programa de Documentación de Lenguas Nativas",
      "type": "Programa",
      "description": "Es una iniciativa que desarrolla actividades de formación, investigación y acompañamiento para registrar, preservar y fortalecer las lenguas nativas de Colombia. A través de talleres, ciclos de formación en territorio y apoyo técnico a comunidades indígenas, el programa impulsa la creación de materiales lingüísticos y culturales que contribuyen a la salvaguardia del patrimonio inmaterial del país.",
      "keywords": [
        "Iniciativa cultural",
        "Lenguas nativas",
        "Salvaguardia lingüística",
        "Patrimonio inmaterial",
        "Formación",
        "Investigación",
        "Acompañamiento comunitario",
        "Comunidades indígenas",
        "Enfoque territorial",
        "Talleres",
        "Ciclos de formación",
        "Fortalecimiento cultural",
        "Registro lingüístico",
        "Preservación cultural",
        "Materiales lingüísticos",
        "Producción cultural",
        "Transmisión de saberes",
        "Diversidad lingüística"
      ],
      "link": "https://www.caroycuervo.gov.co/sala-de-prensa/programa-de-documentacion-de-lenguas/ https://www.caroycuervo.gov.co/la-lengua-como-el-hogar-la-historia-de-una-madre-que-siembra-el-nasa-yuwe-en-su-hija/ https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/ https://www.caroycuervo.gov.co/podemos-perderlo-todo-incluido-el-territorio-pero-nunca-la-lengua-mirana-elio-mirana/ https://www.caroycuervo.gov.co/reunirse-alrededor-del-fuego-para-mantener-vivo-el-namui-wam-la-lengua-de-los-misak/ https://www.caroycuervo.gov.co/reencontrarse-con-el-pensamiento-y-recuperar-la-palabra-murui/",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Programa de Documentación de Lenguas Nativas Programa Es una iniciativa que desarrolla actividades de formación, investigación y acompañamiento para registrar, preservar y fortalecer las lenguas nativas de Colombia. A través de talleres, ciclos de formación en territorio y apoyo técnico a comunidades indígenas, el programa impulsa la creación de materiales lingüísticos y culturales que contribuyen a la salvaguardia del patrimonio inmaterial del país. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Iniciativa cultural Lenguas nativas Salvaguardia lingüística Patrimonio inmaterial Formación Investigación Acompañamiento comunitario Comunidades indígenas Enfoque territorial Talleres Ciclos de formación Fortalecimiento cultural Registro lingüístico Preservación cultural Materiales lingüísticos Producción cultural Transmisión de saberes Diversidad lingüística https://www.caroycuervo.gov.co/sala-de-prensa/programa-de-documentacion-de-lenguas/ https://www.caroycuervo.gov.co/la-lengua-como-el-hogar-la-historia-de-una-madre-que-siembra-el-nasa-yuwe-en-su-hija/ https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/ https://www.caroycuervo.gov.co/podemos-perderlo-todo-incluido-el-territorio-pero-nunca-la-lengua-mirana-elio-mirana/ https://www.caroycuervo.gov.co/reunirse-alrededor-del-fuego-para-mantener-vivo-el-namui-wam-la-lengua-de-los-misak/ https://www.caroycuervo.gov.co/reencontrarse-con-el-pensamiento-y-recuperar-la-palabra-murui/"
    },
    {
      "id": "somos-diversidad-linguistica-20",
      "row": 20,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video ¿Qué se pierde cuando desaparece una lengua?",
      "type": "Video",
      "description": "Miembros del Programa de Documentación de Lenguas Nativas reflexionan sobre lo que para ellos significa la pérdida del idioma y la importancia de los procesos de documentación lingüística.",
      "keywords": [
        "Iniciativa cultural",
        "Lenguas nativas",
        "Salvaguardia lingüística",
        "Patrimonio inmaterial",
        "Comunidades indígenas",
        "Enfoque territorial",
        "Documentación lingüística",
        "Fortalecimiento cultural",
        "Registro lingüístico",
        "Preservación cultural",
        "Diversidad lingüística"
      ],
      "link": "https://www.youtube.com/shorts/A_CbkRU86-8",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video ¿Qué se pierde cuando desaparece una lengua? Video Miembros del Programa de Documentación de Lenguas Nativas reflexionan sobre lo que para ellos significa la pérdida del idioma y la importancia de los procesos de documentación lingüística. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Iniciativa cultural Lenguas nativas Salvaguardia lingüística Patrimonio inmaterial Comunidades indígenas Enfoque territorial Documentación lingüística Fortalecimiento cultural Registro lingüístico Preservación cultural Diversidad lingüística https://www.youtube.com/shorts/A_CbkRU86-8"
    },
    {
      "id": "somos-diversidad-linguistica-21",
      "row": 21,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video En busca del origen Cacua",
      "type": "Video",
      "description": "Como parte del trabajo de recuperación y preservación de la memoria y la lengua cacua, adelantado por la comunidad Cacua Wacará y el Instituto Caro y Cuervo, Elena López, sabedora cacua, comparte en cacua el relato de la mujer Poój, una rana que se transforma en mujer y acompaña a un caminante.",
      "keywords": [
        "Pueblo cacua",
        "Lengua cacua",
        "Memoria ancestral",
        "Tradición oral",
        "Sabiduría ancestral",
        "Cosmovisión indígena",
        "Pervivencia cultural",
        "Salvaguardia lingüística",
        "Documentación lingüística",
        "Patrimonio inmaterial"
      ],
      "link": "https://www.youtube.com/shorts/ayxTEN9HMIM",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video En busca del origen Cacua Video Como parte del trabajo de recuperación y preservación de la memoria y la lengua cacua, adelantado por la comunidad Cacua Wacará y el Instituto Caro y Cuervo, Elena López, sabedora cacua, comparte en cacua el relato de la mujer Poój, una rana que se transforma en mujer y acompaña a un caminante. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Pueblo cacua Lengua cacua Memoria ancestral Tradición oral Sabiduría ancestral Cosmovisión indígena Pervivencia cultural Salvaguardia lingüística Documentación lingüística Patrimonio inmaterial https://www.youtube.com/shorts/ayxTEN9HMIM"
    },
    {
      "id": "somos-diversidad-linguistica-22",
      "row": 22,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video La historia en los cantos de los nukak",
      "type": "Video",
      "description": "En sus canciones, los nukak preservan su historia, su cultura y su vida cotidiana. \n\nMarina López, documentalista y miembro de la comunidad cacua, y Katherine Bolaños, investigadora del programa de documentación lingüística del Instituto Caro y Cuervo, viajaron al Guaviare para reunirse con miembros de la comunidad nukak. \n\nAllí, Mauricio Yau, sabedor local, les habló sobre la importancia de las canciones en su cultura. Porque una canción no necesita imágenes, su testimonio tampoco las tiene. \n\nDurante la visita, no se permitió el registro en video por razones culturales. Según sus costumbres, cuando una persona muere, su palabra desaparece con ella. Por esta razón, muchos miembros de la comunidad evitan ver imágenes o referencias de quienes han fallecido. Esta tradición también se extiende a los registros visuales, que se consideran parte de aquello que no debe permanecer tras la muerte.",
      "keywords": [
        "Pueblo Nukak",
        "Cantos tradicionales",
        "Memoria ancestral",
        "Tradición oral",
        "Sabiduría ancestral",
        "Cosmovisión indígena",
        "Pervivencia cultural",
        "Prácticas culturales",
        "Salvaguardia lingüística"
      ],
      "link": "https://www.youtube.com/shorts/hqm8if324rg",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video La historia en los cantos de los nukak Video En sus canciones, los nukak preservan su historia, su cultura y su vida cotidiana. Marina López, documentalista y miembro de la comunidad cacua, y Katherine Bolaños, investigadora del programa de documentación lingüística del Instituto Caro y Cuervo, viajaron al Guaviare para reunirse con miembros de la comunidad nukak. Allí, Mauricio Yau, sabedor local, les habló sobre la importancia de las canciones en su cultura. Porque una canción no necesita imágenes, su testimonio tampoco las tiene. Durante la visita, no se permitió el registro en video por razones culturales. Según sus costumbres, cuando una persona muere, su palabra desaparece con ella. Por esta razón, muchos miembros de la comunidad evitan ver imágenes o referencias de quienes han fallecido. Esta tradición también se extiende a los registros visuales, que se consideran parte de aquello que no debe permanecer tras la muerte. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Pueblo Nukak Cantos tradicionales Memoria ancestral Tradición oral Sabiduría ancestral Cosmovisión indígena Pervivencia cultural Prácticas culturales Salvaguardia lingüística https://www.youtube.com/shorts/hqm8if324rg"
    },
    {
      "id": "somos-diversidad-linguistica-23",
      "row": 23,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video El fuego como símbolo de resistencia y origen de la lengua de los misak",
      "type": "Video",
      "description": "En el Resguardo Indígena Misak de San Antonio, ubicado en Morales (Cauca), el fuego no es solo calor: es memoria, es lengua y es identidad. \n\nMientras los más pequeños aprenden a grabar su cultura y costumbres con celulares, los tatas y mamas lideran el Pishi Ya, un encuentro alrededor del fogón en el que toman decisiones importantes para su comunidad, fortalecen su espíritu y conectan con sus raíces.",
      "keywords": [
        "Pueblo misak",
        "Namui wam",
        "Memoria ancestral",
        "Identidad cultural",
        "Pishi Ya",
        "Tradición oral",
        "Transmisión de saberes",
        "Fortalecimiento cultural",
        "Pervivencia indígena"
      ],
      "link": "https://www.youtube.com/shorts/6tfqFSrr_x0",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video El fuego como símbolo de resistencia y origen de la lengua de los misak Video En el Resguardo Indígena Misak de San Antonio, ubicado en Morales (Cauca), el fuego no es solo calor: es memoria, es lengua y es identidad. Mientras los más pequeños aprenden a grabar su cultura y costumbres con celulares, los tatas y mamas lideran el Pishi Ya, un encuentro alrededor del fogón en el que toman decisiones importantes para su comunidad, fortalecen su espíritu y conectan con sus raíces. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Pueblo misak Namui wam Memoria ancestral Identidad cultural Pishi Ya Tradición oral Transmisión de saberes Fortalecimiento cultural Pervivencia indígena https://www.youtube.com/shorts/6tfqFSrr_x0"
    },
    {
      "id": "somos-diversidad-linguistica-24",
      "row": 24,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video El canto de la perra de monte",
      "type": "Video",
      "description": "Desde las ciudades amazónicas de Leticia (Colombia) y Tabatinga (Brasil), el documentador Elio Miraña está interesado en la documentación de los cantos, que dentro de su cultura son esenciales para el bienestar de su pueblo. Porque los cantos son fragmentos de historias; las historias son curaciones. Entonces, los cantos son curaciones con las que se armoniza el territorio.\n\nEn una visita con Neeba Jʉmille (Elvira Miraña), la última abuela del clan Neebaje, Elio registró el canto de arrullo de la perra de monte. Este canto cuenta la historia de una perra con la capacidad de transformarse en mujer, que, durante las noches de baile, se acerca a las malocas para robarse a los niños varones y transformarlos en perros.",
      "keywords": [
        "Pueblo miraña",
        "Lengua miraña",
        "Cantos tradicionales",
        "Memoria ancestral",
        "Tradición oral",
        "Sabiduría ancestral",
        "Cosmovisión indígena",
        "Documentación lingüística",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/shorts/q7xpw5Hqwk8",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video El canto de la perra de monte Video Desde las ciudades amazónicas de Leticia (Colombia) y Tabatinga (Brasil), el documentador Elio Miraña está interesado en la documentación de los cantos, que dentro de su cultura son esenciales para el bienestar de su pueblo. Porque los cantos son fragmentos de historias; las historias son curaciones. Entonces, los cantos son curaciones con las que se armoniza el territorio. En una visita con Neeba Jʉmille (Elvira Miraña), la última abuela del clan Neebaje, Elio registró el canto de arrullo de la perra de monte. Este canto cuenta la historia de una perra con la capacidad de transformarse en mujer, que, durante las noches de baile, se acerca a las malocas para robarse a los niños varones y transformarlos en perros. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Pueblo miraña Lengua miraña Cantos tradicionales Memoria ancestral Tradición oral Sabiduría ancestral Cosmovisión indígena Documentación lingüística Pervivencia cultural https://www.youtube.com/shorts/q7xpw5Hqwk8"
    },
    {
      "id": "somos-diversidad-linguistica-25",
      "row": 25,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video La siembra y la cosecha de la sandona",
      "type": "Video",
      "description": "En la vereda Muchivioy, en el municipio de Santiago (Putumayo), Juana Jacanamijoy, sabedora inga, compartió con el equipo de documentación el proceso de siembra y cosecha de la sandona o sigsi, un tubérculo fundamental para la alimentación de la comunidad, que llegó al territorio desde Sibundoy. \n\nEsta visita fue una oportunidad para resaltar la importancia del cuidado de la chagra y la cosecha de alimentos propios sin el uso de químicos, una práctica que se ha ido perdiendo pero que resulta esencial para el sostenimiento de su pueblo.",
      "keywords": [
        "Pueblo Inga",
        "Alimentos tradicionales",
        "Memoria ancestral",
        "Sabiduría ancestral",
        "Prácticas agrícolas",
        "Preservación cultural",
        "Pervivencia indígena"
      ],
      "link": "https://www.youtube.com/shorts/pdwu-cznFqs",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video La siembra y la cosecha de la sandona Video En la vereda Muchivioy, en el municipio de Santiago (Putumayo), Juana Jacanamijoy, sabedora inga, compartió con el equipo de documentación el proceso de siembra y cosecha de la sandona o sigsi, un tubérculo fundamental para la alimentación de la comunidad, que llegó al territorio desde Sibundoy. Esta visita fue una oportunidad para resaltar la importancia del cuidado de la chagra y la cosecha de alimentos propios sin el uso de químicos, una práctica que se ha ido perdiendo pero que resulta esencial para el sostenimiento de su pueblo. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Pueblo Inga Alimentos tradicionales Memoria ancestral Sabiduría ancestral Prácticas agrícolas Preservación cultural Pervivencia indígena https://www.youtube.com/shorts/pdwu-cznFqs"
    },
    {
      "id": "somos-diversidad-linguistica-26",
      "row": 26,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video Historias que cuentan, que sanan, que tejen, que inspiran",
      "type": "Video",
      "description": "Para las mujeres kamëntšá del Valle de Sibundoy (Tabanok), en el Putumayo, el tejido ha sido un oficio ancestral que mantiene viva su cosmovisión, sus relatos y su lengua.\n\nCon el deseo de preservar estos saberes, María Antonia Narváez Agreda, documentadora de la lengua kamëntšá, recorre su territorio escuchando las voces de las tejedoras. Su trabajo hace parte del Programa de documentación de diez lenguas para el 2025 del Instituto Caro y Cuervo, una apuesta por salvaguardar idiomas indígenas en riesgo de desaparición. \n\nEn esta ocasión, la documentara presenta un extracto de su entrevista con la sabedora Margarita Chindoy Chindoy , en la vereda Machindinoy (Sibundoy, Putumayo), con apoyo técnico de Alex Achicanoy Botina.",
      "keywords": [
        "Pueblo kamëntšá",
        "Lengua kamëntšá",
        "Tejido ancestral",
        "Memoria ancestral",
        "Sabiduría de las tejedoras",
        "Cosmovisión indígena",
        "Tradición oral",
        "Documentación lingüística",
        "Salvaguardia lingüística",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/watch?v=e1R_I_k7gpE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=6",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video Historias que cuentan, que sanan, que tejen, que inspiran Video Para las mujeres kamëntšá del Valle de Sibundoy (Tabanok), en el Putumayo, el tejido ha sido un oficio ancestral que mantiene viva su cosmovisión, sus relatos y su lengua. Con el deseo de preservar estos saberes, María Antonia Narváez Agreda, documentadora de la lengua kamëntšá, recorre su territorio escuchando las voces de las tejedoras. Su trabajo hace parte del Programa de documentación de diez lenguas para el 2025 del Instituto Caro y Cuervo, una apuesta por salvaguardar idiomas indígenas en riesgo de desaparición. En esta ocasión, la documentara presenta un extracto de su entrevista con la sabedora Margarita Chindoy Chindoy , en la vereda Machindinoy (Sibundoy, Putumayo), con apoyo técnico de Alex Achicanoy Botina. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Pueblo kamëntšá Lengua kamëntšá Tejido ancestral Memoria ancestral Sabiduría de las tejedoras Cosmovisión indígena Tradición oral Documentación lingüística Salvaguardia lingüística Pervivencia cultural https://www.youtube.com/watch?v=e1R_I_k7gpE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=6"
    },
    {
      "id": "somos-diversidad-linguistica-27",
      "row": 27,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video La escolarización dentro de los territorios inga",
      "type": "Video",
      "description": "Desde el interior del Cabildo Inga de Santiago (Putumayo), Mónica Jansasoy Tisoy escucha los testimonios de las mayoras y los mayores para conocer las experiencias de su comunidad, tanto las agradables como aquellas dolorosas que tuvieron lugar durante el periodo de escolarización impuesta por la Iglesia católica.\n\nEn esta oportunidad, Mónica, documentadora de la lengua inga, se desplazó hasta la vereda Muchivioy para recoger el testimonio de Margarita Jajoy sobre las dificultades que enfrentó para asistir a la escuela durante su infancia y el papel de la instrucción religiosa en la educación.",
      "keywords": [
        "Pueblo Inga",
        "Lengua inga",
        "Memoria ancestral",
        "Testimonios de los mayores",
        "Escolarización indígena",
        "Historia comunitaria",
        "Tradición oral",
        "Documentación lingüística",
        "Preservación cultural",
        "Pervivencia indígena"
      ],
      "link": "https://www.youtube.com/watch?v=yLlyjt2OnqM&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=5",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video La escolarización dentro de los territorios inga Video Desde el interior del Cabildo Inga de Santiago (Putumayo), Mónica Jansasoy Tisoy escucha los testimonios de las mayoras y los mayores para conocer las experiencias de su comunidad, tanto las agradables como aquellas dolorosas que tuvieron lugar durante el periodo de escolarización impuesta por la Iglesia católica. En esta oportunidad, Mónica, documentadora de la lengua inga, se desplazó hasta la vereda Muchivioy para recoger el testimonio de Margarita Jajoy sobre las dificultades que enfrentó para asistir a la escuela durante su infancia y el papel de la instrucción religiosa en la educación. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Pueblo Inga Lengua inga Memoria ancestral Testimonios de los mayores Escolarización indígena Historia comunitaria Tradición oral Documentación lingüística Preservación cultural Pervivencia indígena https://www.youtube.com/watch?v=yLlyjt2OnqM&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=5"
    },
    {
      "id": "somos-diversidad-linguistica-28",
      "row": 28,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video El tejido tsombiasb",
      "type": "Video",
      "description": "En la vereda Tamabioy, en el municipio de Sibundoy, el equipo de documentalistas kamëntšá visitó a la mamita Luz María Victoria Chicunque para conocer más sobre el proceso de tejido del tsombiash (faja o ceñidor femenino) desde su niñez.\n\nEn su relato cuenta cómo empezó tejiendo las primeras líneas y, posteriormente, las labores (patrones o dibujos con símbolos). Cada labor tiene su nombre y significado, representando creencias del territorio, así como deidades naturales: el sol (Shinÿ️), la luna (Juashcón) y las estrellas (Shinÿinÿantem), además de elementos cotidianos como el canasto (sbarëk), utilizado para recolectar semillas, alimentos y frutos del jajañ (chagra).",
      "keywords": [
        "Pueblo inga",
        "Lengua inga",
        "Memoria ancestral",
        "Escolarización indígena",
        "Tradición oral",
        "Documentación lingüística",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/watch?v=Kq3eD4zJjWE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=4",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video El tejido tsombiasb Video En la vereda Tamabioy, en el municipio de Sibundoy, el equipo de documentalistas kamëntšá visitó a la mamita Luz María Victoria Chicunque para conocer más sobre el proceso de tejido del tsombiash (faja o ceñidor femenino) desde su niñez. En su relato cuenta cómo empezó tejiendo las primeras líneas y, posteriormente, las labores (patrones o dibujos con símbolos). Cada labor tiene su nombre y significado, representando creencias del territorio, así como deidades naturales: el sol (Shinÿ️), la luna (Juashcón) y las estrellas (Shinÿinÿantem), además de elementos cotidianos como el canasto (sbarëk), utilizado para recolectar semillas, alimentos y frutos del jajañ (chagra). Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Pueblo inga Lengua inga Memoria ancestral Escolarización indígena Tradición oral Documentación lingüística Pervivencia cultural https://www.youtube.com/watch?v=Kq3eD4zJjWE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=4"
    },
    {
      "id": "somos-diversidad-linguistica-29",
      "row": 29,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video Cantos y arrullos para no olvidar la palabra",
      "type": "Video",
      "description": "En este video vemos y escuchamos a la abuela Genoveva, partera y sabedora de las plantas y de los bailes tradicionales de los murui.\n\nEmocionada por poder conversar con alguien más en su lengua, la abuela se unió al proceso de documentación que adelanta Luz Dary Flórez, también murui, en Leticia, Amazonas. En el encuentro, interpretó un canto y un arrullo para dormir a los niños en su lengua.",
      "keywords": [
        "Pueblo murui",
        "Lengua murui",
        "Cantos tradicionales",
        "Arrullos ancestrales",
        "Memoria ancestral",
        "Sabiduría de las abuelas",
        "Cosmovisión indígena",
        "Tradición oral",
        "Documentación lingüística",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/watch?v=8vcYGrB_hFg&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=3",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video Cantos y arrullos para no olvidar la palabra Video En este video vemos y escuchamos a la abuela Genoveva, partera y sabedora de las plantas y de los bailes tradicionales de los murui. Emocionada por poder conversar con alguien más en su lengua, la abuela se unió al proceso de documentación que adelanta Luz Dary Flórez, también murui, en Leticia, Amazonas. En el encuentro, interpretó un canto y un arrullo para dormir a los niños en su lengua. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Pueblo murui Lengua murui Cantos tradicionales Arrullos ancestrales Memoria ancestral Sabiduría de las abuelas Cosmovisión indígena Tradición oral Documentación lingüística Pervivencia cultural https://www.youtube.com/watch?v=8vcYGrB_hFg&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=3"
    },
    {
      "id": "somos-diversidad-linguistica-30",
      "row": 30,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Cápsula de video En vida, una canción en lengua kamëntšá",
      "type": "Video",
      "description": "Con el deseo de documentar su idioma y las prácticas cultuales de su pueblo, María Antonia Narváez Agreda, documentadora de la lengua kamëntšá, se reunió con batá Eufracia Agreda Miticanoy, en el municipio de Sibundoy (Putumayo), para registrar una canción de su comunidad.\n\nEste canto habla sobre el compartir, el cuidado y la importancia de disfrutar y divertirse, siempre con prudencia para evitar cualquier problema de salud.",
      "keywords": [
        "Kamëntšá",
        "Lengua kamëntšá",
        "Cantos tradicionales",
        "Memoria ancestral",
        "Sabiduría de las mayores",
        "Cosmovisión indígena",
        "Tradición oral",
        "Documentación lingüística",
        "Fortalecimiento cultural",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/watch?v=pGvc3CZhRAo&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=2",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Cápsula de video En vida, una canción en lengua kamëntšá Video Con el deseo de documentar su idioma y las prácticas cultuales de su pueblo, María Antonia Narváez Agreda, documentadora de la lengua kamëntšá, se reunió con batá Eufracia Agreda Miticanoy, en el municipio de Sibundoy (Putumayo), para registrar una canción de su comunidad. Este canto habla sobre el compartir, el cuidado y la importancia de disfrutar y divertirse, siempre con prudencia para evitar cualquier problema de salud. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Kamëntšá Lengua kamëntšá Cantos tradicionales Memoria ancestral Sabiduría de las mayores Cosmovisión indígena Tradición oral Documentación lingüística Fortalecimiento cultural Pervivencia cultural https://www.youtube.com/watch?v=pGvc3CZhRAo&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=2"
    },
    {
      "id": "somos-diversidad-linguistica-31",
      "row": 31,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Repositorio de Lenguas Nativas de Colombia",
      "type": "Repositorio",
      "description": "Repositorio de Lenguas Nativas de Colombia del Instituto Caro y Cuervo\n\nEn el marco de la Feria Internacional del Libro de Bogotá (FILBo) 2026, el Instituto Caro y Cuervo presenta el Repositorio de Lenguas Nativas de Colombia, un acervo digital que resguardará las voces, cantos, narrativas orales y saberes ancestrales de comunidades indígenas de distintos lugares del país. Se trata del primer repositorio que busca recopilar materiales de todas las lenguas habladas en Colombia, constituyéndose en una apuesta sin precedentes por la preservación y visibilización de la diversidad lingüística nacional.\n\nEl repositorio es uno de los resultados del Programa de Documentación de Lenguas Nativas, una iniciativa que en 2026 avanza en el registro audiovisual y sonoro de quince lenguas: miraña, inga, kamëntsá, murui, cacua, nukak, nasa yuwe, namui wam, tatuyo, barasano, wayuunaiki, dʉmʉna, kankuamo, embera y mapayerri, junto con las prácticas culturales y los saberes que las habitan. Hasta la fecha, este trabajo ha producido más de 130 horas de grabación, 50 productos audiovisuales que incluyen palabras, frases, narrativas y canciones, y el registro de entre 100 y 300 términos por lengua en un software especializado para la construcción de diccionarios.\n\nEste repositorio también se distingue por ser el primero construido con el liderazgo de miembros de comunidades indígenas y bajo principios de autonomía en la gobernanza de los datos. Son los propios documentadores quienes no solo lideran los procesos en sus territorios, sino que además alimentan de manera continua este acervo, garantizando que los contenidos respondan a sus perspectivas, necesidades y formas de transmisión del conocimiento.\n\nLos contenidos del repositorio cuentan con distintos niveles de acceso definidos por los propios miembros de las comunidades. Algunos estarán disponibles para consulta abierta de toda la ciudadanía, mientras que otros serán de acceso restringido para integrantes de los pueblos e investigadores, en respeto de su autonomía sobre la circulación de estos saberes. En este sentido, el repositorio ha sido concebido desde su origen como una plataforma accesible para el público general, que trasciende el ámbito académico y promueve un acercamiento amplio, respetuoso y significativo a las lenguas y culturas del país.\n\nEste archivo es posible gracias al trabajo de los documentadores indígenas Elio Miraña, Mónica Jansasoy, María Antonia Narváez, Luz Dary Flórez, Marina López, Andersson Causaya, Leonel Cabiyarí, Jesús López y Leonel Vega, quienes lideran los procesos en sus territorios, con el acompañamiento de las investigadoras del Instituto Caro y Cuervo Yaty Urquijo y Katherine Bolaños.\n\nEl repositorio es un proyecto vivo, en permanente construcción, que crecerá de manera progresiva a medida que los documentadores continúen con su labor en sus territorios. Inicialmente contará con los contenidos documentados en 2025, sobre las lenguas cacua, nukak, inga, miraña, kamëntsá, murui, nasa yuwe y namui wam, y, a lo largo de este año, se irá complementando con archivos de las otras lenguas que están siendo documentadas. Este repositorio tiene como objetivo abarcar todas las 65 lenguas indígenas del país, así como las dos lenguas criollas y el romaní.\n\nEl Repositorio de Lenguas Nativas de Colombia es una invitación abierta a escuchar, conocer y reconocer las múltiples formas en que este país nombra el mundo. Es, además, una apuesta por preservar estos conocimientos para las generaciones venideras, de modo que puedan encontrar en estos materiales un punto de encuentro consigo mismas y con sus territorios.\n\nEl repositorio puede consultarse en repositoriolenguas.caroycuervo.gov.co.",
      "keywords": [
        "Repositorio de Lenguas Nativas",
        "Lenguas nativas",
        "Diversidad lingüística",
        "Patrimonio lingüístico",
        "Preservación lingüística",
        "Comunidades indígenas",
        "Saberes ancestrales",
        "Documentación de Lenguas Nativas",
        "Repositorio digital",
        "Salvaguardia cultural",
        "Revitalización lingüística"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Repositorio de Lenguas Nativas de Colombia Repositorio Repositorio de Lenguas Nativas de Colombia del Instituto Caro y Cuervo En el marco de la Feria Internacional del Libro de Bogotá (FILBo) 2026, el Instituto Caro y Cuervo presenta el Repositorio de Lenguas Nativas de Colombia, un acervo digital que resguardará las voces, cantos, narrativas orales y saberes ancestrales de comunidades indígenas de distintos lugares del país. Se trata del primer repositorio que busca recopilar materiales de todas las lenguas habladas en Colombia, constituyéndose en una apuesta sin precedentes por la preservación y visibilización de la diversidad lingüística nacional. El repositorio es uno de los resultados del Programa de Documentación de Lenguas Nativas, una iniciativa que en 2026 avanza en el registro audiovisual y sonoro de quince lenguas: miraña, inga, kamëntsá, murui, cacua, nukak, nasa yuwe, namui wam, tatuyo, barasano, wayuunaiki, dʉmʉna, kankuamo, embera y mapayerri, junto con las prácticas culturales y los saberes que las habitan. Hasta la fecha, este trabajo ha producido más de 130 horas de grabación, 50 productos audiovisuales que incluyen palabras, frases, narrativas y canciones, y el registro de entre 100 y 300 términos por lengua en un software especializado para la construcción de diccionarios. Este repositorio también se distingue por ser el primero construido con el liderazgo de miembros de comunidades indígenas y bajo principios de autonomía en la gobernanza de los datos. Son los propios documentadores quienes no solo lideran los procesos en sus territorios, sino que además alimentan de manera continua este acervo, garantizando que los contenidos respondan a sus perspectivas, necesidades y formas de transmisión del conocimiento. Los contenidos del repositorio cuentan con distintos niveles de acceso definidos por los propios miembros de las comunidades. Algunos estarán disponibles para consulta abierta de toda la ciudadanía, mientras que otros serán de acceso restringido para integrantes de los pueblos e investigadores, en respeto de su autonomía sobre la circulación de estos saberes. En este sentido, el repositorio ha sido concebido desde su origen como una plataforma accesible para el público general, que trasciende el ámbito académico y promueve un acercamiento amplio, respetuoso y significativo a las lenguas y culturas del país. Este archivo es posible gracias al trabajo de los documentadores indígenas Elio Miraña, Mónica Jansasoy, María Antonia Narváez, Luz Dary Flórez, Marina López, Andersson Causaya, Leonel Cabiyarí, Jesús López y Leonel Vega, quienes lideran los procesos en sus territorios, con el acompañamiento de las investigadoras del Instituto Caro y Cuervo Yaty Urquijo y Katherine Bolaños. El repositorio es un proyecto vivo, en permanente construcción, que crecerá de manera progresiva a medida que los documentadores continúen con su labor en sus territorios. Inicialmente contará con los contenidos documentados en 2025, sobre las lenguas cacua, nukak, inga, miraña, kamëntsá, murui, nasa yuwe y namui wam, y, a lo largo de este año, se irá complementando con archivos de las otras lenguas que están siendo documentadas. Este repositorio tiene como objetivo abarcar todas las 65 lenguas indígenas del país, así como las dos lenguas criollas y el romaní. El Repositorio de Lenguas Nativas de Colombia es una invitación abierta a escuchar, conocer y reconocer las múltiples formas en que este país nombra el mundo. Es, además, una apuesta por preservar estos conocimientos para las generaciones venideras, de modo que puedan encontrar en estos materiales un punto de encuentro consigo mismas y con sus territorios. El repositorio puede consultarse en repositoriolenguas.caroycuervo.gov.co. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Repositorio de Lenguas Nativas Lenguas nativas Diversidad lingüística Patrimonio lingüístico Preservación lingüística Comunidades indígenas Saberes ancestrales Documentación de Lenguas Nativas Repositorio digital Salvaguardia cultural Revitalización lingüística repositoriolenguas.caroycuervo.gov.co (actualmente el enlace no está activo, pero funcionará en los próximos días) https://drive.google.com/drive/folders/1DW44cLMa4u01SQuZrbJuKV3n9bxx0PC3?usp=drive_link"
    },
    {
      "id": "somos-diversidad-linguistica-32",
      "row": 32,
      "theme": "Somos diversidad lingüística",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Actualización del Mapa de lenguas nativas de Colombia",
      "type": "Programa",
      "description": "Integrantes de pueblos indígenas de Colombia, en articulación con el Instituto Caro y Cuervo, la Dirección de Poblaciones del Ministerio de las Culturas, las Artes y los Saberes, Amazon Conservation Team, el Instituto Geográfico Agustín Codazzi y el Instituto Colombiano de Antropología e Historia, avanzan en la actualización del Mapa de Lenguas Nativas de Colombia.\n\nEste proceso busca consolidar un mapa concebido como una herramienta viva, en constante construcción y transformación, capaz de dar cuenta de la diversidad lingüística del país desde una perspectiva amplia e incluyente. Más allá de ubicar geográficamente las lenguas, la iniciativa pretende visibilizar a los pueblos desde sus propias formas de nombrarse, reconocer la riqueza de sus prácticas culturales y ofrecer una comprensión más profunda sobre dónde se hablan las lenguas y cuál es su situación actual.\n\nEl Mapa de Lenguas Nativas se proyecta como un instrumento clave para el reconocimiento, la salvaguardia y la valoración del patrimonio lingüístico de Colombia, así como un punto de encuentro entre comunidades, instituciones y saberes que contribuye al fortalecimiento de la diversidad cultural del país.",
      "keywords": [
        "Mapa de lenguas",
        "Documentación lingüística",
        "Registro lingüístico",
        "Salvaguardia lingüística",
        "Preservación cultural",
        "Fortalecimiento cultural"
      ],
      "link": "https://www.caroycuervo.gov.co/desde-los-pueblos-con-los-pueblos-asi-avanzamos-en-la-actualizacion-del-mapa-de-lenguas-nativas-de-colombia/ https://www.flickr.com/photos/caroycuervo/albums/72177720331844010/",
      "asset_link": "",
      "force_message": "Las lenguas indígenas viven en lo que decimos todos los días.\n\nNuestro español también tiene raíces indígenas.\n\nLa raíz indígena de nuestro español",
      "availability_note": "",
      "search_text": "Somos diversidad lingüística Instituto Caro y Cuervo Actualización del Mapa de lenguas nativas de Colombia Programa Integrantes de pueblos indígenas de Colombia, en articulación con el Instituto Caro y Cuervo, la Dirección de Poblaciones del Ministerio de las Culturas, las Artes y los Saberes, Amazon Conservation Team, el Instituto Geográfico Agustín Codazzi y el Instituto Colombiano de Antropología e Historia, avanzan en la actualización del Mapa de Lenguas Nativas de Colombia. Este proceso busca consolidar un mapa concebido como una herramienta viva, en constante construcción y transformación, capaz de dar cuenta de la diversidad lingüística del país desde una perspectiva amplia e incluyente. Más allá de ubicar geográficamente las lenguas, la iniciativa pretende visibilizar a los pueblos desde sus propias formas de nombrarse, reconocer la riqueza de sus prácticas culturales y ofrecer una comprensión más profunda sobre dónde se hablan las lenguas y cuál es su situación actual. El Mapa de Lenguas Nativas se proyecta como un instrumento clave para el reconocimiento, la salvaguardia y la valoración del patrimonio lingüístico de Colombia, así como un punto de encuentro entre comunidades, instituciones y saberes que contribuye al fortalecimiento de la diversidad cultural del país. Las lenguas indígenas viven en lo que decimos todos los días. Nuestro español también tiene raíces indígenas. La raíz indígena de nuestro español Mapa de lenguas Documentación lingüística Registro lingüístico Salvaguardia lingüística Preservación cultural Fortalecimiento cultural https://www.caroycuervo.gov.co/desde-los-pueblos-con-los-pueblos-asi-avanzamos-en-la-actualizacion-del-mapa-de-lenguas-nativas-de-colombia/ https://www.flickr.com/photos/caroycuervo/albums/72177720331844010/"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-33",
      "row": 33,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Cápsula de Video Yo quisiera vivir en el paraíso",
      "type": "Video",
      "description": "La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de nación",
        "Representación social",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusión",
        "Enfoque territorial",
        "Investigación colaborativa",
        "Participación comunitaria",
        "Espacios de diálogo",
        "Transformación cultural",
        "Memoria campesina",
        "Prácticas culturales",
        "Reconocimiento social",
        "Música campesina"
      ],
      "link": "https://www.youtube.com/shorts/DICSihgX_OU",
      "asset_link": "",
      "force_message": "La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país!",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Cápsula de Video Yo quisiera vivir en el paraíso Video La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación. La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país! Vidas campesinas Cultura campesina Identidad rural Narrativas de nación Representación social Diversidad cultural Diversidad regional Inclusión Enfoque territorial Investigación colaborativa Participación comunitaria Espacios de diálogo Transformación cultural Memoria campesina Prácticas culturales Reconocimiento social Música campesina https://www.youtube.com/shorts/DICSihgX_OU"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-34",
      "row": 34,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composición musical Somos Campesinos",
      "type": "Sonoro",
      "description": "La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta inicitiva busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de nación",
        "Representación cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusión",
        "Enfoque territorial",
        "Investigación colaborativa",
        "Participación comunitaria",
        "Espacios de diálogo",
        "Transformación de narrativas",
        "Memoria campesina",
        "Prácticas culturales",
        "Reconocimiento social",
        "Música campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/5CdycWicFUq4jColTv8CBs?si=64536e13fa48463c&nd=1&dlsi=cec411540c2b4f74",
      "asset_link": "",
      "force_message": "La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país!",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Composición musical Somos Campesinos Sonoro La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta inicitiva busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación. La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país! Vidas campesinas Cultura campesina Identidad rural Narrativas de nación Representación cultural Diversidad cultural Diversidad regional Inclusión Enfoque territorial Investigación colaborativa Participación comunitaria Espacios de diálogo Transformación de narrativas Memoria campesina Prácticas culturales Reconocimiento social Música campesina https://open.spotify.com/intl-es/track/5CdycWicFUq4jColTv8CBs?si=64536e13fa48463c&nd=1&dlsi=cec411540c2b4f74"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-35",
      "row": 35,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composición musical El tesoro",
      "type": "Sonoro",
      "description": "La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de nación",
        "Representación cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusión",
        "Enfoque territorial",
        "Investigación colaborativa",
        "Participación comunitaria",
        "Espacios de diálogo",
        "Transformación de narrativas",
        "Memoria campesina",
        "Prácticas culturales",
        "Reconocimiento social",
        "Música campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/64aulKuVu2F5dUXunHXez2?si=6b28115326f24df1&nd=1&dlsi=63a6f7c995914cbb",
      "asset_link": "",
      "force_message": "La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país!",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Composición musical El tesoro Sonoro La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación. La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país! Vidas campesinas Cultura campesina Identidad rural Narrativas de nación Representación cultural Diversidad cultural Diversidad regional Inclusión Enfoque territorial Investigación colaborativa Participación comunitaria Espacios de diálogo Transformación de narrativas Memoria campesina Prácticas culturales Reconocimiento social Música campesina https://open.spotify.com/intl-es/track/64aulKuVu2F5dUXunHXez2?si=6b28115326f24df1&nd=1&dlsi=63a6f7c995914cbb"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-36",
      "row": 36,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composición musical Tonada del arcoiris",
      "type": "Sonoro",
      "description": "La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de nación",
        "Representación cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusión",
        "Enfoque territorial",
        "Investigación colaborativa",
        "Participación comunitaria",
        "Espacios de diálogo",
        "Transformación de narrativas",
        "Memoria campesina",
        "Prácticas culturales",
        "Reconocimiento social",
        "Música campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/5W0b96rV74nne5rhtoukk8?si=ede9b48ddead49ff&nd=1&dlsi=06d4b015c4fb4c85",
      "asset_link": "",
      "force_message": "La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país!",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Composición musical Tonada del arcoiris Sonoro La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación. La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país! Vidas campesinas Cultura campesina Identidad rural Narrativas de nación Representación cultural Diversidad cultural Diversidad regional Inclusión Enfoque territorial Investigación colaborativa Participación comunitaria Espacios de diálogo Transformación de narrativas Memoria campesina Prácticas culturales Reconocimiento social Música campesina https://open.spotify.com/intl-es/track/5W0b96rV74nne5rhtoukk8?si=ede9b48ddead49ff&nd=1&dlsi=06d4b015c4fb4c85"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-37",
      "row": 37,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composición musical Hay que sembrar",
      "type": "Sonoro",
      "description": "La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de nación",
        "Representación cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusión",
        "Enfoque territorial",
        "Investigación colaborativa",
        "Participación comunitaria",
        "Espacios de diálogo",
        "Transformación de narrativas",
        "Memoria campesina",
        "Prácticas culturales",
        "Reconocimiento social",
        "Música campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/5CdycWicFUq4jColTv8CBs?si=64536e13fa48463c&nd=1&dlsi=92297bdebec44158",
      "asset_link": "",
      "force_message": "La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país!",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Composición musical Hay que sembrar Sonoro La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país! Vidas campesinas Cultura campesina Identidad rural Narrativas de nación Representación cultural Diversidad cultural Diversidad regional Inclusión Enfoque territorial Investigación colaborativa Participación comunitaria Espacios de diálogo Transformación de narrativas Memoria campesina Prácticas culturales Reconocimiento social Música campesina https://open.spotify.com/intl-es/track/5CdycWicFUq4jColTv8CBs?si=64536e13fa48463c&nd=1&dlsi=92297bdebec44158"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-38",
      "row": 38,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composición musical Con zapatillas o botas",
      "type": "Sonoro",
      "description": "La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia, incidiendo en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de nación",
        "Representación cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusión",
        "Enfoque territorial",
        "Investigación colaborativa",
        "Participación comunitaria",
        "Espacios de diálogo",
        "Transformación de narrativas",
        "Memoria campesina",
        "Prácticas culturales",
        "Reconocimiento social",
        "Música campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/4ei8KDPBbRa5comqMkrt5r?si=a0033be3ff164b88",
      "asset_link": "",
      "force_message": "La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país!",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Composición musical Con zapatillas o botas Sonoro La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia, incidiendo en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación. La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país! Vidas campesinas Cultura campesina Identidad rural Narrativas de nación Representación cultural Diversidad cultural Diversidad regional Inclusión Enfoque territorial Investigación colaborativa Participación comunitaria Espacios de diálogo Transformación de narrativas Memoria campesina Prácticas culturales Reconocimiento social Música campesina https://open.spotify.com/intl-es/track/4ei8KDPBbRa5comqMkrt5r?si=a0033be3ff164b88"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-39",
      "row": 39,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composición musical Semillas del futuro",
      "type": "Sonoro",
      "description": "La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de nación",
        "Representación cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusión",
        "Enfoque territorial",
        "Investigación colaborativa",
        "Participación comunitaria",
        "Espacios de diálogo",
        "Transformación de narrativas",
        "Memoria campesina",
        "Prácticas culturales",
        "Reconocimiento social",
        "Música campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/5W0b96rV74nne5rhtoukk8?si=73cac6b965584e92",
      "asset_link": "",
      "force_message": "La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país!",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Composición musical Semillas del futuro Sonoro La música nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformación de las narrativas de nación sobre las formas de vida campesina, promoviendo una visión inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representación de las vidas campesinas a través de la investigación colaborativa, la generación de espacios de diálogo y participación. La música nos recuerda que Colombia es campesina. ¡Y así le cantan campesinas y campesinos a nuestro país! Vidas campesinas Cultura campesina Identidad rural Narrativas de nación Representación cultural Diversidad cultural Diversidad regional Inclusión Enfoque territorial Investigación colaborativa Participación comunitaria Espacios de diálogo Transformación de narrativas Memoria campesina Prácticas culturales Reconocimiento social Música campesina https://open.spotify.com/intl-es/track/5W0b96rV74nne5rhtoukk8?si=73cac6b965584e92"
    },
    {
      "id": "somos-economias-populares-40",
      "row": 40,
      "theme": "Somos economías populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "Videoclip Así se vive el campo",
      "type": "Videoclip",
      "description": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta. Videoclip de la canción Así se vive en el campo compuesta e interpretada por Pedro Nel Amado Buitrago y Campesino Faculto (Juan Ramón Amado Quintero), con imágenes de una jornada de Convite y sacanza de papa en San Pedro de Iguaque y Motavita.",
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Vida campesina",
        "Cultura rural",
        "Música campesina",
        "Videoclip",
        "Representación territorial",
        "Boyacá",
        "Caribe",
        "Bogotá",
        "Guainía",
        "Identidad cultural",
        "Prácticas campesinas",
        "Convite",
        "Sacanza de papa",
        "Trabajo comunitario",
        "Tradición rural",
        "Pedro Nel Amado Buitrago",
        "Campesino Faculto",
        "Narrativas audiovisuales"
      ],
      "link": "https://www.youtube.com/watch?v=9a60iotLujI",
      "asset_link": "",
      "force_message": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta.",
      "availability_note": "",
      "search_text": "Somos economías populares ICANH Videoclip Así se vive el campo Videoclip La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta. Videoclip de la canción Así se vive en el campo compuesta e interpretada por Pedro Nel Amado Buitrago y Campesino Faculto (Juan Ramón Amado Quintero), con imágenes de una jornada de Convite y sacanza de papa en San Pedro de Iguaque y Motavita. La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta. Diversidad cultural Territorios Vida campesina Cultura rural Música campesina Videoclip Representación territorial Boyacá Caribe Bogotá Guainía Identidad cultural Prácticas campesinas Convite Sacanza de papa Trabajo comunitario Tradición rural Pedro Nel Amado Buitrago Campesino Faculto Narrativas audiovisuales https://www.youtube.com/watch?v=9a60iotLujI"
    },
    {
      "id": "somos-economias-populares-41",
      "row": 41,
      "theme": "Somos economías populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "Videoclip Sempegua, mi tierra",
      "type": "Videoclip",
      "description": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta.Videoclip de la canción Sempegua, mi tierra, de Alfonso Rocha y Leonar Morales, rodado en Sempegua y en la ciénaga de Zapatosa, que ilustra sobre las diversas maneras en que los habitantes de la región viven el día a día de la economía popular.",
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Vida cotidiana",
        "Economía popular",
        "Cultura local",
        "Música tradicional",
        "Videoclip",
        "Identidad cultural",
        "Región Caribe",
        "Sempegua",
        "Ciénaga de Zapatosa",
        "Alfonso Rocha",
        "Leonar Morales",
        "Prácticas económicas",
        "Trabajo comunitario",
        "Narrativas audiovisuales",
        "Representación territorial",
        "Cultura anfibia"
      ],
      "link": "https://www.youtube.com/watch?v=OMBEbA1jh80",
      "asset_link": "",
      "force_message": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta.",
      "availability_note": "",
      "search_text": "Somos economías populares ICANH Videoclip Sempegua, mi tierra Videoclip La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta.Videoclip de la canción Sempegua, mi tierra, de Alfonso Rocha y Leonar Morales, rodado en Sempegua y en la ciénaga de Zapatosa, que ilustra sobre las diversas maneras en que los habitantes de la región viven el día a día de la economía popular. La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta. Diversidad cultural Territorios Vida cotidiana Economía popular Cultura local Música tradicional Videoclip Identidad cultural Región Caribe Sempegua Ciénaga de Zapatosa Alfonso Rocha Leonar Morales Prácticas económicas Trabajo comunitario Narrativas audiovisuales Representación territorial Cultura anfibia https://www.youtube.com/watch?v=OMBEbA1jh80"
    },
    {
      "id": "somos-economias-populares-42",
      "row": 42,
      "theme": "Somos economías populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "Videoclip Bajo el sol",
      "type": "Videoclip",
      "description": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta. Compuesto para la producción audiovisual y sonora Economías populares. Videoclip de Bajo el sol, canción del artista JHECO, con los escenarios del cerro de Mavecure, el mercado de El Paujil y las calles de Inírida, cantada en curripaco y español.",
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Economías populares",
        "Vida cotidiana",
        "Música",
        "Videoclip",
        "JHECO",
        "Curripaco",
        "Español (bilingüismo)",
        "Lenguas nativas",
        "Identidad cultural",
        "Guainía",
        "Cerro de Mavecure",
        "Inírida",
        "Mercado de El Paujil",
        "Trabajo local",
        "Prácticas económicas",
        "Narrativas audiovisuales",
        "Representación territorial"
      ],
      "link": "https://www.youtube.com/watch?v=UVvkf-CJPFE",
      "asset_link": "",
      "force_message": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta.",
      "availability_note": "",
      "search_text": "Somos economías populares ICANH Videoclip Bajo el sol Videoclip La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta. Compuesto para la producción audiovisual y sonora Economías populares. Videoclip de Bajo el sol, canción del artista JHECO, con los escenarios del cerro de Mavecure, el mercado de El Paujil y las calles de Inírida, cantada en curripaco y español. La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta. Diversidad cultural Territorios Economías populares Vida cotidiana Música Videoclip JHECO Curripaco Español (bilingüismo) Lenguas nativas Identidad cultural Guainía Cerro de Mavecure Inírida Mercado de El Paujil Trabajo local Prácticas económicas Narrativas audiovisuales Representación territorial https://www.youtube.com/watch?v=UVvkf-CJPFE"
    },
    {
      "id": "somos-economias-populares-43",
      "row": 43,
      "theme": "Somos economías populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "Videoclip El Siete existe",
      "type": "Videoclip",
      "description": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta.Videoclip de la canción El 7 existe de la rapera bogotana Feback (Fernanda Blanco), que ilustra con su lírica los pormenores de la vida cotidiana en el mercado de autopartes del Siete de agosto, tanto en los talleres donde mujeres mecánicas trabajan día a día, como en las calles del barrio.",
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Vida urbana",
        "Cultura popular",
        "Música urbana",
        "Rap",
        "Videoclip",
        "Feback (Fernanda Blanco)",
        "Bogotá",
        "Siete de Agosto",
        "Mercado de autopartes",
        "Trabajo mecánico",
        "Mujeres mecánicas",
        "Género y trabajo",
        "Vida cotidiana",
        "Economía popular",
        "Barrio",
        "Narrativas audiovisuales",
        "Representación urbana"
      ],
      "link": "https://www.youtube.com/watch?v=RDSuHcJlZCc",
      "asset_link": "",
      "force_message": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta.",
      "availability_note": "",
      "search_text": "Somos economías populares ICANH Videoclip El Siete existe Videoclip La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta.Videoclip de la canción El 7 existe de la rapera bogotana Feback (Fernanda Blanco), que ilustra con su lírica los pormenores de la vida cotidiana en el mercado de autopartes del Siete de agosto, tanto en los talleres donde mujeres mecánicas trabajan día a día, como en las calles del barrio. La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta. Diversidad cultural Territorios Vida urbana Cultura popular Música urbana Rap Videoclip Feback (Fernanda Blanco) Bogotá Siete de Agosto Mercado de autopartes Trabajo mecánico Mujeres mecánicas Género y trabajo Vida cotidiana Economía popular Barrio Narrativas audiovisuales Representación urbana https://www.youtube.com/watch?v=RDSuHcJlZCc"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-44",
      "row": 44,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Podcast En movimiento: músicas y fronteras",
      "type": "Podcast",
      "description": "En Movimiento: músicas y fronteras es un podcast que se enfoca en la música y su relación con las fronteras, explorando y celebrando la diversidad cultural y musical en Colombia. A lo largo de ocho episodios, exploramos distintas narrativas y perspectivas relacionadas con expresiones culturales de poblaciones fronterizas, su relación con la población migrante y los paisajes sonoros que los acompañan.",
      "keywords": [
        "Podcast",
        "Música",
        "Fronteras",
        "Músicas fronterizas",
        "Diversidad cultural",
        "Paisajes sonoros",
        "Narrativas culturales",
        "Expresiones culturales",
        "Poblaciones fronterizas",
        "Migración",
        "Interculturalidad",
        "Identidad cultural",
        "Territorio",
        "Movilidad humana",
        "Sonoridades",
        "Relación cultura–territorio",
        "Producción sonora"
      ],
      "link": "https://open.spotify.com/show/43DiLAqH6fAGv5qtdDJlme?si=0ee8770b52ef44ef",
      "asset_link": "",
      "force_message": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Podcast En movimiento: músicas y fronteras Podcast En Movimiento: músicas y fronteras es un podcast que se enfoca en la música y su relación con las fronteras, explorando y celebrando la diversidad cultural y musical en Colombia. A lo largo de ocho episodios, exploramos distintas narrativas y perspectivas relacionadas con expresiones culturales de poblaciones fronterizas, su relación con la población migrante y los paisajes sonoros que los acompañan. La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del país. De Guainía a Boyacá, del Caribe a Bogotá, la vida se canta. Podcast Música Fronteras Músicas fronterizas Diversidad cultural Paisajes sonoros Narrativas culturales Expresiones culturales Poblaciones fronterizas Migración Interculturalidad Identidad cultural Territorio Movilidad humana Sonoridades Relación cultura–territorio Producción sonora https://open.spotify.com/show/43DiLAqH6fAGv5qtdDJlme?si=0ee8770b52ef44ef"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-45",
      "row": 45,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Documental Saberes soberanos",
      "type": "Documental",
      "description": "Campesinas y campesinos, líderes sociales, artistas, profesionales y técnicos de los municipios de Morelia, San José del Fragua, Belén de los Andaquíes, El Doncello, Solano y Florencia, en el departamento del Caquetá, se han unido en un espacio autónomo y comunitario de investigación y educación propia. Todos ellos buscan frenar la deforestación en las veredas, restaurar los bosques, mejorar la calidad de las aguas, planificar las fincas y generar sistemas de producción basados en la naturaleza.",
      "keywords": [
        "Campesinos y campesinas",
        "Liderazgo social",
        "Participación comunitaria",
        "Investigación comunitaria",
        "Educación propia",
        "Autonomía territorial",
        "Caquetá",
        "Morelia",
        "San José del Fragua",
        "Belén de los Andaquíes",
        "El Doncello",
        "Solano",
        "Florencia",
        "Deforestación",
        "Restauración de bosques",
        "Cuidado del agua",
        "Planificación territorial",
        "Sistemas productivos sostenibles",
        "Producción basada en la naturaleza",
        "Sostenibilidad ambiental"
      ],
      "link": "https://www.youtube.com/watch?v=YAlY5hnZgBY&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=34",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Documental Saberes soberanos Documental Campesinas y campesinos, líderes sociales, artistas, profesionales y técnicos de los municipios de Morelia, San José del Fragua, Belén de los Andaquíes, El Doncello, Solano y Florencia, en el departamento del Caquetá, se han unido en un espacio autónomo y comunitario de investigación y educación propia. Todos ellos buscan frenar la deforestación en las veredas, restaurar los bosques, mejorar la calidad de las aguas, planificar las fincas y generar sistemas de producción basados en la naturaleza. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Campesinos y campesinas Liderazgo social Participación comunitaria Investigación comunitaria Educación propia Autonomía territorial Caquetá Morelia San José del Fragua Belén de los Andaquíes El Doncello Solano Florencia Deforestación Restauración de bosques Cuidado del agua Planificación territorial Sistemas productivos sostenibles Producción basada en la naturaleza Sostenibilidad ambiental https://www.youtube.com/watch?v=YAlY5hnZgBY&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=34"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-46",
      "row": 46,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Documental De pasados y presentes remotos",
      "type": "Documental",
      "description": "En la vereda Bocas del Raudal de San José del Guaviare, afectada durante décadas por las inclemencias de la guerra, la comunidad campesina aprovecha desde 2016 las oportunidades que trajo la firma del Acuerdo de Paz entre las FARC-EP y el gobierno colombiano. La región, antes mayoritariamente cocalera, desafía hoy las tensiones propias de una vida campesina que ha sumado a sus actividades productivas el turismo comunitario, la conservación ambiental y la protección del patrimonio arqueológico.",
      "keywords": [
        "Comunidad campesina",
        "San José del Guaviare",
        "Bocas del Raudal",
        "Posconflicto",
        "Acuerdo de Paz",
        "FARC-EP",
        "Transformación territorial",
        "Sustitución de economías ilícitas",
        "Turismo comunitario",
        "Conservación ambiental",
        "Patrimonio arqueológico",
        "Memoria territorial",
        "Resiliencia",
        "Desarrollo rural",
        "Diversificación productiva",
        "Economía campesina",
        "Construcción de paz"
      ],
      "link": "https://www.youtube.com/watch?v=QtbQh-x3ohI&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=33",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Documental De pasados y presentes remotos Documental En la vereda Bocas del Raudal de San José del Guaviare, afectada durante décadas por las inclemencias de la guerra, la comunidad campesina aprovecha desde 2016 las oportunidades que trajo la firma del Acuerdo de Paz entre las FARC-EP y el gobierno colombiano. La región, antes mayoritariamente cocalera, desafía hoy las tensiones propias de una vida campesina que ha sumado a sus actividades productivas el turismo comunitario, la conservación ambiental y la protección del patrimonio arqueológico. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Comunidad campesina San José del Guaviare Bocas del Raudal Posconflicto Acuerdo de Paz FARC-EP Transformación territorial Sustitución de economías ilícitas Turismo comunitario Conservación ambiental Patrimonio arqueológico Memoria territorial Resiliencia Desarrollo rural Diversificación productiva Economía campesina Construcción de paz https://www.youtube.com/watch?v=QtbQh-x3ohI&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=33"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-47",
      "row": 47,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Documental Cuidar lo nuestro",
      "type": "Documental",
      "description": "En el contexto actual del conflicto armado en Colombia y pese al Acuerdo de paz con las FARC-EP, distintos actores se disputan el control de los territorios, sus recursos y las fidelidades de las comunidades. Como una forma de defender los territorios vulnerados, las guardias indígenas, campesinas y cimarronas del municipio de Suárez, al norte del departamento del Cauca, son un ejemplo de resistencia pacífica, de convivencias interculturales y una alternativa a la defensa de la vida campesina.",
      "keywords": [
        "Conflicto armado",
        "Posacuerdo de paz",
        "Disputa territorial",
        "Control de recursos",
        "Suárez (Cauca)",
        "Norte del Cauca",
        "Guardias indígenas",
        "Guardias campesinas",
        "Guardias cimarronas",
        "Resistencia pacífica",
        "Defensa del territorio",
        "Defensa de la vida",
        "Convivencia intercultural",
        "Autonomía comunitaria",
        "Organización social",
        "Seguridad comunitaria",
        "Justicia propia",
        "Protección comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=M_YXgXdRecQ",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Documental Cuidar lo nuestro Documental En el contexto actual del conflicto armado en Colombia y pese al Acuerdo de paz con las FARC-EP, distintos actores se disputan el control de los territorios, sus recursos y las fidelidades de las comunidades. Como una forma de defender los territorios vulnerados, las guardias indígenas, campesinas y cimarronas del municipio de Suárez, al norte del departamento del Cauca, son un ejemplo de resistencia pacífica, de convivencias interculturales y una alternativa a la defensa de la vida campesina. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Conflicto armado Posacuerdo de paz Disputa territorial Control de recursos Suárez (Cauca) Norte del Cauca Guardias indígenas Guardias campesinas Guardias cimarronas Resistencia pacífica Defensa del territorio Defensa de la vida Convivencia intercultural Autonomía comunitaria Organización social Seguridad comunitaria Justicia propia Protección comunitaria https://www.youtube.com/watch?v=M_YXgXdRecQ"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-48",
      "row": 48,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Cápsula de vídeo Huerta de Lupe",
      "type": "Video",
      "description": "Conocemos toda la diversidad que habita la finca La Lupe, recorriéndola en compañia de doña Yolanda quien nos comparte el proceso del ciclo de vida de los alimentos y plantas medicinales que siembra, cuida, cosecha y consume junto a su familia. Doña Yolanda nos muestra cómo el abono que produce en su cocina es alimento para sus cultivos.",
      "keywords": [
        "Finca La Lupe",
        "Vida campesina",
        "Agroecología",
        "Ciclo de vida de los alimentos",
        "Plantas medicinales",
        "Saberes campesinos",
        "Agricultura familiar",
        "Producción sostenible",
        "Abonos orgánicos",
        "Economía del cuidado",
        "Autoconsumo",
        "Soberanía alimentaria",
        "Prácticas agroecológicas",
        "Conocimiento tradicional",
        "Trabajo familiar",
        "Relación naturaleza–alimentación",
        "Diversidad biocultural"
      ],
      "link": "https://www.youtube.com/shorts/iRAPewJFBkI",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Cápsula de vídeo Huerta de Lupe Video Conocemos toda la diversidad que habita la finca La Lupe, recorriéndola en compañia de doña Yolanda quien nos comparte el proceso del ciclo de vida de los alimentos y plantas medicinales que siembra, cuida, cosecha y consume junto a su familia. Doña Yolanda nos muestra cómo el abono que produce en su cocina es alimento para sus cultivos. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Finca La Lupe Vida campesina Agroecología Ciclo de vida de los alimentos Plantas medicinales Saberes campesinos Agricultura familiar Producción sostenible Abonos orgánicos Economía del cuidado Autoconsumo Soberanía alimentaria Prácticas agroecológicas Conocimiento tradicional Trabajo familiar Relación naturaleza–alimentación Diversidad biocultural https://www.youtube.com/shorts/iRAPewJFBkI"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-49",
      "row": 49,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Cápsula de vídeo La mata no es quien mata",
      "type": "Video",
      "description": "Dos visiones campesinas sobre la siembra y uso de la hoja de coca nos proponen una mirada más allá de la estigmatización de la mal llamada \"mata que mata\". Las alternativas de transformación de la coca que involucran lo colectivo atraviesan el uso tradicional de los pueblos indígenas hasta la elaboración de productos medicinales, etílicos y gastronómicos.",
      "keywords": [
        "Hoja de coca",
        "Cultura campesina",
        "Saberes tradicionales",
        "Uso ancestral",
        "Pueblos indígenas",
        "Desestigmatización",
        "Narrativas alternativas",
        "Transformación de la coca",
        "Economía campesina",
        "Producción alternativa",
        "Productos medicinales",
        "Usos gastronómicos",
        "Usos etílicos",
        "Trabajo colectivo",
        "Conocimiento tradicional",
        "Diversidad cultural",
        "Soberanía productiva"
      ],
      "link": "https://www.youtube.com/watch?v=VMHQAqYwoSg",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Cápsula de vídeo La mata no es quien mata Video Dos visiones campesinas sobre la siembra y uso de la hoja de coca nos proponen una mirada más allá de la estigmatización de la mal llamada \"mata que mata\". Las alternativas de transformación de la coca que involucran lo colectivo atraviesan el uso tradicional de los pueblos indígenas hasta la elaboración de productos medicinales, etílicos y gastronómicos. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Hoja de coca Cultura campesina Saberes tradicionales Uso ancestral Pueblos indígenas Desestigmatización Narrativas alternativas Transformación de la coca Economía campesina Producción alternativa Productos medicinales Usos gastronómicos Usos etílicos Trabajo colectivo Conocimiento tradicional Diversidad cultural Soberanía productiva https://www.youtube.com/watch?v=VMHQAqYwoSg"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-50",
      "row": 50,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Cápsula de vídeo Fogones campesinos",
      "type": "Video",
      "description": "En el mundo campesino se encienden los fogones. El tradicional fogón de leña, el fogón a gas y el innovador fogón de biogás son elementos vitales para la preparación de alimentos. Doña Yolanda y su hijo Iván explican cómo funcionan los biodigestores, un sistema de producción autónomo de biogas a partir del excremento de los animales que crían en su finca.",
      "keywords": [
        "Mundo campesino",
        "Fogones tradicionales",
        "Fogón de leña",
        "Fogón a gas",
        "Fogón de biogás",
        "Preparación de alimentos",
        "Saberes rurales",
        "Energía alternativa",
        "Biodigestores",
        "Producción autónoma",
        "Biogás",
        "Aprovechamiento de residuos",
        "Excremento animal",
        "Sostenibilidad",
        "Economía campesina",
        "Innovación rural",
        "Finca campesina",
        "Prácticas ancestrales y tecnológicas",
        "Transición energética rural",
        "Autogestión energética"
      ],
      "link": "https://www.youtube.com/watch?v=51JGieT5zUo&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=46",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Cápsula de vídeo Fogones campesinos Video En el mundo campesino se encienden los fogones. El tradicional fogón de leña, el fogón a gas y el innovador fogón de biogás son elementos vitales para la preparación de alimentos. Doña Yolanda y su hijo Iván explican cómo funcionan los biodigestores, un sistema de producción autónomo de biogas a partir del excremento de los animales que crían en su finca. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Mundo campesino Fogones tradicionales Fogón de leña Fogón a gas Fogón de biogás Preparación de alimentos Saberes rurales Energía alternativa Biodigestores Producción autónoma Biogás Aprovechamiento de residuos Excremento animal Sostenibilidad Economía campesina Innovación rural Finca campesina Prácticas ancestrales y tecnológicas Transición energética rural Autogestión energética https://www.youtube.com/watch?v=51JGieT5zUo&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=46"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-51",
      "row": 51,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Cápsula de vídeo Sin campo no hay futuro",
      "type": "Video",
      "description": "Sin campo no hay ciudad. Para que un vaso de leche llegue a una mesa en la ciudad se requiere el trabajo diario de muchas familias campesinas. Un trabajo cotidiano de cuidado que implica una relación de intimidad y afectos con las vacas y terneros para un buen ordeño. Uno de los mayores retos de la producción lechera es que los campesinos puedan realizar localmente procesos de transformación de la leche para que el mayor beneficio económico quede en manos de los pequeños productores.",
      "keywords": [
        "Economías Populares",
        "Campo y ciudad",
        "Interdependencia rural-urbana",
        "Producción lechera",
        "Cadena de valor de la leche",
        "Trabajo campesino",
        "Economía rural",
        "Familias campesinas",
        "Ordeño",
        "Cuidado animal",
        "Bienestar animal",
        "Relación humano-animal",
        "Vínculo afectivo",
        "Producción sostenible",
        "Transformación de la leche",
        "Valor agregado",
        "Economía local",
        "Comercialización justa",
        "Soberanía alimentaria",
        "Pequeños productores",
        "Desafíos del campo"
      ],
      "link": "https://www.youtube.com/watch?v=ca0-LXT3YhM&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=43",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Cápsula de vídeo Sin campo no hay futuro Video Sin campo no hay ciudad. Para que un vaso de leche llegue a una mesa en la ciudad se requiere el trabajo diario de muchas familias campesinas. Un trabajo cotidiano de cuidado que implica una relación de intimidad y afectos con las vacas y terneros para un buen ordeño. Uno de los mayores retos de la producción lechera es que los campesinos puedan realizar localmente procesos de transformación de la leche para que el mayor beneficio económico quede en manos de los pequeños productores. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Economías Populares Campo y ciudad Interdependencia rural-urbana Producción lechera Cadena de valor de la leche Trabajo campesino Economía rural Familias campesinas Ordeño Cuidado animal Bienestar animal Relación humano-animal Vínculo afectivo Producción sostenible Transformación de la leche Valor agregado Economía local Comercialización justa Soberanía alimentaria Pequeños productores Desafíos del campo https://www.youtube.com/watch?v=ca0-LXT3YhM&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=43"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-52",
      "row": 52,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Cápsula de vídeo Señor prontoalivio",
      "type": "Video",
      "description": "Prontoalivio para la tos. Dayana cuida todos los días su huerta donde siembra plantas medicinales para ella y sus hijas. Una muestra de la relación de afecto y cuidado de las mujeres con su familia y sus plantas.",
      "keywords": [
        "Plantas medicinales",
        "Huerta casera",
        "Medicina tradicional",
        "Remedios naturales",
        "Cuidado familiar",
        "Saberes ancestrales",
        "Mujeres campesinas",
        "Rol de cuidado",
        "Salud natural",
        "Tos (alivio natural)",
        "Autocuidado",
        "Cultivo de plantas",
        "Relación humano-naturaleza",
        "Afecto y cuidado",
        "Bienestar familiar",
        "Conocimiento herbal",
        "Prácticas tradicionales",
        "Soberanía medicinal"
      ],
      "link": "https://www.youtube.com/watch?v=MScs6fJWHr8&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=36",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Cápsula de vídeo Señor prontoalivio Video Prontoalivio para la tos. Dayana cuida todos los días su huerta donde siembra plantas medicinales para ella y sus hijas. Una muestra de la relación de afecto y cuidado de las mujeres con su familia y sus plantas. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Plantas medicinales Huerta casera Medicina tradicional Remedios naturales Cuidado familiar Saberes ancestrales Mujeres campesinas Rol de cuidado Salud natural Tos (alivio natural) Autocuidado Cultivo de plantas Relación humano-naturaleza Afecto y cuidado Bienestar familiar Conocimiento herbal Prácticas tradicionales Soberanía medicinal https://www.youtube.com/watch?v=MScs6fJWHr8&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=36"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-53",
      "row": 53,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Cápsula de vídeo El río es fuente de vida",
      "type": "Video",
      "description": "Antonio es un hombre que tiene como uno de sus oficios medir el río todos los días para monitorear las crecientes y posibles desbordes. Esto le ha dado un conocimiento profundo sobre el río y sus ciclos anuales.",
      "keywords": [
        "Monitoreo del río",
        "Niveles del agua",
        "Crecientes",
        "Desbordamientos",
        "Gestión del riesgo",
        "Conocimiento empírico",
        "Saberes locales",
        "Ciclos del río",
        "Observación diaria",
        "Oficios del territorio",
        "Vigilancia comunitaria",
        "Prevención de desastres",
        "Relación humano-naturaleza",
        "Hidrología local",
        "Adaptación al entorno",
        "Memoria ambiental",
        "Cultura ribereña"
      ],
      "link": "https://www.youtube.com/shorts/RfdV2t5BopQ",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Cápsula de vídeo El río es fuente de vida Video Antonio es un hombre que tiene como uno de sus oficios medir el río todos los días para monitorear las crecientes y posibles desbordes. Esto le ha dado un conocimiento profundo sobre el río y sus ciclos anuales. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Monitoreo del río Niveles del agua Crecientes Desbordamientos Gestión del riesgo Conocimiento empírico Saberes locales Ciclos del río Observación diaria Oficios del territorio Vigilancia comunitaria Prevención de desastres Relación humano-naturaleza Hidrología local Adaptación al entorno Memoria ambiental Cultura ribereña https://www.youtube.com/shorts/RfdV2t5BopQ"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-54",
      "row": 54,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Cápsula de vídeo Saber sobar",
      "type": "Video",
      "description": "Doña Ofelia recibe en su casa a un niño enfermo del estómago. Con la sospecha de que el niño está descuajado, doña Ofelia se dispone a sobarlo para curarle su mal de estómago.",
      "keywords": [
        "Medicina tradicional",
        "Sobandería",
        "Descuajado",
        "Dolor de estómago",
        "Curación tradicional",
        "Saberes ancestrales",
        "Sanación comunitaria",
        "Prácticas de cuidado",
        "Atención doméstica",
        "Medicina popular",
        "Cuerpo y equilibrio",
        "Conocimiento empírico",
        "Mujeres sabedoras",
        "Transmisión de saberes",
        "Cultura rural",
        "Salud comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=WMTPk_KX4BE&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=35",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Cápsula de vídeo Saber sobar Video Doña Ofelia recibe en su casa a un niño enfermo del estómago. Con la sospecha de que el niño está descuajado, doña Ofelia se dispone a sobarlo para curarle su mal de estómago. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Medicina tradicional Sobandería Descuajado Dolor de estómago Curación tradicional Saberes ancestrales Sanación comunitaria Prácticas de cuidado Atención doméstica Medicina popular Cuerpo y equilibrio Conocimiento empírico Mujeres sabedoras Transmisión de saberes Cultura rural Salud comunitaria https://www.youtube.com/watch?v=WMTPk_KX4BE&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=35"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-55",
      "row": 55,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Cápsula de vídeo El oro es vivo",
      "type": "Video",
      "description": "Omaira y Leonilde van al río a buscar oro. Con su cuerpo dan vueltas y vueltas a la batea, tal como lo hacían sus ancestros. Con su mirada buscan detenidamente el brillo dorado que se asoma entre las piedras, la tierra y el agua. Encontrar el oro no es tarea fácil porque, en palabras de Omaira, el oro es un metal vivo que no comparte con gente envidiosa, solo se muestra a personas de buen corazón.",
      "keywords": [
        "Minería artesanal",
        "Barequeo",
        "Batea",
        "Búsqueda de oro",
        "Saberes ancestrales",
        "Oficios tradicionales",
        "Mujeres mineras",
        "Trabajo en el río",
        "Relación espiritual con la naturaleza",
        "Cosmovisión del oro",
        "Metal vivo",
        "Paciencia y destreza",
        "Observación detallada",
        "Cultura ribereña",
        "Tradición oral",
        "Economía de subsistencia",
        "Herencia ancestral"
      ],
      "link": "https://www.youtube.com/watch?v=DRduippHOAI",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Cápsula de vídeo El oro es vivo Video Omaira y Leonilde van al río a buscar oro. Con su cuerpo dan vueltas y vueltas a la batea, tal como lo hacían sus ancestros. Con su mirada buscan detenidamente el brillo dorado que se asoma entre las piedras, la tierra y el agua. Encontrar el oro no es tarea fácil porque, en palabras de Omaira, el oro es un metal vivo que no comparte con gente envidiosa, solo se muestra a personas de buen corazón. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Minería artesanal Barequeo Batea Búsqueda de oro Saberes ancestrales Oficios tradicionales Mujeres mineras Trabajo en el río Relación espiritual con la naturaleza Cosmovisión del oro Metal vivo Paciencia y destreza Observación detallada Cultura ribereña Tradición oral Economía de subsistencia Herencia ancestral https://www.youtube.com/watch?v=DRduippHOAI"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-56",
      "row": 56,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro De una vaca vive mucha gente",
      "type": "Sonoro",
      "description": "Un mensaje que nos invita a comprender el esfuerzo de las vidas campesinas para poner un vaso de leche en nuestras mesas.",
      "keywords": [
        "Vidas campesinas",
        "Esfuerzo rural",
        "Producción lechera",
        "Trabajo diario",
        "Madrugadas campesinas",
        "Cuidado animal",
        "Ordeño",
        "Cadena alimentaria",
        "Campo y ciudad",
        "Interdependencia",
        "Alimentación"
      ],
      "link": "https://open.spotify.com/episode/0vsFAp9yGDGqevLhBtqTyP?si=062c747d623b4c6d",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Mensaje sonoro De una vaca vive mucha gente Sonoro Un mensaje que nos invita a comprender el esfuerzo de las vidas campesinas para poner un vaso de leche en nuestras mesas. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Vidas campesinas Esfuerzo rural Producción lechera Trabajo diario Madrugadas campesinas Cuidado animal Ordeño Cadena alimentaria Campo y ciudad Interdependencia Alimentación https://open.spotify.com/episode/0vsFAp9yGDGqevLhBtqTyP?si=062c747d623b4c6d"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-57",
      "row": 57,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro El río tiene memoria",
      "type": "Sonoro",
      "description": "Una joven cantautora caqueteña que estudia en Bogotá, nos comparte los aprendizajes que el río le ha dado para cantar por las vidas campesinas donde quiera que se encuentre, porque el rio \"nos ensenó a pensar en colectivo\".",
      "keywords": [
        "Cantautora",
        "Joven artista",
        "Caquetá",
        "Bogotá",
        "Inspiración del río",
        "Vidas campesinas",
        "Música con sentido social",
        "Aprendizajes del río",
        "Pensamiento colectivo",
        "Cultura rural",
        "Tradición y modernidad",
        "Voz de la comunidad",
        "Conexión con el territorio",
        "Arte comprometido",
        "Memoria campesina",
        "Educación artística",
        "Transformación social"
      ],
      "link": "https://open.spotify.com/episode/0fVY4zBLDRMlU9L36lnA58?si=95982b1750ef49e4",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Mensaje sonoro El río tiene memoria Sonoro Una joven cantautora caqueteña que estudia en Bogotá, nos comparte los aprendizajes que el río le ha dado para cantar por las vidas campesinas donde quiera que se encuentre, porque el rio \"nos ensenó a pensar en colectivo\". Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Cantautora Joven artista Caquetá Bogotá Inspiración del río Vidas campesinas Música con sentido social Aprendizajes del río Pensamiento colectivo Cultura rural Tradición y modernidad Voz de la comunidad Conexión con el territorio Arte comprometido Memoria campesina Educación artística Transformación social https://open.spotify.com/episode/0fVY4zBLDRMlU9L36lnA58?si=95982b1750ef49e4"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-58",
      "row": 58,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro En el campo está el futuro",
      "type": "Sonoro",
      "description": "Los pregones se escuchan temprano en las calles de los pueblos caqueteños con los que las y los campesinos ofrecen sus productos. Esta copla nos invita a promover cadenas de producción que garanticen la vida digna de las vidas campesinas.",
      "keywords": [
        "Pregones",
        "Calles de pueblo",
        "Caquetá",
        "Campesinos y campesinas",
        "Oferta de productos",
        "Coplas tradicionales",
        "Economía local",
        "Producción campesina",
        "Vida digna",
        "Cadenas de valor",
        "Comercio justo",
        "Cultura popular",
        "Saberes rurales",
        "Tradición oral",
        "Sostenibilidad económica",
        "Promoción del campo",
        "Identidad regional"
      ],
      "link": "https://open.spotify.com/episode/5qZrGoTGI8JwDU4Xnz81D3?si=7ea1236bc79643f3",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Mensaje sonoro En el campo está el futuro Sonoro Los pregones se escuchan temprano en las calles de los pueblos caqueteños con los que las y los campesinos ofrecen sus productos. Esta copla nos invita a promover cadenas de producción que garanticen la vida digna de las vidas campesinas. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Pregones Calles de pueblo Caquetá Campesinos y campesinas Oferta de productos Coplas tradicionales Economía local Producción campesina Vida digna Cadenas de valor Comercio justo Cultura popular Saberes rurales Tradición oral Sostenibilidad económica Promoción del campo Identidad regional https://open.spotify.com/episode/5qZrGoTGI8JwDU4Xnz81D3?si=7ea1236bc79643f3"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-59",
      "row": 59,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro Pregones son sabores",
      "type": "Sonoro",
      "description": "Los pregones se escuchan temprano en las calles de los pueblos caquetenos con los que las y los campesinos ofrecen sus productos. Esta copla nos invita a promover cadenas de producción que garanticen la vida digna de las vidas campesinas.",
      "keywords": [
        "Pregones",
        "Calles de pueblo",
        "Caquetá",
        "Campesinos y campesinas",
        "Oferta de productos",
        "Coplas tradicionales",
        "Economía local",
        "Producción campesina",
        "Vida digna",
        "Cadenas de valor",
        "Comercio justo",
        "Cultura popular",
        "Saberes rurales",
        "Tradición oral",
        "Sostenibilidad económica",
        "Promoción del campo",
        "Identidad regional"
      ],
      "link": "https://open.spotify.com/episode/0HBXBxa8uije8ggncoirU5?si=16c825cc2b674869",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Mensaje sonoro Pregones son sabores Sonoro Los pregones se escuchan temprano en las calles de los pueblos caquetenos con los que las y los campesinos ofrecen sus productos. Esta copla nos invita a promover cadenas de producción que garanticen la vida digna de las vidas campesinas. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Pregones Calles de pueblo Caquetá Campesinos y campesinas Oferta de productos Coplas tradicionales Economía local Producción campesina Vida digna Cadenas de valor Comercio justo Cultura popular Saberes rurales Tradición oral Sostenibilidad económica Promoción del campo Identidad regional https://open.spotify.com/episode/0HBXBxa8uije8ggncoirU5?si=16c825cc2b674869"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-60",
      "row": 60,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro De cómo curar la picadura de raya",
      "type": "Sonoro",
      "description": "En curas, remedios y saberes, William nos cuenta como la sabiduría de las vidas campesinas lo curó de la picadura de una raya, en medio de los remolinos del Raudal del Guayabero.",
      "keywords": [
        "Saberes campesinos",
        "Medicina tradicional",
        "Remedios naturales",
        "Curación ancestral",
        "William",
        "Picadura de raya",
        "Raudal del Guayabero",
        "Experiencia en el río",
        "Conocimiento empírico",
        "Relación humano-naturaleza",
        "Protección y cuidado",
        "Cultura rural",
        "Sabiduría popular",
        "Oficios y prácticas del campo",
        "Resiliencia ante riesgos naturales",
        "Tradición oral"
      ],
      "link": "https://open.spotify.com/episode/7JlImc0wFU8XznXn2UFwXF?si=3869965fc1f0416f",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural ICANH Mensaje sonoro De cómo curar la picadura de raya Sonoro En curas, remedios y saberes, William nos cuenta como la sabiduría de las vidas campesinas lo curó de la picadura de una raya, en medio de los remolinos del Raudal del Guayabero. Colombia se construye desde nuestra relación con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Saberes campesinos Medicina tradicional Remedios naturales Curación ancestral William Picadura de raya Raudal del Guayabero Experiencia en el río Conocimiento empírico Relación humano-naturaleza Protección y cuidado Cultura rural Sabiduría popular Oficios y prácticas del campo Resiliencia ante riesgos naturales Tradición oral https://open.spotify.com/episode/7JlImc0wFU8XznXn2UFwXF?si=3869965fc1f0416f"
    },
    {
      "id": "somos-cultura-de-paz-61",
      "row": 61,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Transmedia Túnel del Tiempo",
      "type": "Transmedia",
      "description": "Túnel del Tiempo es un proyecto transmedia de comunicación propia desarrollado en el marco de la conmemoración de los 500 años de Santa Marta. Es un ejercicio de participación étnica, gobernanza narrativa y soberanía cultural y digital, con los siete pueblos indígenas del distrito (Arhuaco, Wiwa, Kogui, Kankuamo, Ette Ennaka, Wayuu y Taganga). La plataforma web se estructura en un mapa interactivo con documentales, piezas sonoras, fotogalerías y contenidos del proceso, como memoria de resistencia cultural y espiritual.",
      "keywords": [
        "Túnel del Tiempo",
        "Proyecto transmedia",
        "Comunicación propia",
        "Conmemoración 500 años Santa Marta",
        "Participación étnica",
        "Gobernanza narrativa",
        "Soberanía cultural",
        "Soberanía digital",
        "Pueblos indígenas",
        "Arhuaco, Wiwa, Kogui, Kankuamo, Ette Ennaka, Wayuu, Taganga",
        "Plataforma web",
        "Mapa interactivo",
        "Documentales",
        "Piezas sonoras",
        "Fotogalerías",
        "Memoria cultural",
        "Resistencia cultural",
        "Espiritualidad indígena",
        "Contenidos participativos"
      ],
      "link": "https://tuneldeltiemposantamarta.mincultura.gov.co/index.html",
      "asset_link": "",
      "force_message": "El Túnel del Tiempo es un dispositivo digital de memoria y gobernanza cultural donde los siete pueblos indígenas relatan la resistencia cultural y espiritual en el marco de los 500 años de Santa Marta. El Túnel es un ejercicio de comunicación propia y soberanía que reafirma el derecho de los pueblos a narrarse, a existir y a decidir sobre la circulación de sus memorias.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS Transmedia Túnel del Tiempo Transmedia Túnel del Tiempo es un proyecto transmedia de comunicación propia desarrollado en el marco de la conmemoración de los 500 años de Santa Marta. Es un ejercicio de participación étnica, gobernanza narrativa y soberanía cultural y digital, con los siete pueblos indígenas del distrito (Arhuaco, Wiwa, Kogui, Kankuamo, Ette Ennaka, Wayuu y Taganga). La plataforma web se estructura en un mapa interactivo con documentales, piezas sonoras, fotogalerías y contenidos del proceso, como memoria de resistencia cultural y espiritual. El Túnel del Tiempo es un dispositivo digital de memoria y gobernanza cultural donde los siete pueblos indígenas relatan la resistencia cultural y espiritual en el marco de los 500 años de Santa Marta. El Túnel es un ejercicio de comunicación propia y soberanía que reafirma el derecho de los pueblos a narrarse, a existir y a decidir sobre la circulación de sus memorias. Túnel del Tiempo Proyecto transmedia Comunicación propia Conmemoración 500 años Santa Marta Participación étnica Gobernanza narrativa Soberanía cultural Soberanía digital Pueblos indígenas Arhuaco, Wiwa, Kogui, Kankuamo, Ette Ennaka, Wayuu, Taganga Plataforma web Mapa interactivo Documentales Piezas sonoras Fotogalerías Memoria cultural Resistencia cultural Espiritualidad indígena Contenidos participativos https://tuneldeltiemposantamarta.mincultura.gov.co/index.html"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-62",
      "row": 62,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Documental Bullerengue, memoria viva de Puerto Escondido",
      "type": "Documental",
      "description": "Documental de la Escuela de Comunicación Carambantúa Lab: Narrativas del Bullerengue. Bullerengue, Memoria Viva de Puerto Escondido recoge memorias orales, historias de vida y prácticas culturales de maestros, maestras y sabedoras del bullerengue. Explora sus raíces ancestrales, la identidad y el territorio, mostrando cómo esta tradición ha resistido el tiempo y cómo las nuevas generaciones continúan heredando y recreando este legado cultural.",
      "keywords": [
        "Documental",
        "Escuela de Comunicación Carambantúa Lab",
        "Narrativas del Bullerengue",
        "Bullerengue",
        "Memoria viva",
        "Puerto Escondido",
        "Memorias orales",
        "Historias de vida",
        "Prácticas culturales",
        "Maestros y maestras",
        "Sabedoras",
        "Raíces ancestrales",
        "Identidad cultural",
        "Territorio",
        "Resistencia cultural",
        "Herencia intergeneracional",
        "Legado cultural",
        "Tradición musical",
        "Cultura afrocolombiana",
        "Recreación cultural"
      ],
      "link": "https://mcultura.sharepoint.com/sites/DACMI/_layouts/15/stream.aspx?id=%2Fsites%2FDACMI%2FDocumentos%20compartidos%2FGeneral%2FGrupo%20CCT%202025%2F003%5FCONVENIOS%20GRUPO%20COM%5F2025%2F1%5F0798%5FCONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O%2F3%5F%20EJECUCI%C3%93N%2F5%5F%20ESTRATEGIAS%2F1%5FAFROCOLOMBIAS%2F1%5FFORMACI%C3%93N%2F004%5FEscuelas%20Comunicaci%C3%B3n%20Afrocolombias2025%2F9%2E%20%20PUERTO%20ESCONDIDO%2F3%5F%20pago%5F10%25%2F1%2E%20Contenidos%2F1%2E%20Contenido%2FDocumental%2Emp4&referrer=StreamWebApp%2EWeb&referrerScenario=AddressBarCopied%2Eview%2Ea7b1548c%2D54ac%2D4513%2D933c%2D56fd0506d4af",
      "asset_link": "",
      "force_message": "La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos que las comunidades han sembrado en su territorio. Desde el bullerengue hasta las voces de los ríos, comunicar es preservar lo que permanece, transmitir identidad y proyectar futuro desde la memoria colectiva.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS Documental Bullerengue, memoria viva de Puerto Escondido Documental Documental de la Escuela de Comunicación Carambantúa Lab: Narrativas del Bullerengue. Bullerengue, Memoria Viva de Puerto Escondido recoge memorias orales, historias de vida y prácticas culturales de maestros, maestras y sabedoras del bullerengue. Explora sus raíces ancestrales, la identidad y el territorio, mostrando cómo esta tradición ha resistido el tiempo y cómo las nuevas generaciones continúan heredando y recreando este legado cultural. La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos que las comunidades han sembrado en su territorio. Desde el bullerengue hasta las voces de los ríos, comunicar es preservar lo que permanece, transmitir identidad y proyectar futuro desde la memoria colectiva. Documental Escuela de Comunicación Carambantúa Lab Narrativas del Bullerengue Bullerengue Memoria viva Puerto Escondido Memorias orales Historias de vida Prácticas culturales Maestros y maestras Sabedoras Raíces ancestrales Identidad cultural Territorio Resistencia cultural Herencia intergeneracional Legado cultural Tradición musical Cultura afrocolombiana Recreación cultural https://mcultura.sharepoint.com/sites/DACMI/_layouts/15/stream.aspx?id=%2Fsites%2FDACMI%2FDocumentos%20compartidos%2FGeneral%2FGrupo%20CCT%202025%2F003%5FCONVENIOS%20GRUPO%20COM%5F2025%2F1%5F0798%5FCONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O%2F3%5F%20EJECUCI%C3%93N%2F5%5F%20ESTRATEGIAS%2F1%5FAFROCOLOMBIAS%2F1%5FFORMACI%C3%93N%2F004%5FEscuelas%20Comunicaci%C3%B3n%20Afrocolombias2025%2F9%2E%20%20PUERTO%20ESCONDIDO%2F3%5F%20pago%5F10%25%2F1%2E%20Contenidos%2F1%2E%20Contenido%2FDocumental%2Emp4&referrer=StreamWebApp%2EWeb&referrerScenario=AddressBarCopied%2Eview%2Ea7b1548c%2D54ac%2D4513%2D933c%2D56fd0506d4af"
    },
    {
      "id": "somos-cultura-de-paz-63",
      "row": 63,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Reportaje Pusandao",
      "type": "Reportaje",
      "description": "Colectivo Las Leyendas del Magüí. Relatos Magüireños. Pusandao. El relato aborda el río Magüí y su importancia para la vida en Magüí Payán, así como la preocupación por su contaminación debido a la extracción de oro, evidenciando impactos ambientales y sociales. La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos del territorio, preservando identidad y proyectando futuro desde la memoria colectiva.",
      "keywords": [
        "Colectivo Las Leyendas del Magüí",
        "Relatos Magüireños",
        "Pusandao",
        "Río Magüí",
        "Magüí Payán",
        "Importancia del río",
        "Contaminación ambiental",
        "Minería de oro",
        "Impactos sociales y ambientales",
        "Memoria viva",
        "Palabra y relato",
        "Ritmo tradicional",
        "Identidad territorial",
        "Cultura local",
        "Territorio y comunidad",
        "Memoria colectiva",
        "Conservación del patrimonio",
        "Sostenibilidad",
        "Comunicación participativa",
        "Proyección futura desde la memoria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/01_PAC%C3%8DFICO%20NARI%C3%91ENSE/01.%20Escuelas/1_FUNDACION%20BOGANDO%20PRODUCCIONES/3_PAGO%203/1.%20CONTENIDOS/3.%20PRODUCTO/3.%20PUSANDAO.mp4?csf=1&web=1&e=fBlv70",
      "asset_link": "",
      "force_message": "La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos que las comunidades han sembrado en su territorio. Desde el bullerengue hasta las voces de los ríos, comunicar es preservar lo que permanece, transmitir identidad y proyectar futuro desde la memoria colectiva.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS Reportaje Pusandao Reportaje Colectivo Las Leyendas del Magüí. Relatos Magüireños. Pusandao. El relato aborda el río Magüí y su importancia para la vida en Magüí Payán, así como la preocupación por su contaminación debido a la extracción de oro, evidenciando impactos ambientales y sociales. La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos del territorio, preservando identidad y proyectando futuro desde la memoria colectiva. La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos que las comunidades han sembrado en su territorio. Desde el bullerengue hasta las voces de los ríos, comunicar es preservar lo que permanece, transmitir identidad y proyectar futuro desde la memoria colectiva. Colectivo Las Leyendas del Magüí Relatos Magüireños Pusandao Río Magüí Magüí Payán Importancia del río Contaminación ambiental Minería de oro Impactos sociales y ambientales Memoria viva Palabra y relato Ritmo tradicional Identidad territorial Cultura local Territorio y comunidad Memoria colectiva Conservación del patrimonio Sostenibilidad Comunicación participativa Proyección futura desde la memoria https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/01_PAC%C3%8DFICO%20NARI%C3%91ENSE/01.%20Escuelas/1_FUNDACION%20BOGANDO%20PRODUCCIONES/3_PAGO%203/1.%20CONTENIDOS/3.%20PRODUCTO/3.%20PUSANDAO.mp4?csf=1&web=1&e=fBlv70"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-64",
      "row": 64,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Documental El Bullerengue y las voces del río",
      "type": "Documental",
      "description": "Escuela Voces Vivas del Río de Guaduas. El Bullerengue y las Voces del Río. El proyecto muestra la conexión entre el bullerengue y las voces del río, destacando cómo matronas, juglares, sabedores, maestros y hacedores han preservado esta tradición cultural a través de generaciones. La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos del territorio, preservando identidad y proyectando futuro desde la memoria colectiva.",
      "keywords": [
        "Escuela Voces Vivas del Río de Guaduas",
        "Bullerengue",
        "Voces del río",
        "Tradición cultural",
        "Matronas",
        "Juglares",
        "Sabedores",
        "Maestros",
        "Hacedores",
        "Preservación intergeneracional",
        "Memoria viva",
        "Palabra y relato",
        "Ritmo tradicional",
        "Identidad cultural",
        "Territorio",
        "Memoria colectiva",
        "Herencia cultural",
        "Educación comunitaria",
        "Proyección futura",
        "Cultura afrocolombiana"
      ],
      "link": "https://mcultura.sharepoint.com/sites/DACMI/Documentos%20compartidos/Forms/AllItems.aspx?id=%2Fsites%2FDACMI%2FDocumentos%20compartidos%2FGeneral%2FGrupo%20COM%202024%2F03%5FConvenios%20Grupo%20COM%202024%2F02%5FCONVENIO%20AFROCOLOMBIAS%5F2035%5F24%2F3%5FEJECUCI%C3%93N%2FESTRATEGIA%5F1%5FFORTALECIMIENTO%20COMUNICACI%C3%93N%20AFROCOLOMBIANA%2F00%5FESCUELAS%20DE%20COMUNICACI%C3%93N%2F2%5FCONVOCATORIA%20ESCUELAS%20NACIONAL%2F2%5FOrganizaci%C3%B3n%20de%20profesionales%20Afrodescendiente%20ra%C3%ADces%20de%20%C3%89bano%2F3%5FTERCER%5FPAGO%5F20%25%2F1%2E%20CONTENIDOS%2F2%2E%20PRODUCTO&viewid=812fa338%2Dbf7a%2D4ee1%2D8fe5%2Dbbb9b939e0f6&ct=1708359294608&or=OWA%2DNT&cid=9ed5b085%2D6b37%2Ddcc0%2Ddd84%2Dd71de767bec9",
      "asset_link": "",
      "force_message": "La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos que las comunidades han sembrado en su territorio. Desde el bullerengue hasta las voces de los ríos, comunicar es preservar lo que permanece, transmitir identidad y proyectar futuro desde la memoria colectiva.",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS Documental El Bullerengue y las voces del río Documental Escuela Voces Vivas del Río de Guaduas. El Bullerengue y las Voces del Río. El proyecto muestra la conexión entre el bullerengue y las voces del río, destacando cómo matronas, juglares, sabedores, maestros y hacedores han preservado esta tradición cultural a través de generaciones. La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos del territorio, preservando identidad y proyectando futuro desde la memoria colectiva. La comunicación es memoria viva: guarda la palabra, el ritmo y los relatos que las comunidades han sembrado en su territorio. Desde el bullerengue hasta las voces de los ríos, comunicar es preservar lo que permanece, transmitir identidad y proyectar futuro desde la memoria colectiva. Escuela Voces Vivas del Río de Guaduas Bullerengue Voces del río Tradición cultural Matronas Juglares Sabedores Maestros Hacedores Preservación intergeneracional Memoria viva Palabra y relato Ritmo tradicional Identidad cultural Territorio Memoria colectiva Herencia cultural Educación comunitaria Proyección futura Cultura afrocolombiana https://mcultura.sharepoint.com/sites/DACMI/Documentos%20compartidos/Forms/AllItems.aspx?id=%2Fsites%2FDACMI%2FDocumentos%20compartidos%2FGeneral%2FGrupo%20COM%202024%2F03%5FConvenios%20Grupo%20COM%202024%2F02%5FCONVENIO%20AFROCOLOMBIAS%5F2035%5F24%2F3%5FEJECUCI%C3%93N%2FESTRATEGIA%5F1%5FFORTALECIMIENTO%20COMUNICACI%C3%93N%20AFROCOLOMBIANA%2F00%5FESCUELAS%20DE%20COMUNICACI%C3%93N%2F2%5FCONVOCATORIA%20ESCUELAS%20NACIONAL%2F2%5FOrganizaci%C3%B3n%20de%20profesionales%20Afrodescendiente%20ra%C3%ADces%20de%20%C3%89bano%2F3%5FTERCER%5FPAGO%5F20%25%2F1%2E%20CONTENIDOS%2F2%2E%20PRODUCTO&viewid=812fa338%2Dbf7a%2D4ee1%2D8fe5%2Dbbb9b939e0f6&ct=1708359294608&or=OWA%2DNT&cid=9ed5b085%2D6b37%2Ddcc0%2Ddd84%2Dd71de767bec9"
    },
    {
      "id": "somos-cultura-de-paz-65",
      "row": 65,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Memoria y Circulación.",
      "title": "Video memoria patrimonio audiovisual CRIDEC",
      "type": "Video",
      "description": "Video memoria que reúne voces de líderes indígenas, comuneros y profesionales que reflexionan sobre el valor de las memorias audiovisuales registradas dentro de los territorios del departamento de Caldas filiales al Consejo Regional Indígena de Caldas (CRIDEC). Es importante dar a conocer cómo se está llevando a acabo el proceso de gestión de la memoria en el marco del Programa de Patrimonio Audiovisual Colombiano, Capítulo Pueblos Indígenas (PACCPI).",
      "keywords": [
        "Video memoria",
        "Líderes indígenas",
        "Comuneros",
        "Profesionales",
        "Reflexión sobre memorias audiovisuales",
        "Territorios de Caldas",
        "Consejo Regional Indígena de Caldas (CRIDEC)",
        "Gestión de la memoria",
        "Programa de Patrimonio Audiovisual Colombiano (PACCPI)",
        "Capítulo Pueblos Indígenas",
        "Registro audiovisual",
        "Cultura indígena",
        "Conservación del patrimonio",
        "Identidad territorial",
        "Memoria colectiva",
        "Procesos comunitarios",
        "Patrimonio cultural",
        "Difusión cultural",
        "Participación indígena",
        "Memoria histórica"
      ],
      "link": "https://mcultura-my.sharepoint.com/:v:/g/personal/avillanueva_mincultura_gov_co/IQBoZkpaqepUS5s2phXZJEZkAaipaEbfg0xTt2jQ1OIcCaw?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=JUah2G",
      "asset_link": "",
      "force_message": "Salvaguardar el patrimonio audiovisual es salvaguardar la memoria de nuestros ancestros, de nuestras luchas, de nuestro proceso organizativo.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Memoria y Circulación. Video memoria patrimonio audiovisual CRIDEC Video Video memoria que reúne voces de líderes indígenas, comuneros y profesionales que reflexionan sobre el valor de las memorias audiovisuales registradas dentro de los territorios del departamento de Caldas filiales al Consejo Regional Indígena de Caldas (CRIDEC). Es importante dar a conocer cómo se está llevando a acabo el proceso de gestión de la memoria en el marco del Programa de Patrimonio Audiovisual Colombiano, Capítulo Pueblos Indígenas (PACCPI). Salvaguardar el patrimonio audiovisual es salvaguardar la memoria de nuestros ancestros, de nuestras luchas, de nuestro proceso organizativo. Video memoria Líderes indígenas Comuneros Profesionales Reflexión sobre memorias audiovisuales Territorios de Caldas Consejo Regional Indígena de Caldas (CRIDEC) Gestión de la memoria Programa de Patrimonio Audiovisual Colombiano (PACCPI) Capítulo Pueblos Indígenas Registro audiovisual Cultura indígena Conservación del patrimonio Identidad territorial Memoria colectiva Procesos comunitarios Patrimonio cultural Difusión cultural Participación indígena Memoria histórica https://mcultura-my.sharepoint.com/:v:/g/personal/avillanueva_mincultura_gov_co/IQBoZkpaqepUS5s2phXZJEZkAaipaEbfg0xTt2jQ1OIcCaw?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=JUah2G"
    },
    {
      "id": "somos-cultura-de-paz-66",
      "row": 66,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Memoria y Circulación.",
      "title": "Video Guardianes de la imagen y saberes del Padre Fuego en el CRIHU",
      "type": "Video",
      "description": "A través de rostros, simbologías, medicina ancestral y el palabreo alrededor del Padre Fuego, se revela la importancia del patrimonio audiovisual, los riesgos de su pérdida, el despertar de conciencia con la implementación del Patrimonio Audiovisual Colombiano, Capítulo Pueblos Indígenas, PACCPI en los ocho pueblos del CRIHU.",
      "keywords": [
        "Rostros y simbologías",
        "Medicina ancestral",
        "Padre Fuego",
        "Patrimonio audiovisual",
        "Riesgos de pérdida",
        "Despertar de conciencia",
        "Implementación PACCPI",
        "Capítulo Pueblos Indígenas",
        "Ocho pueblos del CRIHU",
        "Cultura indígena",
        "Tradición oral",
        "Memoria colectiva",
        "Conservación del patrimonio",
        "Identidad cultural",
        "Saberes ancestrales",
        "Comunicación audiovisual",
        "Preservación histórica",
        "Territorio indígena",
        "Participación comunitaria",
        "Protección del patrimonio intangible"
      ],
      "link": "https://mcultura-my.sharepoint.com/:v:/g/personal/avillanueva_mincultura_gov_co/IQAJ_x7nWYlAQKBtr05xwBLHAXgwb47s-3sdJxKYbJ5WmrY?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=UJfThE",
      "asset_link": "",
      "force_message": "El territorio también es un archivo. En cada piedra y en cada árbol se guarda la huella de quienes nos enseñaron a mirar con respeto.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Memoria y Circulación. Video Guardianes de la imagen y saberes del Padre Fuego en el CRIHU Video A través de rostros, simbologías, medicina ancestral y el palabreo alrededor del Padre Fuego, se revela la importancia del patrimonio audiovisual, los riesgos de su pérdida, el despertar de conciencia con la implementación del Patrimonio Audiovisual Colombiano, Capítulo Pueblos Indígenas, PACCPI en los ocho pueblos del CRIHU. El territorio también es un archivo. En cada piedra y en cada árbol se guarda la huella de quienes nos enseñaron a mirar con respeto. Rostros y simbologías Medicina ancestral Padre Fuego Patrimonio audiovisual Riesgos de pérdida Despertar de conciencia Implementación PACCPI Capítulo Pueblos Indígenas Ocho pueblos del CRIHU Cultura indígena Tradición oral Memoria colectiva Conservación del patrimonio Identidad cultural Saberes ancestrales Comunicación audiovisual Preservación histórica Territorio indígena Participación comunitaria Protección del patrimonio intangible https://mcultura-my.sharepoint.com/:v:/g/personal/avillanueva_mincultura_gov_co/IQAJ_x7nWYlAQKBtr05xwBLHAXgwb47s-3sdJxKYbJ5WmrY?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=UJfThE"
    },
    {
      "id": "somos-cultura-de-paz-67",
      "row": 67,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Memorias",
      "type": "Cortometraje",
      "description": "Cortometraje colectivo creado en el marco del proceso de devolución de archivos audiovisuales al CRIC, realizada por el Archivo Shub con el apoyo de Daupará. Durante tres días, siete creadoras se encontraron con un archivo fotográfico que no conocían, y colectivamente hilaron esta experiencia audiovisual que es huella de lo que esas imágenes les hicieron sentir. El proceso de devolución se da en el marco de la Beca de Gestión del Patrimonio Audiovisual Colombiano (PAC),",
      "keywords": [
        "Cortometraje colectivo",
        "Devolución de archivos audiovisuales",
        "CRIC",
        "Archivo Shub",
        "Apoyo de Daupará",
        "Encuentro con archivo fotográfico",
        "Siete creadoras",
        "Experiencia audiovisual",
        "Memoria colectiva",
        "Huella emocional",
        "Gestión del patrimonio audiovisual",
        "Beca PAC",
        "Cultura indígena",
        "Registro histórico",
        "Narrativa participativa",
        "Preservación de archivos",
        "Identidad cultural",
        "Procesos comunitarios",
        "Arte y memoria",
        "Creación colaborativa"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "El retorno de la memoria fortalece la re-existencia de los pueblos indígenas.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Memorias Cortometraje Cortometraje colectivo creado en el marco del proceso de devolución de archivos audiovisuales al CRIC, realizada por el Archivo Shub con el apoyo de Daupará. Durante tres días, siete creadoras se encontraron con un archivo fotográfico que no conocían, y colectivamente hilaron esta experiencia audiovisual que es huella de lo que esas imágenes les hicieron sentir. El proceso de devolución se da en el marco de la Beca de Gestión del Patrimonio Audiovisual Colombiano (PAC), El retorno de la memoria fortalece la re-existencia de los pueblos indígenas. Cortometraje colectivo Devolución de archivos audiovisuales CRIC Archivo Shub Apoyo de Daupará Encuentro con archivo fotográfico Siete creadoras Experiencia audiovisual Memoria colectiva Huella emocional Gestión del patrimonio audiovisual Beca PAC Cultura indígena Registro histórico Narrativa participativa Preservación de archivos Identidad cultural Procesos comunitarios Arte y memoria Creación colaborativa NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-68",
      "row": 68,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Calixto El Burro",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en el barrio Villa Mery del municipio de Maicao (La Guajira) en 2024. Diana y su hermano Andrés son obligados por su padre a recoger agua en pesados tanques transportados por Calixto, el burro de la familia. La hija de una vecina, al notar el maltrato del animal, decide intervenir y lo roba para darle el agua que necesita y protegerlo.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Barrio Villa Mery",
        "Maicao, La Guajira",
        "2024",
        "Diana y Andrés",
        "Trabajo infantil",
        "Recolección de agua",
        "Tanques pesados",
        "Calixto, el burro",
        "Maltrato animal",
        "Intervención vecinal",
        "Protección animal",
        "Solidaridad comunitaria",
        "Derechos de los animales",
        "Vida rural",
        "Narrativa social",
        "Conciencia ética",
        "Historias locales",
        "Cultura comunitaria"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "En un territorio de la Guajira, con escasez de agua, Calixto, el burro muestra cómo la violencia normalizada se reproduce en la vida cotidiana, y cómo la mirada de la infancia propone el cuidado y la compasión como formas de resistencia y dignificación de la vida.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Calixto El Burro Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en el barrio Villa Mery del municipio de Maicao (La Guajira) en 2024. Diana y su hermano Andrés son obligados por su padre a recoger agua en pesados tanques transportados por Calixto, el burro de la familia. La hija de una vecina, al notar el maltrato del animal, decide intervenir y lo roba para darle el agua que necesita y protegerlo. En un territorio de la Guajira, con escasez de agua, Calixto, el burro muestra cómo la violencia normalizada se reproduce en la vida cotidiana, y cómo la mirada de la infancia propone el cuidado y la compasión como formas de resistencia y dignificación de la vida. Cortometraje comunitario Formación en cine comunitario Barrio Villa Mery Maicao, La Guajira 2024 Diana y Andrés Trabajo infantil Recolección de agua Tanques pesados Calixto, el burro Maltrato animal Intervención vecinal Protección animal Solidaridad comunitaria Derechos de los animales Vida rural Narrativa social Conciencia ética Historias locales Cultura comunitaria NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-69",
      "row": 69,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Huellas Ancestrales",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en el corregimiento Eduardo Santos del municipio de Barranquilla (Atlántico) en 2025. Narra cómo el manglar y la ciénaga de Mallorquín, antes dominantes en el territorio de La Playa, han sido afectados por el desarrollo urbano y la expansión de la ciudad. Pescadores, artesanos y cocineras reconstruyen la memoria del lugar y la urgencia de su preservación.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Corregimiento Eduardo Santos",
        "Barranquilla, Atlántico",
        "2025",
        "Manglar",
        "Ciénaga de Mallorquín",
        "La Playa",
        "Desarrollo urbano",
        "Expansión de la ciudad",
        "Pescadores",
        "Artesanos",
        "Cocineras",
        "Memoria del territorio",
        "Preservación ambiental",
        "Conciencia ecológica",
        "Patrimonio natural",
        "Cultura local",
        "Impacto ambiental",
        "Historia comunitaria"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Huellas ancestrales reflexiona sobre la pérdida del vínculo entre comunidad y naturaleza frente al avance del desarrollo urbano, evidenciando cómo el deterioro del manglar y la ciénaga de Mallorquín (Corregimiento La playa, Barranquilla), amenaza no solo la biodiversidad, sino también la memoria, los saberes y las prácticas culturales de quienes han habitado históricamente el territorio. A través de las voces comunitarias, se reivindica la urgencia de recuperar y proteger esa memoria ancestral como base para la vida y la identidad colectiva.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Huellas Ancestrales Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en el corregimiento Eduardo Santos del municipio de Barranquilla (Atlántico) en 2025. Narra cómo el manglar y la ciénaga de Mallorquín, antes dominantes en el territorio de La Playa, han sido afectados por el desarrollo urbano y la expansión de la ciudad. Pescadores, artesanos y cocineras reconstruyen la memoria del lugar y la urgencia de su preservación. Huellas ancestrales reflexiona sobre la pérdida del vínculo entre comunidad y naturaleza frente al avance del desarrollo urbano, evidenciando cómo el deterioro del manglar y la ciénaga de Mallorquín (Corregimiento La playa, Barranquilla), amenaza no solo la biodiversidad, sino también la memoria, los saberes y las prácticas culturales de quienes han habitado históricamente el territorio. A través de las voces comunitarias, se reivindica la urgencia de recuperar y proteger esa memoria ancestral como base para la vida y la identidad colectiva. Cortometraje comunitario Formación en cine comunitario Corregimiento Eduardo Santos Barranquilla, Atlántico 2025 Manglar Ciénaga de Mallorquín La Playa Desarrollo urbano Expansión de la ciudad Pescadores Artesanos Cocineras Memoria del territorio Preservación ambiental Conciencia ecológica Patrimonio natural Cultura local Impacto ambiental Historia comunitaria NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-70",
      "row": 70,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje El Pozón Baila",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en el barrio El Pozón de Cartagena (Bolívar) en 2025. Nichol, una bailarina del barrio, y sus amigos luchan por cumplir su sueño de bailar pese a los estigmas y la falta de apoyo familiar y comunitario. Tras no obtener un espacio en la Casa de la Cultura, organizan una toma cultural para reivindicar el baile como una expresión artística y sana.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Barrio El Pozón",
        "Cartagena, Bolívar",
        "2025",
        "Nichol",
        "Bailarina",
        "Sueños artísticos",
        "Amigos del barrio",
        "Estigmas sociales",
        "Falta de apoyo familiar y comunitario",
        "Casa de la Cultura",
        "Toma cultural",
        "Reivindicación del baile",
        "Expresión artística",
        "Cultura local",
        "Arte urbano",
        "Juventud y creatividad",
        "Resiliencia comunitaria",
        "Participación ciudadana"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "El Pozón baila retrata el baile como una herramienta de resistencia y afirmación juvenil frente a los estigmas, la falta de oportunidades y el abandono institucional. Desde la iniciativa colectiva, se reivindica el arte y la ocupación cultural del espacio público como actos legítimos de dignidad, expresión y transformación social en los territorios populares del barrio El Pozón Cartagena.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje El Pozón Baila Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en el barrio El Pozón de Cartagena (Bolívar) en 2025. Nichol, una bailarina del barrio, y sus amigos luchan por cumplir su sueño de bailar pese a los estigmas y la falta de apoyo familiar y comunitario. Tras no obtener un espacio en la Casa de la Cultura, organizan una toma cultural para reivindicar el baile como una expresión artística y sana. El Pozón baila retrata el baile como una herramienta de resistencia y afirmación juvenil frente a los estigmas, la falta de oportunidades y el abandono institucional. Desde la iniciativa colectiva, se reivindica el arte y la ocupación cultural del espacio público como actos legítimos de dignidad, expresión y transformación social en los territorios populares del barrio El Pozón Cartagena. Cortometraje comunitario Formación en cine comunitario Barrio El Pozón Cartagena, Bolívar 2025 Nichol Bailarina Sueños artísticos Amigos del barrio Estigmas sociales Falta de apoyo familiar y comunitario Casa de la Cultura Toma cultural Reivindicación del baile Expresión artística Cultura local Arte urbano Juventud y creatividad Resiliencia comunitaria Participación ciudadana NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-71",
      "row": 71,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Mar De Libertad",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en Apartadó (Antioquia) en 2024. Romina sale del mar en busca de su hija Manuela, quien trabaja en una finca bananera. Desde un misterioso cuarto, Manuela escucha a su madre pedirle un llamador. Frente a un altar en su honor escondido en el cuarto, Romina le canta un arrullo, creando un vínculo profundo que impulsa a Manuela a liberarse. Con el mar como su única salida, Manuela emprende una carrera hacia la libertad.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Apartadó, Antioquia",
        "2024",
        "Romina",
        "Manuela",
        "Mar",
        "Finca bananera",
        "Llamador",
        "Arrullo",
        "Vínculo madre-hija",
        "Libertad",
        "Misterio y espiritualidad",
        "Altar",
        "Rescate emocional",
        "Empoderamiento femenino",
        "Narrativa simbólica",
        "Cultura local",
        "Resistencia y esperanza",
        "Tradición oral y cantos"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Mar de libertad utiliza el vínculo espiritual entre madre e hija para narrar una búsqueda de emancipación en medio de condiciones de encierro, explotación laboral y violencias de género. A través del arrullo, la memoria y el mar como símbolo de origen y escape, se plantea la libertad como un acto íntimo y profundo de reconexión con la identidad y la dignidad.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Mar De Libertad Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en Apartadó (Antioquia) en 2024. Romina sale del mar en busca de su hija Manuela, quien trabaja en una finca bananera. Desde un misterioso cuarto, Manuela escucha a su madre pedirle un llamador. Frente a un altar en su honor escondido en el cuarto, Romina le canta un arrullo, creando un vínculo profundo que impulsa a Manuela a liberarse. Con el mar como su única salida, Manuela emprende una carrera hacia la libertad. Mar de libertad utiliza el vínculo espiritual entre madre e hija para narrar una búsqueda de emancipación en medio de condiciones de encierro, explotación laboral y violencias de género. A través del arrullo, la memoria y el mar como símbolo de origen y escape, se plantea la libertad como un acto íntimo y profundo de reconexión con la identidad y la dignidad. Cortometraje comunitario Formación en cine comunitario Apartadó, Antioquia 2024 Romina Manuela Mar Finca bananera Llamador Arrullo Vínculo madre-hija Libertad Misterio y espiritualidad Altar Rescate emocional Empoderamiento femenino Narrativa simbólica Cultura local Resistencia y esperanza Tradición oral y cantos NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-72",
      "row": 72,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje La Tierra de La Dignidad",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en Suárez (Cauca) en 2024.La madre tierra recorre el territorio en busca de sus habitantes para pedirles protección. Los afros y los indígenas se unen en una sola juntanza para danzar por el cuidado del territorio y de la vida.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Suárez, Cauca",
        "2024",
        "Madre Tierra",
        "Protección del territorio",
        "Afros e indígenas",
        "Juntanza",
        "Danzas rituales",
        "Cuidado del medio ambiente",
        "Vida y naturaleza",
        "Unidad comunitaria",
        "Cultura ancestral",
        "Espiritualidad",
        "Memoria colectiva",
        "Tradición afrocolombiana",
        "Tradición indígena",
        "Resistencia cultural",
        "Conciencia ambiental",
        "Participación comunitaria"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "La tierra de la dignidad concibe el territorio como un ser vivo que interpela a sus pueblos a defenderlo. Desde la unión de comunidades afro e indígenas, el cortometraje exalta la juntanza, la danza y la espiritualidad como expresiones colectivas de resistencia, cuidado de la vida y afirmación de la dignidad frente a las amenazas al territorio de Suárez, Cauca.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje La Tierra de La Dignidad Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en Suárez (Cauca) en 2024.La madre tierra recorre el territorio en busca de sus habitantes para pedirles protección. Los afros y los indígenas se unen en una sola juntanza para danzar por el cuidado del territorio y de la vida. La tierra de la dignidad concibe el territorio como un ser vivo que interpela a sus pueblos a defenderlo. Desde la unión de comunidades afro e indígenas, el cortometraje exalta la juntanza, la danza y la espiritualidad como expresiones colectivas de resistencia, cuidado de la vida y afirmación de la dignidad frente a las amenazas al territorio de Suárez, Cauca. Cortometraje comunitario Formación en cine comunitario Suárez, Cauca 2024 Madre Tierra Protección del territorio Afros e indígenas Juntanza Danzas rituales Cuidado del medio ambiente Vida y naturaleza Unidad comunitaria Cultura ancestral Espiritualidad Memoria colectiva Tradición afrocolombiana Tradición indígena Resistencia cultural Conciencia ambiental Participación comunitaria NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-73",
      "row": 73,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje La Explotación de la Abundancia",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en La Chorrera (Amazonas) en 2024.Explotación a la abundancia, es un mito que narra la historia de una mujer embarazada de la cual brota la semilla de la vida, simbolizando la esperanza, la abundancia y el sustento del mundo.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "La Chorrera, Amazonas",
        "2024",
        "Explotación a la abundancia",
        "Mito",
        "Mujer embarazada",
        "Semilla de la vida",
        "Esperanza",
        "Abundancia",
        "Sustento del mundo",
        "Simbolismo",
        "Tradición oral",
        "Cosmovisión amazónica",
        "Cultura indígena",
        "Naturaleza y vida",
        "Espiritualidad",
        "Memoria colectiva",
        "Herencia cultural",
        "Narrativa simbólica"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Explotación a la abundancia recurre al mito para representar el origen de la vida como un acto sagrado de gestación y entrega. A través de la figura de la mujer de la que brota la semilla vital, se reivindica la abundancia, la fertilidad y el equilibrio con la naturaleza como fundamentos espirituales para la continuidad del mundo y la esperanza colectiva desde La Chorrera, Amazonas",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje La Explotación de la Abundancia Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en La Chorrera (Amazonas) en 2024.Explotación a la abundancia, es un mito que narra la historia de una mujer embarazada de la cual brota la semilla de la vida, simbolizando la esperanza, la abundancia y el sustento del mundo. Explotación a la abundancia recurre al mito para representar el origen de la vida como un acto sagrado de gestación y entrega. A través de la figura de la mujer de la que brota la semilla vital, se reivindica la abundancia, la fertilidad y el equilibrio con la naturaleza como fundamentos espirituales para la continuidad del mundo y la esperanza colectiva desde La Chorrera, Amazonas Cortometraje comunitario Formación en cine comunitario La Chorrera, Amazonas 2024 Explotación a la abundancia Mito Mujer embarazada Semilla de la vida Esperanza Abundancia Sustento del mundo Simbolismo Tradición oral Cosmovisión amazónica Cultura indígena Naturaleza y vida Espiritualidad Memoria colectiva Herencia cultural Narrativa simbólica NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-74",
      "row": 74,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje La Flor Amarilla",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en La Chorrera (Amazonas) en 2024. Una niña que recorre su territorio y ve una hermosa flor amarilla. Un pez le revela la forma de darle vida a los pétalos para que se abran. Su abuelo le regala una canción.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "La Chorrera, Amazonas",
        "2024",
        "Niña exploradora",
        "Territorio ancestral",
        "Flor amarilla",
        "Pez guía",
        "Vida y naturaleza",
        "Pétalos que se abren",
        "Abuelo",
        "Canción heredada",
        "Saberes ancestrales",
        "Cosmovisión amazónica",
        "Espiritualidad",
        "Tradición oral",
        "Memoria cultural",
        "Conexión intergeneracional",
        "Cultura indígena",
        "Narrativa simbólica"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Flor amarilla celebra la transmisión de saberes ancestrales y la relación espiritual con la naturaleza a través de la mirada de la infancia. El territorio como un espacio vivo donde la memoria, el canto y el diálogo con otros seres sostienen la vida y fortalecen el vínculo entre generaciones.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje La Flor Amarilla Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en La Chorrera (Amazonas) en 2024. Una niña que recorre su territorio y ve una hermosa flor amarilla. Un pez le revela la forma de darle vida a los pétalos para que se abran. Su abuelo le regala una canción. Flor amarilla celebra la transmisión de saberes ancestrales y la relación espiritual con la naturaleza a través de la mirada de la infancia. El territorio como un espacio vivo donde la memoria, el canto y el diálogo con otros seres sostienen la vida y fortalecen el vínculo entre generaciones. Cortometraje comunitario Formación en cine comunitario La Chorrera, Amazonas 2024 Niña exploradora Territorio ancestral Flor amarilla Pez guía Vida y naturaleza Pétalos que se abren Abuelo Canción heredada Saberes ancestrales Cosmovisión amazónica Espiritualidad Tradición oral Memoria cultural Conexión intergeneracional Cultura indígena Narrativa simbólica NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-75",
      "row": 75,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Ritmo Prohibido",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Bellavista, municipio de Bojayá (Chocó), en 2025. En una casa rural marcada por la autoridad y las tradiciones, un joven enfrenta la presión de su familia para abandonar el baile y dedicarse al trabajo en la finca. Entre prohibiciones y comparaciones con la figura ausente del padre, su deseo de bailar se convierte en un acto de rebeldía silenciosa.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Bellavista, Bojayá, Chocó",
        "Casa rural",
        "Autoridad familiar",
        "Tradiciones",
        "Joven protagonista",
        "Presión familiar",
        "Trabajo en la finca",
        "Prohibiciones",
        "Comparaciones paternas",
        "Ausencia del padre",
        "Baile como rebeldía",
        "Expresión artística",
        "Identidad personal",
        "Cultura local",
        "Juventud y resistencia",
        "Narrativa social",
        "Creatividad y libertad"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Ritmo prohibido explora el conflicto entre tradición, autoridad familiar y deseo individual, donde el baile emerge como un acto íntimo de resistencia frente a las imposiciones del entorno. La expresión artística como un camino legítimo de identidad, libertad y afirmación personal en contextos rurales atravesados por normas heredadas y silencios familiares.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Ritmo Prohibido Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Bellavista, municipio de Bojayá (Chocó), en 2025. En una casa rural marcada por la autoridad y las tradiciones, un joven enfrenta la presión de su familia para abandonar el baile y dedicarse al trabajo en la finca. Entre prohibiciones y comparaciones con la figura ausente del padre, su deseo de bailar se convierte en un acto de rebeldía silenciosa. Ritmo prohibido explora el conflicto entre tradición, autoridad familiar y deseo individual, donde el baile emerge como un acto íntimo de resistencia frente a las imposiciones del entorno. La expresión artística como un camino legítimo de identidad, libertad y afirmación personal en contextos rurales atravesados por normas heredadas y silencios familiares. Cortometraje comunitario Formación en cine comunitario Bellavista, Bojayá, Chocó Casa rural Autoridad familiar Tradiciones Joven protagonista Presión familiar Trabajo en la finca Prohibiciones Comparaciones paternas Ausencia del padre Baile como rebeldía Expresión artística Identidad personal Cultura local Juventud y resistencia Narrativa social Creatividad y libertad NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-76",
      "row": 76,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Warana Kincha",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Bellavista, municipio de Bojayá (Chocó), en 2025. Warana Kincha (“nuestras costumbres” en lengua embera dobidá) reúne a mujeres embera dobidá que narran sus saberes y prácticas culturales, visibilizando la relación entre territorio, memoria e identidad, y la fuerza de una cultura viva que se transmite de generación en generación.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Bellavista, Bojayá, Chocó",
        "2025",
        "Warana Kincha",
        "Mujeres embera dobidá",
        "Saberes ancestrales",
        "Prácticas culturales",
        "Territorio",
        "Memoria",
        "Identidad cultural",
        "Cultura viva",
        "Transmisión generacional",
        "Lengua embera dobidá",
        "Resistencia cultural",
        "Narrativa participativa",
        "Empoderamiento femenino",
        "Patrimonio inmaterial",
        "Herencia comunitaria",
        "Tradición y modernidad"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Warana reivindica la voz de las mujeres Embera Dobidá como portadoras de la memoria y las costumbres ancestrales. A través de sus relatos y prácticas, se visibiliza la relación profunda entre territorio, identidad y transmisión intergeneracional, afirmando la vigencia y fortaleza de una cultura viva que resiste y se cuida colectivamente.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Warana Kincha Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Bellavista, municipio de Bojayá (Chocó), en 2025. Warana Kincha (“nuestras costumbres” en lengua embera dobidá) reúne a mujeres embera dobidá que narran sus saberes y prácticas culturales, visibilizando la relación entre territorio, memoria e identidad, y la fuerza de una cultura viva que se transmite de generación en generación. Warana reivindica la voz de las mujeres Embera Dobidá como portadoras de la memoria y las costumbres ancestrales. A través de sus relatos y prácticas, se visibiliza la relación profunda entre territorio, identidad y transmisión intergeneracional, afirmando la vigencia y fortaleza de una cultura viva que resiste y se cuida colectivamente. Cortometraje comunitario Formación en cine comunitario Bellavista, Bojayá, Chocó 2025 Warana Kincha Mujeres embera dobidá Saberes ancestrales Prácticas culturales Territorio Memoria Identidad cultural Cultura viva Transmisión generacional Lengua embera dobidá Resistencia cultural Narrativa participativa Empoderamiento femenino Patrimonio inmaterial Herencia comunitaria Tradición y modernidad NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-77",
      "row": 77,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Monfort 1921",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en la comunidad de Monfort (Vaupés) en 2025. Monfort 1921 narra la lucha por preservar las tradiciones de los pueblos indígenas Tucano, Desano y Piratapuyo, frente a los procesos de conquista y transformación cultural, destacando su resistencia, memoria ancestral y defensa del territorio como formas de permanencia y dignidad colectiva.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Comunidad de Monfort, Vaupés",
        "2025",
        "Monfort 1921",
        "Pueblos indígenas",
        "Tucano, Desano, Piratapuyo",
        "Preservación de tradiciones",
        "Conquista cultural",
        "Transformación cultural",
        "Resistencia indígena",
        "Memoria ancestral",
        "Defensa del territorio",
        "Dignidad colectiva",
        "Cultura viva",
        "Patrimonio intangible",
        "Herencia comunitaria",
        "Identidad cultural",
        "Permanencia cultural",
        "Narrativa participativa"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Monfort 1921 evoca la memoria histórica de los pueblos Tucano, Desano y Piratapuyo para afirmar la resistencia cultural frente a los procesos de conquista y transformación forzada. Se reivindica la defensa del territorio, las tradiciones y la memoria ancestral como pilares de la dignidad colectiva y la permanencia de los pueblos indígenas del Vaupés, Colombia.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Monfort 1921 Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario implementada en la comunidad de Monfort (Vaupés) en 2025. Monfort 1921 narra la lucha por preservar las tradiciones de los pueblos indígenas Tucano, Desano y Piratapuyo, frente a los procesos de conquista y transformación cultural, destacando su resistencia, memoria ancestral y defensa del territorio como formas de permanencia y dignidad colectiva. Monfort 1921 evoca la memoria histórica de los pueblos Tucano, Desano y Piratapuyo para afirmar la resistencia cultural frente a los procesos de conquista y transformación forzada. Se reivindica la defensa del territorio, las tradiciones y la memoria ancestral como pilares de la dignidad colectiva y la permanencia de los pueblos indígenas del Vaupés, Colombia. Cortometraje comunitario Formación en cine comunitario Comunidad de Monfort, Vaupés 2025 Monfort 1921 Pueblos indígenas Tucano, Desano, Piratapuyo Preservación de tradiciones Conquista cultural Transformación cultural Resistencia indígena Memoria ancestral Defensa del territorio Dignidad colectiva Cultura viva Patrimonio intangible Herencia comunitaria Identidad cultural Permanencia cultural Narrativa participativa NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-78",
      "row": 78,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Lovavieja",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Bellavista, municipio de Barranco de Loba (Bolívar), en 2025. En este territorio, la tambora no es solo música, sino memoria, herencia y forma de existencia. A través de las voces de abuelos, niños y maestros, se narra cómo el canto, el baile y el tambor transmiten valores como el respeto, la unión y la humildad, consolidándose como un símbolo de identidad colectiva y vínculo con el territorio.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Bellavista, Barranco de Loba, Bolívar",
        "2025",
        "Tambora",
        "Música tradicional",
        "Memoria cultural",
        "Herencia ancestral",
        "Canto y baile",
        "Maestros, abuelos y niños",
        "Transmisión intergeneracional",
        "Valores comunitarios",
        "Respeto, unión, humildad",
        "Identidad colectiva",
        "Vínculo con el territorio",
        "Cultura local",
        "Patrimonio intangible",
        "Tradición afrocolombiana",
        "Narrativa participativa",
        "Expresión artística comunitaria"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "La tambora como un eje vital de la memoria y la identidad en Barranco de Loba. A través de la transmisión intergeneracional del canto, el baile y el tambor. La música tradicional como herencia ancestral que fortalece los lazos comunitarios, el vínculo con el territorio y los valores que sostienen la vida colectiva.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Lovavieja Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Bellavista, municipio de Barranco de Loba (Bolívar), en 2025. En este territorio, la tambora no es solo música, sino memoria, herencia y forma de existencia. A través de las voces de abuelos, niños y maestros, se narra cómo el canto, el baile y el tambor transmiten valores como el respeto, la unión y la humildad, consolidándose como un símbolo de identidad colectiva y vínculo con el territorio. La tambora como un eje vital de la memoria y la identidad en Barranco de Loba. A través de la transmisión intergeneracional del canto, el baile y el tambor. La música tradicional como herencia ancestral que fortalece los lazos comunitarios, el vínculo con el territorio y los valores que sostienen la vida colectiva. Cortometraje comunitario Formación en cine comunitario Bellavista, Barranco de Loba, Bolívar 2025 Tambora Música tradicional Memoria cultural Herencia ancestral Canto y baile Maestros, abuelos y niños Transmisión intergeneracional Valores comunitarios Respeto, unión, humildad Identidad colectiva Vínculo con el territorio Cultura local Patrimonio intangible Tradición afrocolombiana Narrativa participativa Expresión artística comunitaria NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-79",
      "row": 79,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Cultura Ancestral Unión Cuity",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Unión Cuity, municipio de Bojayá (Chocó), en 2025. Cultura ancestral es un cortometraje de la comunidad del resguardo Alto Napipí que narra la lucha por conservar las costumbres embera dobidá a través de prácticas como el corte de cabello ancestral, la danza femenina, la pesca, el cultivo y la pintura corporal, como expresiones fundamentales del ser indígena.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Unión Cuity, Bojayá, Chocó",
        "2025",
        "Cultura ancestral",
        "Comunidad del resguardo Alto Napipí",
        "Pueblos embera dobidá",
        "Conservación de costumbres",
        "Corte de cabello ancestral",
        "Danza femenina",
        "Pesca tradicional",
        "Cultivo ancestral",
        "Pintura corporal",
        "Expresiones culturales",
        "Identidad indígena",
        "Patrimonio intangible",
        "Tradición y cultura viva",
        "Resistencia cultural",
        "Memoria comunitaria",
        "Narrativa participativa"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Cultural ancestral Unión Cuity afirma la preservación de las costumbres del pueblo Embera Dobidá como un acto de resistencia y continuidad cultural. A través de prácticas cotidianas y rituales —como el corte de cabello ancestral, la danza, la pesca, el cultivo y la pintura corporal— Se reivindica la identidad indígena y la defensa de una forma de vida profundamente ligada al territorio y la memoria colectiva.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Cultura Ancestral Unión Cuity Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Unión Cuity, municipio de Bojayá (Chocó), en 2025. Cultura ancestral es un cortometraje de la comunidad del resguardo Alto Napipí que narra la lucha por conservar las costumbres embera dobidá a través de prácticas como el corte de cabello ancestral, la danza femenina, la pesca, el cultivo y la pintura corporal, como expresiones fundamentales del ser indígena. Cultural ancestral Unión Cuity afirma la preservación de las costumbres del pueblo Embera Dobidá como un acto de resistencia y continuidad cultural. A través de prácticas cotidianas y rituales —como el corte de cabello ancestral, la danza, la pesca, el cultivo y la pintura corporal— Se reivindica la identidad indígena y la defensa de una forma de vida profundamente ligada al territorio y la memoria colectiva. Cortometraje comunitario Formación en cine comunitario Unión Cuity, Bojayá, Chocó 2025 Cultura ancestral Comunidad del resguardo Alto Napipí Pueblos embera dobidá Conservación de costumbres Corte de cabello ancestral Danza femenina Pesca tradicional Cultivo ancestral Pintura corporal Expresiones culturales Identidad indígena Patrimonio intangible Tradición y cultura viva Resistencia cultural Memoria comunitaria Narrativa participativa NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-80",
      "row": 80,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Sabdur-Jagua",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en la comunidad de Caimán Alto, municipio de Necoclí (Antioquia), en 2025. El Sabdur o jagua es un fruto sagrado del pueblo Guna Dule, habitante ancestral de las selvas de la frontera colombo-panameña. El cortometraje retrata sus usos, saberes y costumbres en torno a este fruto como expresión de identidad, espiritualidad y continuidad cultural.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Comunidad de Caimán Alto, Necoclí, Antioquia",
        "2025",
        "Sabdur / jagua",
        "Fruto sagrado",
        "Pueblo Guna Dule",
        "Selvas colombo-panameñas",
        "Usos tradicionales",
        "Saberes ancestrales",
        "Costumbres culturales",
        "Identidad indígena",
        "Espiritualidad",
        "Continuidad cultural",
        "Patrimonio intangible",
        "Cultura viva",
        "Tradición oral",
        "Prácticas rituales",
        "Conexión con la naturaleza",
        "Narrativa participativa"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "El Sabdur o jagua es un elemento sagrado que articula la vida espiritual, cultural y comunitaria del pueblo Guna Dule. A través de sus usos y saberes ancestrales, se afirma la relación profunda entre naturaleza, identidad y continuidad cultural, resaltando la vigencia de una tradición que sostiene la memoria colectiva y la cohesión del pueblo.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Sabdur-Jagua Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en la comunidad de Caimán Alto, municipio de Necoclí (Antioquia), en 2025. El Sabdur o jagua es un fruto sagrado del pueblo Guna Dule, habitante ancestral de las selvas de la frontera colombo-panameña. El cortometraje retrata sus usos, saberes y costumbres en torno a este fruto como expresión de identidad, espiritualidad y continuidad cultural. El Sabdur o jagua es un elemento sagrado que articula la vida espiritual, cultural y comunitaria del pueblo Guna Dule. A través de sus usos y saberes ancestrales, se afirma la relación profunda entre naturaleza, identidad y continuidad cultural, resaltando la vigencia de una tradición que sostiene la memoria colectiva y la cohesión del pueblo. Cortometraje comunitario Formación en cine comunitario Comunidad de Caimán Alto, Necoclí, Antioquia 2025 Sabdur / jagua Fruto sagrado Pueblo Guna Dule Selvas colombo-panameñas Usos tradicionales Saberes ancestrales Costumbres culturales Identidad indígena Espiritualidad Continuidad cultural Patrimonio intangible Cultura viva Tradición oral Prácticas rituales Conexión con la naturaleza Narrativa participativa NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-81",
      "row": 81,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Cortometraje 20 de Julio",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Curumaní y Pailitas, en el corregimiento 20 de Julio (Cesar), en 2025. El 20 de Julio es una experiencia de resistencia campesina por el derecho a habitar, labrar y vivir en la propia tierra. El cortometraje narra, desde la voz de sus protagonistas, la lucha del campesinado del Cesar por la recuperación de sus territorios y la defensa de su dignidad y forma de vida.",
      "keywords": [
        "Cortometraje comunitario",
        "Formación en cine comunitario",
        "Curumaní y Pailitas, corregimiento 20 de Julio, Cesar",
        "2025",
        "El 20 de Julio",
        "Resistencia campesina",
        "Derecho a la tierra",
        "Habitar y labrar la tierra",
        "Campesinos y campesinas",
        "Recuperación de territorios",
        "Defensa de la dignidad",
        "Forma de vida campesina",
        "Voz de los protagonistas",
        "Identidad rural",
        "Memoria colectiva",
        "Patrimonio cultural",
        "Justicia territorial",
        "Cultura campesina",
        "Lucha social",
        "Narrativa participativa"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "20 de julio retrata la resistencia campesina como una lucha legítima por el derecho a la tierra y a una vida digna. A través de las voces de sus protagonistas, se visibiliza la recuperación del territorio como un acto de memoria, justicia y defensa colectiva del modo de vida campesina en el Cesar.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Cortometraje 20 de Julio Cortometraje Cortometraje realizado en el marco de la estrategia de formación en cine comunitario en Curumaní y Pailitas, en el corregimiento 20 de Julio (Cesar), en 2025. El 20 de Julio es una experiencia de resistencia campesina por el derecho a habitar, labrar y vivir en la propia tierra. El cortometraje narra, desde la voz de sus protagonistas, la lucha del campesinado del Cesar por la recuperación de sus territorios y la defensa de su dignidad y forma de vida. 20 de julio retrata la resistencia campesina como una lucha legítima por el derecho a la tierra y a una vida digna. A través de las voces de sus protagonistas, se visibiliza la recuperación del territorio como un acto de memoria, justicia y defensa colectiva del modo de vida campesina en el Cesar. Cortometraje comunitario Formación en cine comunitario Curumaní y Pailitas, corregimiento 20 de Julio, Cesar 2025 El 20 de Julio Resistencia campesina Derecho a la tierra Habitar y labrar la tierra Campesinos y campesinas Recuperación de territorios Defensa de la dignidad Forma de vida campesina Voz de los protagonistas Identidad rural Memoria colectiva Patrimonio cultural Justicia territorial Cultura campesina Lucha social Narrativa participativa PENDIENTE"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-82",
      "row": 82,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Documental El Siete",
      "type": "Documental",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Fanny trabaja junto a sus socios en un oficio tradicionalmente masculino: los talleres mecánicos del barrio Siete de Agosto en Bogotá. Orgullosa de ganarse la vida en el que define como el mercado de autopartes más grande de América Latina, ella forma parte del nutrido mundo de latoneros, electricistas, torneros, pintores, gomeros, vendedores ambulantes y mecánicos del Siete de Agosto.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Fanny",
        "Oficio tradicionalmente masculino",
        "Talleres mecánicos",
        "Barrio Siete de Agosto, Bogotá",
        "Mercado de autopartes",
        "América Latina",
        "Latoneros",
        "Electricistas",
        "Torneros",
        "Pintores",
        "Gomeros",
        "Vendedores ambulantes",
        "Mecánicos",
        "Trabajo urbano",
        "Economía informal",
        "Empoderamiento femenino",
        "Cultura laboral",
        "Comunidad de oficios"
      ],
      "link": "https://www.youtube.com/watch?v=Lti0bxftY3M",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Documental El Siete Documental Producción de la serie audiovisual y sonora Economías populares. Fanny trabaja junto a sus socios en un oficio tradicionalmente masculino: los talleres mecánicos del barrio Siete de Agosto en Bogotá. Orgullosa de ganarse la vida en el que define como el mercado de autopartes más grande de América Latina, ella forma parte del nutrido mundo de latoneros, electricistas, torneros, pintores, gomeros, vendedores ambulantes y mecánicos del Siete de Agosto. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Fanny Oficio tradicionalmente masculino Talleres mecánicos Barrio Siete de Agosto, Bogotá Mercado de autopartes América Latina Latoneros Electricistas Torneros Pintores Gomeros Vendedores ambulantes Mecánicos Trabajo urbano Economía informal Empoderamiento femenino Cultura laboral Comunidad de oficios https://www.youtube.com/watch?v=Lti0bxftY3M"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-83",
      "row": 83,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Documental El convite",
      "type": "Documental",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Hernán Pacheco se autodefine como papero de nacimiento, de profesión y vocación; según lo permitan los ciclos climáticos, convoca un par de veces al año a la recolección de la cosecha de papa en su terreno en San Pedro de Iguaque. Juan Ramón y Pedro Nel, músicos empíricos reconocidos en la región, compondrán en paralelo la canción Así se vive en el campo, cuyo proceso creativo podremos apreciar y disfrutar.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Hernán Pacheco",
        "Papero",
        "Recolección de papa",
        "San Pedro de Iguaque",
        "Ciclos climáticos",
        "Agricultura campesina",
        "Trabajo rural",
        "Juan Ramón y Pedro Nel",
        "Músicos empíricos",
        "Composición musical",
        "Canción “Así se vive en el campo”",
        "Procesos creativos",
        "Cultura campesina",
        "Saberes locales",
        "Tradición y oficio",
        "Vida en el campo",
        "Identidad rural",
        "Narrativa audiovisual"
      ],
      "link": "https://www.youtube.com/watch?v=HpDO8SEFNy8",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Documental El convite Documental Producción de la serie audiovisual y sonora Economías populares. Hernán Pacheco se autodefine como papero de nacimiento, de profesión y vocación; según lo permitan los ciclos climáticos, convoca un par de veces al año a la recolección de la cosecha de papa en su terreno en San Pedro de Iguaque. Juan Ramón y Pedro Nel, músicos empíricos reconocidos en la región, compondrán en paralelo la canción Así se vive en el campo, cuyo proceso creativo podremos apreciar y disfrutar. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Hernán Pacheco Papero Recolección de papa San Pedro de Iguaque Ciclos climáticos Agricultura campesina Trabajo rural Juan Ramón y Pedro Nel Músicos empíricos Composición musical Canción “Así se vive en el campo” Procesos creativos Cultura campesina Saberes locales Tradición y oficio Vida en el campo Identidad rural Narrativa audiovisual https://www.youtube.com/watch?v=HpDO8SEFNy8"
    },
    {
      "id": "somos-economias-populares-84",
      "row": 84,
      "theme": "Somos economías populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Aquí vivimos al diario",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Uno de los oficios diarios de Karol es arreglar alternadores y arranques de carros en el barrio Siete de Agosto, en la ciudad de Bogotá. Karol narra los retos que enfrenta cotidianamente al ser una madre trabajadora que vive al diario y que usa su ingenio para reparar piezas mecánicas.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Karol",
        "Oficio mecánico",
        "Reparación de alternadores y arranques",
        "Barrio Siete de Agosto, Bogotá",
        "Trabajo diario",
        "Madre trabajadora",
        "Retos cotidianos",
        "Ingenio y habilidad",
        "Economía urbana",
        "Oficios técnicos",
        "Vida laboral femenina",
        "Resiliencia",
        "Cultura del trabajo",
        "Comunidad de mecánicos",
        "Economía informal",
        "Autonomía económica",
        "Narrativa personal",
        "Experiencia urbana"
      ],
      "link": "https://www.youtube.com/watch?v=Sw8aQGVImaw",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos economías populares ICANH Cápsula de video Aquí vivimos al diario Video Producción de la serie audiovisual y sonora Economías populares. Uno de los oficios diarios de Karol es arreglar alternadores y arranques de carros en el barrio Siete de Agosto, en la ciudad de Bogotá. Karol narra los retos que enfrenta cotidianamente al ser una madre trabajadora que vive al diario y que usa su ingenio para reparar piezas mecánicas. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Karol Oficio mecánico Reparación de alternadores y arranques Barrio Siete de Agosto, Bogotá Trabajo diario Madre trabajadora Retos cotidianos Ingenio y habilidad Economía urbana Oficios técnicos Vida laboral femenina Resiliencia Cultura del trabajo Comunidad de mecánicos Economía informal Autonomía económica Narrativa personal Experiencia urbana https://www.youtube.com/watch?v=Sw8aQGVImaw"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-85",
      "row": 85,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Nos toca guerrearla",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Los saberes, oficios y especialidades de las trabajadoras y trabajadores del barrio Siete de Agosto en Bogotá expresan las diferentes formas de rebusque y creatividad que ocurren en las economías populares.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Saberes y oficios",
        "Trabajadoras y trabajadores",
        "Barrio Siete de Agosto, Bogotá",
        "Rebusque",
        "Creatividad",
        "Economía informal",
        "Vida urbana",
        "Experiencia laboral"
      ],
      "link": "https://www.youtube.com/watch?v=DJKAUP8u9HY",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Nos toca guerrearla Video Producción de la serie audiovisual y sonora Economías populares. Los saberes, oficios y especialidades de las trabajadoras y trabajadores del barrio Siete de Agosto en Bogotá expresan las diferentes formas de rebusque y creatividad que ocurren en las economías populares. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Saberes y oficios Trabajadoras y trabajadores Barrio Siete de Agosto, Bogotá Rebusque Creatividad Economía informal Vida urbana Experiencia laboral https://www.youtube.com/watch?v=DJKAUP8u9HY"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-86",
      "row": 86,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video No me falta nada",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Sandra, una mujer yerbatera de la plaza de mercado del barrio Siete de Agosto, vive de vender todo tipo de plantas medicinales, aceites esenciales, veladoras, estampas de santos, baños y sahumerios para la prosperidad, la abundancia y el amor. Ella es el reflejo de conocimientos, creencias y rituales populares sobre plantas, remedios, santos y rezos.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Sandra",
        "Yerbatera",
        "Plaza de mercado, Barrio Siete de Agosto, Bogotá",
        "Plantas medicinales",
        "Aceites esenciales",
        "Veladoras y estampas de santos",
        "Baños y sahumerios",
        "Prosperidad, abundancia y amor",
        "Conocimientos y creencias populares",
        "Rituales y remedios tradicionales",
        "Saberes ancestrales",
        "Cultura popular",
        "Economía informal"
      ],
      "link": "https://www.youtube.com/watch?v=sJYtzOnKxeQ",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video No me falta nada Video Producción de la serie audiovisual y sonora Economías populares. Sandra, una mujer yerbatera de la plaza de mercado del barrio Siete de Agosto, vive de vender todo tipo de plantas medicinales, aceites esenciales, veladoras, estampas de santos, baños y sahumerios para la prosperidad, la abundancia y el amor. Ella es el reflejo de conocimientos, creencias y rituales populares sobre plantas, remedios, santos y rezos. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Sandra Yerbatera Plaza de mercado, Barrio Siete de Agosto, Bogotá Plantas medicinales Aceites esenciales Veladoras y estampas de santos Baños y sahumerios Prosperidad, abundancia y amor Conocimientos y creencias populares Rituales y remedios tradicionales Saberes ancestrales Cultura popular Economía informal https://www.youtube.com/watch?v=sJYtzOnKxeQ"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-87",
      "row": 87,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Las comadres y el puntal",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. La labor de las mujeres de San Pedro de Iguaque en la preparación de El puntal, una de las comidas que se les ofrece a los obreros agricultores durante la mañana en las jornadas laborales de recolección de la cosecha de papa en Boyacá.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Mujeres de San Pedro de Iguaque",
        "Preparación de El puntal",
        "Alimentación de obreros agrícolas",
        "Recolección de papa",
        "Boyacá",
        "Trabajo rural",
        "Apoyo a jornadas laborales",
        "Saberes culinarios tradicionales",
        "Economía campesina"
      ],
      "link": "https://www.youtube.com/watch?v=QnkQaRrbOZU",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Las comadres y el puntal Video Producción de la serie audiovisual y sonora Economías populares. La labor de las mujeres de San Pedro de Iguaque en la preparación de El puntal, una de las comidas que se les ofrece a los obreros agricultores durante la mañana en las jornadas laborales de recolección de la cosecha de papa en Boyacá. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Mujeres de San Pedro de Iguaque Preparación de El puntal Alimentación de obreros agrícolas Recolección de papa Boyacá Trabajo rural Apoyo a jornadas laborales Saberes culinarios tradicionales Economía campesina https://www.youtube.com/watch?v=QnkQaRrbOZU"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-88",
      "row": 88,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video La sacanza",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Durante la sacanza de la papa en Boyacá, las jornaleras y jornaleros trabajan varios días para cosechar el producto que se vende en los mercados urbanos de Colombia. Lidia jornalea en la parcela de su hermano durante la cosecha y reflexiona sobre cómo el precio de la papa en el mercado afecta su economía familiar y campesina.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Sacanza de papa",
        "Jornaleras y jornaleros",
        "Cosecha en Boyacá",
        "Mercado urbano",
        "Economía familiar y campesina",
        "Lidia",
        "Trabajo rural",
        "Impacto del precio en el mercado",
        "Agricultura campesina",
        "Producción y comercialización"
      ],
      "link": "https://www.youtube.com/watch?v=Sg8yjxldxsI",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video La sacanza Video Producción de la serie audiovisual y sonora Economías populares. Durante la sacanza de la papa en Boyacá, las jornaleras y jornaleros trabajan varios días para cosechar el producto que se vende en los mercados urbanos de Colombia. Lidia jornalea en la parcela de su hermano durante la cosecha y reflexiona sobre cómo el precio de la papa en el mercado afecta su economía familiar y campesina. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Sacanza de papa Jornaleras y jornaleros Cosecha en Boyacá Mercado urbano Economía familiar y campesina Lidia Trabajo rural Impacto del precio en el mercado Agricultura campesina Producción y comercialización https://www.youtube.com/watch?v=Sg8yjxldxsI"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-89",
      "row": 89,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Mi patio es bonito",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. En los patios de las casas en Sempegua, las familias siembran, cuidan y producen una gran diversidad de alimentos, plantas medicinales y ornamentales que aportan a la soberanía y seguridad alimentaria de la comunidad. Los alimentos cosechados impulsan la economía campesina y forman parte de una red de intercambio y trueque entre familias.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Sempegua",
        "Familias campesinas",
        "Huertas domésticas",
        "Alimentos, plantas medicinales y ornamentales",
        "Soberanía alimentaria",
        "Seguridad alimentaria",
        "Economía campesina",
        "Intercambio y trueque",
        "Producción local",
        "Saberes agrícolas tradicionales"
      ],
      "link": "https://www.youtube.com/watch?v=M8zDMrOm070",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Mi patio es bonito Video Producción de la serie audiovisual y sonora Economías populares. En los patios de las casas en Sempegua, las familias siembran, cuidan y producen una gran diversidad de alimentos, plantas medicinales y ornamentales que aportan a la soberanía y seguridad alimentaria de la comunidad. Los alimentos cosechados impulsan la economía campesina y forman parte de una red de intercambio y trueque entre familias. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Sempegua Familias campesinas Huertas domésticas Alimentos, plantas medicinales y ornamentales Soberanía alimentaria Seguridad alimentaria Economía campesina Intercambio y trueque Producción local Saberes agrícolas tradicionales https://www.youtube.com/watch?v=M8zDMrOm070"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-90",
      "row": 90,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video La uvita",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. La uvita, también conocida como corozo, es uno de los frutos nativos aprovechables del ecosistema cienaguero en Sempegua y una de las alternativas económicas para los momentos en que el pescado escasea. Las mujeres \"uviteras\" viven de ir al monte a recolectar racimos de uvita para venderlos como fruto, en jugo o en helados.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Uvita / corozo",
        "Ecosistema cienaguero, Sempegua",
        "Alternativa económica",
        "Escasez de pescado",
        "Mujeres uviteras",
        "Recolección de frutos",
        "Venta de fruto, jugo y helados",
        "Economía local",
        "Producción comunitaria",
        "Saberes tradicionales"
      ],
      "link": "https://www.youtube.com/watch?v=26GmlIe36O4",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video La uvita Video Producción de la serie audiovisual y sonora Economías populares. La uvita, también conocida como corozo, es uno de los frutos nativos aprovechables del ecosistema cienaguero en Sempegua y una de las alternativas económicas para los momentos en que el pescado escasea. Las mujeres \"uviteras\" viven de ir al monte a recolectar racimos de uvita para venderlos como fruto, en jugo o en helados. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Uvita / corozo Ecosistema cienaguero, Sempegua Alternativa económica Escasez de pescado Mujeres uviteras Recolección de frutos Venta de fruto, jugo y helados Economía local Producción comunitaria Saberes tradicionales https://www.youtube.com/watch?v=26GmlIe36O4"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-91",
      "row": 91,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video La manaca",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. En Inírida, subir a la palma de manaca (también conocida como açai) es una actividad que se aprende desde la niñez. La manaca forma parte de la base alimentaria de las familias, y a las mujeres que tienen el oficio de prepararla se les llama «manaqueras». Algunas la pilan y otras la despulpan; hay quienes la consumen con mañoco y otros prefieren acompañarla con almidón.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Inírida",
        "Palma de manaca / açai",
        "Oficio tradicional",
        "Niñez y aprendizaje",
        "Base alimentaria familiar",
        "Mujeres manaqueras",
        "Pilado y despulpado",
        "Consumo con mañoco o almidón",
        "Saberes ancestrales",
        "Economía local",
        "Producción y preparación de alimentos",
        "Tradición comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=RkvokSVNOfg",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video La manaca Video Producción de la serie audiovisual y sonora Economías populares. En Inírida, subir a la palma de manaca (también conocida como açai) es una actividad que se aprende desde la niñez. La manaca forma parte de la base alimentaria de las familias, y a las mujeres que tienen el oficio de prepararla se les llama «manaqueras». Algunas la pilan y otras la despulpan; hay quienes la consumen con mañoco y otros prefieren acompañarla con almidón. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Inírida Palma de manaca / açai Oficio tradicional Niñez y aprendizaje Base alimentaria familiar Mujeres manaqueras Pilado y despulpado Consumo con mañoco o almidón Saberes ancestrales Economía local Producción y preparación de alimentos Tradición comunitaria https://www.youtube.com/watch?v=RkvokSVNOfg"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-92",
      "row": 92,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Casabe y mañoco",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Arlenis camina todos los días a trabajar en su conuco, donde siembra yuca brava, yuca dulce y piña. Su abuela le enseñó desde pequeña a trabajar la yuca brava para exprimirle el veneno y preparar casabe, mañoco, almidón, katara y yarubé. Estos alimentos son la base alimentaria de los pueblos indígenas del Guanía y es uno de los principales productos de circulación económica en Inírida.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Arlenis",
        "Conuco",
        "Siembra de yuca brava, yuca dulce y piña",
        "Enseñanza de la abuela",
        "Procesamiento de yuca brava",
        "Casabe, mañoco, almidón, katara, yarubé",
        "Base alimentaria indígena",
        "Pueblos indígenas del Guanía",
        "Circulación económica",
        "Inírida",
        "Saberes ancestrales",
        "Economía local",
        "Tradición comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=O_4Lg5Qs_AI",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Casabe y mañoco Video Producción de la serie audiovisual y sonora Economías populares. Arlenis camina todos los días a trabajar en su conuco, donde siembra yuca brava, yuca dulce y piña. Su abuela le enseñó desde pequeña a trabajar la yuca brava para exprimirle el veneno y preparar casabe, mañoco, almidón, katara y yarubé. Estos alimentos son la base alimentaria de los pueblos indígenas del Guanía y es uno de los principales productos de circulación económica en Inírida. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Arlenis Conuco Siembra de yuca brava, yuca dulce y piña Enseñanza de la abuela Procesamiento de yuca brava Casabe, mañoco, almidón, katara, yarubé Base alimentaria indígena Pueblos indígenas del Guanía Circulación económica Inírida Saberes ancestrales Economía local Tradición comunitaria https://www.youtube.com/watch?v=O_4Lg5Qs_AI"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-93",
      "row": 93,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Me gusta vivir esta vida",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. En la comunidad de La Ceiba han construido un hogar para las abejas meliponas y han propiciado estrategias de cuidado de los peces en los ríos y lagunas en una apuesta por transformar su economía hacia actividades no extractivas y sostenibles.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Comunidad de La Ceiba",
        "Abejas meliponas",
        "Cuidado de peces",
        "Ríos y lagunas",
        "Economía sostenible",
        "Actividades no extractivas",
        "Conservación ambiental",
        "Producción comunitaria",
        "Saberes tradicionales",
        "Protección del territorio"
      ],
      "link": "https://www.youtube.com/watch?v=5zxCbENygQA",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Me gusta vivir esta vida Video Producción de la serie audiovisual y sonora Economías populares. En la comunidad de La Ceiba han construido un hogar para las abejas meliponas y han propiciado estrategias de cuidado de los peces en los ríos y lagunas en una apuesta por transformar su economía hacia actividades no extractivas y sostenibles. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Comunidad de La Ceiba Abejas meliponas Cuidado de peces Ríos y lagunas Economía sostenible Actividades no extractivas Conservación ambiental Producción comunitaria Saberes tradicionales Protección del territorio https://www.youtube.com/watch?v=5zxCbENygQA"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-94",
      "row": 94,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Sabor y sabiduría",
      "type": "Videos",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Las cocinas en la casa, en la calle, en la comunidad están llenas de sabores, saberes y sazones en torno a la preparación de alimentos y son el sustento económico de quienes a diario prenden los fogones.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Cocinas domésticas y comunitarias",
        "Preparación de alimentos",
        "Sabores, saberes y sazones",
        "Sustento económico",
        "Trabajo diario",
        "Fogones",
        "Economía local",
        "Cultura culinaria",
        "Producción comunitaria",
        "Tradición gastronómica"
      ],
      "link": "https://www.youtube.com/watch?v=QQj6H7ZsgtA",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Sabor y sabiduría Videos Producción de la serie audiovisual y sonora Economías populares. Las cocinas en la casa, en la calle, en la comunidad están llenas de sabores, saberes y sazones en torno a la preparación de alimentos y son el sustento económico de quienes a diario prenden los fogones. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Cocinas domésticas y comunitarias Preparación de alimentos Sabores, saberes y sazones Sustento económico Trabajo diario Fogones Economía local Cultura culinaria Producción comunitaria Tradición gastronómica https://www.youtube.com/watch?v=QQj6H7ZsgtA"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-95",
      "row": 95,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Las mujeres hacemos de todo",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Las mujeres realizan diferentes tipos de oficios para rebuscarse la vida, muchas veces tienen doble jornada de trabajo al asumir las labores de cuidado de la familia en el hogar y enfrentan los retos de ser mujeres en un mundo machista.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Economías populares",
        "Mujeres trabajadoras",
        "Diversos oficios",
        "Rebusque",
        "Doble jornada laboral",
        "Cuidado familiar",
        "Desafíos de género",
        "Mundo machista",
        "Economía informal",
        "Resiliencia femenina",
        "Trabajo doméstico y productivo"
      ],
      "link": "https://www.youtube.com/watch?v=EDdwcp4hzak",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Las mujeres hacemos de todo Video Producción de la serie audiovisual y sonora Economías populares. Las mujeres realizan diferentes tipos de oficios para rebuscarse la vida, muchas veces tienen doble jornada de trabajo al asumir las labores de cuidado de la familia en el hogar y enfrentan los retos de ser mujeres en un mundo machista. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Economías populares Mujeres trabajadoras Diversos oficios Rebusque Doble jornada laboral Cuidado familiar Desafíos de género Mundo machista Economía informal Resiliencia femenina Trabajo doméstico y productivo https://www.youtube.com/watch?v=EDdwcp4hzak"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-96",
      "row": 96,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El sonido de los cantos del pueblo miraña",
      "type": "Editorial",
      "description": "Publicación en la que el documentador de la lengua miraña, Elio Miraña, habla sobre la importancia de los cantos y los cantadores para su pueblo. A través de una de estas canciones, escuchamos sus reflexiones sobre el valor de recuperar y fortalecer la lengua.",
      "keywords": [
        "Documentación lingüística",
        "Elio Miraña",
        "Lengua miraña",
        "Cantos y cantadores",
        "Pueblo miraña",
        "Recuperación lingüística",
        "Fortalecimiento de la lengua",
        "Saberes ancestrales",
        "Tradición oral",
        "Memoria cultural",
        "Patrimonio intangible"
      ],
      "link": "https://www.caroycuervo.gov.co/el-sonido-de-los-cantos-del-pueblo-mirana/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial El sonido de los cantos del pueblo miraña Editorial Publicación en la que el documentador de la lengua miraña, Elio Miraña, habla sobre la importancia de los cantos y los cantadores para su pueblo. A través de una de estas canciones, escuchamos sus reflexiones sobre el valor de recuperar y fortalecer la lengua. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Documentación lingüística Elio Miraña Lengua miraña Cantos y cantadores Pueblo miraña Recuperación lingüística Fortalecimiento de la lengua Saberes ancestrales Tradición oral Memoria cultural Patrimonio intangible https://www.caroycuervo.gov.co/el-sonido-de-los-cantos-del-pueblo-mirana/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-97",
      "row": 97,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Escuchar, aprender y conservar las historias del pueblo inga",
      "type": "Editorial",
      "description": "Publicación en la que la documentadora de la lengua inga, Mónica Jansasoy, comparte la importancia que su trabajo ha tenido en la recuperación de las historias de su comunidad, así como en la valoración de los saberes y la identidad propia.",
      "keywords": [
        "Documentación lingüística",
        "Mónica Jansasoy",
        "Lengua inga",
        "Recuperación de historias comunitarias",
        "Saberes ancestrales",
        "Identidad cultural",
        "Valoración de la cultura",
        "Tradición oral",
        "Memoria colectiva",
        "Patrimonio intangible"
      ],
      "link": "https://www.caroycuervo.gov.co/escuchar-desde-el-interior-para-aprender-y-conservar-las-historias-del-pueblo-inga/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial Escuchar, aprender y conservar las historias del pueblo inga Editorial Publicación en la que la documentadora de la lengua inga, Mónica Jansasoy, comparte la importancia que su trabajo ha tenido en la recuperación de las historias de su comunidad, así como en la valoración de los saberes y la identidad propia. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Documentación lingüística Mónica Jansasoy Lengua inga Recuperación de historias comunitarias Saberes ancestrales Identidad cultural Valoración de la cultura Tradición oral Memoria colectiva Patrimonio intangible https://www.caroycuervo.gov.co/escuchar-desde-el-interior-para-aprender-y-conservar-las-historias-del-pueblo-inga/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-98",
      "row": 98,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El tejido del tsombiash: memoria viva del pueblo kamëntšá",
      "type": "Editorial",
      "description": "Publicación en la que la documentadora de la lengua kamëntšá, María Antonia Narváez, nos hable sobre la importancia del tsombiash para su pueblo y sobre cómo su trabajo en el Programa de Documentación de Lenguas Nativas contribuye a preservar la memoria, los saberes y la lengua a través de las prácticas culturales.",
      "keywords": [
        "Documentación lingüística",
        "María Antonia Narváez",
        "Lengua kamëntšá",
        "Tsombiash",
        "Pueblo kamëntšá",
        "Programa de Documentación de Lenguas Nativas",
        "Preservación de la memoria",
        "Saberes ancestrales",
        "Prácticas culturales",
        "Fortalecimiento de la lengua",
        "Patrimonio intangible",
        "Identidad cultural"
      ],
      "link": "https://www.caroycuervo.gov.co/el-tejido-del-tsombiash-memoria-viva-del-pueblo-kamentsa/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial El tejido del tsombiash: memoria viva del pueblo kamëntšá Editorial Publicación en la que la documentadora de la lengua kamëntšá, María Antonia Narváez, nos hable sobre la importancia del tsombiash para su pueblo y sobre cómo su trabajo en el Programa de Documentación de Lenguas Nativas contribuye a preservar la memoria, los saberes y la lengua a través de las prácticas culturales. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Documentación lingüística María Antonia Narváez Lengua kamëntšá Tsombiash Pueblo kamëntšá Programa de Documentación de Lenguas Nativas Preservación de la memoria Saberes ancestrales Prácticas culturales Fortalecimiento de la lengua Patrimonio intangible Identidad cultural https://www.caroycuervo.gov.co/el-tejido-del-tsombiash-memoria-viva-del-pueblo-kamentsa/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-99",
      "row": 99,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial La caguana, legado de las mujeres murui",
      "type": "Editorial",
      "description": "Publicación sobre el trabajo de documentación de Luz Dary Flórez, documentadora murui, sobre un alimento importante para su comunidad que fortalece la lengua y las tradiciones de su pueblo.",
      "keywords": [
        "Documentación lingüística",
        "Luz Dary Flórez",
        "Pueblo murui",
        "Alimento tradicional",
        "Fortalecimiento de la lengua",
        "Preservación de tradiciones",
        "Saberes ancestrales",
        "Identidad cultural",
        "Patrimonio intangible",
        "Prácticas comunitarias"
      ],
      "link": "https://www.caroycuervo.gov.co/la-caguana-legado-de-las-mujeres-murui-que-fortalece-la-lengua-y-las-tradiciones-de-su-pueblo/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial La caguana, legado de las mujeres murui Editorial Publicación sobre el trabajo de documentación de Luz Dary Flórez, documentadora murui, sobre un alimento importante para su comunidad que fortalece la lengua y las tradiciones de su pueblo. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Documentación lingüística Luz Dary Flórez Pueblo murui Alimento tradicional Fortalecimiento de la lengua Preservación de tradiciones Saberes ancestrales Identidad cultural Patrimonio intangible Prácticas comunitarias https://www.caroycuervo.gov.co/la-caguana-legado-de-las-mujeres-murui-que-fortalece-la-lengua-y-las-tradiciones-de-su-pueblo/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-100",
      "row": 100,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Los cantos y arrullos como memoria y reivindicación de la lengua murui",
      "type": "Editorial",
      "description": "Publicación sobre el trabajo de documentación de Luz Dary Flórez, documentadora murui, alrededor de los cantos murui.",
      "keywords": [
        "Documentación lingüística",
        "Luz Dary Flórez",
        "Pueblo murui",
        "Cantos murui",
        "Preservación de la lengua",
        "Saberes ancestrales",
        "Tradición oral",
        "Memoria cultural",
        "Identidad comunitaria",
        "Patrimonio intangible"
      ],
      "link": "https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial Los cantos y arrullos como memoria y reivindicación de la lengua murui Editorial Publicación sobre el trabajo de documentación de Luz Dary Flórez, documentadora murui, alrededor de los cantos murui. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Documentación lingüística Luz Dary Flórez Pueblo murui Cantos murui Preservación de la lengua Saberes ancestrales Tradición oral Memoria cultural Identidad comunitaria Patrimonio intangible https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-101",
      "row": 101,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial En busca del origen del pueblo cacua",
      "type": "Editorial",
      "description": "Publicación sobre el trabajo de la documentadora Marina López en el Vaupés. Con solo 320 hablantes y clanes en riesgo de desaparecer, el proyecto busca documentar su historia y fortalecer su identidad, evitando que su lengua y cultura caigan en el olvido.",
      "keywords": [
        "Documentación lingüística",
        "Marina López",
        "Vaupés",
        "Lengua en riesgo",
        "320 hablantes",
        "Clanes en peligro",
        "Preservación cultural",
        "Fortalecimiento de la identidad",
        "Memoria histórica",
        "Patrimonio intangible",
        "Prevención del olvido",
        "Saberes ancestrales"
      ],
      "link": "https://www.caroycuervo.gov.co/en-busca-del-origen-del-pueblo-cacua/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial En busca del origen del pueblo cacua Editorial Publicación sobre el trabajo de la documentadora Marina López en el Vaupés. Con solo 320 hablantes y clanes en riesgo de desaparecer, el proyecto busca documentar su historia y fortalecer su identidad, evitando que su lengua y cultura caigan en el olvido. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Documentación lingüística Marina López Vaupés Lengua en riesgo 320 hablantes Clanes en peligro Preservación cultural Fortalecimiento de la identidad Memoria histórica Patrimonio intangible Prevención del olvido Saberes ancestrales https://www.caroycuervo.gov.co/en-busca-del-origen-del-pueblo-cacua/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-102",
      "row": 102,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Edtitorial El encuentro entre los cacua y los nukak",
      "type": "Editorial",
      "description": "En el marco del programa del Instituto Caro y Cuervo, Marina López y Katherine Bolaños viajaron al Guaviare para trabajar con el pueblo nukak. Allí documentaron su lengua y cultura, y recopilaron relatos sobre los cacua para entender el pasado común, sus migraciones y los cambios que han vivido ambos pueblos.",
      "keywords": [
        "Programa Instituto Caro y Cuervo",
        "Marina López y Katherine Bolaños",
        "Guaviare",
        "Pueblo nukak",
        "Documentación de lengua y cultura",
        "Relatos sobre los cacua",
        "Historia compartida",
        "Migraciones",
        "Cambios culturales",
        "Memoria colectiva",
        "Saberes ancestrales",
        "Patrimonio intangible"
      ],
      "link": "https://www.caroycuervo.gov.co/el-encuentro-entre-los-cacua-y-los-nukak/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Edtitorial El encuentro entre los cacua y los nukak Editorial En el marco del programa del Instituto Caro y Cuervo, Marina López y Katherine Bolaños viajaron al Guaviare para trabajar con el pueblo nukak. Allí documentaron su lengua y cultura, y recopilaron relatos sobre los cacua para entender el pasado común, sus migraciones y los cambios que han vivido ambos pueblos. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Programa Instituto Caro y Cuervo Marina López y Katherine Bolaños Guaviare Pueblo nukak Documentación de lengua y cultura Relatos sobre los cacua Historia compartida Migraciones Cambios culturales Memoria colectiva Saberes ancestrales Patrimonio intangible https://www.caroycuervo.gov.co/el-encuentro-entre-los-cacua-y-los-nukak/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-103",
      "row": 103,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El tejido como símbolo de resistencia de los kamëntšá",
      "type": "Editorial",
      "description": "Desde tiempos inmemoriales, los tejidos han hecho parte de la vida de los kamëntšá biyá, un pueblo ubicado en el Valle de Sibundoy, en el departamento del Putumayo, cuyo nombre se traduce como “hombres de aquí mismo con pensamiento y lengua propia”. Esta interpretación resulta especialmente importante si se conoce el vínculo que se teje desde el momento mismo del nacimiento entre cada una de las personas de esta comunidad y el “aquí mismo” de su territorio.",
      "keywords": [
        "Tejidos tradicionales",
        "Pueblo kamëntšá biyá",
        "Valle de Sibundoy, Putumayo",
        "Identidad cultural",
        "Lengua propia",
        "Vínculo con el territorio",
        "Nacimiento y pertenencia",
        "Saberes ancestrales",
        "Patrimonio material e inmaterial",
        "Cosmovisión indígena",
        "Cultura viva",
        "Tradición intergeneracional"
      ],
      "link": "https://www.caroycuervo.gov.co/hilando-la-historia-el-tejido-como-simbolo-de-resistencia-de-los-kamentsa/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial El tejido como símbolo de resistencia de los kamëntšá Editorial Desde tiempos inmemoriales, los tejidos han hecho parte de la vida de los kamëntšá biyá, un pueblo ubicado en el Valle de Sibundoy, en el departamento del Putumayo, cuyo nombre se traduce como “hombres de aquí mismo con pensamiento y lengua propia”. Esta interpretación resulta especialmente importante si se conoce el vínculo que se teje desde el momento mismo del nacimiento entre cada una de las personas de esta comunidad y el “aquí mismo” de su territorio. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Tejidos tradicionales Pueblo kamëntšá biyá Valle de Sibundoy, Putumayo Identidad cultural Lengua propia Vínculo con el territorio Nacimiento y pertenencia Saberes ancestrales Patrimonio material e inmaterial Cosmovisión indígena Cultura viva Tradición intergeneracional https://www.caroycuervo.gov.co/hilando-la-historia-el-tejido-como-simbolo-de-resistencia-de-los-kamentsa/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-104",
      "row": 104,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El pueblo Kankuamo, el guardián del equilibrio del mundo",
      "type": "Editorial",
      "description": "El Programa de Documentación de Lenguas 2025 avanza con el trabajo conjunto entre documentalistas de comunidades indígenas y el Instituto Caro y Cuervo, consolidando procesos de investigación y fortalecimiento cultural en distintos territorios del país. Tras encuentros previos con los pueblos cacua y nukak, enfocados en explorar vínculos históricos y lingüísticos, el equipo llegó a Atánquez, en la Sierra Nevada de Santa Marta, territorio del pueblo kankuamo.\n\nEn esta ocasión, el énfasis estuvo en la formación en documentación audiovisual, promoviendo herramientas para que la comunidad pueda organizar, preservar y analizar información relacionada con su lengua. Aunque la lengua kankuama ha sido considerada extinta, persisten vestigios lingüísticos y un fuerte interés colectivo por recuperarla, integrarla en procesos educativos y mantener viva su cosmovisión a través de la memoria y la transmisión cultural.",
      "keywords": [
        "Pueblo kankuamo",
        "Lengua kankuama",
        "Identidad cultural",
        "Vínculo con el territorio",
        "Madre tierra",
        "Equilibrio del mundo",
        "Saberes ancestrales",
        "Cosmovisión indígena",
        "Cultura viva",
        "Tradición intergeneracional"
      ],
      "link": "https://www.caroycuervo.gov.co/el-pueblo-kankuamo-el-guardian-del-equilibrio-del-mundo-que-se-resiste-a-desaparecer/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial El pueblo Kankuamo, el guardián del equilibrio del mundo Editorial El Programa de Documentación de Lenguas 2025 avanza con el trabajo conjunto entre documentalistas de comunidades indígenas y el Instituto Caro y Cuervo, consolidando procesos de investigación y fortalecimiento cultural en distintos territorios del país. Tras encuentros previos con los pueblos cacua y nukak, enfocados en explorar vínculos históricos y lingüísticos, el equipo llegó a Atánquez, en la Sierra Nevada de Santa Marta, territorio del pueblo kankuamo. En esta ocasión, el énfasis estuvo en la formación en documentación audiovisual, promoviendo herramientas para que la comunidad pueda organizar, preservar y analizar información relacionada con su lengua. Aunque la lengua kankuama ha sido considerada extinta, persisten vestigios lingüísticos y un fuerte interés colectivo por recuperarla, integrarla en procesos educativos y mantener viva su cosmovisión a través de la memoria y la transmisión cultural. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Pueblo kankuamo Lengua kankuama Identidad cultural Vínculo con el territorio Madre tierra Equilibrio del mundo Saberes ancestrales Cosmovisión indígena Cultura viva Tradición intergeneracional https://www.caroycuervo.gov.co/el-pueblo-kankuamo-el-guardian-del-equilibrio-del-mundo-que-se-resiste-a-desaparecer/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-105",
      "row": 105,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Reencontrarse con el pensamiento y recuperar la palabra murui",
      "type": "Editorial",
      "description": "El cabildo TIWA en Leticia (Amazonas), ubicado a la altura del km 6 de la vía Leticia-Tarapacá, es una comunidad multicultural que alberga a nueve pueblos indígenas: murui, yucuna, tikuna, bora, inga, cubeo, tanimuka, cocama y miraña. Desde este lugar, que representa un punto de confluencia de memorias, lenguas y prácticas culturales, la documentadora murui Luz Dary Flórez está adelantando un trabajo fundamental para la preservación cultural de su pueblo: documentar su lengua y los saberes ancestrales de las mujeres mayores de su comunidad. Se ha propuesto recuperar el pensamiento y la palabra de las mujeres del clan ɨmeraiaɨ (gente de boruga), hablantes del dialecto bue del murui, reconociendo en ellas un archivo vivo que resguarda enseñanzas fundamentales para las nuevas generaciones. Este esfuerzo hace parte del Programa de documentación de diez lenguas para el 2025 del Instituto Caro y Cuervo, una iniciativa que busca detener la pérdida de idiomas indígenas que hoy enfrentan serias amenazas de desaparición.",
      "keywords": [
        "Pueblo murui",
        "Lengua murui",
        "Recuperación de la palabra",
        "Memoria ancestral",
        "Saberes de las mujeres",
        "Chagra",
        "Identidad cultural",
        "Transmisión intergeneracional",
        "Resistencia cultural",
        "Pervivencia indígena"
      ],
      "link": "https://www.caroycuervo.gov.co/reencontrarse-con-el-pensamiento-y-recuperar-la-palabra-murui/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial Reencontrarse con el pensamiento y recuperar la palabra murui Editorial El cabildo TIWA en Leticia (Amazonas), ubicado a la altura del km 6 de la vía Leticia-Tarapacá, es una comunidad multicultural que alberga a nueve pueblos indígenas: murui, yucuna, tikuna, bora, inga, cubeo, tanimuka, cocama y miraña. Desde este lugar, que representa un punto de confluencia de memorias, lenguas y prácticas culturales, la documentadora murui Luz Dary Flórez está adelantando un trabajo fundamental para la preservación cultural de su pueblo: documentar su lengua y los saberes ancestrales de las mujeres mayores de su comunidad. Se ha propuesto recuperar el pensamiento y la palabra de las mujeres del clan ɨmeraiaɨ (gente de boruga), hablantes del dialecto bue del murui, reconociendo en ellas un archivo vivo que resguarda enseñanzas fundamentales para las nuevas generaciones. Este esfuerzo hace parte del Programa de documentación de diez lenguas para el 2025 del Instituto Caro y Cuervo, una iniciativa que busca detener la pérdida de idiomas indígenas que hoy enfrentan serias amenazas de desaparición. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Pueblo murui Lengua murui Recuperación de la palabra Memoria ancestral Saberes de las mujeres Chagra Identidad cultural Transmisión intergeneracional Resistencia cultural Pervivencia indígena https://www.caroycuervo.gov.co/reencontrarse-con-el-pensamiento-y-recuperar-la-palabra-murui/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-106",
      "row": 106,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Reunirse alrededor del fuego para mantener vivo el namui wam",
      "type": "Editorial",
      "description": "En Morales, Cauca, el Resguardo Indígena Misak de San Antonio enfrenta un reto determinante: preservar su lengua en medio de un contexto geosocial en el que el castellano tiene más presencia y uso en la vida cotidiana. La comunidad trabaja en el enraizamiento de su cultura ancestral con el acompañamiento del Instituto Caro y Cuervo y su Programa de documentación de lenguas nativas, cuyo objetivo es contribuir al registro audiovisual de diez lenguas para mitigar su riesgo de desaparición.",
      "keywords": [
        "Pueblo Misak",
        "Namui wam",
        "Lengua propia",
        "Identidad misak",
        "Nak chak (fogón)",
        "Pishi Ya",
        "Memoria ancestral",
        "Transmisión de saberes",
        "Resistencia cultural",
        "Pervivencia indígena"
      ],
      "link": "https://www.caroycuervo.gov.co/reunirse-alrededor-del-fuego-para-mantener-vivo-el-namui-wam-la-lengua-de-los-misak/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial Reunirse alrededor del fuego para mantener vivo el namui wam Editorial En Morales, Cauca, el Resguardo Indígena Misak de San Antonio enfrenta un reto determinante: preservar su lengua en medio de un contexto geosocial en el que el castellano tiene más presencia y uso en la vida cotidiana. La comunidad trabaja en el enraizamiento de su cultura ancestral con el acompañamiento del Instituto Caro y Cuervo y su Programa de documentación de lenguas nativas, cuyo objetivo es contribuir al registro audiovisual de diez lenguas para mitigar su riesgo de desaparición. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Pueblo Misak Namui wam Lengua propia Identidad misak Nak chak (fogón) Pishi Ya Memoria ancestral Transmisión de saberes Resistencia cultural Pervivencia indígena https://www.caroycuervo.gov.co/reunirse-alrededor-del-fuego-para-mantener-vivo-el-namui-wam-la-lengua-de-los-misak/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-107",
      "row": 107,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial “Podemos perderlo todo, pero nunca la lengua miraña”: Elio Miraña",
      "type": "Editorial",
      "description": "Miraña es su nombre, como también el de su idioma y su pueblo. Miraña del clan Booanamʉ (Boa) por el lado paterno y del Neebaje (Achiote) por el materno, Elio Miraña, documentador de la lengua miraña en el marco del Programa de documentación de diez lenguas para 2025 del Instituto Caro y Cuervo, dice que, aunque este término de origen tupí fue una forma de colonización que tergiversó la historia de su gente, “lo usamos de apellido porque también es una manera de reconocernos y hermanarnos. Al ser reducidos como población [durante la fiebre del caucho], todos nos consideramos parte de la misma familia, más allá de la diversidad de los clanes”. \n\nLos miraña son un pueblo indígena amazónico cuyo territorio ancestral está ubicado en la quebrada del río Gwaa’i (Pamá), afluente del Paa’i (río Cahuinari). Durante el genocidio cauchero, que tuvo como epicentro el Putumayo, el grupo migró a zonas cercanas al Iñe’i (río Mirití), territorio de comunidades como los matapi y los yucuna. Desde 1937 se estableció en asentamientos ribereños a orillas del río Caquetá o río de la danta (Okajimo), formando las comunidades de Puerto Remanso del Tigre, Mariápolis, San Francisco, Las Palmas y Metá-Quinché.",
      "keywords": [
        "Pueblo Miraña",
        "Lengua miraña",
        "Elio Miraña",
        "Preservación lingüística",
        "Memoria ancestral",
        "Cantos tradicionales",
        "Saberes espirituales",
        "Transmisión intergeneracional",
        "Resistencia indígena",
        "Oralidad",
        "Identidad cultural"
      ],
      "link": "https://www.caroycuervo.gov.co/podemos-perderlo-todo-incluido-el-territorio-pero-nunca-la-lengua-mirana-elio-mirana/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial “Podemos perderlo todo, pero nunca la lengua miraña”: Elio Miraña Editorial Miraña es su nombre, como también el de su idioma y su pueblo. Miraña del clan Booanamʉ (Boa) por el lado paterno y del Neebaje (Achiote) por el materno, Elio Miraña, documentador de la lengua miraña en el marco del Programa de documentación de diez lenguas para 2025 del Instituto Caro y Cuervo, dice que, aunque este término de origen tupí fue una forma de colonización que tergiversó la historia de su gente, “lo usamos de apellido porque también es una manera de reconocernos y hermanarnos. Al ser reducidos como población [durante la fiebre del caucho], todos nos consideramos parte de la misma familia, más allá de la diversidad de los clanes”. Los miraña son un pueblo indígena amazónico cuyo territorio ancestral está ubicado en la quebrada del río Gwaa’i (Pamá), afluente del Paa’i (río Cahuinari). Durante el genocidio cauchero, que tuvo como epicentro el Putumayo, el grupo migró a zonas cercanas al Iñe’i (río Mirití), territorio de comunidades como los matapi y los yucuna. Desde 1937 se estableció en asentamientos ribereños a orillas del río Caquetá o río de la danta (Okajimo), formando las comunidades de Puerto Remanso del Tigre, Mariápolis, San Francisco, Las Palmas y Metá-Quinché. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Pueblo Miraña Lengua miraña Elio Miraña Preservación lingüística Memoria ancestral Cantos tradicionales Saberes espirituales Transmisión intergeneracional Resistencia indígena Oralidad Identidad cultural https://www.caroycuervo.gov.co/podemos-perderlo-todo-incluido-el-territorio-pero-nunca-la-lengua-mirana-elio-mirana/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-108",
      "row": 108,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El reto de preservar lenguas indígenas en Colombia",
      "type": "Editorial",
      "description": "En el mundo que crean lenguas amazónicas como el murui, el miraña, el cacua y el nukak, las palabras no se clasifican en masculino o femenino, como en el español, sino en la forma y las texturas de los objetos. Cuando un nukak muere, su nombre deja de pronunciarse, y entre los cacuas las historias cumplen un rol sanador. Cada idioma indígena plantea una manera particular de relacionarse con la realidad. Por lo tanto, cada vez que una lengua desaparece, se pierde también un conjunto de conocimientos y la manera como un grupo humano se comunica.\n\nEn Colombia existen al menos 65 lenguas indígenas, habladas por 819.291 personas que viven principalmente en zonas limítrofes del territorio y en asentamientos localizados en diversas regiones. Esta cifra, que se encuentra en el Plan Decenal de Lenguas Nativas 2022-2032, corresponde a menos del 5 % de la población colombiana frente a los más de 50 millones de hablantes de español. Se trata de comunidades que existen desde antes de la conquista y cuyas lenguas están en peligro de desaparición.",
      "keywords": [
        "Lenguas indígenas",
        "Diversidad lingüística",
        "Preservación cultural",
        "Documentación audiovisual",
        "Saberes ancestrales",
        "Cosmovisiones indígenas",
        "Transmisión intergeneracional",
        "Etnoeducación",
        "Identidad cultural",
        "Pervivencia lingüística"
      ],
      "link": "https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial El reto de preservar lenguas indígenas en Colombia Editorial En el mundo que crean lenguas amazónicas como el murui, el miraña, el cacua y el nukak, las palabras no se clasifican en masculino o femenino, como en el español, sino en la forma y las texturas de los objetos. Cuando un nukak muere, su nombre deja de pronunciarse, y entre los cacuas las historias cumplen un rol sanador. Cada idioma indígena plantea una manera particular de relacionarse con la realidad. Por lo tanto, cada vez que una lengua desaparece, se pierde también un conjunto de conocimientos y la manera como un grupo humano se comunica. En Colombia existen al menos 65 lenguas indígenas, habladas por 819.291 personas que viven principalmente en zonas limítrofes del territorio y en asentamientos localizados en diversas regiones. Esta cifra, que se encuentra en el Plan Decenal de Lenguas Nativas 2022-2032, corresponde a menos del 5 % de la población colombiana frente a los más de 50 millones de hablantes de español. Se trata de comunidades que existen desde antes de la conquista y cuyas lenguas están en peligro de desaparición. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Lenguas indígenas Diversidad lingüística Preservación cultural Documentación audiovisual Saberes ancestrales Cosmovisiones indígenas Transmisión intergeneracional Etnoeducación Identidad cultural Pervivencia lingüística https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-109",
      "row": 109,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Cultivar el alimento y la palabra inga",
      "type": "Editorial",
      "description": "Desde hace varios meses, Mónica Jansasoy, documentadora de la lengua inga, recorre las veredas del municipio de Santiago (Putumayo) para escuchar las voces y trabajar por la preservación cultural de su pueblo. Conocer los testimonios de los mayores relacionados con la escolarización religiosa impuesta por la Iglesia católica a mediados del siglo XIX ha sido uno de sus intereses y un punto de partida para reflexionar sobre otros temas fundamentales como la cosecha de los alimentos propios y los cuentos tradicionales. \n\nEn el marco de su labor dentro del programa de documentación de diez lenguas 2025 del Instituto Caro y Cuervo, el hecho de ser una mujer del Cabildo Inga de Santiago y hablante del idioma le ha abierto puertas como la de Juana Jacanamijoy, una sabedora de la vereda Muchivioy con quien tuvo la oportunidad de conversar sobre la historia y la cosecha de una planta fundamental para la alimentación de la comunidad.",
      "keywords": [
        "Pueblo Inga",
        "Lengua inga",
        "Chagra",
        "Alimentos tradicionales",
        "Memoria ancestral",
        "Sabiduría de las mamitas",
        "Tradición oral",
        "Identidad cultural",
        "Transmisión de saberes",
        "Pervivencia indígena"
      ],
      "link": "https://www.caroycuervo.gov.co/cultivar-el-alimento-y-la-palabra-inga/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial Cultivar el alimento y la palabra inga Editorial Desde hace varios meses, Mónica Jansasoy, documentadora de la lengua inga, recorre las veredas del municipio de Santiago (Putumayo) para escuchar las voces y trabajar por la preservación cultural de su pueblo. Conocer los testimonios de los mayores relacionados con la escolarización religiosa impuesta por la Iglesia católica a mediados del siglo XIX ha sido uno de sus intereses y un punto de partida para reflexionar sobre otros temas fundamentales como la cosecha de los alimentos propios y los cuentos tradicionales. En el marco de su labor dentro del programa de documentación de diez lenguas 2025 del Instituto Caro y Cuervo, el hecho de ser una mujer del Cabildo Inga de Santiago y hablante del idioma le ha abierto puertas como la de Juana Jacanamijoy, una sabedora de la vereda Muchivioy con quien tuvo la oportunidad de conversar sobre la historia y la cosecha de una planta fundamental para la alimentación de la comunidad. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Pueblo Inga Lengua inga Chagra Alimentos tradicionales Memoria ancestral Sabiduría de las mamitas Tradición oral Identidad cultural Transmisión de saberes Pervivencia indígena https://www.caroycuervo.gov.co/cultivar-el-alimento-y-la-palabra-inga/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-110",
      "row": 110,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial La historia de una madre que siembra el nasa yuwe en su hija",
      "type": "Editorial",
      "description": "Desde el nacimiento de su hija Sara, la mayora Edilma Taquinas, del pueblo Nasa, ha acompañado su crecimiento en su lengua materna: el nasa yuwe. En el municipio de Suárez, al suroccidente de Colombia, donde cada vez se escucha menos este idioma —una de las lenguas nativas en riesgo de desaparecer—, su apuesta es firme: mantener viva la palabra nasa, junto con la cosmovisión de su comunidad, con toda la memoria, el cuidado y el enraizamiento que abarca.",
      "keywords": [
        "Pueblo Nasa",
        "Nasa yuwe",
        "Lengua materna",
        "Identidad cultural",
        "Transmisión familiar",
        "Memoria ancestral",
        "Cosmovisión nasa",
        "Enraizamiento cultural",
        "Resistencia lingüística",
        "Pervivencia indígena"
      ],
      "link": "https://www.caroycuervo.gov.co/la-lengua-como-el-hogar-la-historia-de-una-madre-que-siembra-el-nasa-yuwe-en-su-hija/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial La historia de una madre que siembra el nasa yuwe en su hija Editorial Desde el nacimiento de su hija Sara, la mayora Edilma Taquinas, del pueblo Nasa, ha acompañado su crecimiento en su lengua materna: el nasa yuwe. En el municipio de Suárez, al suroccidente de Colombia, donde cada vez se escucha menos este idioma —una de las lenguas nativas en riesgo de desaparecer—, su apuesta es firme: mantener viva la palabra nasa, junto con la cosmovisión de su comunidad, con toda la memoria, el cuidado y el enraizamiento que abarca. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Pueblo Nasa Nasa yuwe Lengua materna Identidad cultural Transmisión familiar Memoria ancestral Cosmovisión nasa Enraizamiento cultural Resistencia lingüística Pervivencia indígena https://www.caroycuervo.gov.co/la-lengua-como-el-hogar-la-historia-de-una-madre-que-siembra-el-nasa-yuwe-en-su-hija/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-111",
      "row": 111,
      "theme": "Somos lenguas de Colombia, señas e inclusión",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Mujeres danzantes: guardianas de la tradición kamëntšá",
      "type": "Editorial",
      "description": "En el municipio de Sibundoy (Putumayo) vive un grupo de mujeres que danzan para mantener vivas las memorias del pueblo kamëntšá y proteger el idioma, la música tradicional, las plantas medicinales y los tejidos que guardan nuestras historias.\n\nTodas las integrantes de Danzas Vida Or visten tupuyos rojos (blusas) y sus vientres están envueltos por el tsombiash, un cinturón de lana que tiene tejidas las memorias y la cosmovisión de los kamëntšá. Entre los elementos que componen su vestuario también están los collares elaborados con semillas naturales, que representan la conexión con la tierra, y algunas de ellas portan un sheknaj, un bolso tejido que tradicionalmente se utilizaba para guardar las semillas y los frutos, pero cuyo uso ha ido desapareciendo.",
      "keywords": [
        "Pueblo Kamëntšá",
        "Lengua kamëntšá",
        "Danzas tradicionales",
        "Memoria ancestral",
        "Cosmovisión indígena",
        "Saberes de las mayores",
        "Identidad cultural",
        "Pervivencia indígena"
      ],
      "link": "https://www.caroycuervo.gov.co/mujeres-danzantes-guardianas-de-la-tradicion-kamentsa/",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, señas e inclusión INSTITUTO CARO Y CUERVO Editorial Mujeres danzantes: guardianas de la tradición kamëntšá Editorial En el municipio de Sibundoy (Putumayo) vive un grupo de mujeres que danzan para mantener vivas las memorias del pueblo kamëntšá y proteger el idioma, la música tradicional, las plantas medicinales y los tejidos que guardan nuestras historias. Todas las integrantes de Danzas Vida Or visten tupuyos rojos (blusas) y sus vientres están envueltos por el tsombiash, un cinturón de lana que tiene tejidas las memorias y la cosmovisión de los kamëntšá. Entre los elementos que componen su vestuario también están los collares elaborados con semillas naturales, que representan la conexión con la tierra, y algunas de ellas portan un sheknaj, un bolso tejido que tradicionalmente se utilizaba para guardar las semillas y los frutos, pero cuyo uso ha ido desapareciendo. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Pueblo Kamëntšá Lengua kamëntšá Danzas tradicionales Memoria ancestral Cosmovisión indígena Saberes de las mayores Identidad cultural Pervivencia indígena https://www.caroycuervo.gov.co/mujeres-danzantes-guardianas-de-la-tradicion-kamentsa/"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-112",
      "row": 112,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Documental Cuentos de pesca: economía y saberes artesanales",
      "type": "Documental",
      "description": "Producción del ICANH que documenta la vida de pescadores artesanales de la Ciénaga de la Caimanera. Aborda su economía, tradiciones y relación con el agua, mostrando su papel en la historia y dinámica social del Caribe colombiano a través de entrevistas y análisis de su entorno.",
      "keywords": [
        "Producción ICANH",
        "Pescadores artesanales",
        "Ciénaga de la Caimanera",
        "Economía local",
        "Tradiciones y cultura",
        "Relación con el agua",
        "Historia social del Caribe colombiano",
        "Dinámica comunitaria",
        "Entrevistas y análisis del entorno",
        "Patrimonio cultural",
        "Saberes ancestrales",
        "Identidad comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=gMbhhW1Ks3w",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Documental Cuentos de pesca: economía y saberes artesanales Documental Producción del ICANH que documenta la vida de pescadores artesanales de la Ciénaga de la Caimanera. Aborda su economía, tradiciones y relación con el agua, mostrando su papel en la historia y dinámica social del Caribe colombiano a través de entrevistas y análisis de su entorno. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a él, pero también de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Producción ICANH Pescadores artesanales Ciénaga de la Caimanera Economía local Tradiciones y cultura Relación con el agua Historia social del Caribe colombiano Dinámica comunitaria Entrevistas y análisis del entorno Patrimonio cultural Saberes ancestrales Identidad comunitaria https://www.youtube.com/watch?v=gMbhhW1Ks3w"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-113",
      "row": 113,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Podcast El yagé: usos y efectos de su globalización",
      "type": "Podcast",
      "description": "Programa de la serie de podcast Antropofonías del ICANH. Est episodio trata sobre los usos y los efectos que hoy en día tiene el consumo de ayahuasca o yagé en entornos urbanos, no solo a nivel local sino internacional. Para esta conversación tenemos como invitada a la reconocida investigadora de la ayahuasca: Alhena Caicedo, antropóloga y actual directora del Instituto Colombiano de Antropología e Historia (ICANH).",
      "keywords": [
        "Serie de podcast Antropofonías",
        "ICANH",
        "Ayahuasca / yagé",
        "Consumo urbano",
        "Efectos y usos contemporáneos",
        "Alcance local e internacional",
        "Invitada: Alhena Caicedo",
        "Antropología",
        "Investigación sobre plantas sagradas",
        "Patrimonio cultural",
        "Saberes ancestrales",
        "Prácticas rituales",
        "Cultura amazónica"
      ],
      "link": "https://open.spotify.com/episode/0LsJ3LA8S8pKY6PMbn5K7Q?si=da951c6a81734971",
      "asset_link": "",
      "force_message": "La herencia no es asunto del pasado: vive hoy en cada alimento, cada camino recorrido y cda símbolo del que nos enorgullecemos.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Podcast El yagé: usos y efectos de su globalización Podcast Programa de la serie de podcast Antropofonías del ICANH. Est episodio trata sobre los usos y los efectos que hoy en día tiene el consumo de ayahuasca o yagé en entornos urbanos, no solo a nivel local sino internacional. Para esta conversación tenemos como invitada a la reconocida investigadora de la ayahuasca: Alhena Caicedo, antropóloga y actual directora del Instituto Colombiano de Antropología e Historia (ICANH). La herencia no es asunto del pasado: vive hoy en cada alimento, cada camino recorrido y cda símbolo del que nos enorgullecemos. Serie de podcast Antropofonías ICANH Ayahuasca / yagé Consumo urbano Efectos y usos contemporáneos Alcance local e internacional Invitada: Alhena Caicedo Antropología Investigación sobre plantas sagradas Patrimonio cultural Saberes ancestrales Prácticas rituales Cultura amazónica https://open.spotify.com/episode/0LsJ3LA8S8pKY6PMbn5K7Q?si=da951c6a81734971"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-114",
      "row": 114,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Podcast La salud de la mujer, la luna y cuidados del cuerpo",
      "type": "Podcast",
      "description": "Episodio de la serie de podcast Antropofonías del ICANH. Este episodio propone un diálogo entre la medicina alópata y la medicina ancestral Yanakuna. Nuestras invitadas hablarán, cada una desde su esquina, sobre el cuidado de la mujer y la salud femenina. De la mano de la doctora Paula Ramírez y la aprendiz de partera Sayari Campos Burbano podremos entender la diversidad de miradas y la singularidad frente a las concepciones del cuerpo y la salud de las mujeres.",
      "keywords": [
        "Serie de podcast Antropofonías",
        "ICANH",
        "Medicina alópata y medicina ancestral Yanakuna",
        "Cuidado de la mujer",
        "Salud femenina",
        "Diversidad de miradas médicas",
        "Conceptos del cuerpo y la salud",
        "Invitadas: Dra. Paula Ramírez y Sayari Campos Burbano",
        "Saberes ancestrales",
        "Partería tradicional",
        "Diálogo intercultural",
        "Patrimonio intangible",
        "Medicina tradicional y contemporánea"
      ],
      "link": "https://open.spotify.com/episode/51EPlgXf2rcNCoW9i7Jola?si=48d7d713ac524884",
      "asset_link": "",
      "force_message": "La herencia no es asunto del pasado: vive hoy en cada alimento, cada camino recorrido y cda símbolo del que nos enorgullecemos.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Podcast La salud de la mujer, la luna y cuidados del cuerpo Podcast Episodio de la serie de podcast Antropofonías del ICANH. Este episodio propone un diálogo entre la medicina alópata y la medicina ancestral Yanakuna. Nuestras invitadas hablarán, cada una desde su esquina, sobre el cuidado de la mujer y la salud femenina. De la mano de la doctora Paula Ramírez y la aprendiz de partera Sayari Campos Burbano podremos entender la diversidad de miradas y la singularidad frente a las concepciones del cuerpo y la salud de las mujeres. La herencia no es asunto del pasado: vive hoy en cada alimento, cada camino recorrido y cda símbolo del que nos enorgullecemos. Serie de podcast Antropofonías ICANH Medicina alópata y medicina ancestral Yanakuna Cuidado de la mujer Salud femenina Diversidad de miradas médicas Conceptos del cuerpo y la salud Invitadas: Dra. Paula Ramírez y Sayari Campos Burbano Saberes ancestrales Partería tradicional Diálogo intercultural Patrimonio intangible Medicina tradicional y contemporánea https://open.spotify.com/episode/51EPlgXf2rcNCoW9i7Jola?si=48d7d713ac524884"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-115",
      "row": 115,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Podcast La chicha: de bebida prohibida a producto turístico",
      "type": "Podcast",
      "description": "Episodio de la serie de podcast Antropofonías del ICANH. Este episodio gira en torno a la bebida más importante para la historia de las comunidades indigenas de este territorio: la chicha. Esta bebida tradicional fue perseguida hasta hace no muchas décadas, porque se consideraba una sustancia nociva para la inteligencia y causante de criminalidad. ¿Cómo pasó de ser una bebida estigmatizada a ser parte del turismo gastronómico del país?",
      "keywords": [
        "Serie de podcast Antropofonías",
        "ICANH",
        "Chicha",
        "Bebida tradicional indígena",
        "Historia y cultura alimentaria",
        "Persecución y estigmatización",
        "Percepción social y criminalización",
        "Turismo gastronómico",
        "Patrimonio cultural",
        "Saberes ancestrales",
        "Tradición y resiliencia",
        "Identidad comunitaria"
      ],
      "link": "https://open.spotify.com/episode/2CyPcz2z3YSkJnWbkVVLvY?si=80fa7e3bdf84448b",
      "asset_link": "",
      "force_message": "La herencia no es asunto del pasado: vive hoy en cada alimento, cada camino recorrido y cda símbolo del que nos enorgullecemos.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Podcast La chicha: de bebida prohibida a producto turístico Podcast Episodio de la serie de podcast Antropofonías del ICANH. Este episodio gira en torno a la bebida más importante para la historia de las comunidades indigenas de este territorio: la chicha. Esta bebida tradicional fue perseguida hasta hace no muchas décadas, porque se consideraba una sustancia nociva para la inteligencia y causante de criminalidad. ¿Cómo pasó de ser una bebida estigmatizada a ser parte del turismo gastronómico del país? La herencia no es asunto del pasado: vive hoy en cada alimento, cada camino recorrido y cda símbolo del que nos enorgullecemos. Serie de podcast Antropofonías ICANH Chicha Bebida tradicional indígena Historia y cultura alimentaria Persecución y estigmatización Percepción social y criminalización Turismo gastronómico Patrimonio cultural Saberes ancestrales Tradición y resiliencia Identidad comunitaria https://open.spotify.com/episode/2CyPcz2z3YSkJnWbkVVLvY?si=80fa7e3bdf84448b"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-116",
      "row": 116,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Arte animado Susurros del Caquetá",
      "type": "Arte animado",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Juegos visuales y sonoros que reflejan algunos aspectos de la vida campesina del Caquetá. Es una invitación a sumergirse en las emociones que transmiten los colores y las formas de la naturaleza en esta región de Colombia.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigación y creación multimedia",
        "Vida campesina",
        "Caquetá",
        "Juegos visuales y sonoros",
        "Emociones de la naturaleza",
        "Colores y formas del paisaje",
        "Cultura rural",
        "Identidad territorial",
        "Experiencia sensorial",
        "Patrimonio cultural",
        "Conexión con el entorno natural"
      ],
      "link": "https://www.youtube.com/watch?v=pC0wF78s-9s",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Arte animado Susurros del Caquetá Arte animado Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Juegos visuales y sonoros que reflejan algunos aspectos de la vida campesina del Caquetá. Es una invitación a sumergirse en las emociones que transmiten los colores y las formas de la naturaleza en esta región de Colombia. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Investigación y creación multimedia Vida campesina Caquetá Juegos visuales y sonoros Emociones de la naturaleza Colores y formas del paisaje Cultura rural Identidad territorial Experiencia sensorial Patrimonio cultural Conexión con el entorno natural https://www.youtube.com/watch?v=pC0wF78s-9s"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-117",
      "row": 117,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Arte animado Evocaciones del Raudal del Guayabero",
      "type": "Arte animado",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. \nEsta animación busca acercar a las(os) espectadoras(es) desde la evocación poética a Raudal del Guayabero a partir del movimiento, el color y las formas mediante el uso de materiales propios del lugar como piedras y hojas sumados a la arena.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigación y creación multimedia",
        "Animación poética",
        "Raudal del Guayabero",
        "Movimiento, color y formas",
        "Materiales locales: piedras, hojas, arena",
        "Cultura campesina",
        "Paisaje y naturaleza",
        "Experiencia sensorial",
        "Identidad territorial",
        "Patrimonio cultural",
        "Conexión con el entorno"
      ],
      "link": "https://www.youtube.com/watch?v=Bbd2n09wVCQ",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Arte animado Evocaciones del Raudal del Guayabero Arte animado Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Esta animación busca acercar a las(os) espectadoras(es) desde la evocación poética a Raudal del Guayabero a partir del movimiento, el color y las formas mediante el uso de materiales propios del lugar como piedras y hojas sumados a la arena. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Investigación y creación multimedia Animación poética Raudal del Guayabero Movimiento, color y formas Materiales locales: piedras, hojas, arena Cultura campesina Paisaje y naturaleza Experiencia sensorial Identidad territorial Patrimonio cultural Conexión con el entorno https://www.youtube.com/watch?v=Bbd2n09wVCQ"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-118",
      "row": 118,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Arte animado Colores de Suárez, Cauca",
      "type": "Arte animado",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas'. Un recorrido por los colores, la diversidad étnica y las formas de la naturaleza acompañadas por el testimonio de Cleste Ararat",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigación y creación multimedia",
        "Colores y formas de la naturaleza",
        "Diversidad étnica",
        "Testimonio de Cleste Ararat",
        "Cultura campesina",
        "Identidad territorial",
        "Patrimonio natural y cultural",
        "Experiencia sensorial",
        "Conexión con el entorno",
        "Narrativa audiovisual"
      ],
      "link": "https://www.youtube.com/watch?v=6cGCIT1-8_w",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Arte animado Colores de Suárez, Cauca Arte animado Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas'. Un recorrido por los colores, la diversidad étnica y las formas de la naturaleza acompañadas por el testimonio de Cleste Ararat El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Investigación y creación multimedia Colores y formas de la naturaleza Diversidad étnica Testimonio de Cleste Ararat Cultura campesina Identidad territorial Patrimonio natural y cultural Experiencia sensorial Conexión con el entorno Narrativa audiovisual https://www.youtube.com/watch?v=6cGCIT1-8_w"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-119",
      "row": 119,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Guardiana de las vida",
      "type": "Video",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Las experiencias de vida de mujeres campesinas, indígenas y cimarronas del norte del Cauca nos hablan de cómo en sus prácticas cotidianas sostienen, cuidan y luchan por la vida, la familia, la comunidad y el territorio.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigación y creación multimedia",
        "Mujeres campesinas, indígenas y cimarronas",
        "Norte del Cauca",
        "Prácticas cotidianas",
        "Cuidado de la vida, familia y comunidad",
        "Defensa del territorio",
        "Cultura y saberes ancestrales",
        "Identidad y resistencia",
        "Economía y sostenibilidad local",
        "Patrimonio cultural",
        "Empoderamiento femenino"
      ],
      "link": "https://www.youtube.com/watch?v=Uy4sbBPS-4g",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Guardiana de las vida Video Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Las experiencias de vida de mujeres campesinas, indígenas y cimarronas del norte del Cauca nos hablan de cómo en sus prácticas cotidianas sostienen, cuidan y luchan por la vida, la familia, la comunidad y el territorio. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Investigación y creación multimedia Mujeres campesinas, indígenas y cimarronas Norte del Cauca Prácticas cotidianas Cuidado de la vida, familia y comunidad Defensa del territorio Cultura y saberes ancestrales Identidad y resistencia Economía y sostenibilidad local Patrimonio cultural Empoderamiento femenino https://www.youtube.com/watch?v=Uy4sbBPS-4g"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-120",
      "row": 120,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Vivir en armonía",
      "type": "Video",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. En Suárez, un territorio intercultural, las comunidades campesinas, indígenas y cimarronas tejen lazos de solidaridad y apoyo mutuo por la defensa de la vida y el territorio. Las voces de las mujeres del norte del Cauca hacen un llamado nacional a la unión, la paz y el respeto a la diferencia.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigación y creación multimedia",
        "Suárez, Norte del Cauca",
        "Comunidades campesinas, indígenas y cimarronas",
        "Solidaridad y apoyo mutuo",
        "Defensa de la vida y el territorio",
        "Voces de mujeres",
        "Llamado a la unión y la paz",
        "Respeto a la diversidad",
        "Identidad intercultural",
        "Cultura y saberes ancestrales",
        "Resistencia comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=jJv7O95eJrA",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Vivir en armonía Video Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. En Suárez, un territorio intercultural, las comunidades campesinas, indígenas y cimarronas tejen lazos de solidaridad y apoyo mutuo por la defensa de la vida y el territorio. Las voces de las mujeres del norte del Cauca hacen un llamado nacional a la unión, la paz y el respeto a la diferencia. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Investigación y creación multimedia Suárez, Norte del Cauca Comunidades campesinas, indígenas y cimarronas Solidaridad y apoyo mutuo Defensa de la vida y el territorio Voces de mujeres Llamado a la unión y la paz Respeto a la diversidad Identidad intercultural Cultura y saberes ancestrales Resistencia comunitaria https://www.youtube.com/watch?v=jJv7O95eJrA"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-121",
      "row": 121,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Cápsula de video Cuidar la vida",
      "type": "Video",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Las prácticas de cuidado de las vidas campesinas en el norte del Cauca se expresan de múltiples maneras: en el cuidado de las plantas y la tierra, en procurar el bienestar colectivo de la vida en comunidad, en armonizar espiritualmente el territorio, pero sobre todo, en reír y disfrutar la vida.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigación y creación multimedia",
        "Norte del Cauca",
        "Prácticas de cuidado campesinas",
        "Cuidado de plantas y tierra",
        "Bienestar colectivo",
        "Armonía espiritual con el territorio",
        "Comunidad y vida en colectivo",
        "Alegría y disfrute de la vida",
        "Saberes ancestrales",
        "Cultura y tradición rural",
        "Identidad territorial",
        "Resistencia y sostenibilidad"
      ],
      "link": "https://www.youtube.com/shorts/vu6FBMQ4HdE",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Cápsula de video Cuidar la vida Video Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Las prácticas de cuidado de las vidas campesinas en el norte del Cauca se expresan de múltiples maneras: en el cuidado de las plantas y la tierra, en procurar el bienestar colectivo de la vida en comunidad, en armonizar espiritualmente el territorio, pero sobre todo, en reír y disfrutar la vida. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Investigación y creación multimedia Norte del Cauca Prácticas de cuidado campesinas Cuidado de plantas y tierra Bienestar colectivo Armonía espiritual con el territorio Comunidad y vida en colectivo Alegría y disfrute de la vida Saberes ancestrales Cultura y tradición rural Identidad territorial Resistencia y sostenibilidad https://www.youtube.com/shorts/vu6FBMQ4HdE"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-122",
      "row": 122,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Etnografía sonora Aquí me amaño, gracias a Dios",
      "type": "Video",
      "description": "Producción del proyecto Vidas campesinas que recorre la vida campesina en Caquetá. Entre ordeño, sonidos de la naturaleza y memorias del conflicto, sus protagonistas comparten saberes, riesgos y alegrías del día a día en el piedemonte amazónico, destacando su relación con el territorio y la cultura.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Vida campesina",
        "Caquetá",
        "Ordeño y trabajo diario",
        "Sonidos de la naturaleza",
        "Memorias del conflicto",
        "Saberes y tradiciones",
        "Riesgos y alegrías cotidianas",
        "Piedemonte amazónico",
        "Relación con el territorio",
        "Cultura campesina",
        "Identidad territorial",
        "Patrimonio cultural"
      ],
      "link": "https://open.spotify.com/episode/7mFMiaggcudi72cTttAtEd?si=a87f3e6c8dec4b40",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Etnografía sonora Aquí me amaño, gracias a Dios Video Producción del proyecto Vidas campesinas que recorre la vida campesina en Caquetá. Entre ordeño, sonidos de la naturaleza y memorias del conflicto, sus protagonistas comparten saberes, riesgos y alegrías del día a día en el piedemonte amazónico, destacando su relación con el territorio y la cultura. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Vida campesina Caquetá Ordeño y trabajo diario Sonidos de la naturaleza Memorias del conflicto Saberes y tradiciones Riesgos y alegrías cotidianas Piedemonte amazónico Relación con el territorio Cultura campesina Identidad territorial Patrimonio cultural https://open.spotify.com/episode/7mFMiaggcudi72cTttAtEd?si=a87f3e6c8dec4b40"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-123",
      "row": 123,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Etnografía sonora La tecnología del jaguar",
      "type": "Video",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Cae la noche en Raudal del Guayabero; misteriosa, imponente, y con ella sus peligros. No se vale tener miedo, el jaguar sabe rastrearlo con su tecnología infalible, posando su pata sobre las huellas del caminante. Seguir el paso con valentía es la única defensa. Ciertamente, después de la noche vendrá el día y con él la luz del sol que todo ilumina.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigación y creación multimedia",
        "Raudal del Guayabero",
        "Noche y peligros del territorio",
        "Jaguar como símbolo y guía",
        "Rastreo y supervivencia",
        "Valentía y resiliencia",
        "Huellas del caminante",
        "Ciclo natural: noche y día",
        "Luz del sol y renovación",
        "Cultura y cosmovisión campesina",
        "Conexión con la naturaleza",
        "Patrimonio simbólico y narrativo"
      ],
      "link": "https://open.spotify.com/episode/1zyv56hxMof8HGgwTDseF8?si=85fcc47f4e044012",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Etnografía sonora La tecnología del jaguar Video Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Cae la noche en Raudal del Guayabero; misteriosa, imponente, y con ella sus peligros. No se vale tener miedo, el jaguar sabe rastrearlo con su tecnología infalible, posando su pata sobre las huellas del caminante. Seguir el paso con valentía es la única defensa. Ciertamente, después de la noche vendrá el día y con él la luz del sol que todo ilumina. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Investigación y creación multimedia Raudal del Guayabero Noche y peligros del territorio Jaguar como símbolo y guía Rastreo y supervivencia Valentía y resiliencia Huellas del caminante Ciclo natural: noche y día Luz del sol y renovación Cultura y cosmovisión campesina Conexión con la naturaleza Patrimonio simbólico y narrativo https://open.spotify.com/episode/1zyv56hxMof8HGgwTDseF8?si=85fcc47f4e044012"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-124",
      "row": 124,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Etnografía sonora Cultivo de alegría",
      "type": "Video",
      "description": "Producción del proyecto Vidas campesinas que retrata un territorio donde la vida fluye sin prisa y la alegría es herencia ancestral. Entre cultivos, saberes y memorias, la comunidad celebra la abundancia, la risa y la unidad como formas de bienestar, resaltando su conexión con la tierra y una vida en armonía, “a tiempo” y sin reproches.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Territorio y vida campesina",
        "Cultivos y agricultura local",
        "Saberes ancestrales",
        "Memorias comunitarias",
        "Alegría y unidad",
        "Abundancia y bienestar",
        "Conexión con la tierra",
        "Armonía y ritmo de vida",
        "Celebración de la vida cotidiana",
        "Cultura y tradición rural",
        "Identidad comunitaria",
        "Patrimonio intangible"
      ],
      "link": "https://open.spotify.com/episode/4E5Fe8AkyFri7aA33B99Ds?si=f9e0d390c67047fe",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Etnografía sonora Cultivo de alegría Video Producción del proyecto Vidas campesinas que retrata un territorio donde la vida fluye sin prisa y la alegría es herencia ancestral. Entre cultivos, saberes y memorias, la comunidad celebra la abundancia, la risa y la unidad como formas de bienestar, resaltando su conexión con la tierra y una vida en armonía, “a tiempo” y sin reproches. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Territorio y vida campesina Cultivos y agricultura local Saberes ancestrales Memorias comunitarias Alegría y unidad Abundancia y bienestar Conexión con la tierra Armonía y ritmo de vida Celebración de la vida cotidiana Cultura y tradición rural Identidad comunitaria Patrimonio intangible https://open.spotify.com/episode/4E5Fe8AkyFri7aA33B99Ds?si=f9e0d390c67047fe"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-125",
      "row": 125,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Mensaje sonoro Somos la ambulancia de todos",
      "type": "Sonoro",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Las plantas y remedios naturales son la farmacia natural frente a la incapacidad del sistema de salud de atender la ruralidad dispersa. \"Somos la ambulancia, todos de todos\" pues en las vidas campesinas caqueteas la solidaridad es sanadora.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Plantas y remedios naturales",
        "Medicina tradicional",
        "Ruralidad dispersa",
        "Limitaciones del sistema de salud",
        "Solidaridad comunitaria",
        "“Somos la ambulancia, todos de todos”",
        "Cuidado colectivo",
        "Saberes ancestrales",
        "Cultura campesina",
        "Resiliencia y autonomía",
        "Patrimonio intangible",
        "Bienestar comunitario"
      ],
      "link": "https://open.spotify.com/episode/2kJwaVWI32dPr8yNZZ69KG?si=d5edf05cf46f4be2",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Mensaje sonoro Somos la ambulancia de todos Sonoro Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Las plantas y remedios naturales son la farmacia natural frente a la incapacidad del sistema de salud de atender la ruralidad dispersa. \"Somos la ambulancia, todos de todos\" pues en las vidas campesinas caqueteas la solidaridad es sanadora. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Plantas y remedios naturales Medicina tradicional Ruralidad dispersa Limitaciones del sistema de salud Solidaridad comunitaria “Somos la ambulancia, todos de todos” Cuidado colectivo Saberes ancestrales Cultura campesina Resiliencia y autonomía Patrimonio intangible Bienestar comunitario https://open.spotify.com/episode/2kJwaVWI32dPr8yNZZ69KG?si=d5edf05cf46f4be2"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-126",
      "row": 126,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Mensaje sonoro Vivimos paz y tranquilidad",
      "type": "Sonoro",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. El apoyo mutuo en las vidas campesinas les permite tener una gran calidad de vida, especialmente en estos nuevos tiempos donde pasaron de depredadores a conservadores de la naturaleza con el turismo comunitario. El mensaje es para invertir y abrir las vías para un desarrollo sostenible en la región.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Apoyo mutuo y solidaridad",
        "Calidad de vida campesina",
        "Conservación de la naturaleza",
        "Turismo comunitario",
        "Transición de depredadores a conservadores",
        "Desarrollo sostenible",
        "Economía local",
        "Protección del territorio",
        "Saberes ancestrales",
        "Cultura y tradición rural",
        "Identidad comunitaria",
        "Patrimonio natural y cultural"
      ],
      "link": "https://open.spotify.com/episode/2F7UA21wfO8uNl3IMPhbmM?si=556846a2938948d8",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Mensaje sonoro Vivimos paz y tranquilidad Sonoro Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. El apoyo mutuo en las vidas campesinas les permite tener una gran calidad de vida, especialmente en estos nuevos tiempos donde pasaron de depredadores a conservadores de la naturaleza con el turismo comunitario. El mensaje es para invertir y abrir las vías para un desarrollo sostenible en la región. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Apoyo mutuo y solidaridad Calidad de vida campesina Conservación de la naturaleza Turismo comunitario Transición de depredadores a conservadores Desarrollo sostenible Economía local Protección del territorio Saberes ancestrales Cultura y tradición rural Identidad comunitaria Patrimonio natural y cultural https://open.spotify.com/episode/2F7UA21wfO8uNl3IMPhbmM?si=556846a2938948d8"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-127",
      "row": 127,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Mensaje sonoro Espantos de otras épocas",
      "type": "Sonoro",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. El Raudal del Guayabero fue en épocas de la bonanza cocalera un centro de acopio y distribución, con una vida comercial muy activa, que luego la violencia paramilitar arrasaría. Aún se escucha en la esquina donde quedaba el billar y allá donde quedaba el centro de salud, sonidos que recuerdan espantos de otros tiempos.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Raudal del Guayabero",
        "Bonanza cocalera",
        "Centro de acopio y distribución",
        "Vida comercial activa",
        "Violencia paramilitar",
        "Memoria histórica",
        "Sonidos del pasado",
        "Espantos y recuerdos",
        "Transformaciones del territorio",
        "Cultura y vida campesina",
        "Identidad comunitaria",
        "Patrimonio intangible"
      ],
      "link": "https://open.spotify.com/episode/4YJZ9b4p7DOHMi1JHFMSJh?si=d5fc03e7ecca42c4",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Mensaje sonoro Espantos de otras épocas Sonoro Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. El Raudal del Guayabero fue en épocas de la bonanza cocalera un centro de acopio y distribución, con una vida comercial muy activa, que luego la violencia paramilitar arrasaría. Aún se escucha en la esquina donde quedaba el billar y allá donde quedaba el centro de salud, sonidos que recuerdan espantos de otros tiempos. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Raudal del Guayabero Bonanza cocalera Centro de acopio y distribución Vida comercial activa Violencia paramilitar Memoria histórica Sonidos del pasado Espantos y recuerdos Transformaciones del territorio Cultura y vida campesina Identidad comunitaria Patrimonio intangible https://open.spotify.com/episode/4YJZ9b4p7DOHMi1JHFMSJh?si=d5fc03e7ecca42c4"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-128",
      "row": 128,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Programa de radio Un raudal de historias",
      "type": "Sonoro",
      "description": "Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Las vidas campesinas de las bocas del Raudal han sobrevivido a través de las bonanzas históricas: tigrilladas, marimba, pesca, coca y madera han depredado la naturaleza. Ahora viven un cambio radical en el que buscan conservar el patrimonio natural y cultural, en su nueva apuesta por el turismo comunitario.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Vidas campesinas, bocas del Raudal",
        "Bonanzas históricas: tigrilladas, marimba, pesca, coca, madera",
        "Depredación de la naturaleza",
        "Conservación del patrimonio natural y cultural",
        "Turismo comunitario",
        "Cambio y transición sostenible",
        "Economía local",
        "Cultura y tradición campesina",
        "Identidad territorial",
        "Saberes ancestrales",
        "Resiliencia comunitaria",
        "Patrimonio intangible"
      ],
      "link": "https://open.spotify.com/episode/4zMnMsLhTlvVq94pmudiIv?si=34d2128af15b4d64",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Programa de radio Un raudal de historias Sonoro Una producción realizada en el marco del proyecto de investigación y creación multimedia Vidas campesinas. Las vidas campesinas de las bocas del Raudal han sobrevivido a través de las bonanzas históricas: tigrilladas, marimba, pesca, coca y madera han depredado la naturaleza. Ahora viven un cambio radical en el que buscan conservar el patrimonio natural y cultural, en su nueva apuesta por el turismo comunitario. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Vidas campesinas, bocas del Raudal Bonanzas históricas: tigrilladas, marimba, pesca, coca, madera Depredación de la naturaleza Conservación del patrimonio natural y cultural Turismo comunitario Cambio y transición sostenible Economía local Cultura y tradición campesina Identidad territorial Saberes ancestrales Resiliencia comunitaria Patrimonio intangible https://open.spotify.com/episode/4zMnMsLhTlvVq94pmudiIv?si=34d2128af15b4d64"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-129",
      "row": 129,
      "theme": "Somos territorios bioculturales y economías populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Programa de radio El cuidado de la Guardia es la vida",
      "type": "Sonoro",
      "description": "Producción del proyecto Vidas campesinas que, desde el Consejo Comunitario Las Brisas en Suárez, Cauca, reúne a Guardias Cimarronas, Campesinas e Indígenas. Entre un zancocho con pipilongo y saberes compartidos, se dialoga sobre su labor en el cuidado del territorio, resaltando la unión, la tradición y la defensa colectiva de la vida.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Consejo Comunitario Las Brisas, Suárez, Cauca",
        "Guardias Cimarronas, Campesinas e Indígenas",
        "Zancocho con pipilongo",
        "Saberes compartidos",
        "Cuidado del territorio",
        "Unión y tradición",
        "Defensa colectiva de la vida",
        "Cultura y memoria comunitaria",
        "Identidad territorial",
        "Resiliencia y cooperación",
        "Patrimonio intangible",
        "Economía y vida campesina"
      ],
      "link": "https://open.spotify.com/episode/4j2CKdH3UTr05dPEbYR9Pb?si=257e89a52d8f49d2",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y economías populares ICANH Programa de radio El cuidado de la Guardia es la vida Sonoro Producción del proyecto Vidas campesinas que, desde el Consejo Comunitario Las Brisas en Suárez, Cauca, reúne a Guardias Cimarronas, Campesinas e Indígenas. Entre un zancocho con pipilongo y saberes compartidos, se dialoga sobre su labor en el cuidado del territorio, resaltando la unión, la tradición y la defensa colectiva de la vida. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro país nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Consejo Comunitario Las Brisas, Suárez, Cauca Guardias Cimarronas, Campesinas e Indígenas Zancocho con pipilongo Saberes compartidos Cuidado del territorio Unión y tradición Defensa colectiva de la vida Cultura y memoria comunitaria Identidad territorial Resiliencia y cooperación Patrimonio intangible Economía y vida campesina https://open.spotify.com/episode/4j2CKdH3UTr05dPEbYR9Pb?si=257e89a52d8f49d2"
    },
    {
      "id": "somos-cultura-de-paz-130",
      "row": 130,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios",
      "title": "Animación Viaje a la resistencia comunitaria",
      "type": "Animación",
      "description": "Relato del recorrido de niños y niñas campesinos hacia la parcela comunitaria Puerto Luna (Bolívar), un espacio de resistencia agrosostenible. En el camino atraviesan monocultivos con escasa biodiversidad, contrastando con la riqueza natural que encuentran al llegar: animales, aire puro y árboles nativos. Allí, un campesino sabedor les comparte cómo han resistido mediante la siembra de alimentos propios, defendiendo el territorio y sus prácticas tradicionales.",
      "keywords": [
        "Niños y niñas campesinos",
        "Parcela comunitaria Puerto Luna, Bolívar",
        "Resistencia agrosostenible",
        "Monocultivos vs biodiversidad",
        "Animales, aire puro, árboles nativos",
        "Sabedor campesino",
        "Defensa del territorio",
        "Prácticas agrícolas tradicionales",
        "Siembra de alimentos propios",
        "Cultura y saberes campesinos",
        "Identidad territorial",
        "Patrimonio natural y cultural",
        "Educación ambiental y comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/s/DACMI/IQCi2cVGQbuIRZfwMpHB1Y0_ARdu2oIGwvgCcZ_txIRT35w?e=a3MyMx",
      "asset_link": "",
      "force_message": "Desde el corazón de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios Animación Viaje a la resistencia comunitaria Animación Relato del recorrido de niños y niñas campesinos hacia la parcela comunitaria Puerto Luna (Bolívar), un espacio de resistencia agrosostenible. En el camino atraviesan monocultivos con escasa biodiversidad, contrastando con la riqueza natural que encuentran al llegar: animales, aire puro y árboles nativos. Allí, un campesino sabedor les comparte cómo han resistido mediante la siembra de alimentos propios, defendiendo el territorio y sus prácticas tradicionales. Desde el corazón de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento. Niños y niñas campesinos Parcela comunitaria Puerto Luna, Bolívar Resistencia agrosostenible Monocultivos vs biodiversidad Animales, aire puro, árboles nativos Sabedor campesino Defensa del territorio Prácticas agrícolas tradicionales Siembra de alimentos propios Cultura y saberes campesinos Identidad territorial Patrimonio natural y cultural Educación ambiental y comunitaria https://mcultura.sharepoint.com/:v:/s/DACMI/IQCi2cVGQbuIRZfwMpHB1Y0_ARdu2oIGwvgCcZ_txIRT35w?e=a3MyMx"
    },
    {
      "id": "somos-cultura-de-paz-131",
      "row": 131,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios",
      "title": "Audiovisual Poema Ser campesino",
      "type": "Audiovisual",
      "description": "Este contenido narra el trabajo del hombre campesino de la Zona de Reserva Campesina del Pato Balsillas (Caquetá) ha sido fundamental para la sostenibilidad, el crecimiento económico y la organización social del territorio, en este poema audiovisual se exalta el trabajo, la lucha y la resistencia campesina.",
      "keywords": [
        "Hombre campesino",
        "Zona de Reserva Campesina del Pato Balsillas, Caquetá",
        "Sostenibilidad y economía local",
        "Organización social del territorio",
        "Poema audiovisual",
        "Trabajo y esfuerzo cotidiano",
        "Lucha y resistencia campesina",
        "Cultura y saberes rurales",
        "Identidad territorial",
        "Patrimonio intangible",
        "Comunidad y solidaridad",
        "Vida campesina"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/s/DACMI/IQDroyp-U31YTbdbCyESSnl2AfPHQ2kD-dGnBsZTMZemWzs?e=2MM0gU",
      "asset_link": "",
      "force_message": "Desde el corazón de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios Audiovisual Poema Ser campesino Audiovisual Este contenido narra el trabajo del hombre campesino de la Zona de Reserva Campesina del Pato Balsillas (Caquetá) ha sido fundamental para la sostenibilidad, el crecimiento económico y la organización social del territorio, en este poema audiovisual se exalta el trabajo, la lucha y la resistencia campesina. Desde el corazón de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento. Hombre campesino Zona de Reserva Campesina del Pato Balsillas, Caquetá Sostenibilidad y economía local Organización social del territorio Poema audiovisual Trabajo y esfuerzo cotidiano Lucha y resistencia campesina Cultura y saberes rurales Identidad territorial Patrimonio intangible Comunidad y solidaridad Vida campesina https://mcultura.sharepoint.com/:v:/s/DACMI/IQDroyp-U31YTbdbCyESSnl2AfPHQ2kD-dGnBsZTMZemWzs?e=2MM0gU"
    },
    {
      "id": "somos-cultura-de-paz-132",
      "row": 132,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios",
      "title": "Audiovisual El Río",
      "type": "Audiovisual",
      "description": "El río Balsillas ubicado en el departamento del Caquetá ha sido contaminado por las manos de hombres y mujeres que han habitado el Valle de Balsillas desde los años 40. En este audiovisual el río hace un llamado a su cuidado, protección y abre la reflexión sobre qué pasaría si un día la comunidad despierta y el río ya no está.",
      "keywords": [
        "Río Balsillas, Caquetá",
        "Contaminación histórica",
        "Comunidad del valle de Balsillas",
        "Llamado a cuidado y protección",
        "Reflexión sobre pérdida ambiental",
        "Conciencia ambiental",
        "Patrimonio natural",
        "Sustentabilidad y conservación",
        "Educación ecológica",
        "Impacto humano en el territorio",
        "Cultura y relación con el río",
        "Audiovisual de sensibilización"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/s/DACMI/IQDYKWHlRlbcQYysuyxYKKIkAfR0uAoYtqQSfg0Gz46YVAM?e=00zIqP",
      "asset_link": "",
      "force_message": "Desde el corazón de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios Audiovisual El Río Audiovisual El río Balsillas ubicado en el departamento del Caquetá ha sido contaminado por las manos de hombres y mujeres que han habitado el Valle de Balsillas desde los años 40. En este audiovisual el río hace un llamado a su cuidado, protección y abre la reflexión sobre qué pasaría si un día la comunidad despierta y el río ya no está. Desde el corazón de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento. Río Balsillas, Caquetá Contaminación histórica Comunidad del valle de Balsillas Llamado a cuidado y protección Reflexión sobre pérdida ambiental Conciencia ambiental Patrimonio natural Sustentabilidad y conservación Educación ecológica Impacto humano en el territorio Cultura y relación con el río Audiovisual de sensibilización https://mcultura.sharepoint.com/:v:/s/DACMI/IQDYKWHlRlbcQYysuyxYKKIkAfR0uAoYtqQSfg0Gz46YVAM?e=00zIqP"
    },
    {
      "id": "somos-cultura-de-paz-133",
      "row": 133,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Serie fotográfica Esterillas: Tejido para el andar campesino",
      "type": "Serie fotográfica",
      "description": "Serie fotográfica que retrata la elaboración de esteras en Bolívar, usadas como sillones sobre burros para el transporte campesino: ir a la parcela, buscar agua o ir a la escuela. Muestra cada etapa del proceso, desde el corte del junco hasta el tejido final, destacando su carácter 100% natural y sostenible. También resalta cómo esta práctica es fuente de ingreso en comunidades como La Suprema, al combinar saber ancestral y sustento económico.",
      "keywords": [
        "Serie fotográfica",
        "Elaboración de esteras, Bolívar",
        "Transporte campesino: burros, parcelas, agua, escuela",
        "Proceso artesanal: corte del junco, tejido final",
        "Materiales 100% naturales y sostenibles",
        "Saberes ancestrales",
        "Fuente de ingreso económico",
        "Comunidad La Suprema",
        "Cultura y tradición rural",
        "Economía campesina",
        "Identidad territorial",
        "Patrimonio material e intangible"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Desde el corazón de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Serie fotográfica Esterillas: Tejido para el andar campesino Serie fotográfica Serie fotográfica que retrata la elaboración de esteras en Bolívar, usadas como sillones sobre burros para el transporte campesino: ir a la parcela, buscar agua o ir a la escuela. Muestra cada etapa del proceso, desde el corte del junco hasta el tejido final, destacando su carácter 100% natural y sostenible. También resalta cómo esta práctica es fuente de ingreso en comunidades como La Suprema, al combinar saber ancestral y sustento económico. Desde el corazón de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento. Serie fotográfica Elaboración de esteras, Bolívar Transporte campesino: burros, parcelas, agua, escuela Proceso artesanal: corte del junco, tejido final Materiales 100% naturales y sostenibles Saberes ancestrales Fuente de ingreso económico Comunidad La Suprema Cultura y tradición rural Economía campesina Identidad territorial Patrimonio material e intangible PENDIENTE"
    },
    {
      "id": "somos-territorios-bioculturales-134",
      "row": 134,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Pescar la vida",
      "type": "Documental",
      "description": "Producción de la serie Economías populares que sigue a Orlando Nobles, quien viaja a diario entre Sempegua y El Banco llevando encargos. En esta comunidad de pescadores, el trueque sostiene la vida: bocachico por yuca o plátano. Un retrato del rebusque diario y la cultura local en la ciénaga de Zapatosa, al ritmo del vallenato.",
      "keywords": [
        "Serie Economías populares",
        "Orlando Nobles",
        "Sempegua y El Banco",
        "Comunidad de pescadores",
        "Trueque: bocachico por yuca o plátano",
        "Rebusque diario",
        "Cultura local",
        "Ciénaga de Zapatosa",
        "Vallenato como identidad cultural",
        "Economía popular",
        "Tradiciones y saberes comunitarios",
        "Vida cotidiana campesina",
        "Patrimonio intangible"
      ],
      "link": "https://www.youtube.com/watch?v=TvEfWT1VsIE",
      "asset_link": "",
      "force_message": "Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Pescar la vida Documental Producción de la serie Economías populares que sigue a Orlando Nobles, quien viaja a diario entre Sempegua y El Banco llevando encargos. En esta comunidad de pescadores, el trueque sostiene la vida: bocachico por yuca o plátano. Un retrato del rebusque diario y la cultura local en la ciénaga de Zapatosa, al ritmo del vallenato. Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor. Serie Economías populares Orlando Nobles Sempegua y El Banco Comunidad de pescadores Trueque: bocachico por yuca o plátano Rebusque diario Cultura local Ciénaga de Zapatosa Vallenato como identidad cultural Economía popular Tradiciones y saberes comunitarios Vida cotidiana campesina Patrimonio intangible https://www.youtube.com/watch?v=TvEfWT1VsIE"
    },
    {
      "id": "somos-territorios-bioculturales-135",
      "row": 135,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Muchas aguas",
      "type": "Documental",
      "description": "Producción de la serie Economías populares que retrata la vida en Inírida, Guainía. Nicolás impulsa el turismo ecológico hacia lugares como el Cerro de Mavecure, mientras comunidades curripaco y puinave viven de las artesanías. Entre mercados, ríos y recorridos en mototaxi, se muestra cómo la población sostiene su economía pese al aislamiento.",
      "keywords": [
        "Serie Economías populares",
        "Inírida, Guainía",
        "Nicolás y turismo ecológico",
        "Cerro de Mavecure",
        "Comunidades curripaco y puinave",
        "Artesanías como sustento",
        "Mercados, ríos, mototaxi",
        "Economía local y resiliente",
        "Vida en territorios aislados",
        "Cultura y tradiciones indígenas",
        "Rebusque y creatividad comunitaria",
        "Patrimonio intangible y material"
      ],
      "link": "https://www.youtuhttps//www.youtube.com/watch?v=PPLtglwQZmA",
      "asset_link": "",
      "force_message": "Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Muchas aguas Documental Producción de la serie Economías populares que retrata la vida en Inírida, Guainía. Nicolás impulsa el turismo ecológico hacia lugares como el Cerro de Mavecure, mientras comunidades curripaco y puinave viven de las artesanías. Entre mercados, ríos y recorridos en mototaxi, se muestra cómo la población sostiene su economía pese al aislamiento. Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor. Serie Economías populares Inírida, Guainía Nicolás y turismo ecológico Cerro de Mavecure Comunidades curripaco y puinave Artesanías como sustento Mercados, ríos, mototaxi Economía local y resiliente Vida en territorios aislados Cultura y tradiciones indígenas Rebusque y creatividad comunitaria Patrimonio intangible y material https://www.youtuhttps//www.youtube.com/watch?v=PPLtglwQZmA"
    },
    {
      "id": "somos-territorios-bioculturales-136",
      "row": 136,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Cápsula de video Celebrar la vida",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Música, comida, juegos, bailes y coplas campesinas en San Pedro de Iguaque para disfrutar y celebrar la vida en familia y en comunidad. La fiesta como parte de la circulación de la economía popular y campesina.",
      "keywords": [
        "Serie Economías populares",
        "San Pedro de Iguaque",
        "Música, bailes, juegos, coplas campesinas",
        "Comida tradicional",
        "Vida en familia y comunidad",
        "Celebración de la vida",
        "Circulación de la economía popular",
        "Cultura y tradiciones campesinas",
        "Rebusque y economía local",
        "Patrimonio intangible",
        "Festividades y memoria colectiva"
      ],
      "link": "https://www.youtube.com/watch?v=Wmqv2f0U5rY",
      "asset_link": "",
      "force_message": "Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Cápsula de video Celebrar la vida Video Producción de la serie audiovisual y sonora Economías populares. Música, comida, juegos, bailes y coplas campesinas en San Pedro de Iguaque para disfrutar y celebrar la vida en familia y en comunidad. La fiesta como parte de la circulación de la economía popular y campesina. Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor. Serie Economías populares San Pedro de Iguaque Música, bailes, juegos, coplas campesinas Comida tradicional Vida en familia y comunidad Celebración de la vida Circulación de la economía popular Cultura y tradiciones campesinas Rebusque y economía local Patrimonio intangible Festividades y memoria colectiva https://www.youtube.com/watch?v=Wmqv2f0U5rY"
    },
    {
      "id": "somos-territorios-bioculturales-137",
      "row": 137,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Cápsula de video En tierra ajena",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. Un grupo de campesinos del Consejo Comunitario de Sempegua en la Ciénaga de la Zapatosa, siembran yuca y maíz en tierra ajena, tierra fértil que tiene dueño pero no uso. Juan José vive de producir alimentos allí para comer, para vender y para transformarlos en la cocina con su esposa Isabel.",
      "keywords": [
        "Serie Economías populares",
        "Consejo Comunitario de Sempegua, Ciénaga de la Zapatosa",
        "Campesinos y siembra de yuca y maíz",
        "Tierra fértil bajo uso compartido",
        "Producción de alimentos: consumo, venta y transformación",
        "Juan José e Isabel",
        "Cocina y saberes culinarios campesinos",
        "Economía local y sostenible",
        "Cultura y vida comunitaria",
        "Rebusque y trabajo diario",
        "Patrimonio intangible y tradiciones agrícolas"
      ],
      "link": "https://www.youtube.com/watch?v=JQy3FDhZy4o",
      "asset_link": "",
      "force_message": "Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Cápsula de video En tierra ajena Video Producción de la serie audiovisual y sonora Economías populares. Un grupo de campesinos del Consejo Comunitario de Sempegua en la Ciénaga de la Zapatosa, siembran yuca y maíz en tierra ajena, tierra fértil que tiene dueño pero no uso. Juan José vive de producir alimentos allí para comer, para vender y para transformarlos en la cocina con su esposa Isabel. Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor. Serie Economías populares Consejo Comunitario de Sempegua, Ciénaga de la Zapatosa Campesinos y siembra de yuca y maíz Tierra fértil bajo uso compartido Producción de alimentos: consumo, venta y transformación Juan José e Isabel Cocina y saberes culinarios campesinos Economía local y sostenible Cultura y vida comunitaria Rebusque y trabajo diario Patrimonio intangible y tradiciones agrícolas https://www.youtube.com/watch?v=JQy3FDhZy4o"
    },
    {
      "id": "somos-territorios-bioculturales-138",
      "row": 138,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Cápsula de video De aquí me alimento",
      "type": "Video",
      "description": "Producción de la serie audiovisual y sonora Economías populares. En las plazas de mercado diariamente confluyen y circulan alimentos, billetes, monedas, productos, oficios y formas de rebusque.",
      "keywords": [
        "Serie Economías populares",
        "Plazas de mercado",
        "Circulación de alimentos y productos",
        "Intercambio de dinero: billetes y monedas",
        "Diversos oficios y trabajos cotidianos",
        "Rebusque y economía informal",
        "Vida comunitaria y social",
        "Tradiciones y cultura local",
        "Economía popular y campesina",
        "Patrimonio intangible y dinámicas urbanas"
      ],
      "link": "https://www.youtube.com/watch?v=hibXo_6dMX8",
      "asset_link": "",
      "force_message": "Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Cápsula de video De aquí me alimento Video Producción de la serie audiovisual y sonora Economías populares. En las plazas de mercado diariamente confluyen y circulan alimentos, billetes, monedas, productos, oficios y formas de rebusque. Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor. Serie Economías populares Plazas de mercado Circulación de alimentos y productos Intercambio de dinero: billetes y monedas Diversos oficios y trabajos cotidianos Rebusque y economía informal Vida comunitaria y social Tradiciones y cultura local Economía popular y campesina Patrimonio intangible y dinámicas urbanas https://www.youtube.com/watch?v=hibXo_6dMX8"
    },
    {
      "id": "somos-territorios-bioculturales-139",
      "row": 139,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Serie documental Mundos concebidos: Una narrativa femenina",
      "type": "Video",
      "description": "Producción escogida en el Programa de Estímulos del ICANH. Serie documental de cuatro capítulos que indaga en lo que significa concebirse y ser concebida como mujer Iku a través del seguimiento documental a las prácticas cotidianas de cuidado, sostenimiento y continuidad de la vida que las mujeres despliegan en sus comunidades. Será un acercamiento experimental a la investigación-creación de una narrativa intergeneracional y una experiencia sensorial en la vida de mujeres Iku.",
      "keywords": [
        "Programa de Estímulos ICANH",
        "Serie documental, 4 capítulos",
        "Mujeres Iku",
        "Prácticas cotidianas de cuidado y sostenimiento de la vida",
        "Continuidad cultural y comunitaria",
        "Investigación-creación experimental",
        "Narrativa intergeneracional",
        "Experiencia sensorial",
        "Vida y rol de la mujer indígena",
        "Patrimonio cultural intangible",
        "Comunidad y memoria colectiva",
        "Identidad y cosmovisión Iku"
      ],
      "link": "https://www.youtube.com/watch?v=iZH7AJhRYFY#:~:text=Mundos%20concebidos:%20una%20narrativa%20femenina%20para%20transmitir,ik%E1%B5%BE%20a%20trav%C3%A9s%20del%20seguimiento%20documental%20a",
      "asset_link": "",
      "force_message": "Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Serie documental Mundos concebidos: Una narrativa femenina Video Producción escogida en el Programa de Estímulos del ICANH. Serie documental de cuatro capítulos que indaga en lo que significa concebirse y ser concebida como mujer Iku a través del seguimiento documental a las prácticas cotidianas de cuidado, sostenimiento y continuidad de la vida que las mujeres despliegan en sus comunidades. Será un acercamiento experimental a la investigación-creación de una narrativa intergeneracional y una experiencia sensorial en la vida de mujeres Iku. Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas. Programa de Estímulos ICANH Serie documental, 4 capítulos Mujeres Iku Prácticas cotidianas de cuidado y sostenimiento de la vida Continuidad cultural y comunitaria Investigación-creación experimental Narrativa intergeneracional Experiencia sensorial Vida y rol de la mujer indígena Patrimonio cultural intangible Comunidad y memoria colectiva Identidad y cosmovisión Iku https://www.youtube.com/watch?v=iZH7AJhRYFY#:~:text=Mundos%20concebidos:%20una%20narrativa%20femenina%20para%20transmitir,ik%E1%B5%BE%20a%20trav%C3%A9s%20del%20seguimiento%20documental%20a"
    },
    {
      "id": "somos-territorios-bioculturales-140",
      "row": 140,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Cortometraje Al río lo hicieron cambiar",
      "type": "Cortometraje",
      "description": "Producción del ICANH que explora el impacto de la minería de oro en el río Caquetá. A través de las voces de mujeres indígenas Murui-muina, Andoke, Muinane y Nonuya, analiza los cambios en su vida, el territorio y el ambiente, resaltando sus formas de resistencia desde una mirada de género.",
      "keywords": [
        "Producción ICANH",
        "Minería de oro, río Caquetá",
        "Mujeres indígenas: Murui-muina, Andoke, Muinane, Nonuya",
        "Impacto ambiental y territorial",
        "Cambios en la vida comunitaria",
        "Resistencia y liderazgo femenino",
        "Perspectiva de género",
        "Cultura y cosmovisión indígena",
        "Defensa del territorio",
        "Patrimonio natural y social",
        "Saberes y prácticas ancestrales",
        "Economía y sostenibilidad comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=4ITBOYtNB7A",
      "asset_link": "",
      "force_message": "Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Cortometraje Al río lo hicieron cambiar Cortometraje Producción del ICANH que explora el impacto de la minería de oro en el río Caquetá. A través de las voces de mujeres indígenas Murui-muina, Andoke, Muinane y Nonuya, analiza los cambios en su vida, el territorio y el ambiente, resaltando sus formas de resistencia desde una mirada de género. Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas. Producción ICANH Minería de oro, río Caquetá Mujeres indígenas: Murui-muina, Andoke, Muinane, Nonuya Impacto ambiental y territorial Cambios en la vida comunitaria Resistencia y liderazgo femenino Perspectiva de género Cultura y cosmovisión indígena Defensa del territorio Patrimonio natural y social Saberes y prácticas ancestrales Economía y sostenibilidad comunitaria https://www.youtube.com/watch?v=4ITBOYtNB7A"
    },
    {
      "id": "somos-territorios-bioculturales-141",
      "row": 141,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Podcast Ríos de Historias: Narrativas Sonoras Campesinas",
      "type": "Podcast",
      "description": "Producción del ICANH que recorre el Oriente antioqueño a través de sus ríos y paisajes. El podcast explora la relación entre comunidades campesinas y el agua, abordando tensiones como el desarrollo hidroeléctrico, el turismo y el desarraigo, mostrando los ríos como eje de cultura, sustento y vida en el territorio.",
      "keywords": [
        "Producción ICANH",
        "Oriente antioqueño: ríos y paisajes",
        "Podcast",
        "Comunidades campesinas y agua",
        "Tensiones: desarrollo hidroeléctrico, turismo, desarraigo",
        "Ríos como eje cultural y económico",
        "Sustento y vida en el territorio",
        "Cultura y patrimonio local",
        "Relaciones comunitarias y entorno natural",
        "Sostenibilidad y resistencia",
        "Identidad territorial",
        "Dinámicas socioambientales"
      ],
      "link": "https://riosdehistorias.com/",
      "asset_link": "",
      "force_message": "Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Podcast Ríos de Historias: Narrativas Sonoras Campesinas Podcast Producción del ICANH que recorre el Oriente antioqueño a través de sus ríos y paisajes. El podcast explora la relación entre comunidades campesinas y el agua, abordando tensiones como el desarrollo hidroeléctrico, el turismo y el desarraigo, mostrando los ríos como eje de cultura, sustento y vida en el territorio. Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas. Producción ICANH Oriente antioqueño: ríos y paisajes Podcast Comunidades campesinas y agua Tensiones: desarrollo hidroeléctrico, turismo, desarraigo Ríos como eje cultural y económico Sustento y vida en el territorio Cultura y patrimonio local Relaciones comunitarias y entorno natural Sostenibilidad y resistencia Identidad territorial Dinámicas socioambientales https://riosdehistorias.com/"
    },
    {
      "id": "somos-territorios-bioculturales-142",
      "row": 142,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Podcast Vidas de animales ejemplares",
      "type": "Podcast",
      "description": "Producción escogida en el Programa de Estímulos del ICANH. \nEsta serie podcast de ocho capítulos narra las vidas de un grupo de animales silvestres y domésticos que comparten la vida con campesinos del norte del Tolima. Presenta una exploración “desde adentro”, con observación participante, de las vidas compartidas de los animales y los campesinos en la coproducción de paisajes sonoros.",
      "keywords": [
        "Programa de Estímulos ICANH",
        "Serie podcast, 8 capítulos",
        "Animales silvestres y domésticos",
        "Campesinos del norte del Tolima",
        "Vidas compartidas y coproducción de paisajes sonoros",
        "Observación participante",
        "Relación humano-animal",
        "Ecología y cultura campesina",
        "Sostenibilidad y vida en el territorio",
        "Experiencia sensorial y sonora",
        "Cotidianidad y prácticas rurales",
        "Memoria y patrimonio intangible"
      ],
      "link": "https://open.spotify.com/show/5bqfcSiFOCukYGI7y0eXOW",
      "asset_link": "",
      "force_message": "Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Podcast Vidas de animales ejemplares Podcast Producción escogida en el Programa de Estímulos del ICANH. Esta serie podcast de ocho capítulos narra las vidas de un grupo de animales silvestres y domésticos que comparten la vida con campesinos del norte del Tolima. Presenta una exploración “desde adentro”, con observación participante, de las vidas compartidas de los animales y los campesinos en la coproducción de paisajes sonoros. Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas. Programa de Estímulos ICANH Serie podcast, 8 capítulos Animales silvestres y domésticos Campesinos del norte del Tolima Vidas compartidas y coproducción de paisajes sonoros Observación participante Relación humano-animal Ecología y cultura campesina Sostenibilidad y vida en el territorio Experiencia sensorial y sonora Cotidianidad y prácticas rurales Memoria y patrimonio intangible https://open.spotify.com/show/5bqfcSiFOCukYGI7y0eXOW"
    },
    {
      "id": "somos-territorios-bioculturales-143",
      "row": 143,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental La fuerza de pulowi",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora la cosmovisión Wayúu, donde Pulowi es la deidad que encarna el agua. A través de la defensa del Arroyo Bruno frente a la minería de carbón, muestra la resistencia de esta comunidad por proteger su territorio, su cultura y sus formas de vida, resaltando la relación espiritual y vital con el agua.",
      "keywords": [
        "Serie documental Diarios del agua ICANH",
        "Cosmovisión Wayúu",
        "Pulowi: deidad del agua",
        "Arroyo Bruno: defensa frente a minería de carbón",
        "Resistencia comunitaria",
        "Protección del territorio y cultura",
        "Formas de vida tradicionales",
        "Relación espiritual con el agua",
        "Sostenibilidad y medio ambiente",
        "Patrimonio natural y cultural",
        "Identidad y memoria colectiva",
        "Conflictos socioambientales"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental La fuerza de pulowi Documental Documental de la serie Diarios del agua del ICANH que explora la cosmovisión Wayúu, donde Pulowi es la deidad que encarna el agua. A través de la defensa del Arroyo Bruno frente a la minería de carbón, muestra la resistencia de esta comunidad por proteger su territorio, su cultura y sus formas de vida, resaltando la relación espiritual y vital con el agua. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Serie documental Diarios del agua ICANH Cosmovisión Wayúu Pulowi: deidad del agua Arroyo Bruno: defensa frente a minería de carbón Resistencia comunitaria Protección del territorio y cultura Formas de vida tradicionales Relación espiritual con el agua Sostenibilidad y medio ambiente Patrimonio natural y cultural Identidad y memoria colectiva Conflictos socioambientales https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-144",
      "row": 144,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Un manantial que resiste",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que cuestiona la idea de una Guajira desértica, destacando su riqueza hídrica. En esta región, comunidades afrodescendientes han creado sistemas de gobernanza del agua, hoy amenazados por la minería de carbón. Estas comunidades luchan por proteger su territorio y evitar nuevos desastres ambientales.",
      "keywords": [
        "Serie documental Diarios del agua ICANH",
        "Guajira: riqueza hídrica",
        "Comunidades afrodescendientes",
        "Gobernanza comunitaria del agua",
        "Minería de carbón: amenaza ambiental",
        "Protección del territorio",
        "Prevención de desastres ambientales",
        "Resistencia y sostenibilidad",
        "Patrimonio natural y cultural",
        "Conflictos socioambientales",
        "Identidad y memoria colectiva",
        "Gestión del recurso hídrico"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Un manantial que resiste Documental Documental de la serie Diarios del agua del ICANH que cuestiona la idea de una Guajira desértica, destacando su riqueza hídrica. En esta región, comunidades afrodescendientes han creado sistemas de gobernanza del agua, hoy amenazados por la minería de carbón. Estas comunidades luchan por proteger su territorio y evitar nuevos desastres ambientales. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Serie documental Diarios del agua ICANH Guajira: riqueza hídrica Comunidades afrodescendientes Gobernanza comunitaria del agua Minería de carbón: amenaza ambiental Protección del territorio Prevención de desastres ambientales Resistencia y sostenibilidad Patrimonio natural y cultural Conflictos socioambientales Identidad y memoria colectiva Gestión del recurso hídrico https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-145",
      "row": 145,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental La canción del agua",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora La Mojana, una llanura clave para regular inundaciones. A través de su historia, muestra cómo antiguos pueblos crearon un sistema de canales y camellones para habitar el territorio, evidenciando una relación ancestral con el agua que aún define su vida y desafíos actuales.",
      "keywords": [
        "Serie documental Diarios del agua ICANH",
        "La Mojana: llanura reguladora de inundaciones",
        "Historia y memoria ancestral",
        "Pueblos originarios",
        "Sistemas de canales y camellones",
        "Habitar y gestionar el territorio",
        "Relación ancestral con el agua",
        "Sostenibilidad hídrica",
        "Desafíos contemporáneos",
        "Patrimonio cultural y ambiental",
        "Resiliencia comunitaria",
        "Identidad y tradición"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental La canción del agua Documental Documental de la serie Diarios del agua del ICANH que explora La Mojana, una llanura clave para regular inundaciones. A través de su historia, muestra cómo antiguos pueblos crearon un sistema de canales y camellones para habitar el territorio, evidenciando una relación ancestral con el agua que aún define su vida y desafíos actuales. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Serie documental Diarios del agua ICANH La Mojana: llanura reguladora de inundaciones Historia y memoria ancestral Pueblos originarios Sistemas de canales y camellones Habitar y gestionar el territorio Relación ancestral con el agua Sostenibilidad hídrica Desafíos contemporáneos Patrimonio cultural y ambiental Resiliencia comunitaria Identidad y tradición https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-146",
      "row": 146,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Los laberintos del agua",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que revisa el impacto histórico del Canal del Dique en el sur del Atlántico. Muestra cómo el control del agua, visto antes como progreso, generó riesgos sociales y ecológicos, y plantea la posibilidad de replantear estas intervenciones para transformar el territorio.",
      "keywords": [
        "Documental",
        "Diarios del agua",
        "ICANH",
        "Canal del Dique",
        "Sur del Atlántico",
        "Impacto histórico",
        "Control del agua",
        "Progreso",
        "Riesgos sociales",
        "Riesgos ecológicos",
        "Intervenciones humanas",
        "Transformación del territorio",
        "Gestión del agua",
        "Historia ambiental",
        "Territorio",
        "Sostenibilidad"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Los laberintos del agua Documental Documental de la serie Diarios del agua del ICANH que revisa el impacto histórico del Canal del Dique en el sur del Atlántico. Muestra cómo el control del agua, visto antes como progreso, generó riesgos sociales y ecológicos, y plantea la posibilidad de replantear estas intervenciones para transformar el territorio. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Documental Diarios del agua ICANH Canal del Dique Sur del Atlántico Impacto histórico Control del agua Progreso Riesgos sociales Riesgos ecológicos Intervenciones humanas Transformación del territorio Gestión del agua Historia ambiental Territorio Sostenibilidad https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-147",
      "row": 147,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Las conquistas del agua",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora Santa María de la Antigua del Darién, primera fundación continental americana. A partir de hallazgos arqueológicos, aborda los retos históricos e interculturales de la región y resalta la importancia de incluir a comunidades locales así como proteger este territorio atravesado por el río Atrato.",
      "keywords": [
        "Documental",
        "Diarios del agua",
        "ICANH",
        "Santa María de la Antigua del Darién",
        "Primera fundación continental americana",
        "Hallazgos arqueológicos",
        "Arqueología",
        "Retos históricos",
        "Interculturalidad",
        "Comunidades locales",
        "Territorio",
        "Río Atrato",
        "Patrimonio histórico",
        "Protección del territorio",
        "Historia colonial",
        "Región del Darién"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Las conquistas del agua Documental Documental de la serie Diarios del agua del ICANH que explora Santa María de la Antigua del Darién, primera fundación continental americana. A partir de hallazgos arqueológicos, aborda los retos históricos e interculturales de la región y resalta la importancia de incluir a comunidades locales así como proteger este territorio atravesado por el río Atrato. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Documental Diarios del agua ICANH Santa María de la Antigua del Darién Primera fundación continental americana Hallazgos arqueológicos Arqueología Retos históricos Interculturalidad Comunidades locales Territorio Río Atrato Patrimonio histórico Protección del territorio Historia colonial Región del Darién https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-148",
      "row": 148,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Un sitio de libres entre el mar y el río",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que recorre la historia de Barranquilla como ciudad portuaria ligada al río Magdalena. Explora su desarrollo desde el comercio fluvial, la transformación urbana y la pérdida de su memoria hídrica, así como los retos sociales que enfrentan las comunidades ribereñas ante los proyectos de modernización.",
      "keywords": [
        "Documental",
        "Diarios del agua",
        "ICANH",
        "Barranquilla",
        "Ciudad portuaria",
        "Río Magdalena",
        "Historia urbana",
        "Comercio fluvial",
        "Desarrollo económico",
        "Transformación urbana",
        "Memoria hídrica",
        "Comunidades ribereñas",
        "Retos sociales",
        "Modernización",
        "Infraestructura",
        "Territorio",
        "Patrimonio cultural"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Un sitio de libres entre el mar y el río Documental Documental de la serie Diarios del agua del ICANH que recorre la historia de Barranquilla como ciudad portuaria ligada al río Magdalena. Explora su desarrollo desde el comercio fluvial, la transformación urbana y la pérdida de su memoria hídrica, así como los retos sociales que enfrentan las comunidades ribereñas ante los proyectos de modernización. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Documental Diarios del agua ICANH Barranquilla Ciudad portuaria Río Magdalena Historia urbana Comercio fluvial Desarrollo económico Transformación urbana Memoria hídrica Comunidades ribereñas Retos sociales Modernización Infraestructura Territorio Patrimonio cultural https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-149",
      "row": 149,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental El maritorio de la nación creole",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora el Archipiélago de San Andrés, Providencia y Santa Catalina. Aborda su historia, identidad raizal y tensiones con el centralismo, así como el impacto del turismo masivo en la Reserva SeaFlower, resaltando la urgencia de proteger su cultura y ecosistemas.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Archipiélago de San Andrés, Providencia y Santa Catalina",
        "Historia",
        "Identidad raizal",
        "Centralismo",
        "Turismo masivo",
        "Reserva Seaflower",
        "Protección cultural",
        "Protección ecosistemas",
        "Agua",
        "Territorio",
        "Comunidad",
        "Biodiversidad",
        "Saberes tradicionales",
        "Gobernanza territorial"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental El maritorio de la nación creole Documental Documental de la serie Diarios del agua del ICANH que explora el Archipiélago de San Andrés, Providencia y Santa Catalina. Aborda su historia, identidad raizal y tensiones con el centralismo, así como el impacto del turismo masivo en la Reserva SeaFlower, resaltando la urgencia de proteger su cultura y ecosistemas. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Diarios del Agua ICANH Archipiélago de San Andrés, Providencia y Santa Catalina Historia Identidad raizal Centralismo Turismo masivo Reserva Seaflower Protección cultural Protección ecosistemas Agua Territorio Comunidad Biodiversidad Saberes tradicionales Gobernanza territorial https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-150",
      "row": 150,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Agua arriba; agua abajo",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que recorre el Pacífico sur en Tumaco y Barbacoas. Explora su historia y diversidad cultural, marcada por ciclos del agua entre mar y montaña, y cómo estos territorios han sido transformados por cambios ambientales y sociales que alteran su relación con el entorno.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Pacífico Sur",
        "Tumaco",
        "Barbacoas",
        "Historia",
        "Diversidad cultural",
        "Ciclos del agua",
        "Mar y montaña",
        "Transformaciones ambientales",
        "Transformaciones sociales",
        "Relación con el entorno"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Agua arriba; agua abajo Documental Documental de la serie Diarios del agua del ICANH que recorre el Pacífico sur en Tumaco y Barbacoas. Explora su historia y diversidad cultural, marcada por ciclos del agua entre mar y montaña, y cómo estos territorios han sido transformados por cambios ambientales y sociales que alteran su relación con el entorno. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Diarios del Agua ICANH Pacífico Sur Tumaco Barbacoas Historia Diversidad cultural Ciclos del agua Mar y montaña Transformaciones ambientales Transformaciones sociales Relación con el entorno https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-151",
      "row": 151,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental El asesinato de un río",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora el río Nechí y su historia ligada al oro. Desde la colonia hasta hoy, muestra cómo la explotación minera transformó el río y concentró su control, generando tensiones ambientales y sociales que cuestionan el costo de extraer riqueza del agua.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Río Nechí",
        "Historia",
        "Oro",
        "Minería",
        "Transformación del río",
        "Tensiones ambientales",
        "Tensiones sociales",
        "Explotación de recursos",
        "Agua",
        "Conflicto socioambiental"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental El asesinato de un río Documental Documental de la serie Diarios del agua del ICANH que explora el río Nechí y su historia ligada al oro. Desde la colonia hasta hoy, muestra cómo la explotación minera transformó el río y concentró su control, generando tensiones ambientales y sociales que cuestionan el costo de extraer riqueza del agua. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Diarios del Agua ICANH Río Nechí Historia Oro Minería Transformación del río Tensiones ambientales Tensiones sociales Explotación de recursos Agua Conflicto socioambiental https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-152",
      "row": 152,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Cauca: un río con derechos",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH. Recorre municipios ribereños del río Cauca, explorando su riqueza ecológica y la red de afluentes que conforman su cuenca. Aborda los impactos de la minería, las hidroeléctricas y el monocultivo de caña. Ante esta crisis, la Corte Constitucional reconoció derechos al río Cauca y su cuenca, abriendo un camino para su protección y para las comunidades que lo habitan y defienden.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Río Cauca",
        "Municipios ribereños",
        "Riqueza ecológica",
        "Cuenca hidrográfica",
        "Minería",
        "Hidroeléctricas",
        "Monocultivo de caña",
        "Crisis ambiental",
        "Derechos del río",
        "Protección comunitaria"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Cauca: un río con derechos Documental Documental de la serie Diarios del agua del ICANH. Recorre municipios ribereños del río Cauca, explorando su riqueza ecológica y la red de afluentes que conforman su cuenca. Aborda los impactos de la minería, las hidroeléctricas y el monocultivo de caña. Ante esta crisis, la Corte Constitucional reconoció derechos al río Cauca y su cuenca, abriendo un camino para su protección y para las comunidades que lo habitan y defienden. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Diarios del Agua ICANH Río Cauca Municipios ribereños Riqueza ecológica Cuenca hidrográfica Minería Hidroeléctricas Monocultivo de caña Crisis ambiental Derechos del río Protección comunitaria https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-153",
      "row": 153,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Entre muertos y tambores de sanación",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH. En La Balsa, corregimiento de Buenos Aires (Cauca), comunidades afrodescendientes narran cómo el río Cauca fue escenario de la violencia del Bloque Calima en los años 2000, usado para ocultar crímenes. La JEP estima miles de víctimas arrojadas al río. En 2023 el río Cauca fue declarado víctima, impulsando procesos de memoria y sanación liderados por las comunidades ribereñas.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "La Balsa",
        "Buenos Aires, Cauca",
        "Comunidades afrodescendientes",
        "Río Cauca",
        "Bloque Calima",
        "Violencia",
        "Víctimas",
        "JEP",
        "Memoria",
        "Sanación",
        "Comunidades ribereñas"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Entre muertos y tambores de sanación Documental Documental de la serie Diarios del agua del ICANH. En La Balsa, corregimiento de Buenos Aires (Cauca), comunidades afrodescendientes narran cómo el río Cauca fue escenario de la violencia del Bloque Calima en los años 2000, usado para ocultar crímenes. La JEP estima miles de víctimas arrojadas al río. En 2023 el río Cauca fue declarado víctima, impulsando procesos de memoria y sanación liderados por las comunidades ribereñas. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Diarios del Agua ICANH La Balsa Buenos Aires, Cauca Comunidades afrodescendientes Río Cauca Bloque Calima Violencia Víctimas JEP Memoria Sanación Comunidades ribereñas https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-cultura-de-paz-154",
      "row": 154,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Documental Mallorquín: la historia de un ecocidio",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH. La ciénaga de Mallorquín, en Barranquilla, enfrenta graves riesgos por proyectos urbanísticos que amenazan este ecosistema protegido, incluso como zona RAMSAR. La expansión y la falta de medidas adecuadas de mitigación aumentan la contaminación del agua, afectando la biodiversidad y a las comunidades que dependen de este entorno natural.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Ciénaga de Mallorquín",
        "Barranquilla",
        "Ecosistema protegido",
        "Zona RAMSAR",
        "Proyectos urbanísticos",
        "Contaminación del agua",
        "Biodiversidad",
        "Comunidades locales"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Documental Mallorquín: la historia de un ecocidio Documental Documental de la serie Diarios del agua del ICANH. La ciénaga de Mallorquín, en Barranquilla, enfrenta graves riesgos por proyectos urbanísticos que amenazan este ecosistema protegido, incluso como zona RAMSAR. La expansión y la falta de medidas adecuadas de mitigación aumentan la contaminación del agua, afectando la biodiversidad y a las comunidades que dependen de este entorno natural. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Diarios del Agua ICANH Ciénaga de Mallorquín Barranquilla Ecosistema protegido Zona RAMSAR Proyectos urbanísticos Contaminación del agua Biodiversidad Comunidades locales PENDIENTE"
    },
    {
      "id": "somos-territorios-bioculturales-155",
      "row": 155,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Salmedina: memorias del agua",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH. Este capítulo explora el patrimonio sumergido en aguas poco profundas de Cartagena, destacando su valor estratégico en el siglo XVIII. Conecta los vestigios de los bajos de Salmedina con el Fuerte de San Fernando en Bocachica, y reflexiona sobre la relación histórica de la ciudad con el mar. A través de la arqueología subacuática, invita a redescubrir estas profundidades.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Cartagena",
        "Patrimonio sumergido",
        "Siglo XVIII",
        "Bajos de Salmedina",
        "Fuerte de San Fernando",
        "Bocachica",
        "Arqueología subacuática",
        "Relación histórica con el mar"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos territorios bioculturales ICANH Documental Salmedina: memorias del agua Documental Documental de la serie Diarios del agua del ICANH. Este capítulo explora el patrimonio sumergido en aguas poco profundas de Cartagena, destacando su valor estratégico en el siglo XVIII. Conecta los vestigios de los bajos de Salmedina con el Fuerte de San Fernando en Bocachica, y reflexiona sobre la relación histórica de la ciudad con el mar. A través de la arqueología subacuática, invita a redescubrir estas profundidades. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Diarios del Agua ICANH Cartagena Patrimonio sumergido Siglo XVIII Bajos de Salmedina Fuerte de San Fernando Bocachica Arqueología subacuática Relación histórica con el mar PENDIENTE"
    },
    {
      "id": "somos-territorios-bioculturales-156",
      "row": 156,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Podcast La Mojana: 2.000 años de vida anfibia",
      "type": "Podcast",
      "description": "Podcast Antropofonías del ICANH. En su primer capítulo aborda La Mojana, región del Caribe colombiano afectada por inundaciones recurrentes. Analiza este fenómeno y su relación con las comunidades que habitan el territorio, con la participación de la arqueóloga Ana María Falchetti y la antropóloga Juana Camacho, quienes aportan miradas sobre historia, territorio y sistemas alimentarios.",
      "keywords": [
        "Antropofonías",
        "ICANH",
        "La Mojana",
        "Caribe colombiano",
        "Inundaciones",
        "Comunidades locales",
        "Historia",
        "Territorio",
        "Sistemas alimentarios",
        "Ana María Falchetti",
        "Juana Camacho"
      ],
      "link": "https://open.spotify.com/episode/0TnAe1XSYmU2dZziVznyLq?si=585a5b39af9444ab",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Podcast La Mojana: 2.000 años de vida anfibia Podcast Podcast Antropofonías del ICANH. En su primer capítulo aborda La Mojana, región del Caribe colombiano afectada por inundaciones recurrentes. Analiza este fenómeno y su relación con las comunidades que habitan el territorio, con la participación de la arqueóloga Ana María Falchetti y la antropóloga Juana Camacho, quienes aportan miradas sobre historia, territorio y sistemas alimentarios. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Antropofonías ICANH La Mojana Caribe colombiano Inundaciones Comunidades locales Historia Territorio Sistemas alimentarios Ana María Falchetti Juana Camacho https://open.spotify.com/episode/0TnAe1XSYmU2dZziVznyLq?si=585a5b39af9444ab"
    },
    {
      "id": "somos-cultura-de-paz-157",
      "row": 157,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Soacha: un patrimonio en construcción",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofonías del ICANH. Aborda el patrimonio arqueológico de Soacha y su avance en planes de manejo, en medio de retos legales y sociales. A partir del ataque al símbolo El Dios Varón, ciudadanos y expertos reflexionan sobre los desafíos de proteger el patrimonio y aplicar estas políticas en contextos complejos.",
      "keywords": [
        "Antropofonías",
        "ICANH",
        "Soacha",
        "Patrimonio arqueológico",
        "Planes de manejo",
        "Retos legales",
        "Retos sociales",
        "El Dios Varón",
        "Protección del patrimonio",
        "Políticas culturales"
      ],
      "link": "https://open.spotify.com/episode/51EPlgXf2rcNCoW9i7Jola?si=48d7d713ac524884",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Soacha: un patrimonio en construcción Podcast Episodio del podcast Antropofonías del ICANH. Aborda el patrimonio arqueológico de Soacha y su avance en planes de manejo, en medio de retos legales y sociales. A partir del ataque al símbolo El Dios Varón, ciudadanos y expertos reflexionan sobre los desafíos de proteger el patrimonio y aplicar estas políticas en contextos complejos. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Antropofonías ICANH Soacha Patrimonio arqueológico Planes de manejo Retos legales Retos sociales El Dios Varón Protección del patrimonio Políticas culturales https://open.spotify.com/episode/51EPlgXf2rcNCoW9i7Jola?si=48d7d713ac524884"
    },
    {
      "id": "somos-cultura-de-paz-158",
      "row": 158,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Chiribiquete: huellas del poblemiento de América",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofonías del ICANH. Explora Chiribiquete, territorio amazónico protegido por raudales y tepuyes, de difícil acceso y gran valor cultural. A partir de sus vestigios humanos y pictóricos milenarios, se reflexiona sobre el origen y las rutas de llegada de los primeros habitantes de América, destacando la importancia de su conservación.",
      "keywords": [
        "Antropofonías",
        "ICANH",
        "Chiribiquete",
        "Amazonía",
        "Raudales",
        "Tepuyes",
        "Patrimonio cultural",
        "Vestigios humanos",
        "Pinturas rupestres",
        "Conservación"
      ],
      "link": "https://open.spotify.com/episode/05W93VLE9qaAv850YSZzFr?si=fb8a1fc86b6249ca",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Chiribiquete: huellas del poblemiento de América Podcast Episodio del podcast Antropofonías del ICANH. Explora Chiribiquete, territorio amazónico protegido por raudales y tepuyes, de difícil acceso y gran valor cultural. A partir de sus vestigios humanos y pictóricos milenarios, se reflexiona sobre el origen y las rutas de llegada de los primeros habitantes de América, destacando la importancia de su conservación. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Antropofonías ICANH Chiribiquete Amazonía Raudales Tepuyes Patrimonio cultural Vestigios humanos Pinturas rupestres Conservación https://open.spotify.com/episode/05W93VLE9qaAv850YSZzFr?si=fb8a1fc86b6249ca"
    },
    {
      "id": "somos-cultura-de-paz-159",
      "row": 159,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Gentrificación de Getsemaní: voces de la resistencia",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofonías del ICANH. \nEn este episodio conversamos con l antropólogo Patrick Morales y presentamos Gentrificación de Getsemaní: voces de resistencia, un laboratorio para entender todas estas dinámicas asociadas a la expulsión de la población local, la patrimonización y la resistencia de las comunidades a la turistificación.",
      "keywords": [
        "Antropofonías",
        "ICANH",
        "Patrick Morales",
        "Getsemaní",
        "Gentrificación",
        "Voces de resistencia",
        "Patrimonización",
        "Turistificación",
        "Comunidades locales",
        "Expulsión poblacional"
      ],
      "link": "https://open.spotify.com/episode/2haGzEoUw6dNgsZla9oDWq?si=b1b3817f2b4b44e1",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Gentrificación de Getsemaní: voces de la resistencia Podcast Episodio del podcast Antropofonías del ICANH. En este episodio conversamos con l antropólogo Patrick Morales y presentamos Gentrificación de Getsemaní: voces de resistencia, un laboratorio para entender todas estas dinámicas asociadas a la expulsión de la población local, la patrimonización y la resistencia de las comunidades a la turistificación. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Antropofonías ICANH Patrick Morales Getsemaní Gentrificación Voces de resistencia Patrimonización Turistificación Comunidades locales Expulsión poblacional https://open.spotify.com/episode/2haGzEoUw6dNgsZla9oDWq?si=b1b3817f2b4b44e1"
    },
    {
      "id": "somos-cultura-de-paz-160",
      "row": 160,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Las estatuas chamanes de San Agustín",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofonías del ICANH. Conversa con Héctor Llanos, historiador y arqueólogo de la Universidad Nacional, sobre la cultura agustiniana y su relación con las sociedades indígenas del Alto Magdalena. A partir de las estatuas chamán de San Agustín, se exploran los sistemas de pensamiento detrás de estos monumentos y su significado cultural.",
      "keywords": [
        "Antropofonías",
        "ICANH",
        "Héctor Llanos",
        "Universidad Nacional",
        "Cultura agustiniana",
        "Sociedades indígenas",
        "Alto Magdalena",
        "Estatuas chamán",
        "Monumentos",
        "Significado cultural"
      ],
      "link": "https://open.spotify.com/episode/7npramYWSzx2gaoeOUPbtu?si=22e2ce9a3e5b4238",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Las estatuas chamanes de San Agustín Podcast Episodio del podcast Antropofonías del ICANH. Conversa con Héctor Llanos, historiador y arqueólogo de la Universidad Nacional, sobre la cultura agustiniana y su relación con las sociedades indígenas del Alto Magdalena. A partir de las estatuas chamán de San Agustín, se exploran los sistemas de pensamiento detrás de estos monumentos y su significado cultural. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Antropofonías ICANH Héctor Llanos Universidad Nacional Cultura agustiniana Sociedades indígenas Alto Magdalena Estatuas chamán Monumentos Significado cultural https://open.spotify.com/episode/7npramYWSzx2gaoeOUPbtu?si=22e2ce9a3e5b4238"
    },
    {
      "id": "somos-cultura-de-paz-161",
      "row": 161,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Santa Marta 500 años: lugares comunes y debates sobre su fuindación",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofonías del ICANH. En este capítulo hablaremos con Antonio Jaramillo y Marcela Escandón, quienes aportan una perspectiva alternativa de la fundación de Santa Marta. Reconstruyendo los primeros años de una cuidad que comenzó ante todo como el punto de lanza para la invasión de una amplia región. Marcela y Antonio comparten algunos lugares comunes del mito fundamental.",
      "keywords": [
        "Antropofonías",
        "ICANH",
        "Antonio Jaramillo",
        "Marcela Escandón",
        "Santa Marta",
        "Fundación",
        "Historia colonial",
        "Mito fundacional",
        "Invasión territorial",
        "Reconstrucción histórica"
      ],
      "link": "https://open.spotify.com/episode/6BgDgITEZJNXWG9WhbsH13?si=cf1c5f9b512043f8",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Santa Marta 500 años: lugares comunes y debates sobre su fuindación Podcast Episodio del podcast Antropofonías del ICANH. En este capítulo hablaremos con Antonio Jaramillo y Marcela Escandón, quienes aportan una perspectiva alternativa de la fundación de Santa Marta. Reconstruyendo los primeros años de una cuidad que comenzó ante todo como el punto de lanza para la invasión de una amplia región. Marcela y Antonio comparten algunos lugares comunes del mito fundamental. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Antropofonías ICANH Antonio Jaramillo Marcela Escandón Santa Marta Fundación Historia colonial Mito fundacional Invasión territorial Reconstrucción histórica https://open.spotify.com/episode/6BgDgITEZJNXWG9WhbsH13?si=cf1c5f9b512043f8"
    },
    {
      "id": "somos-cultura-de-paz-162",
      "row": 162,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Culturas creoles en el Océano Índico",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofonías del ICANH. Conversa con Andrés Leiva sobre las culturas créoles y mestizas de la isla de La Reunión, en el océano Índico. A partir de estas insularidades, se trazan puentes con el Caribe y otras islas, entendidas no como territorios aislados, sino como espacios de contacto, intercambio e interculturalidad desde la globalización temprana.",
      "keywords": [
        "Antropofonías",
        "ICANH",
        "Andrés Leiva",
        "Isla de La Reunión",
        "Culturas créoles",
        "Culturas mestizas",
        "Caribe",
        "Insularidades",
        "Interculturalidad",
        "Globalización temprana"
      ],
      "link": "https://open.spotify.com/episode/0DACyIVazKlJLokeqhBuTm?si=dddf069fb91b499c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Culturas creoles en el Océano Índico Podcast Episodio del podcast Antropofonías del ICANH. Conversa con Andrés Leiva sobre las culturas créoles y mestizas de la isla de La Reunión, en el océano Índico. A partir de estas insularidades, se trazan puentes con el Caribe y otras islas, entendidas no como territorios aislados, sino como espacios de contacto, intercambio e interculturalidad desde la globalización temprana. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Antropofonías ICANH Andrés Leiva Isla de La Reunión Culturas créoles Culturas mestizas Caribe Insularidades Interculturalidad Globalización temprana https://open.spotify.com/episode/0DACyIVazKlJLokeqhBuTm?si=dddf069fb91b499c"
    },
    {
      "id": "somos-cultura-de-paz-163",
      "row": 163,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Santa María la Antigua del Darién: cruce de caminos y resistencias",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofonías del ICANH. Conversa con Carolina Quintero, curadora del Museo Nacional, y Alberto Sarcina, arqueólogo del ICANH, sobre el Parque Arqueológico y Casa Museo de Santa María la Antigua del Darién. Destaca un ejercicio participativo e intercultural donde la arqueología y la museología aportan a la construcción y reconstrucción del territorio junto a las comunidades.",
      "keywords": [
        "Antropofonías",
        "ICANH",
        "Carolina Quintero",
        "Alberto Sarcina",
        "Museo Nacional",
        "Parque Arqueológico",
        "Casa Museo",
        "Santa María la Antigua del Darién",
        "Arqueología",
        "Museología",
        "Participación comunitaria",
        "Interculturalidad"
      ],
      "link": "https://open.spotify.com/episode/16TjnmykfIiRsQQCdZKaNx?si=5d404811e5174a13",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz.",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Santa María la Antigua del Darién: cruce de caminos y resistencias Podcast Episodio del podcast Antropofonías del ICANH. Conversa con Carolina Quintero, curadora del Museo Nacional, y Alberto Sarcina, arqueólogo del ICANH, sobre el Parque Arqueológico y Casa Museo de Santa María la Antigua del Darién. Destaca un ejercicio participativo e intercultural donde la arqueología y la museología aportan a la construcción y reconstrucción del territorio junto a las comunidades. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del país. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una nación en paz. Antropofonías ICANH Carolina Quintero Alberto Sarcina Museo Nacional Parque Arqueológico Casa Museo Santa María la Antigua del Darién Arqueología Museología Participación comunitaria Interculturalidad https://open.spotify.com/episode/16TjnmykfIiRsQQCdZKaNx?si=5d404811e5174a13"
    },
    {
      "id": "somos-cultura-de-paz-164",
      "row": 164,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Documental Ñuba y Sewá: Volver a la vida",
      "type": "Podcast",
      "description": "Documental de la serie El futuro del pasado del ICANH. Tras 15 años, el pueblo Kogui de la Sierra Nevada de Santa Marta recupera objetos sagrados en un proceso de rematriación que propicia el diálogo entre arqueólogos y autoridades espirituales. El relato revela por qué estos objetos son seres vivos y su papel en el equilibrio del mundo.",
      "keywords": [
        "El futuro del pasado",
        "ICANH",
        "Pueblo Kogui",
        "Sierra Nevada de Santa Marta",
        "Objetos sagrados",
        "Rematriación",
        "Arqueología",
        "Autoridades espirituales",
        "Seres vivos",
        "Equilibrio del mundo"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Sanar el territorio colombiano pasa por revisar nuestra historia y devolverles a nuestros pueblos ancestrales lo que les fue arrebatado.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Documental Ñuba y Sewá: Volver a la vida Podcast Documental de la serie El futuro del pasado del ICANH. Tras 15 años, el pueblo Kogui de la Sierra Nevada de Santa Marta recupera objetos sagrados en un proceso de rematriación que propicia el diálogo entre arqueólogos y autoridades espirituales. El relato revela por qué estos objetos son seres vivos y su papel en el equilibrio del mundo. Sanar el territorio colombiano pasa por revisar nuestra historia y devolverles a nuestros pueblos ancestrales lo que les fue arrebatado. El futuro del pasado ICANH Pueblo Kogui Sierra Nevada de Santa Marta Objetos sagrados Rematriación Arqueología Autoridades espirituales Seres vivos Equilibrio del mundo PENDIENTE"
    },
    {
      "id": "somos-cultura-de-paz-165",
      "row": 165,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Documental Un tejido para sanar",
      "type": "Podcast",
      "description": "Documental de la serie El futuro del pasado del ICANH. Aborda el Decreto 1500 de 2018, que redefinió el territorio ancestral de los pueblos Kogui, Arhuaco, Wiwa y Kankuamo en la Sierra Nevada de Santa Marta. La obra audiovisual del Consejo Territorial de Cabildos busca tender puentes entre estos pueblos y el Estado, destacando la protección de la Línea Negra como sistema de sitios sagrados.",
      "keywords": [
        "El futuro del pasado",
        "ICANH",
        "Decreto 1500 de 2018",
        "Pueblos Kogui, Arhuaco, Wiwa, Kankuamo",
        "Sierra Nevada de Santa Marta",
        "Territorio ancestral",
        "Consejo Territorial de Cabildos",
        "Línea Negra",
        "Sitios sagrados",
        "Protección cultural"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Sanar el territorio colombiano pasa por revisar nuestra historia y devolverles a nuestros pueblos ancestrales lo que les fue arrebatado.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Documental Un tejido para sanar Podcast Documental de la serie El futuro del pasado del ICANH. Aborda el Decreto 1500 de 2018, que redefinió el territorio ancestral de los pueblos Kogui, Arhuaco, Wiwa y Kankuamo en la Sierra Nevada de Santa Marta. La obra audiovisual del Consejo Territorial de Cabildos busca tender puentes entre estos pueblos y el Estado, destacando la protección de la Línea Negra como sistema de sitios sagrados. Sanar el territorio colombiano pasa por revisar nuestra historia y devolverles a nuestros pueblos ancestrales lo que les fue arrebatado. El futuro del pasado ICANH Decreto 1500 de 2018 Pueblos Kogui, Arhuaco, Wiwa, Kankuamo Sierra Nevada de Santa Marta Territorio ancestral Consejo Territorial de Cabildos Línea Negra Sitios sagrados Protección cultural PENDIENTE"
    },
    {
      "id": "somos-cultura-de-paz-166",
      "row": 166,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Documental ¿Quién gobierna el río Atrato?",
      "type": "Podcast",
      "description": "Documental de la serie El futuro del pasado del ICANH. Explora el contexto que llevó a reconocer al río Atrato como sujeto de derechos. A través de testimonios, muestra la vida en torno al río y analiza avances y retos en la implementación de esta sentencia, que busca proteger su vida y la de las comunidades. Más allá del papel, cuestiona quién gobierna realmente el río Atrato.",
      "keywords": [
        "El futuro del pasado",
        "ICANH",
        "Río Atrato",
        "Sujeto de derechos",
        "Comunidades ribereñas",
        "Testimonios",
        "Protección del río",
        "Sentencia judicial",
        "Gobernanza",
        "Vida del río"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Sanar el territorio colombiano pasa por revisar nuestra historia y devolverles a nuestros pueblos ancestrales lo que les fue arrebatado.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Documental ¿Quién gobierna el río Atrato? Podcast Documental de la serie El futuro del pasado del ICANH. Explora el contexto que llevó a reconocer al río Atrato como sujeto de derechos. A través de testimonios, muestra la vida en torno al río y analiza avances y retos en la implementación de esta sentencia, que busca proteger su vida y la de las comunidades. Más allá del papel, cuestiona quién gobierna realmente el río Atrato. Sanar el territorio colombiano pasa por revisar nuestra historia y devolverles a nuestros pueblos ancestrales lo que les fue arrebatado. El futuro del pasado ICANH Río Atrato Sujeto de derechos Comunidades ribereñas Testimonios Protección del río Sentencia judicial Gobernanza Vida del río PENDIENTE"
    },
    {
      "id": "somos-cultura-de-paz-167",
      "row": 167,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Documental Relatos de la Guajirita",
      "type": "Podcast",
      "description": "Escuela De La Vista Al Lente. Relatos de la Guajirita. Documental que aborda historias de vida, saberes ancestrales y prácticas culturales del corregimiento afrodescendiente La Guajirita (Becerril, Cesar). A través de testimonios intergeneracionales, explora memoria, identidad, música, espiritualidad y tradiciones, evidenciando la fuerza de la comunidad para preservar su cultura y transmitirla a nuevas generaciones.",
      "keywords": [
        "Escuela De La Vista Al Lente",
        "Relatos de la Guajirita",
        "La Guajirita",
        "Becerril, Cesar",
        "Comunidades afrodescendientes",
        "Historias de vida",
        "Saberes ancestrales",
        "Prácticas culturales",
        "Memoria e identidad",
        "Música y espiritualidad",
        "Tradiciones",
        "Transmisión generacional"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/7.%20BECERRIL/3_%20pago_10%25/1.%20Contenidos/2.%20contenio/RELATOS%20DE%20LA%20GUAJIRITA,%20DOCUMENTAL.mov?csf=1&web=1&e=Lm8KjO",
      "asset_link": "",
      "force_message": "La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS Documental Relatos de la Guajirita Podcast Escuela De La Vista Al Lente. Relatos de la Guajirita. Documental que aborda historias de vida, saberes ancestrales y prácticas culturales del corregimiento afrodescendiente La Guajirita (Becerril, Cesar). A través de testimonios intergeneracionales, explora memoria, identidad, música, espiritualidad y tradiciones, evidenciando la fuerza de la comunidad para preservar su cultura y transmitirla a nuevas generaciones. La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades. Escuela De La Vista Al Lente Relatos de la Guajirita La Guajirita Becerril, Cesar Comunidades afrodescendientes Historias de vida Saberes ancestrales Prácticas culturales Memoria e identidad Música y espiritualidad Tradiciones Transmisión generacional https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/7.%20BECERRIL/3_%20pago_10%25/1.%20Contenidos/2.%20contenio/RELATOS%20DE%20LA%20GUAJIRITA,%20DOCUMENTAL.mov?csf=1&web=1&e=Lm8KjO"
    },
    {
      "id": "somos-cultura-de-paz-168",
      "row": 168,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Ficción Gauchos de resistencia",
      "type": "Podcast",
      "description": "Gauchos de Resistencia narra la historia de Iván, un joven de 17 años que, junto a su hermano y su abuela, enfrenta dificultades económicas tras la pérdida de ingresos familiares. Mientras vende un dulce tradicional para sostener su hogar, se ve expuesto a riesgos de economías ilegales. Sin embargo, su pasión por el arte se convierte en una vía para resistir, proteger a su familia y proyectar un futuro distinto.",
      "keywords": [
        "Gauchos de Resistencia",
        "Iván",
        "Jóvenes",
        "Familia",
        "Dificultades económicas",
        "Dulce tradicional",
        "Economías ilegales",
        "Arte como resistencia",
        "Protección familiar",
        "Futuro alternativo"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/12.%20MAREA%20PRODUCCIONES/3_%20pago_10%25%20%20MAREA%20PRODUCCIONES/1.%20Contenidos/3.%20contenido/2.%20Gauchos%20de%20resistencia.mp4?csf=1&web=1&e=iwlNYl",
      "asset_link": "",
      "force_message": "La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS Ficción Gauchos de resistencia Podcast Gauchos de Resistencia narra la historia de Iván, un joven de 17 años que, junto a su hermano y su abuela, enfrenta dificultades económicas tras la pérdida de ingresos familiares. Mientras vende un dulce tradicional para sostener su hogar, se ve expuesto a riesgos de economías ilegales. Sin embargo, su pasión por el arte se convierte en una vía para resistir, proteger a su familia y proyectar un futuro distinto. La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades. Gauchos de Resistencia Iván Jóvenes Familia Dificultades económicas Dulce tradicional Economías ilegales Arte como resistencia Protección familiar Futuro alternativo https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/12.%20MAREA%20PRODUCCIONES/3_%20pago_10%25%20%20MAREA%20PRODUCCIONES/1.%20Contenidos/3.%20contenido/2.%20Gauchos%20de%20resistencia.mp4?csf=1&web=1&e=iwlNYl"
    },
    {
      "id": "somos-cultura-de-paz-169",
      "row": 169,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Ficción Altanegra",
      "type": "Podcast",
      "description": "Escuela AfroguaJira, Audiovisual y Antirracista del Kuagro de Comunicaciones de Altanegra aborda el racismo estructural, laboral y de género a través de una pieza, visibilizando la exclusión que enfrentan las mujeres afro y reivindicando la estética como resistencia. También conecta estas violencias con el territorio y la justicia ambiental. Más que denuncia, es un acto cinematográfico que interpela sobre ser joven, negra y de pueblo en una sociedad que excluye.",
      "keywords": [
        "Escuela AfroguaJira",
        "Kuagro de Comunicaciones",
        "Racismo estructural",
        "Racismo laboral",
        "Racismo de género",
        "Mujeres afro",
        "Estética como resistencia",
        "Territorio",
        "Justicia ambiental",
        "Juventud negra",
        "Exclusión social",
        "Cine documental"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/10.%20%20MATA%20%27E%20PELO/3_%20pago_10%25/1.%20Contenidos/1.%20Contenido/Pelicula%20Altanegra%20Oficial%20.mp4?csf=1&web=1&e=N7do1K",
      "asset_link": "",
      "force_message": "La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS Ficción Altanegra Podcast Escuela AfroguaJira, Audiovisual y Antirracista del Kuagro de Comunicaciones de Altanegra aborda el racismo estructural, laboral y de género a través de una pieza, visibilizando la exclusión que enfrentan las mujeres afro y reivindicando la estética como resistencia. También conecta estas violencias con el territorio y la justicia ambiental. Más que denuncia, es un acto cinematográfico que interpela sobre ser joven, negra y de pueblo en una sociedad que excluye. La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades. Escuela AfroguaJira Kuagro de Comunicaciones Racismo estructural Racismo laboral Racismo de género Mujeres afro Estética como resistencia Territorio Justicia ambiental Juventud negra Exclusión social Cine documental https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/10.%20%20MATA%20%27E%20PELO/3_%20pago_10%25/1.%20Contenidos/1.%20Contenido/Pelicula%20Altanegra%20Oficial%20.mp4?csf=1&web=1&e=N7do1K"
    },
    {
      "id": "somos-cultura-de-paz-170",
      "row": 170,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Documental Félix Banguero",
      "type": "Documental",
      "description": "Documental que retrata a un líder afrodescendiente de Guachené (Norte del Cauca), cuya vida articula defensa del territorio, memoria ancestral, música y espiritualidad. Su historia encarna la resistencia y la dignidad de una comunidad que se organiza para preservar su identidad y no ser olvidada. Este documental ha sido posible gracias a la Escuela de Comunicación Colectivo de Comunicaciones Félix Banguero.",
      "keywords": [
        "Documental",
        "Guachené, Norte del Cauca",
        "Líder afrodescendiente",
        "Defensa del territorio",
        "Memoria ancestral",
        "Música",
        "Espiritualidad",
        "Resistencia comunitaria",
        "Dignidad",
        "Escuela de Comunicación Colectivo Félix Banguero"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades.",
      "availability_note": "NO CUENTA CON AUTORIZACIÓN",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Dirección de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicación, Culturas y Territorios-AFROCOLOMBIAS Documental Félix Banguero Documental Documental que retrata a un líder afrodescendiente de Guachené (Norte del Cauca), cuya vida articula defensa del territorio, memoria ancestral, música y espiritualidad. Su historia encarna la resistencia y la dignidad de una comunidad que se organiza para preservar su identidad y no ser olvidada. Este documental ha sido posible gracias a la Escuela de Comunicación Colectivo de Comunicaciones Félix Banguero. La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades. Documental Guachené, Norte del Cauca Líder afrodescendiente Defensa del territorio Memoria ancestral Música Espiritualidad Resistencia comunitaria Dignidad Escuela de Comunicación Colectivo Félix Banguero NO CUENTA CON AUTORIZACIÓN"
    },
    {
      "id": "somos-cultura-de-paz-171",
      "row": 171,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "Biblioteca Nacional",
      "title": "Ficción Tiempos nocturnos",
      "type": "Cortometraje",
      "description": "Ficción ambientada en Berrugas, Sucre. Durante un apagón, un grupo de jóvenes se reúne bajo la luna para contar historias de fantasía y terror. Poco a poco, los relatos comienzan a sentirse reales, como si los espíritus del mar, el manglar y la historia respondieran. En la noche caribeña, lo mágico y lo inquietante se mezclan con la vida cotidiana.",
      "keywords": [
        "Ficción",
        "Berrugas, Sucre",
        "Jóvenes",
        "Apagón",
        "Historias de fantasía",
        "Historias de terror",
        "Espíritus del mar",
        "Manglar",
        "Magia e inquietud",
        "Noche caribeña"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz Biblioteca Nacional Ficción Tiempos nocturnos Cortometraje Ficción ambientada en Berrugas, Sucre. Durante un apagón, un grupo de jóvenes se reúne bajo la luna para contar historias de fantasía y terror. Poco a poco, los relatos comienzan a sentirse reales, como si los espíritus del mar, el manglar y la historia respondieran. En la noche caribeña, lo mágico y lo inquietante se mezclan con la vida cotidiana. La comunicación en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, jóvenes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusión en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, estéticas y espiritualidades. Ficción Berrugas, Sucre Jóvenes Apagón Historias de fantasía Historias de terror Espíritus del mar Manglar Magia e inquietud Noche caribeña PENDIENTE"
    },
    {
      "id": "somos-cultura-de-paz-172",
      "row": 172,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "Biblioteca Nacional",
      "title": "Mini clips sobre procesos en Bibliotecas Públicas y Bibliotecas Rurales Itinerantes",
      "type": "Mini clips",
      "description": "El equipo de comunicaciones de la Biblioteca Nacional de Colombia presenta una serie de videos cortos que muestran el trabajo de las bibliotecas en comunidades étnicas y sus procesos de apropiación. Las bibliotecas se destacan como espacios centrales donde la palabra oral y escrita preserva la memoria, narra el presente y proyecta los sueños de cada territorio.",
      "keywords": [
        "Biblioteca Nacional de Colombia",
        "Comunidades étnicas",
        "Bibliotecas",
        "Apropiación cultural",
        "Palabra oral",
        "Palabra escrita",
        "Memoria",
        "Presente",
        "Sueños territoriales",
        "Espacios culturales"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Las bibliotecas son el corazón de las comunidades, lugares donde la palabra escrita y oral es la protagonista para preservar la memoria, las historias del presente y los sueños del futuro de cada territorio.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz Biblioteca Nacional Mini clips sobre procesos en Bibliotecas Públicas y Bibliotecas Rurales Itinerantes Mini clips El equipo de comunicaciones de la Biblioteca Nacional de Colombia presenta una serie de videos cortos que muestran el trabajo de las bibliotecas en comunidades étnicas y sus procesos de apropiación. Las bibliotecas se destacan como espacios centrales donde la palabra oral y escrita preserva la memoria, narra el presente y proyecta los sueños de cada territorio. Las bibliotecas son el corazón de las comunidades, lugares donde la palabra escrita y oral es la protagonista para preservar la memoria, las historias del presente y los sueños del futuro de cada territorio. Biblioteca Nacional de Colombia Comunidades étnicas Bibliotecas Apropiación cultural Palabra oral Palabra escrita Memoria Presente Sueños territoriales Espacios culturales PENDIENTE"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-173",
      "row": 173,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas Dirección de Poblaciones - GIT Culturas Negras, Afrodescendientes, Raizales y Palenqueras",
      "title": "Cartilla sobre feminismos negros y derechos reproductivos para mujeres Negras Afrocolombianas, Raizales y Palenqueras",
      "type": "Documento Cartilla",
      "description": "Cartilla con contenidos sobre feminismos negros y derechos reproductivos para mujeres negras, afrocolombianas, raizales y palenqueras desde la perspectiva de los derechos culturales con el propósito de fortalecer sus voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y políticos.",
      "keywords": [
        "Racismo estructural",
        "Racismo laboral",
        "Racismo de género"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Visibilizar y fortalecer las voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y políticos de las mujeres negras, afrodescendientes, raizales y palenqueras",
      "availability_note": "PENDIENTE",
      "search_text": "Somos un país pluriétnico y multicultural MinCulturas Dirección de Poblaciones - GIT Culturas Negras, Afrodescendientes, Raizales y Palenqueras Cartilla sobre feminismos negros y derechos reproductivos para mujeres Negras Afrocolombianas, Raizales y Palenqueras Documento Cartilla Cartilla con contenidos sobre feminismos negros y derechos reproductivos para mujeres negras, afrocolombianas, raizales y palenqueras desde la perspectiva de los derechos culturales con el propósito de fortalecer sus voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y políticos. Visibilizar y fortalecer las voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y políticos de las mujeres negras, afrodescendientes, raizales y palenqueras Racismo estructural Racismo laboral Racismo de género PENDIENTE"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-174",
      "row": 174,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas Dirección de Poblaciones - GIT Culturas Indígenas, Rrom y Lenguas Nativas",
      "title": "Documentos de Memoria Viva de la nación gonawindua",
      "type": "Documento cartilla",
      "description": "Implementación Programa de jóvenes de la Sierra Nevada de Gonawindua El convenio 1619-2025 suscrito entre la CIT y el Ministerio de las Culturas, Artes y saberes hace parte de la ruta de cumplimiento del acuerdo IM-165, que exige: Garantizar el diseño e implementación de un programa para el fortalecimiento, reivindicación y transmisión intergeneracional de los conocimientos propios para los jóvenes de los pueblos de la Sierra Nevada de Gonawindúa, en concertación con el Consejo Territorial de Cabildos, de acuerdo a la ley de origen y cosmovisión propia de los pueblos de la Sierra Nevada de Gonawindúa.",
      "keywords": [
        "Priorización y caracterización de los espacioos comunitarios. Saneaminto de los territorios, Trabajo Comunitario, Bautizo y entrega a la comunidad."
      ],
      "link": "https://mcultura-my.sharepoint.com/personal/atorresb_mincultura_gov_co/_layouts/15/onedrive.aspx?e=5%3A5c11216d2eb444ef99dd2b2198743a94&sharingv2=true&fromShare=true&at=9&CT=1776201569449&OR=OWA%2DNT%2DMail&CID=bb3765e8%2D3ad6%2D7c7d%2D1983%2D4e8f6f63eab1&clickParams=eyJYLUFwcE5hbWUiOiJNaWNyb3NvZnQgT3V0bG9vayBXZWIgQXBwIiwiWC1BcHBWZXJzaW9uIjoiMjAyNjA0MDMwMDEuMzEiLCJPUyI6IldpbmRvd3MgMTEifQ%3D%3D&cidOR=Client&id=%2Fpersonal%2Fatorresb%5Fmincultura%5Fgov%5Fco%2FDocuments%2FDIRECCION%20DE%20POBLACIONES%202025%2FDIRECCION%20DE%20POBLACIONES%202025%2FCONVENIOS%202025%2F3%2E%201619%2D2025%5F%20CONFERACION%20INDIGENA%20TAYRONA%5FCIT%2FEJECUCION%2FTERCER%20PAGO%2FINFORME%20TECNICO%2FEVIDENCIAS%2FCOMPONENTE%201%2F1%2E1&FolderCTID=0x0120004EEA25B391B440479AE8DF393CA887F8&view=0",
      "asset_link": "",
      "force_message": "Visibilizar y fortalecer las voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y políticos de las mujeres negras, afrodescendientes, raizales y palenqueras",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural MinCulturas Dirección de Poblaciones - GIT Culturas Indígenas, Rrom y Lenguas Nativas Documentos de Memoria Viva de la nación gonawindua Documento cartilla Implementación Programa de jóvenes de la Sierra Nevada de Gonawindua El convenio 1619-2025 suscrito entre la CIT y el Ministerio de las Culturas, Artes y saberes hace parte de la ruta de cumplimiento del acuerdo IM-165, que exige: Garantizar el diseño e implementación de un programa para el fortalecimiento, reivindicación y transmisión intergeneracional de los conocimientos propios para los jóvenes de los pueblos de la Sierra Nevada de Gonawindúa, en concertación con el Consejo Territorial de Cabildos, de acuerdo a la ley de origen y cosmovisión propia de los pueblos de la Sierra Nevada de Gonawindúa. Visibilizar y fortalecer las voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y políticos de las mujeres negras, afrodescendientes, raizales y palenqueras Priorización y caracterización de los espacioos comunitarios. Saneaminto de los territorios, Trabajo Comunitario, Bautizo y entrega a la comunidad. https://mcultura-my.sharepoint.com/personal/atorresb_mincultura_gov_co/_layouts/15/onedrive.aspx?e=5%3A5c11216d2eb444ef99dd2b2198743a94&sharingv2=true&fromShare=true&at=9&CT=1776201569449&OR=OWA%2DNT%2DMail&CID=bb3765e8%2D3ad6%2D7c7d%2D1983%2D4e8f6f63eab1&clickParams=eyJYLUFwcE5hbWUiOiJNaWNyb3NvZnQgT3V0bG9vayBXZWIgQXBwIiwiWC1BcHBWZXJzaW9uIjoiMjAyNjA0MDMwMDEuMzEiLCJPUyI6IldpbmRvd3MgMTEifQ%3D%3D&cidOR=Client&id=%2Fpersonal%2Fatorresb%5Fmincultura%5Fgov%5Fco%2FDocuments%2FDIRECCION%20DE%20POBLACIONES%202025%2FDIRECCION%20DE%20POBLACIONES%202025%2FCONVENIOS%202025%2F3%2E%201619%2D2025%5F%20CONFERACION%20INDIGENA%20TAYRONA%5FCIT%2FEJECUCION%2FTERCER%20PAGO%2FINFORME%20TECNICO%2FEVIDENCIAS%2FCOMPONENTE%201%2F1%2E1&FolderCTID=0x0120004EEA25B391B440479AE8DF393CA887F8&view=0"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-175",
      "row": 175,
      "theme": "Somos un país pluriétnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas Dirección de Poblaciones - GIT Culturas Indígenas, Rrom y Lenguas Nativas",
      "title": "Documento de Actividaad de fortalecimiento de la shib romani kumpania de sabanalarga",
      "type": "Docuemento Cartilla",
      "description": "Los talleres de fortalecimiento tuvieron como objetivo principal la revitalización y preservación de la lengua Shib Romani para ñas 9 kumpnaias y 2 organizaciones del pueblo RROM A través de un enfoque comunitario, se buscó fortalecer la identidad cultural y asegurar la transmisión de nuestra lengua Romaní a las nuevas generaciones.",
      "keywords": [
        "Kumpania, pueblo Rrom. Shib Romaní."
      ],
      "link": "https://mcultura.sharepoint.com/:b:/r/sites/Dir.Poblacion/Documentos%20compartidos/Direccion%20Poblaciones/02_Direcci%C3%B3n%20de%20Poblaciones_2025/02_Justicia_Cultural_%C3%89tnica/05_Rrom/Convenio%202025%20Rrom/segundo%20desembolso%20convenio%201644%20de%202025/L1_Fortalecimineto%20Lengua%20Romani%2011%20informe%2011%20talleres/INFORME,%20LISTADOS%20DE%20ASISTENCIA%20FOTOS%20Y%20VIDEOS%20KUMPANIA%20DE%20SABANALARGA/LEGALIZACION_TALLER_SHIB_ROMANI%20KUMPANIA%20DE%20SABANALARGA.pdf?csf=1&web=1&e=CYnB96",
      "asset_link": "",
      "force_message": "Visibilizar y fortalecer las voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y políticos de las mujeres negras, afrodescendientes, raizales y palenqueras",
      "availability_note": "",
      "search_text": "Somos un país pluriétnico y multicultural MinCulturas Dirección de Poblaciones - GIT Culturas Indígenas, Rrom y Lenguas Nativas Documento de Actividaad de fortalecimiento de la shib romani kumpania de sabanalarga Docuemento Cartilla Los talleres de fortalecimiento tuvieron como objetivo principal la revitalización y preservación de la lengua Shib Romani para ñas 9 kumpnaias y 2 organizaciones del pueblo RROM A través de un enfoque comunitario, se buscó fortalecer la identidad cultural y asegurar la transmisión de nuestra lengua Romaní a las nuevas generaciones. Visibilizar y fortalecer las voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y políticos de las mujeres negras, afrodescendientes, raizales y palenqueras Kumpania, pueblo Rrom. Shib Romaní. https://mcultura.sharepoint.com/:b:/r/sites/Dir.Poblacion/Documentos%20compartidos/Direccion%20Poblaciones/02_Direcci%C3%B3n%20de%20Poblaciones_2025/02_Justicia_Cultural_%C3%89tnica/05_Rrom/Convenio%202025%20Rrom/segundo%20desembolso%20convenio%201644%20de%202025/L1_Fortalecimineto%20Lengua%20Romani%2011%20informe%2011%20talleres/INFORME,%20LISTADOS%20DE%20ASISTENCIA%20FOTOS%20Y%20VIDEOS%20KUMPANIA%20DE%20SABANALARGA/LEGALIZACION_TALLER_SHIB_ROMANI%20KUMPANIA%20DE%20SABANALARGA.pdf?csf=1&web=1&e=CYnB96"
    }
  ]
}
</script>

    <script id="filbo-schedule-data" type="application/json">
[
  {
    "date": "22 abril 2026",
    "time": "11:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Gobernanza Cultural para la Paz, Organizació y Formación sobre el Sistema Nacional de Cultura",
    "description": "Generar, en la FILBo, un diálogo de saberes e intercambio de experiencias sobre gobernanza cultural para la paz y formación en el Sistema Nacional de Cultura en ocho regiones del país. Se instalará un stand con fotografías, relatos y publicaciones de la Dirección de Fomento Regional, donde se socializan experiencias y la caracterización de organizaciones en 15 nodos de distintas regiones.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "22 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Instituto Colombiano de Antropología e Historia",
    "title": "Conflicto, Paz y Tierras: 10 años del Acuerdo de Paz",
    "description": "Este conversatorio presenta los resultados de dos investigaciones sobre restitución de tierras y las transiciones del conflicto tras la firma del Acuerdo de Paz de 2016. Un espacio para analizar sus hallazgos y aportar a la comprensión de los cambios en los territorios.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "22 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Novedades editoriales de la Biblioteca Nacional de Colombia",
    "description": "Durante este evento, se presentarán las novedades editoriales que lanzó la BNC desde la pasada Feria Internacional del Libro de Bogotá.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "22 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Crear para resistir, conversar para transformar",
    "description": "A veces las palabras no alcanzan para expresar lo que duele o asusta. Por eso este espacio comienza creando: una experiencia que mezcla palabra, cuerpo y artes plásticas para explorar cómo el arte y la cultura nos ayudan a ser y expresarnos. Luego, abriremos una conversación sobre creatividad, comunidad y resistencia. Un lugar para sentir, pensar y hablar sin filtros, dirigido a jóvenes.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "22 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Desde el principio, selección de cuentos, crónicas y otros escritos antes del guión de Humberto Dorado Miranda",
    "description": "Participan: Humberto Dorado Miranda y Dominique Rodríguez Organiza: Ser Zanja",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "23 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Red Estudiantil por la Memoria y el Patrimonio - Taller de apropiación social del patrimonio cultural",
    "description": "Taller de apropiación social del patrimonio cultural, enfocado a estudiantes de 9 a 11 grado, con énfasis en proyectos que puedan servir para el cumplimiento de las 80 horas del servicio social obligatorio.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "23 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "En la evolución del turismo cultural, la historia de los barrio extramuros en Cartagena- Taller Cartográfico",
    "description": "Taller cartográfico para reconstruir la historia de los barrios extramurales surgidos junto a las murallas de Cartagena tras la Independencia y su retiro en el siglo XIX, medida que impulsó la consolidación de la ciudad como destino turístico. Un espacio para leer el territorio, reconocer memorias y comprender sus transformaciones urbanas.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "23 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "¿Cómo se gestan herramientas para la educación musical en Colombia?",
    "description": "Este conversatorio abre un diálogo sobre la creación de herramientas para la educación musical en Colombia, a partir de experiencias en la elaboración de guías y cuadernos de ejercicios para trompeta, eufonio y clarinete, publicados el último año, así como de la guía “En clave de PEM”. Procesos impulsados por el Grupo de Música de la Dirección de Artes, orientados a fortalecer la formación y las escuelas de música en el país.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "23 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Consciencia sonora: Taller introductorio sobre particularidades sonoras de lenguas indígenas en Colombia",
    "description": "La lengua es un elemento clave de la cultura. Su pérdida implica el riesgo de desaparecer formas únicas de nombrar el mundo y sonidos poco comunes. Este espacio invita a conocer y reproducir rasgos consonánticos y vocálicos de lenguas indígenas de Colombia, y a reflexionar sobre su papel en la construcción de valores culturales y en la diversidad lingüística del país.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "23 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Instituto Colombiano de Antropología e Historia",
    "title": "Territorialidades indígenas en tensión",
    "description": "Presentación de los hallazgos y conclusiones de las investigaciones que se han llevado a cabo en el ICANH sobre territorialidades indígenas en tensión en diversos territorios del país.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "23 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Disputar el canon de la novela colombiana: cuerpo, memoria y territorio en Zapata Olivella, Burgos Cantor y Espinosa",
    "description": "Lanzamiento del libro Disputar el canon de la novela colombiana, con una charla entre el autor y Catalina Correa. El diálogo abordará cómo Manuel Zapata Olivella, Roberto Burgos Cantor y Germán Espinosa imaginaron el Caribe desde una perspectiva distinta al “boom”, visibilizando miradas y aspectos poco explorados en la literatura del país.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "23 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Defendiendo del territorio desde el cine comunitario",
    "description": "En este conversatorio, integrantes de los colectivos No le saque la piedra a la montaña (Bogotá), Yosokwi (Sierra Nevada de Santa Marta) y El Rostro de mi Pueblo (Curbaradó, Darién) nos contarán cómo a través del cine comunitario se da la defensa, resistencia y apropiación del territorio en el que se encuentran.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "24 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Paisaje Cultural Cafetero para niños",
    "description": "Un taller para enseñar a los niños y niñas la importancia del Paisaje Cultural Cafetero de Colombia a través de material didáctico.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "24 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Conversatorio: Cómo hacer cine comunitario en Colombia",
    "description": "Espacio de intercambio sobre cine comunitario en Colombia. A partir del diálogo entre procesos territoriales y pedagógicos, se abordarán creación colectiva, formación audiovisual, sostenibilidad y el papel del cine en la paz, la memoria y la transformación social. Participan iniciativas como las Escuelas Audiovisuales Comunitarias, la Escuela Audiovisual Infantil de Belén de los Andaquíes y Ojo al Sancocho.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "24 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Bibliotecas comunitarias, populares e itinerantes: tejiendo palabras, territorios y resistencias.",
    "description": "En Colombia, las bibliotecas comunitarias, populares e itinerantes (BICOPOI) tienen una larga trayectoria y múltiples historias. Esta conversación presenta sus apuestas y esfuerzos por construir una red nacional que fortalezca su sostenibilidad, su agencia política y su papel como fuerzas transformadoras en diversos territorios del país.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "24 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Presentación del libro \"Casimiro. Memoria biocultural del barrio El Reposo de Quibdó, Chocó\"",
    "description": "Casimiro, una quebrada del barrio El Reposo en Quibdó, es el centro de un proceso comunitario liderado por jóvenes de “La ruta de los cuidados”, enfocado en su limpieza y recuperación. La publicación Casimiro. Memoria biocultural… recoge voces sobre la memoria del barrio y sus especies. El libro surge junto a la Biblioteca Nacional, en el Plan “Arnoldo Palacios” del Chocó.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "24 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "¿Quieres estudiar la Maestría en Enseñanza de Español como Lengua Extranjera? Descubre qué investigan nuestros estudiantes",
    "description": "Encuentro con los profesores de la maestría y una muestra de clase abierta.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "24 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Club de escucha Gaceta sonora: El club negro de Colombia",
    "description": "Espacio de escucha en torno al pódcast El club negro de Colombia, de Gaceta Sonora, basado en el libro de Rosa Chamorro. Tras un fragmento, dialoga el musicólogo Ángel Perea Escobar sobre memoria y pensamiento afrocolombiano, a partir de figuras como Manuel Zapata Olivella y Delia Zapata Olivella.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "25 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Pijaraña, pijaraña, ilustra los versos la araña",
    "description": "Taller de la serie «leer es mi cuento» con la ilustradora: Gabriela Otálora hablará sobre el proceso de ilustrar un libro de poesía de tradición oral para niños y niñas, a partir de su trabajo en la serie «Leer es mi cuento». Un espacio para acercarse al universo de la ilustración infantil y a las decisiones creativas detrás de las imágenes que acompañan la lectura.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "25 abril 2026",
    "time": "12:30 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Taller y charla: Así se construye un carnaval, oficios, redes y economías de la fiesta de Pasto",
    "description": "Espacio híbrido de charla y taller para comprender el carnaval desde su producción material. Liderado por el Taller Escuela de Carnaval Ruano (Pasto), combina creación de una pieza breve con diálogo sobre oficios, materiales, economías y redes que sostienen la fiesta. Aborda el papel de las mujeres y las formas de vivir el carnaval más allá de la agenda oficial.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "25 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Isabel Carrasquilla y Magda Moreno: contando después de muertas",
    "description": "En Santo Domingo (Antioquia), a finales del siglo XIX, surgió la Sociedad de El Tercer Piso y sus tertulias de lectura. En 2024 se retoma este espacio para leer, investigar y dialogar sobre sus integrantes. La actividad aborda textos de Isabel Carrasquilla y Magda Moreno, con lectura en voz alta y reflexión colectiva sobre su obra y contexto.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "25 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Colombiano de Antropología e Historia",
    "title": "El galeón cabe en una taza",
    "description": "Una cata de chocolate para hablar sobre los cargamentos donde se hallaron tazas de porcelana y restos de cacao, recolectados en 2025 para su estudio. ¿Qué hacían estos objetos en una nave asociada a otros cargamentos? ¿Qué rutas siguieron y qué revelan sobre el comercio en el Caribe? Este encuentro explora estas preguntas y propone una experiencia con aroma y sabor a chocolate para acercarse a esta historia.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "25 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Relata 20 años. dos décadas de formación en escritura creativa.",
    "description": "En esta charla, moderada por Juan Afanador, líder del componente de formación de la Gerencia de Literatura, discuten sobre el estado de la formación en escritura y sus futuros deseables. Charlan Giuseppe Caputo y Tania Ganitsky.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "25 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Presentación de la publicación \"Fundar Cuidado: seis figuras de conservación en territorios de Colombia\"",
    "description": "En alianza con Fondo Acción, la Maestría en Escritura Creativa del Instituto Caro y Cuervo presenta siete cuadernillos sobre protección ambiental y vínculos con ecosistemas del país. Se lanza Fundar cuidado, que recoge experiencias comunitarias en distintas regiones. Resultado de un proyecto de apropiación social del conocimiento en 2025, dirigido al público general.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "25 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Sobre reparación simbólica y práctica artística",
    "description": "Desde 2023, el Grupo de Artes Plásticas y Visuales acompaña procesos de memoria y reparación simbólica con víctimas del Estado, como Madres de Falsos Positivos, buscadoras de La Escombrera y la Comunidad de Paz de San José de Apartadó. Esta conversación aborda estos proyectos y cómo el arte, desde el rol creativo de las víctimas, se convierte en una herramienta de reparación y transformación.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "26 abril 2026",
    "time": "12:30 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Taller experiencial Memorias mayores, prácticas artísticas para la paz",
    "description": "Taller vivencial que presenta el trabajo con personas mayores portadoras de saberes artísticos y culturales. A través de un diálogo intergeneracional con jóvenes, un sabedor tradicional compartirá su experiencia mediante la oralidad, la escucha, la experimentación y la creación. Un espacio para intercambiar conocimientos y disfrutar de las artes en la FILBo.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "26 abril 2026",
    "time": "2:00 p. m.",
    "entity": "AGN",
    "title": "Colombia vista desde los archivos del National Security Archivos donados a la Comisión de la Verdad",
    "description": "Lectura del conflicto armado colombiano a partir de documentos desclasificados de EE. UU. reunidos por el National Security Archive y usados por la Comisión de la Verdad. Se analizan cables, informes y memorandos sobre guerra, paz, narcotráfico y actores armados, en diálogo con archivos y testimonios, para abrir nuevas preguntas sobre memoria e investigación",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "26 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "La traducción de literatura latinoamericana al bengalí Conversación con el escritor Anisuz Zaman (India)",
    "description": "En conversación con Alfonso Carvajal, Anisuz Zaman reflexiona sobre los vínculos entre la literatura colombiana y la India a partir de su trabajo de traducción al bengalí. El diálogo aborda la traducción como lectura profunda y mediación cultural entre distintos contextos lingüísticos.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "26 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Presentación de libro “Mabungú triunfo: poéticas de resistencia afro en María Teresa Ramírez”de Francy Yobanna Morales Acosta",
    "description": "Conversatorio sobre Mabungú triunfo: poéticas de resistencia afro en María Teresa Ramírez, con la autora y dos invitadas. El diálogo abordará la obra de María Teresa Ramírez y su valor en la poesía en palenquero, lengua poco estudiada en Colombia. Un espacio dirigido a público general y a especialistas en literatura y poesía.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "26 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Lanzamiento publicaciones resultado Becas de Estímulos Grupo de Danza",
    "description": "Presentación de publicaciones en danza: Dramaturgias del bailarín en Colombia de Lina Villegas; Cartilla pedagogía en movimiento del Colectivo Sol Femenino del Putumayo; Cartilla raíces en evolución de Andrés José Rincón; y Danzas y expresiones coreográficas de Tunja de Sofía Fonseca.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "26 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Curar como territorio",
    "description": "A partir del 47 Salón Nacional de Artistas – KAUKA, asamblea de mundos posibles, esta conversación aborda la curaduría desde lo territorial como ejercicio de autonomía política, simbólica y cultural. El encuentro funciona como pre-lanzamiento de su línea editorial y catálogo, y propone reflexionar sobre otras formas de construir y narrar el arte desde los territorios.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "27 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Maguaré viaja con nosotros",
    "description": "Taller “Maguaré viaja con nosotros”, dirigido a niñas y niños de 0 a 6 años, que promueve sus derechos culturales mediante experiencias lúdicas y sensoriales. A partir de un mapa de Colombia, se desarrollan actividades de juego, sonido, movimiento y creación colectiva para explorar la diversidad cultural, fortalecer la identidad territorial y fomentar la participación activa.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "27 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Surgir: Memoria de la historia de la lengua de señas colombiana",
    "description": "Conversatorio sobre un texto que narra la historia de la Lengua de Señas Colombiana (LSC), con participación de expertos. Dirigido a la comunidad sorda y al público interesado, propicia el diálogo y el intercambio de saberes. Presenta avances del proyecto “100 años de la educación de las personas sordas en Colombia – Fase II”, centrado en instituciones y colectivos.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "27 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Entre letras y trazos, ¿cómo se recupera el patrimonio cultural?",
    "description": "Entre letras y trazos, este conversatorio de la Biblioteca Nacional de Colombia explora la recuperación del patrimonio bibliográfico y documental. Con la mirada del caricaturista Andrés González, se reflexiona sobre el papel de la caricatura en la historia y la importancia de preservarla. Un espacio para pensar la memoria desde el arte y su proyección hacia el futuro.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "27 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Taller: Radio Consultas. Experimentación radiofónica con el archivo de Radio Sutatenza",
    "description": "Este taller explora, de forma práctica, el método de alfabetización de Radio Sutatenza. A partir de guiones, boletines y cartillas, recrea el curso de Alfabeto de 1962 para analizar sus estrategias. Dirigido a docentes, estudiantes e investigadores, propone un ejercicio sonoro que conecta radio, pedagogía y materiales impresos, y reflexiona sobre su impacto en la educación rural.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "27 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Presentación de libro digital. \"De-volver al San Juan. Memorias y vivencias del Hospital San Juan de Dios\"",
    "description": "Con 461 años, el Hospital Universitario San Juan de Dios es símbolo de cuidado y resistencia en Bogotá. De-volver al San Juan reúne voces de trabajadoras, vecinos y personas vinculadas que sostuvieron su memoria y defendieron su misión. El libro, resultado de un proyecto entre el Instituto Caro y Cuervo y MinCulturas, recoge testimonios que evidencian una resistencia colectiva y persistente.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "27 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Presentación catálogo Metales y Numismáica",
    "description": "Se realizará la presentación del libro, moderada por el equipo del museo, donde se compartirán los detalles de su proceso de creación y su relevancia para la cultura del país.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "27 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Colombia, país de la oralidad",
    "description": "La narración oral, o cuentería, ha sido clave para transmitir conocimientos, valores y memoria colectiva. Esta actividad presenta un balance de documentos sobre esta práctica entre 1990 y 2025, evidenciando su permanencia y aportes a la cultura, el arte y la sociedad. Un espacio para reconocer el valor de la palabra hablada y sus raíces ancestrales.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "28 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Taller: Al pie de los cerros, a la orilla del río",
    "description": "Este taller explora la relación con el lugar que habitamos, desde las costumbres, la vida cotidiana, la comunidad y la memoria. A través de material didáctico sobre el barrio Las Aguas, se reflexiona sobre la importancia de reconocer el territorio como base para la apropiación y construcción del patrimonio local.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "28 abril 2026",
    "time": "11:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Construyamos un hogar para la paz",
    "description": "¿Sabías que la paz también se construye desde lo cotidiano? Este espacio invita a reconocer el hogar y la comunidad como puntos de partida para una sociedad más justa. A través de un material didáctico, crearemos casas y un barrio de papel, donde cada acción elegida aporta a la construcción colectiva de paz desde pequeñas decisiones diarias.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "28 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Presentación de Poemas de superación personal o curso relámpago para ser un traficante de llovizna",
    "description": "Poemas de superación personal o curso relámpago para ser un traficante de llovizna (Literatelia, 2025) reúne 28 poemas que exploran la vida cotidiana desde miradas múltiples atravesadas por lo emocional y lo mediático. Con prólogo de Hugo de Mendoza y edición de Manuel Ceballos, el libro rinde homenaje a Luis Vidales. Presenta: Jorge Valbuena.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "28 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Memoriante: una experiencia para reconocer las memorias sobre la Toma y Retoma del Palacio de Justicia",
    "description": "El Museo de la Independencia Casa del Florero presenta Memoriante, una experiencia educativa para reflexionar sobre la Toma y Retoma del Palacio de Justicia. Invita a acercarse al conflicto desde la escucha y la narración, y a explorar distintas memorias del 6 y 7 de noviembre de 1985 mediante dinámicas pedagógicas que promueven el diálogo y la construcción de relatos colectivos.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "28 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Planes locales de lectura, escritura, oralidad y bibliotecas en el país: apuestas para la vida",
    "description": "Conversatorio con equipos que lideran planes locales de lectura, escritura, oralidad y bibliotecas en distintas regiones del país. Moderado por el PNLEOB, el diálogo abordará cómo estas estrategias se relacionan con el cuidado de la vida, la justicia social y epistémica, y la construcción de paz desde los territorios.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "28 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Lanzamiento de publicaciones con enfoque étnico",
    "description": "Lanzamiento de la cartilla Danzantes de Males: Historia de Kenana y Jeima, que narra la experiencia de dos jóvenes del pueblo Nukak Baká. Un espacio para conocer sus historias y acercarse a las memorias, saberes y expresiones culturales de esta comunidad.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "28 abril 2026",
    "time": "5:00 p. m.",
    "entity": "AGN",
    "title": "Los imperialismo del pasado y el presente",
    "description": "De los imperios coloniales a las potencias actuales, este conversatorio cruza archivos, prensa y memoria para rastrear continuidades de dominación en América y el Caribe. Analiza cómo se justifican hoy las injerencias, qué resistencias han dejado huella y cómo leer el presente con mirada histórica. Un espacio para reconocer patrones, tensiones y abrir preguntas con el público.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "28 abril 2026",
    "time": "6:00 p. m.",
    "entity": "AGN",
    "title": "Lanzamiento de la colección otras colombias Posibles",
    "description": "En alianza con MiCASa, el Archivo General de la Nación presenta nuevos títulos de la colección Otras Colombias Posibles. A los dos libros de 2025 se suman diez más que abordan miradas afro e indígenas, luchas de las mujeres, culturas campesinas, migraciones, economía, ciudad, ambiente, estéticas disidentes y memorias para la paz y la reparación.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "28 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Charla: 50 años después de León de Greiff",
    "description": "Charla sobre la vida y obra de León de Greiff, a 50 años de su muerte. El encuentro aborda sus múltiples facetas como poeta, editor, cuentista, traductor, melómano y hombre de radio, destacando su legado en la literatura y la cultura colombiana.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "29 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Mi territorio es patrimonio - conoce y comparte los patrimonios con el material educativo",
    "description": "Espacio que presenta una herramienta para la sensibilización y apropiación del patrimonio en contextos locales. Invita a reconocer lo propio, lo comunitario y lo colectivo. A través de actividades participativas, se exploran valores emocionales, simbólicos e históricos del patrimonio, fortaleciendo la conexión con los territorios, las memorias y los saberes que nos constituyen.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "29 abril 2026",
    "time": "11:30 a. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Presentación de El sacrilegio",
    "description": "El amor y la violencia atraviesan esta novela histórica sobre una adolescente boliviana que huye con un cura y enfrenta múltiples peripecias en medio de las violencias colombianas. La historia se sitúa en el sur del Tolima, entre la pobreza y la lucha campesina, antes y después del asesinato de Jorge Eliécer Gaitán.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "29 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Lanzamiento Fugas de Tinta No. 18",
    "description": "En este espacio, Cristian Valencia conversa con personas privadas de la libertad que han encontrado en la escritura creativa nuevas formas de expresión. Incluye el lanzamiento del más reciente volumen de Fugas de Tinta, en alianza con el INPEC.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "29 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Conversatorio. Promoción de lectura y crítica literaria desde clubes de lectura afrocentrados",
    "description": "Los clubes de lectura son espacios clave del ecosistema cultural. Este conversatorio explora experiencias que van más allá de la difusión: el colectivo Kutusoma, con enfoque afrocentrado, y Entre Nosotras, dedicado a autoras racializadas. A través del diálogo con sus directoras, se conocerán sus dinámicas y su papel en la educación y la difusión cultural con enfoque equitativo.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "29 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "La causa criminal contra Rafael Larrañaga y el judío Barchillona. El genocidio cauchero más allá de La Vorágine",
    "description": "Presentación de un libro sobre la causa criminal contra el pastuso Rafael Larrañaga y el judío Isaac Jacobo Barchillona, personajes retratados por José Eustasio Rivera. El texto aborda un proceso histórico inédito que permite conocer una faceta oscura del país y el contexto que dio origen a La Vorágine.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "29 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Maestrías ICC | Escuchamos tus preguntas",
    "description": "Encuentro con los profesores de la maestría y una muestra de clase abierta.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "29 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Investigar el títere, imaginar un arte del objeto",
    "description": "El arte titiritero es un sistema vivo de transmisión cultural que ha perdurado por la oralidad, la experiencia y la resistencia comunitaria. Su marginalidad ha impulsado lenguajes y pedagogías propias, donde música, voz y sonido son centrales. Ante una memoria fragmentada y en riesgo, se destaca la importancia de documentar y fortalecer espacios como la FIATO para su proyección.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "30 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Relatos polifónicos de país",
    "description": "Mesa de radio en vivo sobre nuevas publicaciones de la DACMI, en el marco de la Red de Comunicación para la Vida. Libros como Relatos polifónicos de país y Pautas para el trabajo audiovisual con pueblos indígenas serán el punto de partida para un diálogo entre autores y público sobre diversidad cultural, comunicación y creación en Colombia.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "30 abril 2026",
    "time": "11:30 a. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Del aguacate al zopilote: taller para buscar y compartir las palabras nativas de nuestro continente",
    "description": "Clarisa Ruiz escribió un libro en el que las palabras son los personajes principales y, en esta entrega de la serie «Leer es mi cuento» recoge palabras que son muy propias de nuestra lengua (incluso cuando vienen de otros idiomas) para dotarlas de nuevos sentidos, los cuales dialogan a la perfección con las ilustraciones de Juan Camilo Mayorga",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "30 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "El ensayo narrativo en la disrupción del contenido: Presentación de La soberanía y el cuerpo: dialéctica de la resistencia.",
    "description": "La soberanía y el cuerpo: dialéctica de la resistencia se inscribe en el ensayo narrativo. No busca trama ni clímax, sino indagar, desde la memoria y la experiencia, en escenas que piensan el mundo. Propone la literatura como forma de conocimiento y reflexión, y se distancia de tendencias que privilegian el exceso, el adorno y las moralejas de consuelo en el arte contemporáneo.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "30 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Colombiano de Antropología e Historia",
    "title": "Pirámides prehispánicas en Popayán",
    "description": "Se presentarán los resultados de la investigación “Caracterización del conjunto de pirámides prehispánicas en Popayán” de Víctor González, que analiza su ubicación, tipologías, estado de conservación y valor patrimonial. El estudio aporta nuevas lecturas sobre estos vestigios arqueológicos, su relación con el territorio, sus usos históricos y su importancia para la memoria y la comprensión de las sociedades que habitaron la región.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "30 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "El Réquiem del Silencio y Don Guillermo: dos publicaciones para escuchar la voz de las víctimas en el marco del centenario de Guillermo Cano.",
    "description": "Conversatorio con Lizeth Acosta, Diego Pérez y Johanna Calderón sobre dos publicaciones de la BNC: la colección Don Guillermo y el Réquiem del Silencio Op. 143 de Blas Emilio Atehortúa. El diálogo abordará sus procesos editoriales y su aporte a la memoria cultural del país.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "30 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "El circo investiga",
    "description": "Panel de discusión entre ganadorxs de las becas de investigación en circo entre 2023 y 2025.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "30 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Relatos polifónicos de país",
    "description": "Mesa de radio en vivo sobre nuevas publicaciones de la DACMI en la Red de Comunicación para la Vida. Libros como Relatos polifónicos de país y Pautas y recomendaciones para el trabajo audiovisual y cinematográfico con pueblos indígenas serán el punto de partida para un diálogo abierto entre autores y público sobre la diversidad cultural, la comunicación y las formas de creación en Colombia.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "30 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Lanzamiento del libro \"Rescate tipográfico. Perspectivas y experiencias de investigación en el suroccidente colombiano\"",
    "description": "El evento ofrece una mirada actual de la tipografía en Colombia desde el Laboratorio Entre Plomos de la Universidad del Cauca y el trabajo de rescate patrimonial de La Linterna y el Taller Escuela de Artes Gráficas en Cali. Un espacio para que público y diseñadores conozcan la impresión tipográfica artesanal y las iniciativas que buscan mantenerla vigente.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "1 mayo 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "ZOOM AL PÚBLICO",
    "description": "Taller creativo para socializar los resultados del Estudio de Públicos de Cine Colombiano 2025. Propone un espacio de mediación audiovisual que acerca esta investigación del FDC y la DACMI (2024–2025). Desde la pedagogía artística, introduce hallazgos clave y fomenta la reflexión sobre la creación audiovisual en diálogo con las demandas, deseos y motivaciones de los públicos.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "1 mayo 2026",
    "time": "12:30 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Conversatorio entre talentos de la cinematografía nacional en torno a películas colombiana",
    "description": "Este evento tiene como objetivo la promoción del cine colombiano en el marco de la campaña El Cine Colombiano ¡Nos Late! - nuestrocine.co",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "1 mayo 2026",
    "time": "2:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "La formación artística como política pública en el ámbito nacional e internacional",
    "description": "Conversatorio entre expertos de políticas públicas del sector artístico y cultural.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "1 mayo 2026",
    "time": "3:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Artes para la paz: Ecosistemas de formación Artística",
    "description": "Conversatorio entre líderes de procesos de formación artística y cultural en ámbitos escolares y comunitarios. El diálogo aborda experiencias, retos y aportes a la consolidación de ecosistemas artísticos en los territorios, destacando el papel de la educación y la creación en el fortalecimiento cultural y la participación.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "1 mayo 2026",
    "time": "4:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Lanzamiento del libro: Testamento goliardo, de Helcías Martán Góngora",
    "description": "Esta antología hace parte de la colección Posteris Lvmen de la Universidad del Cauca, que publicará 100 libros de autores caucanos para conmemorar su centenario. Es resultado de un proyecto investigativo desarrollado en alianza con el Instituto Caro y Cuervo.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "1 mayo 2026",
    "time": "5:00 p. m.",
    "entity": "AGN",
    "title": "Las memorias incómodas de la migración en Colombia",
    "description": "Mirada histórica a la migración “indeseada” en Colombia: sirio-libaneses, chinos, “comunistas” y otros grupos señalados como amenaza. Desde el siglo XIX se revisan leyes, expedientes y prensa para entender la construcción de prejuicios y controles. También se explora cómo estas comunidades resistieron, se asentaron y transformaron el país, y qué preguntas abre hoy ese archivo sobre ciudadanía y derechos.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "1 mayo 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Lectura en voz alta: Mujeres y poesía contemporánea",
    "description": "El Ministerio de las Culturas presenta una colección de poesía con cuatro cuadernillos que reúnen a 45 poetas colombianas en distintos momentos de su trayectoria. Sus voces exploran temas como ciencia ficción, erotismo y lo fantástico, ampliando el panorama de la poesía escrita por mujeres. El lanzamiento incluye lectura en voz alta y presentación de la compiladora Camila Charry.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "1 mayo 2026",
    "time": "7:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Presentación del libro: Vocabulario tipográfico",
    "description": "El “Vocabulario tipográfico” del Instituto Caro y Cuervo da a conocer la terminología de la impresión tipográfica, un oficio que aún se preserva en la Imprenta Patriótica. Esta edición, basada en la guía de Juan José Morato Caldeiro, fue compuesta en linotipia e impresa en máquinas tipográficas, destacando su carácter artesanal y su vínculo con la tradición de la imprenta.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "2 mayo 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Red Estudiantil por la Memoria y el Patrimonio - Taller de apropiación social del patrimonio cultural",
    "description": "Taller de apropiación social del patrimonio cultural dirigido a estudiantes de grados 9° a 11°. Se enfoca en el diseño de proyectos que aporten al cumplimiento de las 80 horas de servicio social obligatorio, promoviendo el reconocimiento, la valoración y la participación activa en la protección del patrimonio cultural.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "2 mayo 2026",
    "time": "1:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Taller sobre la tipografía de Yerbabuena del Instituto Caro y Cuervo",
    "description": "Los participantes conocerán, de la voz de uno de sus creadores, el proceso de diseño de la tipografía de la estrategia “Colombia, casa común”. El espacio abordará decisiones estéticas, conceptuales y técnicas, y permitirá comprender cómo la tipografía contribuye a construir identidad visual y comunicar una apuesta cultural.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "2 mayo 2026",
    "time": "2:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Lanzamiento Antología Relata 2025",
    "description": "En este espacio, Johana Marcela Rozo charla con dos autores de la Antología Relata 2025.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "2 mayo 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Colombiano de Antropología e Historia",
    "title": "El galeón San Jose a futuro. ¿Cómo conservarlo?",
    "description": "El naufragio del galeón San José plantea un dilema: ¿conservar sus restos en el fondo del mar o extraerlos? Este evento, con sustento científico, aborda las implicaciones de ambas opciones y busca ofrecer elementos para comprender un debate vigente a nivel global sobre patrimonio, conservación y memoria.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "2 mayo 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "El futuro está lleno de deseo. 20 años de Relata",
    "description": "Encuentro teórico-práctico para explorar el deseo como motor de futuros posibles para Relata. A partir de poesía y literatura especulativa, se reflexiona sobre imaginación, fantasía y cuerpo en la construcción de espacios colectivos de lectura y escritura. Dirigido por Alejo Morales y Paula Castillo.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "2 mayo 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Presentación del libro: El oro no flota",
    "description": "Presentación del libro El oro no flota. A partir del galeón San José, el encuentro propone mirar más allá del “tesoro sumergido” y acercarse, desde la imaginación, a lo que permanece en el fondo del mar. Con Andrés Ospina y Diego Bohórquez, se exploran cruces entre historia, literatura e ilustración para recrear y reinventar el pasado.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "2 mayo 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Pedagogías que caminan - sobre autonomías pedagógicas y escuelas territoriales",
    "description": "Conversación sobre los giros pedagógicos en Artes Plásticas y Visuales desde la Escuela Itinerante de APV, que propone modelos horizontales, colectivos y situados para la formación artística. El encuentro incluye el lanzamiento de sus publicaciones 2024 y 2025 y reflexiona sobre nuevas formas de construir escuela desde los territorios.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "3 mayo 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "A de aerolito: leer con los sentidos",
    "description": "Taller multisensorial para explorar formas de leer y comunicarnos. A partir del aerolito, pieza del Museo Nacional, se invita a descubrir la letra A en distintos sistemas: braille, Lengua de Señas Colombiana y sistema alfanumérico. Un espacio para reconocer la diversidad de lenguajes y promover la inclusión a través de experiencias sensoriales.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "3 mayo 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Lanzamiento de la Biblioteca Rafael Gutiérrez Girardot (Capítulo Colombia). Tomo I. Poesía colombiana. Ensayos críticos",
    "description": "Conversatorio sobre el proyecto Biblioteca Rafael Gutiérrez (Capítulo Colombia), investigación que reúne la obra de Rafael Gutiérrez Girardot. Liderado por el GELCIL de la Universidad de Antioquia y el Instituto Caro y Cuervo, presenta el primer tomo de una colección de 11 volúmenes, que recoge su mirada crítica sobre la poesía y el pensamiento en su tiempo.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "3 mayo 2026",
    "time": "4:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Voces vivas Presentación del primer repositorio de lenguas nativas de Colombia",
    "description": "Presentación del primer repositorio de lenguas nativas de Colombia, desarrollado por comunidades indígenas y el Instituto Caro y Cuervo. El proyecto documenta 15 lenguas y reúne memorias lingüísticas y culturales. En la sesión se compartirá su proceso de creación y los contenidos disponibles, invitando a explorar la diversidad lingüística del país.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "4 mayo 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Taller: Historias en capas, color en juego - El legado de Beatriz González",
    "description": "A través de un juego creativo con imágenes de la Independencia y la exploración del color, este taller propone un acercamiento a la obra de Beatriz González. Los participantes experimentarán con la apropiación y transformación de imágenes para comprender cómo el arte resignifica el pasado y lo conecta con la vida cotidiana.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "4 mayo 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Lanzamiento de un nuevo título de la Biblioteca Común \"El trabajo de Waldina Dávila de Ponce\"",
    "description": "La Biblioteca Común presenta el segundo título de su colección, dedicado a Waldina Dávila. El evento dará a conocer a esta autora del siglo XIX y destacará su pensamiento crítico sobre las consecuencias de la guerra en el ámbito familiar, invitando a redescubrir su obra y su lugar en la literatura colombiana.",
    "location": "Auditorio estand: Colombia, casa común"
  },
  {
    "date": "4 mayo 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Del taller a la publicación: presentación de Corazón de lava de Paula Alejandra Rojas",
    "description": "Corazón de lava reúne ocho cuentos sobre niñas y adolescentes que, en su tránsito a la adultez, enfrentan su lado oculto. Finalista de premios nacionales, el libro surge del trabajo del Taller Lispector. En este espacio, su autora conversa con Natalia Guzmán y Dayro Martínez sobre procesos de lectura y edición colectiva.",
    "location": "Auditorio estand: Colombia, casa común"
  }
]
</script>

    <script>
        (() => {
            const body = document.body;
            const increaseButton = document.getElementById('font-increase');
            const decreaseButton = document.getElementById('font-decrease');
            const resetButton = document.getElementById('font-reset');
            const contrastButton = document.getElementById('contrast-toggle');
            let fontScale = 1;

            const syncScale = () => {
                body.style.setProperty('--font-scale', fontScale.toFixed(2));
            };

            const syncAccessibilityUI = () => {
                const canDecrease = fontScale > 0.9;
                const canIncrease = fontScale < 1.3;
                const isDefaultScale = Math.abs(fontScale - 1) < 0.01;
                const highContrastActive = body.classList.contains('is-high-contrast');

                if (decreaseButton) decreaseButton.disabled = !canDecrease;
                if (increaseButton) increaseButton.disabled = !canIncrease;
                if (resetButton) resetButton.classList.toggle('is-active', isDefaultScale);

                if (contrastButton) {
                    contrastButton.classList.toggle('is-active', highContrastActive);
                    contrastButton.setAttribute('aria-pressed', highContrastActive ? 'true' : 'false');
                }
            };

            increaseButton?.addEventListener('click', () => {
                fontScale = Math.min(1.3, fontScale + 0.1);
                syncScale();
                syncAccessibilityUI();
            });

            decreaseButton?.addEventListener('click', () => {
                fontScale = Math.max(0.9, fontScale - 0.1);
                syncScale();
                syncAccessibilityUI();
            });

            resetButton?.addEventListener('click', () => {
                fontScale = 1;
                syncScale();
                syncAccessibilityUI();
            });

            contrastButton?.addEventListener('click', () => {
                body.classList.toggle('is-high-contrast');
                syncAccessibilityUI();
            });

            syncScale();
            syncAccessibilityUI();
        })();

        (() => {
            const carousel = document.querySelector('[data-roof-carousel]');
            const slides = Array.from(document.querySelectorAll('[data-roof-slide]'));
            const dots = Array.from(document.querySelectorAll('.roof-dot'));
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            let currentSlide = 0;
            let rotationId = null;

            if (!carousel || slides.length < 2 || dots.length !== slides.length) return;

            const activateSlide = (index) => {
                currentSlide = (index + slides.length) % slides.length;

                slides.forEach((slide, slideIndex) => {
                    const active = slideIndex === currentSlide;
                    slide.classList.toggle('is-active', active);
                    slide.setAttribute('aria-hidden', active ? 'false' : 'true');
                });

                dots.forEach((dot, dotIndex) => {
                    dot.setAttribute('aria-selected', dotIndex === currentSlide ? 'true' : 'false');
                });
            };

            const stopRotation = () => {
                if (!rotationId) return;
                window.clearInterval(rotationId);
                rotationId = null;
            };

            const startRotation = () => {
                if (prefersReducedMotion) return;
                stopRotation();
                rotationId = window.setInterval(() => activateSlide(currentSlide + 1), 4600);
            };

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    activateSlide(index);
                    startRotation();
                });
            });

            carousel.addEventListener('mouseenter', stopRotation);
            carousel.addEventListener('mouseleave', startRotation);

            activateSlide(0);
            startRotation();
        })();

        (() => {
            const mainContent = document.getElementById('contenido-principal');
            const openProgramButton = document.querySelector('[data-open-program-modal]');
            const carousel = document.querySelector('[data-roof-carousel]');
            const modal = document.getElementById('filbo-program-modal');
            const modalPanel = modal?.querySelector('.program-modal-panel');
            const modalCloseButtons = Array.from(document.querySelectorAll('[data-close-program-modal]'));
            const programList = document.getElementById('filbo-program-list');
            let lastProgramTrigger = null;
            let previousBodyOverflow = '';
            const inertTargets = mainContent ? Array.from(mainContent.children).filter((element) => element !== modal) :
                [];
            let scheduleLoaded = false;

            if (!openProgramButton || !modal || !modalPanel) return;

            const slugify = (value) => (value || '')
                .toString()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/^-+|-+$/g, '') || 'fecha';

            const renderSchedule = (items) => {
                if (!programList) return;
                programList.innerHTML = '';

                if (!Array.isArray(items) || !items.length) {
                    const empty = document.createElement('p');
                    empty.className = 'program-modal-copy';
                    empty.textContent = 'No hay programación disponible en este momento.';
                    programList.append(empty);
                    return;
                }

                const groups = items.reduce((map, item) => {
                    const key = item.date || 'Sin fecha';
                    if (!map.has(key)) map.set(key, []);
                    map.get(key).push(item);
                    return map;
                }, new Map());

                groups.forEach((events, date) => {
                    const section = document.createElement('section');
                    const sectionId = `program-day-${slugify(date)}`;
                    section.className = 'program-modal-day';
                    section.setAttribute('aria-labelledby', sectionId);

                    const heading = document.createElement('h3');
                    heading.className = 'program-modal-day-title';
                    heading.id = sectionId;
                    heading.textContent = date;

                    section.append(heading);

                    events.forEach((event) => {
                        const article = document.createElement('article');
                        article.className = 'program-modal-item';

                        const meta = document.createElement('div');
                        meta.className = 'program-modal-meta';
                        meta.innerHTML =
                            `<span>${event.time || ''}</span><span>${event.entity || ''}</span>`;

                        const title = document.createElement('h4');
                        title.textContent = event.title || 'Actividad';

                        const description = document.createElement('p');
                        description.textContent = event.description || '';

                        article.append(meta, title, description);
                        section.append(article);
                    });

                    programList.append(section);
                });
            };

            const ensureScheduleLoaded = async () => {
                if (scheduleLoaded) return;
                try {
                    const dataNode = document.getElementById('filbo-schedule-data');
                    if (!dataNode) throw new Error('missing embedded schedule data');
                    const data = JSON.parse(dataNode.textContent || '[]');
                    renderSchedule(data);
                } catch (error) {
                    renderSchedule([]);
                } finally {
                    scheduleLoaded = true;
                }
            };

            const getFocusableModalItems = () => {
                return Array.from(modalPanel.querySelectorAll(
                        'button,[href],input,select,textarea,[tabindex]:not([tabindex="-1"])'))
                    .filter((element) => !element.hasAttribute('disabled') && !element.getAttribute('aria-hidden'));
            };

            const focusFirstModalElement = () => {
                const focusableItems = getFocusableModalItems();
                (focusableItems[0] || modalPanel).focus();
            };

            const openProgramModal = async () => {
                lastProgramTrigger = document.activeElement instanceof HTMLElement ? document.activeElement :
                    openProgramButton;
                modal.hidden = false;
                inertTargets.forEach((element) => element.setAttribute('inert', ''));
                carousel?.classList.add('is-modal-open');
                previousBodyOverflow = document.body.style.overflow;
                document.body.style.overflow = 'hidden';
                await ensureScheduleLoaded();
                window.requestAnimationFrame(() => focusFirstModalElement());
            };

            const closeProgramModal = () => {
                modal.hidden = true;
                inertTargets.forEach((element) => element.removeAttribute('inert'));
                carousel?.classList.remove('is-modal-open');
                document.body.style.overflow = previousBodyOverflow;
                (lastProgramTrigger || openProgramButton).focus();
            };

            openProgramButton.addEventListener('click', openProgramModal);
            modalCloseButtons.forEach((button) => button.addEventListener('click', closeProgramModal));
            modal.addEventListener('click', (event) => {
                if (modal.hidden || !modalPanel) return;
                if (modalPanel.contains(event.target)) return;
                closeProgramModal();
            });

            modal.addEventListener('keydown', (event) => {
                if (modal.hidden) return;

                if (event.key === 'Escape') {
                    event.preventDefault();
                    closeProgramModal();
                    return;
                }

                if (event.key !== 'Tab') return;

                const focusableItems = getFocusableModalItems();
                if (!focusableItems.length) {
                    event.preventDefault();
                    modalPanel?.focus();
                    return;
                }

                const firstItem = focusableItems[0];
                const lastItem = focusableItems[focusableItems.length - 1];

                if (event.shiftKey && document.activeElement === firstItem) {
                    event.preventDefault();
                    lastItem.focus();
                } else if (!event.shiftKey && document.activeElement === lastItem) {
                    event.preventDefault();
                    firstItem.focus();
                }
            });

            document.addEventListener('focusin', (event) => {
                if (modal.hidden) return;
                if (modal.contains(event.target)) return;
                event.stopPropagation();
                focusFirstModalElement();
            });
        })();

        (() => {
            const carousel = document.querySelector('[data-memory-carousel]');
            const slides = Array.from(document.querySelectorAll('[data-memory-slide]'));
            const dots = Array.from(document.querySelectorAll('.memory-carousel-dot'));
            const previousButton = document.querySelector('[data-memory-prev]');
            const nextButton = document.querySelector('[data-memory-next]');
            const toggleButton = document.querySelector('[data-memory-toggle]');
            const status = document.querySelector('[data-memory-status]');
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            let currentSlide = 0;
            let rotationId = null;
            let isPaused = prefersReducedMotion;

            if (!carousel || slides.length < 2 || dots.length !== slides.length) return;

            const activateSlide = (index) => {
                currentSlide = (index + slides.length) % slides.length;

                slides.forEach((slide, slideIndex) => {
                    const active = slideIndex === currentSlide;
                    slide.classList.toggle('is-active', active);
                    slide.setAttribute('aria-hidden', active ? 'false' : 'true');
                });

                dots.forEach((dot, dotIndex) => {
                    dot.setAttribute('aria-selected', dotIndex === currentSlide ? 'true' : 'false');
                });

                if (status) {
                    status.textContent = `Memoria ${currentSlide + 1} de ${slides.length}`;
                }
            };

            const stopRotation = () => {
                if (!rotationId) return;
                window.clearInterval(rotationId);
                rotationId = null;
            };

            const syncToggle = () => {
                if (!toggleButton) return;
                toggleButton.textContent = isPaused ? '▶' : '❚❚';
                toggleButton.setAttribute('aria-label', isPaused ? 'Reanudar carrusel' : 'Pausar carrusel');
                toggleButton.setAttribute('aria-pressed', isPaused ? 'true' : 'false');
            };

            const startRotation = () => {
                if (prefersReducedMotion || isPaused) return;
                stopRotation();
                rotationId = window.setInterval(() => activateSlide(currentSlide + 1), 5200);
            };

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    activateSlide(index);
                    startRotation();
                });
            });

            previousButton?.addEventListener('click', () => {
                activateSlide(currentSlide - 1);
                startRotation();
            });

            nextButton?.addEventListener('click', () => {
                activateSlide(currentSlide + 1);
                startRotation();
            });

            toggleButton?.addEventListener('click', () => {
                isPaused = !isPaused;
                syncToggle();
                if (isPaused) stopRotation();
                else startRotation();
            });

            carousel.addEventListener('mouseenter', stopRotation);
            carousel.addEventListener('mouseleave', startRotation);
            carousel.addEventListener('focusin', stopRotation);
            carousel.addEventListener('focusout', (event) => {
                if (carousel.contains(event.relatedTarget)) return;
                startRotation();
            });

            activateSlide(0);
            syncToggle();
            startRotation();
        })();

        (() => {
            const ASSET_BASE = 'https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/';
            const THEME_ICONS = [
                `${ASSET_BASE}icon-lips.png`,
                `${ASSET_BASE}icon-face.png`,
                `${ASSET_BASE}icon-dialogue.png`,
                `${ASSET_BASE}icon-dove.png`,
                `${ASSET_BASE}icon-hands.png`,
                `${ASSET_BASE}icon-hand.png`,
                `${ASSET_BASE}icon-house.png`,
            ];
            const tabsRoot = document.getElementById('themes-tablist');
            const board = document.querySelector('.board');
            const panel = document.getElementById('temas-panel');
            const title = document.getElementById('themes-panel-title');
            const lead = document.getElementById('themes-panel-lead');
            const copy = document.getElementById('themes-panel-copy');
            const types = document.getElementById('themes-panel-types');
            const keywords = document.getElementById('themes-panel-keywords');
            const resultsCount = document.getElementById('themes-results-count');
            const searchInput = document.getElementById('themes-search');
            const emptyState = document.getElementById('themes-empty');
            const grid = document.getElementById('themes-catalog-grid');
            const catalogLayout = document.querySelector('.catalog-layout');
            const sidebarToggle = document.getElementById('catalog-sidebar-toggle');
            const sidebarBackdrop = document.getElementById('catalog-sidebar-backdrop');
            const sidebar = document.getElementById('catalog-tools-sidebar');
            const sidebarClose = document.getElementById('catalog-sidebar-close');
            const sidebarAccept = document.getElementById('catalog-sidebar-accept');
            const activeFiltersLabel = document.getElementById('catalog-active-filters');
            const filtersToggleCount = document.getElementById('catalog-filters-toggle-count');
            const clearFiltersButton = document.getElementById('catalog-clear-filters');
            const typeOptions = document.getElementById('filter-type-options');
            const typeCount = document.getElementById('filter-type-count');
            const typeEmpty = document.getElementById('filter-type-empty');
            const responsableOptions = document.getElementById('filter-responsable-options');
            const responsableCount = document.getElementById('filter-responsable-count');
            const keywordInput = document.getElementById('filter-keyword-input');
            const keywordSuggestions = document.getElementById('filter-keyword-suggestions');
            const keywordSelected = document.getElementById('filter-keyword-selected');
            const keywordCount = document.getElementById('filter-keyword-count');
            const keywordEmpty = document.getElementById('filter-keyword-empty');
            const keywordClear = document.getElementById('filter-keyword-clear');
            let tabs = [];
            let cards = [];
            let activeTooltipCard = null;
            let lastSidebarTrigger = null;

            if (!tabsRoot || !panel || !title || !lead || !copy || !resultsCount || !searchInput || !grid) return;

            const normalizeText = (value) => (value || '')
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .replace(/\s+/g, ' ')
                .trim();

            let activeTheme = tabs.find((tab) => tab.getAttribute('aria-selected') === 'true')?.dataset.theme || '';
            const activeSelections = {
                type: new Set(),
                responsable: '',
                keyword: new Set(),
            };
            let themeMaps = {
                type: new Map(),
                responsable: new Map(),
                keyword: new Map(),
            };

            const renderCatalogCard = (item) => {
                const article = document.createElement('article');
                article.className = 'topic-card topic-card-catalog';
                article.dataset.theme = item.theme_slug;
                article.dataset.search = item.search_text || '';
                article.dataset.typeValue = item.type || 'Contenido';
                article.dataset.responsable = item.responsable || '';
                article.dataset.keywords = (item.keywords || []).join('||');

                const tooltipId = `tooltip-${item.id}`;
                const shortDescription = (item.description || '').replace(/\s+/g, ' ').trim().slice(0, 170);
                const preview = shortDescription.length < (item.description || '').replace(/\s+/g, ' ').trim()
                    .length ? `${shortDescription}...` : shortDescription;
                const keywordTags = (item.keywords || []).slice(0, 4).map((keyword) => `<span>${keyword}</span>`)
                    .join('');
                const linkActions = [
                    item.link ?
                    `<a class="tooltip-link" href="${item.link}" target="_blank" rel="noreferrer">Ver recurso</a>` :
                    '',
                    item.asset_link ?
                    `<a class="tooltip-link" href="${item.asset_link}" target="_blank" rel="noreferrer">Abrir pieza</a>` :
                    '',
                ].join('');

                article.innerHTML = `
                    <div class="topic-card-head">
                        <span class="topic-type">${item.type || 'Contenido'}</span>
                    </div>
                    <h3>${item.title || ''}</h3>
                    <p>${preview}</p>
                    <div class="topic-meta-line">${item.responsable || ''}</div>
                    <button class="topic-link tooltip-toggle" type="button" aria-expanded="false" aria-controls="${tooltipId}" aria-haspopup="dialog">Ver detalle</button>
                    <div class="catalog-tooltip" id="${tooltipId}" role="dialog" aria-modal="false" aria-label="Detalle de ${item.title || ''}" tabindex="-1">
                        <div class="tooltip-head">
                            <div><p class="tooltip-theme">${item.theme || ''}</p></div>
                            <button class="tooltip-close" type="button" aria-label="Cerrar detalle">×</button>
                        </div>
                        <p class="tooltip-description">${item.description || ''}</p>
                        <div class="tooltip-cluster">
                            ${keywordTags ? `<div class="tooltip-group"><span class="tooltip-label">Claves de lectura</span><div class="tooltip-tags">${keywordTags}</div></div>` : ''}
                            ${item.responsable ? `<div class="tooltip-group tooltip-detail-list"><span class="tooltip-label">Responsable</span><p>${item.responsable}</p></div>` : ''}
                            ${linkActions ? `<div class="tooltip-group"><span class="tooltip-label">Acceso</span><div class="tooltip-actions">${linkActions}</div></div>` : ''}
                        </div>
                    </div>
                `;

                return article;
            };

            const bindTooltipEvents = () => {
                const tooltipButtons = Array.from(document.querySelectorAll('.tooltip-toggle'));
                const tooltipCloseButtons = Array.from(document.querySelectorAll('.tooltip-close'));

                tooltipButtons.forEach((button) => {
                    button.addEventListener('click', () => {
                        const card = button.closest('.topic-card');
                        const willOpen = !card.classList.contains('is-tooltip-open');
                        const tooltip = card?.querySelector('.catalog-tooltip');

                        closeAllTooltips(card);
                        card.classList.toggle('is-tooltip-open', willOpen);
                        button.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
                        activeTooltipCard = willOpen ? card : null;
                        if (willOpen) {
                            positionTooltip(card);
                            window.requestAnimationFrame(() => tooltip?.focus());
                        }
                    });
                });

                tooltipCloseButtons.forEach((button) => {
                    button.addEventListener('click', () => {
                        const card = button.closest('.topic-card');
                        const toggle = card?.querySelector('.tooltip-toggle');
                        closeTooltip(card);
                        toggle?.focus();
                    });
                });

                cards.forEach((card) => {
                    card.addEventListener('focusout', (event) => {
                        if (card.contains(event.relatedTarget)) return;
                        closeTooltip(card);
                    });
                });
            };

            const syncThemeAccent = (tab) => {
                if (!tab || !panel) return;
                const chipColor = window.getComputedStyle(tab).backgroundColor;
                if (board) board.style.setProperty('--theme-chip-color', chipColor);
                panel.style.setProperty('--theme-chip-color', chipColor);
            };

            const renderThemeKeywords = (value) => {
                if (!keywords) return;

                const values = (value || '')
                    .split('||')
                    .map((item) => item.trim())
                    .filter(Boolean);

                keywords.innerHTML = '';

                if (!values.length) {
                    keywords.hidden = true;
                    return;
                }

                keywords.hidden = false;

                const label = document.createElement('span');
                label.className = 'catalog-keywords-label';
                label.textContent = 'Claves de lectura';

                const list = document.createElement('div');
                list.className = 'catalog-keywords-list';

                values.forEach((item) => {
                    const chip = document.createElement('span');
                    chip.textContent = item;
                    list.append(chip);
                });

                keywords.append(label, list);
            };

            const resetFilterInputs = () => {
                if (keywordInput) keywordInput.value = '';
            };

            const getSelectedFilterLabels = () => {
                const labels = [];

                Array.from(activeSelections.type)
                    .map((value) => Array.from(themeMaps.type.keys()).find((item) => normalizeText(item) ===
                        value) || value)
                    .sort((a, b) => a.localeCompare(b, 'es'))
                    .forEach((label) => labels.push(`Tipo: ${label}`));

                if (activeSelections.responsable) {
                    const responsableLabel = Array.from(themeMaps.responsable.keys()).find((item) => normalizeText(
                        item) === activeSelections.responsable) || activeSelections.responsable;
                    labels.push(`Responsable: ${responsableLabel}`);
                }

                Array.from(activeSelections.keyword)
                    .map((value) => Array.from(themeMaps.keyword.keys()).find((item) => normalizeText(item) ===
                        value) || value)
                    .sort((a, b) => a.localeCompare(b, 'es'))
                    .forEach((label) => labels.push(`Palabra clave: ${label}`));

                return labels;
            };

            const updateActiveFilterState = () => {
                const selectedCount = activeSelections.type.size + activeSelections.keyword.size + (activeSelections
                    .responsable ? 1 : 0);

                if (activeFiltersLabel) {
                    activeFiltersLabel.innerHTML = '';

                    if (!selectedCount) {
                        const placeholder = document.createElement('span');
                        placeholder.className = 'catalog-filter-placeholder';
                        placeholder.textContent = 'Sin filtros adicionales activos.';
                        activeFiltersLabel.append(placeholder);
                    } else {
                        getSelectedFilterLabels().forEach((label) => {
                            const chip = document.createElement('span');
                            chip.className = 'catalog-filter-chip';
                            chip.textContent = label;
                            activeFiltersLabel.append(chip);
                        });
                    }
                }

                if (filtersToggleCount) {
                    filtersToggleCount.textContent = selectedCount;
                }

                if (clearFiltersButton) {
                    clearFiltersButton.hidden = selectedCount === 0;
                }
            };

            const syncSidebarToggle = () => {
                if (!catalogLayout || !sidebarToggle) return;

                const expanded = catalogLayout.classList.contains('is-sidebar-open');
                sidebarToggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
                sidebarToggle.textContent = expanded ? 'Ocultar filtros' : 'Mostrar filtros';
                if (sidebarBackdrop) sidebarBackdrop.hidden = !expanded;
                if (sidebar) sidebar.setAttribute('aria-hidden', expanded ? 'false' : 'true');
                document.body.style.overflow = expanded ? 'hidden' : '';
            };

            const openSidebar = () => {
                if (!catalogLayout) return;
                catalogLayout.classList.add('is-sidebar-open');
                syncSidebarToggle();
                window.requestAnimationFrame(() => {
                    (keywordInput || sidebarClose || sidebar)?.focus();
                });
            };

            const closeSidebar = () => {
                if (!catalogLayout) return;
                catalogLayout.classList.remove('is-sidebar-open');
                syncSidebarToggle();
                lastSidebarTrigger?.focus();
            };

            const getThemeMaps = () => {
                const themeCards = cards.filter((card) => card.dataset.theme === activeTheme);
                const optionMaps = {
                    type: new Map(),
                    responsable: new Map(),
                    keyword: new Map(),
                };

                themeCards.forEach((card) => {
                    const typeLabel = (card.dataset.typeValue || '').trim();
                    const responsableLabel = (card.dataset.responsable || '').trim();
                    const keywordValues = (card.dataset.keywords || '').split('||').map((value) => value
                        .trim()).filter(Boolean);

                    if (typeLabel) optionMaps.type.set(typeLabel, (optionMaps.type.get(typeLabel) || 0) +
                    1);
                    if (responsableLabel) optionMaps.responsable.set(responsableLabel, (optionMaps
                        .responsable.get(responsableLabel) || 0) + 1);

                    keywordValues.forEach((keyword) => {
                        optionMaps.keyword.set(keyword, (optionMaps.keyword.get(keyword) || 0) + 1);
                    });
                });

                return optionMaps;
            };

            const renderTypeOptions = () => {
                if (!typeOptions || !typeCount || !typeEmpty) return;

                const entries = Array.from(themeMaps.type.entries()).sort((a, b) => {
                    if (b[1] !== a[1]) return b[1] - a[1];
                    return a[0].localeCompare(b[0], 'es');
                });

                const available = new Set(entries.map(([label]) => normalizeText(label)));
                Array.from(activeSelections.type).forEach((value) => {
                    if (!available.has(value)) activeSelections.type.delete(value);
                });

                typeOptions.innerHTML = '';
                typeCount.textContent = entries.length;
                typeEmpty.hidden = entries.length !== 0;

                entries.forEach(([label, amount]) => {
                    const option = document.createElement('label');
                    option.className = 'type-filter-option';

                    const input = document.createElement('input');
                    input.type = 'checkbox';
                    input.value = normalizeText(label);
                    input.checked = activeSelections.type.has(input.value);
                    input.addEventListener('change', () => {
                        if (input.checked) activeSelections.type.add(input.value);
                        else activeSelections.type.delete(input.value);
                        updateActiveFilterState();
                        applyFilters();
                    });

                    const text = document.createElement('span');
                    text.textContent = label;

                    const count = document.createElement('small');
                    count.textContent = amount;

                    option.append(input, text, count);
                    typeOptions.append(option);
                });
            };

            const renderResponsableOptions = () => {
                if (!responsableOptions || !responsableCount) return;

                const entries = Array.from(themeMaps.responsable.entries()).sort((a, b) => a[0].localeCompare(b[0],
                    'es'));
                const available = new Set(entries.map(([label]) => normalizeText(label)));

                if (activeSelections.responsable && !available.has(activeSelections.responsable)) {
                    activeSelections.responsable = '';
                }

                responsableOptions.innerHTML = '';
                responsableCount.textContent = entries.length;

                const allButton = document.createElement('button');
                allButton.type = 'button';
                allButton.className =
                `responsable-filter-option${activeSelections.responsable ? '' : ' is-active'}`;
                allButton.innerHTML = '<span>Todos los responsables</span>';
                allButton.addEventListener('click', () => {
                    activeSelections.responsable = '';
                    renderResponsableOptions();
                    updateActiveFilterState();
                    applyFilters();
                });
                responsableOptions.append(allButton);

                entries.forEach(([label, amount]) => {
                    const value = normalizeText(label);
                    const option = document.createElement('button');
                    option.type = 'button';
                    option.className =
                        `responsable-filter-option${value === activeSelections.responsable ? ' is-active' : ''}`;

                    const text = document.createElement('span');
                    text.textContent = label;

                    const count = document.createElement('small');
                    count.textContent = amount;

                    option.append(text, count);
                    option.addEventListener('click', () => {
                        activeSelections.responsable = activeSelections.responsable === value ? '' :
                            value;
                        renderResponsableOptions();
                        updateActiveFilterState();
                        applyFilters();
                    });
                    responsableOptions.append(option);
                });
            };

            const renderKeywordChips = () => {
                if (!keywordSelected || !keywordClear) return;

                keywordSelected.innerHTML = '';
                keywordClear.hidden = activeSelections.keyword.size === 0;

                Array.from(activeSelections.keyword)
                    .map((value) => Array.from(themeMaps.keyword.keys()).find((item) => normalizeText(item) ===
                        value) || value)
                    .sort((a, b) => a.localeCompare(b, 'es'))
                    .forEach((label) => {
                        const chip = document.createElement('span');
                        chip.className = 'keyword-chip';
                        chip.textContent = label;

                        const remove = document.createElement('button');
                        remove.type = 'button';
                        remove.textContent = '×';
                        remove.setAttribute('aria-label', `Quitar ${label}`);
                        remove.addEventListener('click', () => {
                            activeSelections.keyword.delete(normalizeText(label));
                            renderKeywordChips();
                            renderKeywordSuggestions();
                            updateActiveFilterState();
                            applyFilters();
                        });

                        chip.append(remove);
                        keywordSelected.append(chip);
                    });
            };

            const renderKeywordSuggestions = () => {
                if (!keywordSuggestions || !keywordCount || !keywordEmpty) return;

                const entries = Array.from(themeMaps.keyword.entries()).sort((a, b) => {
                    if (b[1] !== a[1]) return b[1] - a[1];
                    return a[0].localeCompare(b[0], 'es');
                });
                const available = new Set(entries.map(([label]) => normalizeText(label)));

                Array.from(activeSelections.keyword).forEach((value) => {
                    if (!available.has(value)) activeSelections.keyword.delete(value);
                });

                const query = normalizeText(keywordInput?.value || '');
                const filtered = entries
                    .filter(([label]) => !activeSelections.keyword.has(normalizeText(label)))
                    .filter(([label]) => !query || normalizeText(label).includes(query))
                    .slice(0, 12);

                keywordCount.textContent = entries.length;
                keywordSuggestions.innerHTML = '';
                keywordEmpty.hidden = filtered.length !== 0;

                filtered.forEach(([label, amount]) => {
                    const button = document.createElement('button');
                    button.type = 'button';
                    button.className = 'keyword-suggestion';
                    button.innerHTML = `<span>${label}</span><small>${amount}</small>`;
                    button.addEventListener('click', () => {
                        activeSelections.keyword.add(normalizeText(label));
                        renderKeywordChips();
                        renderKeywordSuggestions();
                        updateActiveFilterState();
                        applyFilters();
                    });
                    keywordSuggestions.append(button);
                });
            };

            const buildFilterControls = () => {
                themeMaps = getThemeMaps();
                renderTypeOptions();
                renderResponsableOptions();
                renderKeywordChips();
                renderKeywordSuggestions();
                updateActiveFilterState();
            };

            const closeTooltip = (card) => {
                if (!card) return;
                card.classList.remove('is-tooltip-open');
                const toggle = card.querySelector('.tooltip-toggle');
                if (toggle) toggle.setAttribute('aria-expanded', 'false');
                if (activeTooltipCard === card) activeTooltipCard = null;
            };

            const closeAllTooltips = (exceptCard = null) => {
                cards.forEach((card) => {
                    if (card !== exceptCard) closeTooltip(card);
                });
            };

            const positionTooltip = (card) => {
                if (!card || window.innerWidth <= 720) return;

                const tooltip = card.querySelector('.catalog-tooltip');
                const toggle = card.querySelector('.tooltip-toggle');
                if (!tooltip || !toggle) return;

                const spacing = 16;
                const toggleRect = toggle.getBoundingClientRect();

                tooltip.style.setProperty('--tooltip-left', `${spacing}px`);
                tooltip.style.setProperty('--tooltip-top', `${spacing}px`);

                const tooltipRect = tooltip.getBoundingClientRect();
                const viewportWidth = window.innerWidth;
                const viewportHeight = window.innerHeight;

                let left = toggleRect.left;
                if (left + tooltipRect.width > viewportWidth - spacing) {
                    left = viewportWidth - spacing - tooltipRect.width;
                }
                left = Math.max(spacing, left);

                let top = toggleRect.bottom + 10;
                if (top + tooltipRect.height > viewportHeight - spacing) {
                    top = toggleRect.top - tooltipRect.height - 10;
                }
                top = Math.max(spacing, top);

                tooltip.style.setProperty('--tooltip-left', `${Math.round(left)}px`);
                tooltip.style.setProperty('--tooltip-top', `${Math.round(top)}px`);
            };

            const updateCatalogViewport = () => {
                return;
            };

            const applyFilters = () => {
                const query = normalizeText(searchInput.value);
                const tokens = query ? query.split(' ').filter(Boolean) : [];
                const hasQuery = tokens.length > 0;
                let visibleCount = 0;

                cards.forEach((card) => {
                    const inTheme = hasQuery ? true : card.dataset.theme === activeTheme;
                    const searchable = normalizeText(card.dataset.search || '');
                    const matchesQuery = !hasQuery || searchable.includes(query) || tokens.every((token) =>
                        searchable.includes(token));
                    const typeValue = normalizeText(card.dataset.typeValue || '');
                    const responsableValue = normalizeText(card.dataset.responsable || '');
                    const keywordValues = (card.dataset.keywords || '').split('||').map((value) =>
                        normalizeText(value)).filter(Boolean);
                    const matchesType = !activeSelections.type.size || activeSelections.type.has(typeValue);
                    const matchesResponsable = !activeSelections.responsable || activeSelections
                        .responsable === responsableValue;
                    const matchesKeyword = !activeSelections.keyword.size || keywordValues.some((value) =>
                        activeSelections.keyword.has(value));
                    const visible = inTheme && matchesQuery && matchesType && matchesResponsable &&
                        matchesKeyword;

                    card.classList.toggle('is-hidden', !visible);

                    if (!visible) {
                        closeTooltip(card);
                        return;
                    }

                    visibleCount += 1;
                });

                resultsCount.textContent = `${visibleCount} contenido${visibleCount === 1 ? '' : 's'}`;

                if (emptyState) {
                    emptyState.hidden = visibleCount !== 0;
                }

                updateCatalogViewport();
            };

            const renderTabsAndCards = (catalog) => {
                const themes = catalog.themes || [];
                const items = catalog.items || [];
                tabsRoot.innerHTML = '';
                grid.innerHTML = '';

                tabsRoot.style.setProperty('--chip-count', Math.max(themes.length, 1));

                themes.forEach((theme, index) => {
                    const button = document.createElement('button');
                    button.className = 'chip';
                    button.id = `tema-tab-${index + 1}`;
                    button.setAttribute('role', 'tab');
                    button.type = 'button';
                    button.setAttribute('aria-selected', index === 0 ? 'true' : 'false');
                    button.setAttribute('aria-controls', 'temas-panel');
                    button.tabIndex = index === 0 ? 0 : -1;
                    button.dataset.theme = theme.slug || '';
                    button.dataset.title = theme.name || '';
                    button.dataset.lead = theme.lead || '';
                    button.dataset.copy = theme.copy || '';
                    button.dataset.count = theme.count || 0;
                    button.dataset.types = (theme.types || []).join(' · ');
                    button.dataset.keywords = (theme.keywords || []).join('||');
                    button.setAttribute('aria-label',
                        `${theme.name || 'Temática'} (${theme.count || 0} contenidos)`);
                    if (index > 0) button.title = theme.name || '';

                    if (THEME_ICONS[index]) {
                        const image = document.createElement('img');
                        image.className = 'chip-icon';
                        image.src = THEME_ICONS[index];
                        image.alt = '';
                        button.append(image);
                    } else {
                        button.textContent = theme.symbol || '•';
                    }

                    tabsRoot.append(button);
                });

                items.forEach((item) => grid.append(renderCatalogCard(item)));

                tabs = Array.from(document.querySelectorAll('#themes-tablist [role="tab"]'));
                cards = Array.from(document.querySelectorAll('.topic-card[data-theme]'));
                bindTooltipEvents();
            };

            const activateTab = (tab, moveFocus = true) => {
                activeTheme = tab.dataset.theme || 'all';

                tabs.forEach((item) => {
                    const selected = item === tab;
                    item.setAttribute('aria-selected', selected ? 'true' : 'false');
                    item.tabIndex = selected ? 0 : -1;
                    item.title = selected ? '' : (item.dataset.title || '');
                });

                title.textContent = tab.dataset.title || '';
                lead.textContent = tab.dataset.lead || '';
                copy.textContent = tab.dataset.copy || '';
                if (types) types.textContent = tab.dataset.types || '';
                renderThemeKeywords(tab.dataset.keywords || '');
                syncThemeAccent(tab);
                panel.setAttribute('aria-labelledby', tab.id);
                activeSelections.type.clear();
                activeSelections.keyword.clear();
                activeSelections.responsable = '';
                resetFilterInputs();
                buildFilterControls();
                closeAllTooltips();
                applyFilters();

                if (moveFocus) tab.focus();
            };

            const bindTabEvents = () => {
                tabs.forEach((tab, index) => {
                    tab.addEventListener('click', () => activateTab(tab, false));
                    tab.addEventListener('keydown', (event) => {
                        let nextIndex = null;

                        if (event.key === 'ArrowRight') nextIndex = (index + 1) % tabs.length;
                        if (event.key === 'ArrowLeft') nextIndex = (index - 1 + tabs.length) % tabs
                            .length;
                        if (event.key === 'Home') nextIndex = 0;
                        if (event.key === 'End') nextIndex = tabs.length - 1;

                        if (nextIndex === null) return;
                        event.preventDefault();
                        activateTab(tabs[nextIndex]);
                    });
                });
            };

            ['input', 'search', 'change', 'keyup'].forEach((eventName) => {
                searchInput.addEventListener(eventName, applyFilters);
            });
            if (keywordInput) {
                keywordInput.addEventListener('input', renderKeywordSuggestions);
            }
            if (keywordClear) {
                keywordClear.addEventListener('click', () => {
                    activeSelections.keyword.clear();
                    if (keywordInput) keywordInput.value = '';
                    renderKeywordChips();
                    renderKeywordSuggestions();
                    updateActiveFilterState();
                    applyFilters();
                });
            }

            if (clearFiltersButton) {
                clearFiltersButton.addEventListener('click', () => {
                    activeSelections.type.clear();
                    activeSelections.keyword.clear();
                    activeSelections.responsable = '';
                    resetFilterInputs();
                    buildFilterControls();
                    applyFilters();
                });
            }

            sidebarToggle?.addEventListener('click', () => {
                if (!catalogLayout) return;
                lastSidebarTrigger = sidebarToggle;
                if (catalogLayout.classList.contains('is-sidebar-open')) closeSidebar();
                else openSidebar();
            });

            sidebarClose?.addEventListener('click', closeSidebar);
            sidebarAccept?.addEventListener('click', closeSidebar);
            sidebarBackdrop?.addEventListener('click', closeSidebar);

            document.addEventListener('click', (event) => {
                if (event.target.closest('.topic-card')) return;
                closeAllTooltips();
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') {
                    closeSidebar();
                    if (activeTooltipCard) {
                        const toggle = activeTooltipCard.querySelector('.tooltip-toggle');
                        closeAllTooltips();
                        toggle?.focus();
                        return;
                    }
                    closeAllTooltips();
                }
            });

            window.addEventListener('resize', () => {
                updateCatalogViewport();
                if (activeTooltipCard) positionTooltip(activeTooltipCard);
            });
            window.addEventListener('scroll', () => {
                if (activeTooltipCard) positionTooltip(activeTooltipCard);
            }, {
                passive: true
            });
            syncSidebarToggle();

            try {
                const catalogNode = document.getElementById('casa-comun-catalog-data');
                if (!catalogNode) throw new Error('missing embedded catalog data');
                const catalog = JSON.parse(catalogNode.textContent || '{}');
                if (!catalog || !Array.isArray(catalog.themes) || !Array.isArray(catalog.items)) {
                    throw new Error('invalid embedded catalog data');
                }

                renderTabsAndCards(catalog);
                bindTabEvents();
                const initialTab = tabs.find((tab) => tab.getAttribute('aria-selected') === 'true') || tabs[0];
                if (initialTab) activateTab(initialTab, false);
            } catch (error) {
                title.textContent = 'No fue posible cargar las temáticas';
                lead.textContent = 'Verifique la disponibilidad de los datos embebidos en la página.';
                copy.textContent = 'El catálogo no está disponible en este momento.';
                if (types) types.textContent = 'Sin datos';
                if (keywords) keywords.hidden = true;
                resultsCount.textContent = '0 contenidos';
                grid.innerHTML = '';
                emptyState.hidden = false;
            }
        })();
    </script>
</body>

</html>
