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
            top: 14px;
            right: 14px;
            z-index: 60;
            display: grid;
            justify-items: end;
            gap: 8px
        }

        .accessibility-toggle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 42px;
            padding: 0 14px;
            border: 1px solid rgba(244, 235, 190, .18);
            border-radius: 999px;
            background: rgba(6, 9, 15, .74);
            color: var(--cream);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            backdrop-filter: blur(10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, .16);
            cursor: pointer
        }

        .accessibility-toggle[aria-expanded="true"] {
            background: rgba(17, 24, 35, .92)
        }

        .accessibility-tools {
            display: inline-flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 6px;
            width: min(280px, calc(100vw - 28px));
            padding: 8px;
            border: 1px solid rgba(244, 235, 190, .16);
            border-radius: 20px;
            background: rgba(6, 9, 15, .78);
            backdrop-filter: blur(10px);
            box-shadow: 0 12px 26px rgba(0, 0, 0, .18)
        }

        .accessibility-tools[hidden] {
            display: none
        }

        .accessibility-label {
            width: 100%;
            padding: 2px 4px 4px;
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
            align-items: center;
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
            font-size: calc(clamp(54px, 7vw, 68px) * var(--font-scale));
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
            position: absolute;
            z-index: 1;
            pointer-events: none
        }

        .collage-left {
            left: -72px;
            bottom: 47px;
            width: min(42vw, 960px);
            height: 1400px;
            opacity: .92
        }

        .collage-right {
            right: -72px;
            top: 160px;
            width: min(34vw, 960px);
            height: 960px;
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

        .performer-ghost,
        .performer-main {
            position: absolute;
            inset: 0
        }

        .performer-ghost img,
        .performer-main img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: left bottom
        }

        .performer-ghost {
            left: 16px;
            top: -8px;
            opacity: .3;
            mix-blend-mode: screen;
            filter: hue-rotate(6deg) saturate(1.08) brightness(.94)
        }

        .performer-main {
            filter: drop-shadow(16px 24px 26px rgba(17, 22, 41, .18))
        }

        .performer-main img {
            opacity: .88
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
            gap: 12px;
            flex-wrap: wrap;
            justify-content: center;
            transform: translateX(-50%)
        }

        .roof-slide-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 22px;
            border: 1px solid rgba(20, 33, 38, .2);
            border-radius: 999px;
            background: rgba(255, 245, 206, .94);
            color: #172029;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .04em;
            text-transform: uppercase;
            box-shadow: 0 10px 24px rgba(0, 0, 0, .18);
            transition: transform .18s ease, box-shadow .18s ease, background-color .18s ease
        }

        .roof-slide-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 14px 28px rgba(0, 0, 0, .22)
        }

        .roof-slide-btn.is-secondary {
            background: rgba(23, 32, 41, .9);
            color: var(--cream);
            border-color: rgba(255, 245, 206, .28)
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

        .themes-section .collage-left {
            left: -70px;
            top: -774px;
            bottom: auto
        }

        .themes-section .collage-right {
            right: 0;
            top: 300px
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

        .chip-mobile-toggle {
            display: none
        }

        .chip-mobile-toggle-icon {
            display: none
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

        .card.d1 img {
            object-position: left center
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
            font-size: 14px;
            line-height: 1.6;
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
            background: linear-gradient(180deg, #fff7d6 0%, #fff1bf 100%);
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
            font-size: 34px;
            line-height: .95;
            letter-spacing: .02em;
            text-transform: uppercase;
            color: #111920
        }

        .program-modal-copy {
            margin: 8px 0 0;
            max-width: 62ch;
            font-size: 15px;
            line-height: 1.6;
            color: rgba(17, 25, 32, .84)
        }

        .program-modal-close {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 auto;
            min-width: 44px;
            min-height: 44px;
            padding: 0;
            border: 1px solid rgba(20, 33, 38, .24);
            border-radius: 999px;
            background: rgba(255, 255, 255, .82);
            color: #172029;
            font-size: 22px;
            line-height: 1;
            cursor: pointer;
            transition: background-color .18s ease, transform .18s ease, box-shadow .18s ease
        }

        .program-modal-close:hover {
            background: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 10px 24px rgba(20, 33, 38, .12)
        }

        .program-modal-close:focus-visible,
        .program-modal-control:focus-visible,
        .program-modal-reset:focus-visible {
            outline: 3px solid #0f62fe;
            outline-offset: 3px
        }

        .program-modal-toolbar {
            position: sticky;
            top: -24px;
            z-index: 2;
            margin: 0 -24px 18px;
            padding: 16px 24px 18px;
            background: linear-gradient(180deg, rgba(255, 247, 214, .98) 0%, rgba(255, 244, 202, .96) 86%, rgba(255, 244, 202, 0) 100%);
            backdrop-filter: blur(8px)
        }

        .program-modal-tools {
            display: grid;
            grid-template-columns: minmax(180px, 220px) minmax(0, 1fr);
            gap: 12px;
            margin-bottom: 16px
        }

        .program-modal-field {
            display: grid;
            gap: 6px
        }

        .program-modal-label {
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: rgba(17, 25, 32, .76)
        }

        .program-modal-control {
            width: 100%;
            min-height: 48px;
            padding: 0 16px;
            border: 1px solid rgba(20, 33, 38, .22);
            border-radius: 18px;
            background: rgba(255, 255, 255, .96);
            color: #172029;
            font-size: 15px;
            line-height: 1.4;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .8)
        }

        .program-modal-summary {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 14px
        }

        .program-modal-summary-main {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px
        }

        .program-modal-count {
            display: inline-flex;
            align-items: center;
            min-height: 32px;
            padding: 0 12px;
            border-radius: 999px;
            background: #172029;
            color: #fff5ce;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .1em;
            text-transform: uppercase
        }

        .program-modal-helper {
            margin: 0;
            font-size: 14px;
            line-height: 1.5;
            color: rgba(17, 25, 32, .78)
        }

        .program-modal-reset {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 16px;
            border: 1px solid rgba(20, 33, 38, .2);
            border-radius: 999px;
            background: rgba(255, 255, 255, .7);
            color: #172029;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .06em;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color .18s ease, transform .18s ease
        }

        .program-modal-reset:hover {
            background: #ffffff;
            transform: translateY(-1px)
        }

        .program-modal-reset[hidden] {
            display: none
        }

        .program-modal-list {
            display: grid;
            gap: 14px
        }

        .program-modal-day {
            display: grid;
            gap: 12px;
            padding: 16px;
            border-radius: 24px;
            background: rgba(255, 255, 255, .48);
            border: 1px solid rgba(20, 33, 38, .12)
        }

        .program-modal-day-title {
            margin: 0;
            font-family: 'Alternate Gothic', sans-serif;
            font-size: 24px;
            line-height: 1;
            letter-spacing: .02em;
            text-transform: uppercase;
            color: #111920
        }

        .program-modal-item {
            display: grid;
            gap: 8px;
            padding: 16px 18px;
            border: 1px solid rgba(20, 33, 38, .12);
            border-radius: 20px;
            background: rgba(255, 255, 255, .92);
            box-shadow: 0 12px 26px rgba(20, 33, 38, .06)
        }

        .program-modal-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px
        }

        .program-modal-time {
            display: inline-flex;
            align-items: center;
            min-height: 26px;
            padding: 0 9px;
            border-radius: 999px;
            background: #172029;
            color: #fff5ce;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .06em;
            text-transform: uppercase
        }

        .program-modal-entity {
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .07em;
            text-transform: uppercase;
            color: rgba(17, 25, 32, .7)
        }

        .program-modal-item h4 {
            margin: 0;
            font-size: 16px;
            line-height: 1.28;
            text-transform: uppercase
        }

        .program-modal-item p {
            margin: 0;
            font-size: 14px;
            line-height: 1.62;
            color: rgba(17, 25, 32, .82)
        }

        .program-modal-empty {
            padding: 20px 18px;
            border: 1px dashed rgba(20, 33, 38, .24);
            border-radius: 20px;
            background: rgba(255, 255, 255, .66)
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
            width: 16px;
            height: 16px;
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

            .collage-left {
                left: -56px;
                bottom: -6px;
                width: min(40vw, 420px);
                height: 560px
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
            .poster-shell {
                padding-bottom: 12px
            }

            .accessibility-bar {
                top: auto;
                right: 12px;
                bottom: calc(12px + env(safe-area-inset-bottom));
                left: auto;
                justify-items: end
            }

            .accessibility-toggle {
                min-height: 40px;
                padding: 0 12px;
                font-size: 10px
            }

            .accessibility-tools {
                width: min(248px, calc(100vw - 24px));
                justify-content: flex-start;
                overflow-x: visible
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
                gap: 18px;
                margin-top: -26px;
                padding: 0 0 12px
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

            .collage-left {
                left: -48px;
                bottom: -10px;
                width: min(54vw, 280px);
                height: 360px
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

            .roof-slide {
                padding-top: 80px
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
                height: clamp(300px, 35.3vw, 260px);
                margin-top: 0;
                margin-bottom: 80px;
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
                position: relative;
                z-index: 5;
                left: auto;
                right: auto;
                top: 0;
                display: none;
                gap: 8px;
                margin: 8px 12px 0;
                padding: 10px;
                border-radius: 18px;
                background: rgba(255, 245, 206, .22);
                box-shadow: inset 0 0 0 1px rgba(20, 33, 38, .08)
            }

            .chip-mobile-toggle {
                position: relative;
                z-index: 5;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 12px;
                width: calc(100% - 24px);
                margin: 0 12px 0;
                min-height: 56px;
                padding: 0 18px;
                border: 1px solid rgba(20, 33, 38, .12);
                border-radius: 18px;
                background: linear-gradient(180deg, rgba(255, 245, 206, .92), rgba(255, 240, 187, .88));
                color: #172029;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: .04em;
                text-align: left;
                cursor: pointer;
                box-shadow: 0 10px 22px rgba(14, 27, 34, .14)
            }

            .chip-mobile-toggle-icon {
                display: inline-flex;
                flex: 0 0 22px;
                width: 22px;
                height: 22px;
                align-items: center;
                justify-content: center
            }

            .chip-mobile-toggle-icon img {
                width: 100%;
                height: 100%;
                object-fit: contain
            }

            .chip-mobile-toggle-label {
                flex: 1 1 auto;
                min-width: 0
            }

            .chip-mobile-toggle::after {
                content: "▾";
                flex: 0 0 auto;
                font-size: 14px;
                color: rgba(23, 32, 41, .72);
                transition: transform .18s ease
            }

            .board.is-mobile-tabs-open .chip-mobile-toggle::after {
                transform: rotate(180deg)
            }

            .board.is-mobile-tabs-open .chip-row {
                display: flex;
                flex-direction: column
            }

            .chip {
                width: 100%;
                max-width: none;
                min-width: 0;
                height: auto;
                min-height: 56px;
                justify-content: flex-start;
                gap: 12px;
                padding: 14px 16px;
                clip-path: none;
                border-radius: 16px;
                border: 1px solid rgba(20, 33, 38, .08);
                font-size: 14px;
                line-height: 1.2;
                text-align: left;
                transform: none;
                box-shadow: none
            }

            .chip::after {
                content: attr(data-title);
                flex: 1 1 auto;
                min-width: 0;
                font-size: 13px;
                font-weight: 700;
                line-height: 1.25;
                letter-spacing: .01em;
                text-transform: none
            }

            .chip:hover {
                transform: none
            }

            .chip[aria-selected="true"] {
                width: 100%;
                max-width: none;
                min-height: 60px;
                margin: 0;
                padding-top: 14px;
                transform: none;
                box-shadow: 0 10px 20px rgba(14, 27, 34, .16)
            }

            .chip-icon,
            .chip[aria-selected="true"] .chip-icon {
                width: 24px;
                height: 24px;
                flex: 0 0 24px
            }

            .board-panel {
                padding-top: 18px
            }

            .board {
                padding-top: 24px
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
                right: 10px;
                bottom: calc(10px + env(safe-area-inset-bottom))
            }

            .accessibility-tools {
                width: min(232px, calc(100vw - 20px));
                justify-content: flex-start;
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

            .chip-row {
                gap: 8px;
                padding: 14px 8px 10px
            }

            .chip-mobile-toggle {
                width: calc(100% - 16px);
                margin: 0 8px 0;
                min-height: 48px;
                padding: 0 14px;
                font-size: 12px
            }

            .chip {
                min-height: 52px;
                padding: 12px 14px
            }

            .chip::after {
                font-size: 12px
            }

            .hero-copy h1 {
                font-size: clamp(26px, 8.4vw, 40px)
            }

            .hero-intro {
                margin-top: -34px;
                padding-bottom: 10px
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

            .program-modal-toolbar {
                top: -18px;
                margin: 0 -18px 18px;
                padding: 14px 18px 18px
            }

            .program-modal-title {
                font-size: 30px
            }

            .program-modal-tools {
                grid-template-columns: 1fr
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

            .program-modal-summary {
                gap: 8px
            }

            .program-modal-summary-main {
                gap: 8px
            }

            .program-modal-day {
                padding: 14px
            }

            .program-modal-day-title {
                font-size: 22px
            }

            .program-modal-item h4 {
                font-size: 15px
            }

            .program-modal-item p {
                font-size: 14px
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
        <button class="accessibility-toggle" id="accessibility-toggle" type="button" aria-expanded="false"
            aria-controls="accessibility-tools">Accesibilidad</button>
        <div class="accessibility-tools" id="accessibility-tools" role="toolbar" aria-label="Ajustes de accesibilidad"
            hidden>
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
                                    <a class="roof-slide-btn is-secondary"
                                        href="https://nam02.safelinks.protection.outlook.com/?url=https%3A%2F%2Fwww.mincultura.gov.co%2Fnoticias%2FPaginas%2Fbienvenidos-a-esta-nuestra-casa-comun-asi-sera-la-presencia-del-ministerio-de-las-culturas-las-artes-y-los-saberes.aspx&data=05%7C02%7Cwsotaquira%40mincultura.gov.co%7Ca37f478f0ca04f073a3308de9ff56dfb%7C93f28b4e935c4c1488ace48697c1fc97%7C0%7C0%7C639124073669619225%7CUnknown%7CTWFpbGZsb3d8eyJFbXB0eU1hcGkiOnRydWUsIlYiOiIwLjAuMDAwMCIsIlAiOiJXaW4zMiIsIkFOIjoiTWFpbCIsIldUIjoyfQ%3D%3D%7C0%7C%7C%7C&sdata=qXvOuUOdcQkGLSPD%2FHavC4XPZKPe%2ByFzwT5L4bjzTZo%3D&reserved=0"
                                        target="_blank" rel="noreferrer">¡Sigue la ruta del Ministerio!</a>
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
                            <h1>Bienvenidos y bienvenidas a nuestra Casa Común</h1>
                            <p>Este especial digital contempla un repositorio de contenidos desarrollados por el
                                Minculturas en el periodo 2022-2026. Esta iniciativa parte del reconocimiento de
                                Colombia como un país construido desde la diversidad de pueblos, lenguas, saberes y
                                territorios.</p>
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
                  <p class="themes-summary">Recorre nuestra Casa Común por tema, responsable, formato y palabras clave.</p>
                <div class="collage-left" aria-hidden="true">
                    <span class="performer-ghost">
                        <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/layer-performer.png"
                            alt="">
                    </span>
                    <span class="performer-main">
                        <img src="https://www.mincultura.gov.co/especiales/casa-comun/PublishingImages/layer-performer.png"
                            alt="">
                    </span>
                </div>
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
                <div class="themes-stage">
                    <div class="board">
                        <button class="chip-mobile-toggle" id="themes-mobile-toggle" type="button"
                            aria-expanded="false" aria-controls="themes-tablist">
                            <span class="chip-mobile-toggle-icon" id="themes-mobile-toggle-icon" aria-hidden="true"></span>
                            <span class="chip-mobile-toggle-label" id="themes-mobile-toggle-label">Seleccionar temática</span>
                        </button>
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
                        <img src="https://www.mincultura.gov.co/noticias/PublishingImages/Imagenes-noticias/filbo-2026-casacomun.jpg"
                            alt="Casa Común en FILBo 2026">
                        <div class="card-body card-pink">
                            <h3>Bienvenidos a esta, nuestra casa común: así será la presencia del Ministerio de las
                                Culturas, las Artes y los Saberes.</h3>
                            <p>Conoce cómo será la presencia institucional del Ministerio en esta edición de FILBo.</p>
                            <a class="mini-btn"
                                href="https://www.mincultura.gov.co/noticias/Paginas/bienvenidos-a-esta-nuestra-casa-comun-asi-sera-la-presencia-del-ministerio-de-las-culturas-las-artes-y-los-saberes.aspx"
                                target="_blank" rel="noreferrer">Leer noticia</a>
                        </div>
                    </article>

                    <article class="card d2">
                        <img src="https://www.mincultura.gov.co/noticias/PublishingImages/Imagenes-noticias/artes-paz-filbo.jpg"
                            alt="Artes para la Paz en FILBo 2026">
                        <div class="card-body card-yellow">
                            <h3>Artes para la paz: el punto de encuentro para dialogar sobre la formación artística y
                                cultural en FILBo 2026.</h3>
                            <p>Revisa esta noticia sobre el espacio de conversación y encuentro alrededor de Artes para
                                la Paz.</p>
                            <a class="mini-btn"
                                href="https://www.mincultura.gov.co/noticias/Paginas/artes-para-la-paz-el-punto-de-encuentro-para-dialogar-sobre-la-formacion-artistica-y-cultural-en-filbo-2026.aspx"
                                target="_blank" rel="noreferrer">Leer noticia</a>
                        </div>
                    </article>

                    <article class="card d3">
                        <img src="https://www.mincultura.gov.co/noticias/PublishingImages/Imagenes-noticias/cine-colombia-filbo-2026.jpg"
                            alt="Cine colombiano y radio comunitaria en FILBo 2026">
                        <div class="card-body card-orange">
                            <h3>El cine colombiano y la radio comunitaria están en la agenda de FILBo 2026 con nuestra
                                casa común.</h3>
                            <p>Consulta la noticia sobre esta agenda de cine colombiano y radio comunitaria en FILBo
                                2026.</p>
                            <a class="mini-btn"
                                href="https://www.mincultura.gov.co/noticias/Paginas/el-cine-colombiano-y-la-radio-comunitaria-estan-en-la-agenda-de-la-flibo-2026-con-nuestra-casa-comun.aspx"
                                target="_blank" rel="noreferrer">Leer noticia</a>
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
                                <a class="memory-slide-btn"
                                    href="https://www.youtube.com/watch?v=e1R_I_k7gpE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=6"
                                    target="_blank" rel="noreferrer">Explorar</a>
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
                        <p>Galerías, piezas y relatos visuales para recorrer el territorio desde otras perspectivas.</p>
                        <a class="strip-btn"
                            href="https://www.youtube.com/watch?v=e1R_I_k7gpE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=6"
                            target="_blank" rel="noreferrer">Descubre aquí</a>
                    </div>
                </div>
            </section>

            <section class="feature-strip strip-sonido" id="sonido">
                <div class="wrap-full strip-grid">
                    <div class="strip-copy">
                        <h2>Somos sonido, somos voces</h2>
                        <p>Lenguas, memorias, acentos y ritmos que habitan nuestra Casa Común.</p>
                        <a class="strip-btn"
                            href="https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
                            target="_blank" rel="noreferrer">Escucha aquí</a>
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
                        <div class="program-modal-toolbar">
                            <p class="sr-only" id="filbo-program-search-help">Puede filtrar por día o escribir un
                                término para buscar por actividad, entidad o descripción.</p>
                            <div class="program-modal-tools" aria-label="Filtros de programación">
                                <div class="program-modal-field">
                                    <label class="program-modal-label" for="filbo-program-day-filter">Filtrar por
                                        día</label>
                                    <select class="program-modal-control" id="filbo-program-day-filter"
                                        aria-controls="filbo-program-list">
                                        <option value="">Todos los días</option>
                                    </select>
                                </div>
                                <div class="program-modal-field">
                                    <label class="program-modal-label" for="filbo-program-search">Buscar
                                        actividad</label>
                                    <input class="program-modal-control" id="filbo-program-search" type="search"
                                        placeholder="Buscar por actividad, entidad o palabra clave"
                                        autocomplete="off" aria-controls="filbo-program-list"
                                        aria-describedby="filbo-program-search-help">
                                </div>
                            </div>
                            <div class="program-modal-summary">
                                <div class="program-modal-summary-main">
                                    <span class="program-modal-count" id="filbo-program-count" role="status"
                                        aria-live="polite">0 actividades</span>
                                    <p class="program-modal-helper" id="filbo-program-helper">Use los filtros para
                                        encontrar más rápido cada actividad.</p>
                                </div>
                                <button class="program-modal-reset" type="button" id="filbo-program-reset"
                                    aria-controls="filbo-program-day-filter filbo-program-search filbo-program-list"
                                    hidden>Limpiar filtros</button>
                            </div>
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
                    <a href="https://www.facebook.com/MinisterioCultura" target="_blank" rel="noreferrer"
                        aria-label="Facebook"><svg viewBox="0 0 24 24">
                            <path
                                d="M22.675 0h-21.35C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24H12.82v-9.294H9.692V11.09h3.128V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.312h3.587l-.467 3.617h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                        </svg></a>
                    <a href="https://www.instagram.com/mincultura/" target="_blank" rel="noreferrer"
                        aria-label="Instagram"><svg viewBox="0 0 24 24">
                            <path
                                d="M12 7.2A4.8 4.8 0 1 0 12 17a4.8 4.8 0 0 0 0-9.8Zm0 8A3.2 3.2 0 1 1 12 8.8a3.2 3.2 0 0 1 0 6.4Zm6.1-8.3a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0ZM21 7c-.1-1.5-.4-2.5-1.1-3.2-.7-.8-1.7-1-3.2-1.1C15.3 2.6 15 2.6 12 2.6s-3.3 0-4.7.1c-1.5.1-2.5.3-3.2 1.1C3.3 4.5 3 5.5 3 7c-.1 1.4-.1 1.8-.1 5s0 3.6.1 5c.1 1.5.3 2.5 1.1 3.2.7.8 1.7 1 3.2 1.1 1.4.1 1.7.1 4.7.1s3.3 0 4.7-.1c1.5-.1 2.5-.3 3.2-1.1.8-.7 1-1.7 1.1-3.2.1-1.4.1-1.7.1-5s0-3.6-.1-5Zm-2 10.2c-.1 1.1-.2 1.7-.5 2-.4.4-1 .5-2 .5-1.5.1-1.7.1-4.5.1s-3 0-4.5-.1c-1-.1-1.6-.2-2-.5-.3-.3-.4-.9-.5-2C5 15.8 5 15.5 5 12s0-3.8.1-5.2c.1-1.1.2-1.7.5-2 .4-.4 1-.5 2-.5C9 4.2 9.2 4.2 12 4.2s3 0 4.5.1c1 .1 1.6.2 2 .5.3.3.4.9.5 2 .1 1.4.1 1.7.1 5.2s0 3.8-.1 5.2Z" />
                        </svg></a>
                    <a href="https://twitter.com/mincultura" target="_blank" rel="noreferrer"
                        aria-label="Twitter/X"><svg viewBox="0 0 24 24">
                            <path
                                d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932 6.064-6.933Zm-1.292 19.488h2.039L6.486 3.24H4.298l13.31 17.401Z" />
                        </svg></a>
                    <a href="https://www.youtube.com/Mincultura" target="_blank" rel="noreferrer"
                        aria-label="YouTube"><svg viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a2.997 2.997 0 0 0-2.11-2.12C19.53 3.56 12 3.56 12 3.56s-7.53 0-9.389.506A2.997 2.997 0 0 0 .502 6.186 31.243 31.243 0 0 0 0 12a31.243 31.243 0 0 0 .502 5.814 2.997 2.997 0 0 0 2.11 2.12c1.859.506 9.388.506 9.388.506s7.53 0 9.389-.506a2.997 2.997 0 0 0 2.11-2.12A31.243 31.243 0 0 0 24 12a31.243 31.243 0 0 0-.502-5.814ZM9.546 15.568V8.432L15.818 12l-6.272 3.568Z" />
                        </svg></a>
                </div>
            </footer>
        </main>
    </div>

    <script id="casa-comun-catalog-data" type="application/json">
{
  "updated_at": "2026-04-22T10:33:14",
  "source_file": "datos.xlsx :: LANDING X TEM\u00c1TICA",
  "total_items": 174,
  "themes": [
    {
      "slug": "somos-diversidad-linguistica",
      "name": "Somos diversidad ling\u00fc\u00edstica",
      "symbol": "+",
      "lead": "Lenguas, oralidades y memorias que preservan conocimientos, relatos y formas propias de nombrar el mundo.",
      "copy": "Aqu\u00ed se re\u00fanen contenidos sobre lenguas nativas, documentaci\u00f3n ling\u00fc\u00edstica, tradici\u00f3n oral y repositorios que fortalecen la memoria viva desde m\u00faltiples pueblos y territorios.",
      "count": 31,
      "types": [
        "Sonoro",
        "Mapa",
        "Multimedia",
        "Cat\u00e1logo",
        "Libro",
        "Cartillas"
      ],
      "keywords": [
        "Grabaciones sonoras",
        "Lenguas nativas",
        "Espa\u00f1ol (biling\u00fcismo)",
        "Relatos de origen",
        "Saberes ancestrales",
        "Oralidad"
      ]
    },
    {
      "slug": "somos-un-pais-plurietnico-y-multicultural",
      "name": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "symbol": "\u2726",
      "lead": "Relatos campesinos, regionales y comunitarios que ampl\u00edan la mirada sobre la diversidad cultural del pa\u00eds.",
      "copy": "Esta tem\u00e1tica integra piezas que reconocen identidades rurales, memorias colectivas, expresiones sonoras y procesos de representaci\u00f3n cultural construidos desde distintos contextos territoriales.",
      "count": 29,
      "types": [
        "Video",
        "Sonoro",
        "Podcast",
        "Documental",
        "Documento Cartilla",
        "Documento cartilla"
      ],
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de naci\u00f3n",
        "Representaci\u00f3n social",
        "Diversidad cultural"
      ]
    },
    {
      "slug": "somos-economias-populares",
      "name": "Somos econom\u00edas populares",
      "symbol": "\u25cc",
      "lead": "Historias de trabajo, oficio y creaci\u00f3n que muestran c\u00f3mo la cultura tambi\u00e9n circula como sustento cotidiano.",
      "copy": "La selecci\u00f3n agrupa videoclips y piezas audiovisuales donde las econom\u00edas populares aparecen como una pr\u00e1ctica viva, territorial y profundamente conectada con identidades locales.",
      "count": 5,
      "types": [
        "Videoclip",
        "Video"
      ],
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Vida campesina",
        "Cultura rural",
        "M\u00fasica campesina",
        "Videoclip"
      ]
    },
    {
      "slug": "somos-cultura-de-paz",
      "name": "Somos cultura de paz",
      "symbol": "\u221e",
      "lead": "Procesos narrativos y comunitarios que ponen en circulaci\u00f3n memoria, participaci\u00f3n y construcci\u00f3n de tejido social.",
      "copy": "En esta l\u00ednea aparecen contenidos documentales, sonoros y transmedia orientados a la convivencia, la memoria colectiva, el di\u00e1logo intercultural y la participaci\u00f3n desde los territorios.",
      "count": 40,
      "types": [
        "Transmedia",
        "Reportaje",
        "Video",
        "Cortometraje",
        "Animaci\u00f3n",
        "Audiovisual"
      ],
      "keywords": [
        "T\u00fanel del Tiempo",
        "Proyecto transmedia",
        "Comunicaci\u00f3n propia",
        "Conmemoraci\u00f3n 500 a\u00f1os Santa Marta",
        "Participaci\u00f3n \u00e9tnica",
        "Gobernanza narrativa"
      ]
    },
    {
      "slug": "somos-territorios-bioculturales-y-economias-populares",
      "name": "Somos territorios bioculturales y econom\u00edas populares",
      "symbol": "\u2733",
      "lead": "Saberes, oficios y pr\u00e1cticas que articulan territorio, biodiversidad, producci\u00f3n cultural y vida comunitaria.",
      "copy": "La tem\u00e1tica conecta series, c\u00e1psulas y relatos donde convergen econom\u00edas locales, patrimonio, trabajo colectivo y formas de habitar los territorios desde una perspectiva biocultural.",
      "count": 31,
      "types": [
        "Documental",
        "Video",
        "Videos",
        "Podcast",
        "Arte animado",
        "Sonoro"
      ],
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Fanny",
        "Oficio tradicionalmente masculino",
        "Talleres mec\u00e1nicos",
        "Barrio Siete de Agosto, Bogot\u00e1"
      ]
    },
    {
      "slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "name": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "symbol": "\u2737",
      "lead": "Publicaciones y relatos que visibilizan inclusi\u00f3n, diversidad ling\u00fc\u00edstica y transmisi\u00f3n de saberes en distintos formatos editoriales.",
      "copy": "Este grupo organiza contenidos centrados en la pervivencia de lenguas, memoria ancestral, documentaci\u00f3n cultural y circulaci\u00f3n editorial accesible para distintos p\u00fablicos.",
      "count": 16,
      "types": [
        "Editorial"
      ],
      "keywords": [
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Elio Mira\u00f1a",
        "Lengua mira\u00f1a",
        "Cantos y cantadores",
        "Pueblo mira\u00f1a",
        "Recuperaci\u00f3n ling\u00fc\u00edstica"
      ]
    },
    {
      "slug": "somos-territorios-bioculturales",
      "name": "Somos territorios bioculturales",
      "symbol": "\u2197",
      "lead": "Documentales, podcasts y piezas audiovisuales que leen el territorio como espacio de memoria, agua, oficio y sostenibilidad.",
      "copy": "Aqu\u00ed se clasifican contenidos donde la vida cotidiana, los ecosistemas, los oficios tradicionales y las tramas locales se narran desde una relaci\u00f3n estrecha entre cultura y naturaleza.",
      "count": 22,
      "types": [
        "Documental",
        "Video",
        "Cortometraje",
        "Podcast"
      ],
      "keywords": [
        "Serie Econom\u00edas populares",
        "Orlando Nobles",
        "Sempegua y El Banco",
        "Comunidad de pescadores",
        "Trueque: bocachico por yuca o pl\u00e1tano",
        "Rebusque diario"
      ]
    }
  ],
  "items": [
    {
      "id": "somos-diversidad-linguistica-2",
      "row": 2,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Oraloteca",
      "type": "Sonoro",
      "description": "Grabaciones en lengua nativa y espa\u00f1ol que recogen relatos de origen y saberes ancestrales. A trav\u00e9s de la oralidad, se destacan pr\u00e1cticas como el di\u00e1logo y la conversaci\u00f3n, fundamentales para la vida comunitaria, social y pol\u00edtica, y para la transmisi\u00f3n de la memoria colectiva.",
      "keywords": [
        "Grabaciones sonoras",
        "Lenguas nativas",
        "Espa\u00f1ol (biling\u00fcismo)",
        "Relatos de origen",
        "Saberes ancestrales",
        "Oralidad",
        "Tradici\u00f3n oral",
        "Di\u00e1logo",
        "Conversaci\u00f3n",
        "Vida comunitaria",
        "Vida social",
        "Participaci\u00f3n pol\u00edtica",
        "Memoria colectiva",
        "Transmisi\u00f3n cultural",
        "Pr\u00e1cticas culturales",
        "Identidad cultural"
      ],
      "link": "https://www.bibliotecanacional.gov.co/es-co/actividades/noticias/en-la-bnc/podcast-oraloteca-nacional-colombia",
      "asset_link": "",
      "force_message": "La tradici\u00f3n oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el di\u00e1logo, la deliberaci\u00f3n, la conversaci\u00f3n, como pr\u00e1cticas necesarias para la vida comunitaria, social y pol\u00edtica.",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica BIBLIOTECA NACIONAL DE COLOMBIA Oraloteca Sonoro Grabaciones en lengua nativa y espa\u00f1ol que recogen relatos de origen y saberes ancestrales. A trav\u00e9s de la oralidad, se destacan pr\u00e1cticas como el di\u00e1logo y la conversaci\u00f3n, fundamentales para la vida comunitaria, social y pol\u00edtica, y para la transmisi\u00f3n de la memoria colectiva. La tradici\u00f3n oral y la oralitura son solo algunas de las expresiones de las oralidades. Reconocemos la presencia de la oralidad en nuestras interacciones cotidianas, en el di\u00e1logo, la deliberaci\u00f3n, la conversaci\u00f3n, como pr\u00e1cticas necesarias para la vida comunitaria, social y pol\u00edtica. Grabaciones sonoras Lenguas nativas Espa\u00f1ol (biling\u00fcismo) Relatos de origen Saberes ancestrales Oralidad Tradici\u00f3n oral Di\u00e1logo Conversaci\u00f3n Vida comunitaria Vida social Participaci\u00f3n pol\u00edtica Memoria colectiva Transmisi\u00f3n cultural Pr\u00e1cticas culturales Identidad cultural https://www.bibliotecanacional.gov.co/es-co/actividades/noticias/en-la-bnc/podcast-oraloteca-nacional-colombia"
    },
    {
      "id": "somos-diversidad-linguistica-3",
      "row": 3,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Mapa vivo de lenguas nativas",
      "type": "Mapa",
      "description": "Se incluyen en el mapa las Bibliotecas P\u00fablica (BP) y Bibliotecas Rurales Itinerantes (BRI) presentes en comunidades \u00e9tnicas. La tradici\u00f3n oral y la oralitura reflejan la importancia de la oralidad en la vida cotidiana, donde el di\u00e1logo, la conversaci\u00f3n y la deliberaci\u00f3n son esenciales para la construcci\u00f3n comunitaria, social y pol\u00edtica.",
      "keywords": [
        "Bibliotecas P\u00fablicas (BP)",
        "Bibliotecas Rurales Itinerantes (BRI)",
        "Mapeo de bibliotecas",
        "Acceso a la lectura",
        "Cobertura territorial",
        "Comunidades \u00e9tnicas",
        "Enfoque territorial",
        "Oralidad",
        "Oralitura",
        "Tradici\u00f3n oral",
        "Di\u00e1logo",
        "Conversaci\u00f3n",
        "Deliberaci\u00f3n",
        "Construcci\u00f3n comunitaria",
        "Participaci\u00f3n social",
        "Vida pol\u00edtica",
        "Tejido comunitario",
        "Memoria colectiva"
      ],
      "link": "https://www.bibliotecanacional.gov.co/es-co/actividades/noticias/Documents/Mapa_Etnicas_2026_Red.pdf",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica BIBLIOTECA NACIONAL DE COLOMBIA Mapa vivo de lenguas nativas Mapa Se incluyen en el mapa las Bibliotecas P\u00fablica (BP) y Bibliotecas Rurales Itinerantes (BRI) presentes en comunidades \u00e9tnicas. La tradici\u00f3n oral y la oralitura reflejan la importancia de la oralidad en la vida cotidiana, donde el di\u00e1logo, la conversaci\u00f3n y la deliberaci\u00f3n son esenciales para la construcci\u00f3n comunitaria, social y pol\u00edtica. Bibliotecas P\u00fablicas (BP) Bibliotecas Rurales Itinerantes (BRI) Mapeo de bibliotecas Acceso a la lectura Cobertura territorial Comunidades \u00e9tnicas Enfoque territorial Oralidad Oralitura Tradici\u00f3n oral Di\u00e1logo Conversaci\u00f3n Deliberaci\u00f3n Construcci\u00f3n comunitaria Participaci\u00f3n social Vida pol\u00edtica Tejido comunitario Memoria colectiva https://www.bibliotecanacional.gov.co/es-co/actividades/noticias/Documents/Mapa_Etnicas_2026_Red.pdf"
    },
    {
      "id": "somos-diversidad-linguistica-4",
      "row": 4,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Memoria de lenguas andinas, resguardada en Bibliotecas Nacionales CAN",
      "type": "Multimedia",
      "description": "Este proyecto busca crear un producto multimedia que visibilice el patrimonio bibliogr\u00e1fico sobre lenguas nativas de los pueblos originarios presentes en las bibliotecas nacionales de la Comunidad Andina. Incluir\u00e1 elementos para contextualizar y facilitar su consulta, mediante una curadur\u00eda web o un mapeo digital que re\u00fana distintos formatos en un micrositio, a lanzarse con un evento a mediados de este a\u00f1o.",
      "keywords": [
        "Producto multimedia",
        "Patrimonio bibliogr\u00e1fico",
        "Lenguas nativas",
        "Pueblos originarios",
        "Bibliotecas nacionales",
        "Comunidad Andina",
        "Visibilizaci\u00f3n cultural",
        "Curadur\u00eda web",
        "Mapeo digital",
        "Micrositio",
        "Acceso a la informaci\u00f3n",
        "Consulta digital",
        "Contenidos multiformato",
        "Gesti\u00f3n del conocimiento",
        "Difusi\u00f3n cultural",
        "Lanzamiento de proyecto"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "Este proyecto se lanza en julio. A\u00fan no hay link.",
      "search_text": "Somos diversidad ling\u00fc\u00edstica BIBLIOTECA NACIONAL DE COLOMBIA Memoria de lenguas andinas, resguardada en Bibliotecas Nacionales CAN Multimedia Este proyecto busca crear un producto multimedia que visibilice el patrimonio bibliogr\u00e1fico sobre lenguas nativas de los pueblos originarios presentes en las bibliotecas nacionales de la Comunidad Andina. Incluir\u00e1 elementos para contextualizar y facilitar su consulta, mediante una curadur\u00eda web o un mapeo digital que re\u00fana distintos formatos en un micrositio, a lanzarse con un evento a mediados de este a\u00f1o. Producto multimedia Patrimonio bibliogr\u00e1fico Lenguas nativas Pueblos originarios Bibliotecas nacionales Comunidad Andina Visibilizaci\u00f3n cultural Curadur\u00eda web Mapeo digital Micrositio Acceso a la informaci\u00f3n Consulta digital Contenidos multiformato Gesti\u00f3n del conocimiento Difusi\u00f3n cultural Lanzamiento de proyecto Este proyecto se lanza en julio. A\u00fan no hay link."
    },
    {
      "id": "somos-diversidad-linguistica-5",
      "row": 5,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Cat\u00e1logo de materiales en la Biblioteca Nacional de Colombia",
      "type": "Cat\u00e1logo",
      "description": "Colecci\u00f3n Afro en la Biblioteca Nacional de Colombia.",
      "keywords": [
        "Colecci\u00f3n Afro",
        "Biblioteca Nacional de Colombia",
        "Memoria de las lenguas",
        "Patrimonio documental",
        "Diversidad cultural",
        "Investigaci\u00f3n preliminar",
        "Colecciones especializadas",
        "Curadur\u00eda bibliogr\u00e1fica",
        "Visibilizaci\u00f3n \u00e9tnica",
        "Gesti\u00f3n de colecciones"
      ],
      "link": "https://bibliotecanacionalcolombia-my.sharepoint.com/:x:/g/personal/vbaena_bibliotecanacional_gov_co/IQATkxvyqn2OQZCswT2mG1GsAU2Xin7buWwkYOH7rvpclx0?e=RyBiTI",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica BIBLIOTECA NACIONAL DE COLOMBIA Cat\u00e1logo de materiales en la Biblioteca Nacional de Colombia Cat\u00e1logo Colecci\u00f3n Afro en la Biblioteca Nacional de Colombia. Colecci\u00f3n Afro Biblioteca Nacional de Colombia Memoria de las lenguas Patrimonio documental Diversidad cultural Investigaci\u00f3n preliminar Colecciones especializadas Curadur\u00eda bibliogr\u00e1fica Visibilizaci\u00f3n \u00e9tnica Gesti\u00f3n de colecciones https://bibliotecanacionalcolombia-my.sharepoint.com/:x:/g/personal/vbaena_bibliotecanacional_gov_co/IQATkxvyqn2OQZCswT2mG1GsAU2Xin7buWwkYOH7rvpclx0?e=RyBiTI"
    },
    {
      "id": "somos-diversidad-linguistica-6",
      "row": 6,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Editorial El caminar de los hijos del tabaco, la coca y la yuca dulce",
      "type": "Libro",
      "description": "Libro escrito por l\u00edderes Uitoto M\u0268n\u0268ka, P\u0268\u0268nemuna (Bora), Ivhuza (Okaina) y G\u00e1ig\u00f3m\u0268jo (Muinane), conocidos como gente de centro. Narra su historia desde los or\u00edgenes hasta hoy en tres cap\u00edtulos: el primero aborda el origen y sus principios filos\u00f3ficos; el segundo, las \u201cbonanzas\u201d y las resistencias; y el tercero, la organizaci\u00f3n ind\u00edgena y la reconstrucci\u00f3n sociocultural con un sistema de gobierno propio.",
      "keywords": [
        "Autor\u00eda ind\u00edgena",
        "Gente de centro",
        "Uitoto M\u0268n\u0268ka",
        "Bora (P\u0268\u0268nemuna)",
        "Okaina (Ivhuza)",
        "Muinane (G\u00e1ig\u00f3m\u0268jo)",
        "Relatos de origen",
        "Filosof\u00eda ind\u00edgena",
        "Memoria hist\u00f3rica",
        "Bonanzas",
        "Extractivismo",
        "Resistencias ind\u00edgenas",
        "Organizaci\u00f3n ind\u00edgena",
        "Gobierno propio",
        "Autonom\u00eda",
        "Reconstrucci\u00f3n sociocultural",
        "Saberes ancestrales",
        "Narrativa propia"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "Este libro est\u00e1 impreso. Estamos en proceso de subirlo a la Biblioteca Digital",
      "search_text": "Somos diversidad ling\u00fc\u00edstica BIBLIOTECA NACIONAL DE COLOMBIA Editorial El caminar de los hijos del tabaco, la coca y la yuca dulce Libro Libro escrito por l\u00edderes Uitoto M\u0268n\u0268ka, P\u0268\u0268nemuna (Bora), Ivhuza (Okaina) y G\u00e1ig\u00f3m\u0268jo (Muinane), conocidos como gente de centro. Narra su historia desde los or\u00edgenes hasta hoy en tres cap\u00edtulos: el primero aborda el origen y sus principios filos\u00f3ficos; el segundo, las \u201cbonanzas\u201d y las resistencias; y el tercero, la organizaci\u00f3n ind\u00edgena y la reconstrucci\u00f3n sociocultural con un sistema de gobierno propio. Autor\u00eda ind\u00edgena Gente de centro Uitoto M\u0268n\u0268ka Bora (P\u0268\u0268nemuna) Okaina (Ivhuza) Muinane (G\u00e1ig\u00f3m\u0268jo) Relatos de origen Filosof\u00eda ind\u00edgena Memoria hist\u00f3rica Bonanzas Extractivismo Resistencias ind\u00edgenas Organizaci\u00f3n ind\u00edgena Gobierno propio Autonom\u00eda Reconstrucci\u00f3n sociocultural Saberes ancestrales Narrativa propia Este libro est\u00e1 impreso. Estamos en proceso de subirlo a la Biblioteca Digital"
    },
    {
      "id": "somos-diversidad-linguistica-7",
      "row": 7,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "BIBLIOTECA NACIONAL DE COLOMBIA",
      "title": "Editorial Una tribu cosmopolita. Memoria de la Gente de Centro",
      "type": "Libro",
      "description": "Esta obra es una compilaci\u00f3n de testimonios de los pueblos ind\u00edgenas que sufrieron el holocausto cauchero, a finales del siglo xix e inicios del xx. A lo largo de sus p\u00e1ginas, los miembros de los pueblos bora, uitoto, muinane y ocaina relatan e ilustran los procesos de violencia que los llev\u00f3 casi a la exterminaci\u00f3n. Este texto, adem\u00e1s de ser un documento testimonial, pone en relieve un proceso sistem\u00e1tico de memoria que solo fue posible gracias al proceso de sanaci\u00f3n que lo acompa\u00f1\u00f3. \u200b \"Endulzar la palabra nace de los mayores. Ellos nos han explicado, porque lo hemos preguntado, c\u00f3mo podemos sanar esa herida de la \u00e9poca de la caucher\u00eda, la barbarie, las masacres, las torturas y las violaciones de derechos. Lo primero que nos han encomedado los mayores es endulzar; endulzar ese aire, ese ambiente de dolor, esos recuerdos, esos malos momentos. En dulzando la palabra se pudieron contar estos episodios fuertes para nosotros\". Manuel Sueche y Juan Carlos Gittoma.",
      "keywords": [
        "Autor\u00eda ind\u00edgena",
        "Ind\u00edgenas del Amazonas",
        "Industria del caucho",
        "Memoria hist\u00f3rica",
        "Bonanzas",
        "Extractivismo",
        "Resistencias ind\u00edgenas",
        "Organizaci\u00f3n ind\u00edgena",
        "Gobierno propio",
        "Autonom\u00eda",
        "Reconstrucci\u00f3n sociocultural",
        "Saberes ancestrales",
        "Narrativa propia"
      ],
      "link": "https://www.bibliotecanacional.gov.co/es-co/actividades/actividad-cultural/exposiciones/capitulos?Expo=3&Cap=15",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica BIBLIOTECA NACIONAL DE COLOMBIA Editorial Una tribu cosmopolita. Memoria de la Gente de Centro Libro Esta obra es una compilaci\u00f3n de testimonios de los pueblos ind\u00edgenas que sufrieron el holocausto cauchero, a finales del siglo xix e inicios del xx. A lo largo de sus p\u00e1ginas, los miembros de los pueblos bora, uitoto, muinane y ocaina relatan e ilustran los procesos de violencia que los llev\u00f3 casi a la exterminaci\u00f3n. Este texto, adem\u00e1s de ser un documento testimonial, pone en relieve un proceso sistem\u00e1tico de memoria que solo fue posible gracias al proceso de sanaci\u00f3n que lo acompa\u00f1\u00f3. \u200b \"Endulzar la palabra nace de los mayores. Ellos nos han explicado, porque lo hemos preguntado, c\u00f3mo podemos sanar esa herida de la \u00e9poca de la caucher\u00eda, la barbarie, las masacres, las torturas y las violaciones de derechos. Lo primero que nos han encomedado los mayores es endulzar; endulzar ese aire, ese ambiente de dolor, esos recuerdos, esos malos momentos. En dulzando la palabra se pudieron contar estos episodios fuertes para nosotros\". Manuel Sueche y Juan Carlos Gittoma. Autor\u00eda ind\u00edgena Ind\u00edgenas del Amazonas Industria del caucho Memoria hist\u00f3rica Bonanzas Extractivismo Resistencias ind\u00edgenas Organizaci\u00f3n ind\u00edgena Gobierno propio Autonom\u00eda Reconstrucci\u00f3n sociocultural Saberes ancestrales Narrativa propia https://www.bibliotecanacional.gov.co/es-co/actividades/actividad-cultural/exposiciones/capitulos?Expo=3&Cap=15"
    },
    {
      "id": "somos-diversidad-linguistica-8",
      "row": 8,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR",
      "title": "Cartillas El poder de nuestra palabra con relatos de origen arhuacos",
      "type": "Cartillas",
      "description": "Colecci\u00f3n de cinco relatos: Ka\u2019g\u0289m\u0289 A\u2019b\u0289nna (origen de la tierra), Matuna z\u0289 \u0249umam\u0289 (poder de Matuna), N\u0289nbo\u2019 (p\u00e1jaro atrapa gente), Terunna (padre del ayu) y Tupe (hombres come gente). Surge del trabajo colectivo \u0244NG\u0244NAM\u0244SI, dentro del proyecto IK\u0244 Z\u0244 ANUGWE ARUNHAM\u0244, con participaci\u00f3n de comunidades, sabedores e instituciones, como un aporte a la memoria y pagamento a la Madre Tierra.",
      "keywords": [
        "Relatos tradicionales",
        "Narrativas ind\u00edgenas",
        "Cosmogon\u00eda",
        "Origen de la tierra",
        "Mitolog\u00eda ind\u00edgena",
        "Matuna (poder espiritual)",
        "Seres m\u00edticos",
        "Tradici\u00f3n oral",
        "Memoria colectiva",
        "Sabedores",
        "Trabajo colectivo",
        "Comunidades ind\u00edgenas",
        "\u0244NG\u0244NAM\u0244SI",
        "IK\u0244 Z\u0244 ANUGWE ARUNHAM\u0244",
        "Espiritualidad ind\u00edgena",
        "Pagamento a la madre tierra",
        "Relaci\u00f3n con la naturaleza",
        "Transmisi\u00f3n de saberes"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "Este material es impreso, por lo que no hay enlace",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR Cartillas El poder de nuestra palabra con relatos de origen arhuacos Cartillas Colecci\u00f3n de cinco relatos: Ka\u2019g\u0289m\u0289 A\u2019b\u0289nna (origen de la tierra), Matuna z\u0289 \u0249umam\u0289 (poder de Matuna), N\u0289nbo\u2019 (p\u00e1jaro atrapa gente), Terunna (padre del ayu) y Tupe (hombres come gente). Surge del trabajo colectivo \u0244NG\u0244NAM\u0244SI, dentro del proyecto IK\u0244 Z\u0244 ANUGWE ARUNHAM\u0244, con participaci\u00f3n de comunidades, sabedores e instituciones, como un aporte a la memoria y pagamento a la Madre Tierra. Relatos tradicionales Narrativas ind\u00edgenas Cosmogon\u00eda Origen de la tierra Mitolog\u00eda ind\u00edgena Matuna (poder espiritual) Seres m\u00edticos Tradici\u00f3n oral Memoria colectiva Sabedores Trabajo colectivo Comunidades ind\u00edgenas \u0244NG\u0244NAM\u0244SI IK\u0244 Z\u0244 ANUGWE ARUNHAM\u0244 Espiritualidad ind\u00edgena Pagamento a la madre tierra Relaci\u00f3n con la naturaleza Transmisi\u00f3n de saberes Este material es impreso, por lo que no hay enlace"
    },
    {
      "id": "somos-diversidad-linguistica-9",
      "row": 9,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR",
      "title": "Documental La Ceiba",
      "type": "Documental",
      "description": "Documental en palenquero con subt\u00edtulos en espa\u00f1ol. La Ceiba explora la medicina ancestral palenquera y sus ra\u00edces m\u00e1gicas y religiosas, evidenciando la herencia africana en el Caribe colombiano. A trav\u00e9s del \u00e1rbol sagrado de la ceiba, conecta cielo, tierra y esp\u00edritu, y dialoga con el baobab como s\u00edmbolo de resistencia. Producci\u00f3n de la Escuela de Comunicaci\u00f3n Audiovisual Konda Ku Monikongo (Mahates\u2013Palenque).",
      "keywords": [
        "Documental",
        "Lengua palenquera",
        "Subt\u00edtulos en espa\u00f1ol",
        "Medicina ancestral",
        "Saberes afrodescendientes",
        "Espiritualidad afro",
        "Herencia africana",
        "Caribe colombiano",
        "Ceiba (\u00e1rbol sagrado)",
        "Baobab",
        "Cosmovisi\u00f3n",
        "Conexi\u00f3n cielo\u2013tierra\u2013esp\u00edritu",
        "Simbolismo",
        "Resistencia cultural",
        "Memoria afro",
        "Producci\u00f3n comunitaria",
        "Konda Ku Monikongo",
        "Comunicaci\u00f3n audiovisual comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/6_Consejo%20Comunitario%20Ma-Kankamana%20de%20la%20Comunidad%20de%20San%20Basilio%20De%20Palenque/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/1.%20PRODUCTO/LA%20CEIBA%20CORTE%201.1.mp4?csf=1&web=1&e=QUjJhm",
      "asset_link": "",
      "force_message": "La comunicaci\u00f3n en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A trav\u00e9s de narrativas propias, estos procesos comunicativos fortalecen la transmisi\u00f3n intergeneracional, la resistencia cultural y el di\u00e1logo intercultural, convirti\u00e9ndose en un aporte clave para la construcci\u00f3n de paz y el reconocimiento de la diversidad que sostiene el pa\u00eds. Relatos Propios \u2013 Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos ind\u00edgenas y afrocolombianos para narrar el pa\u00eds desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminaci\u00f3n y el Buen Vivir.",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR Documental La Ceiba Documental Documental en palenquero con subt\u00edtulos en espa\u00f1ol. La Ceiba explora la medicina ancestral palenquera y sus ra\u00edces m\u00e1gicas y religiosas, evidenciando la herencia africana en el Caribe colombiano. A trav\u00e9s del \u00e1rbol sagrado de la ceiba, conecta cielo, tierra y esp\u00edritu, y dialoga con el baobab como s\u00edmbolo de resistencia. Producci\u00f3n de la Escuela de Comunicaci\u00f3n Audiovisual Konda Ku Monikongo (Mahates\u2013Palenque). La comunicaci\u00f3n en lengua palenquera y creole es una herramienta fundamental para preservar la memoria, la identidad y los saberes ancestrales de los pueblos palenqueros y raizales. A trav\u00e9s de narrativas propias, estos procesos comunicativos fortalecen la transmisi\u00f3n intergeneracional, la resistencia cultural y el di\u00e1logo intercultural, convirti\u00e9ndose en un aporte clave para la construcci\u00f3n de paz y el reconocimiento de la diversidad que sostiene el pa\u00eds. Relatos Propios \u2013 Lenguas Nativas es una apuesta por las narrativas propias, las lenguas maternas, la memoria viva y la defensa de los territorios: una plataforma construida desde los pueblos ind\u00edgenas y afrocolombianos para narrar el pa\u00eds desde sus lenguas, narrativas, saberes y formas de vida, reafirmando que la diversidad cultural es base de la autodeterminaci\u00f3n y el Buen Vivir. Documental Lengua palenquera Subt\u00edtulos en espa\u00f1ol Medicina ancestral Saberes afrodescendientes Espiritualidad afro Herencia africana Caribe colombiano Ceiba (\u00e1rbol sagrado) Baobab Cosmovisi\u00f3n Conexi\u00f3n cielo\u2013tierra\u2013esp\u00edritu Simbolismo Resistencia cultural Memoria afro Producci\u00f3n comunitaria Konda Ku Monikongo Comunicaci\u00f3n audiovisual comunitaria https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/6_Consejo%20Comunitario%20Ma-Kankamana%20de%20la%20Comunidad%20de%20San%20Basilio%20De%20Palenque/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/1.%20PRODUCTO/LA%20CEIBA%20CORTE%201.1.mp4?csf=1&web=1&e=QUjJhm"
    },
    {
      "id": "somos-diversidad-linguistica-10",
      "row": 10,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR",
      "title": "Documental Lendro Ri Monde",
      "type": "Documental",
      "description": "Documental en palenquero con subt\u00edtulos en espa\u00f1ol. Lendro ri Monde explora la relaci\u00f3n entre el monte y la vida palenquera, como fuente econ\u00f3mica, cultural y social. Este espacio de trabajo y sustento se entrelaza con la m\u00fasica y la identidad del pueblo, reflejando su resiliencia. La obra resalta la transmisi\u00f3n de saberes a nuevas generaciones. Producci\u00f3n de la Escuela de Comunicaci\u00f3n Audiovisual Konda Ku Monikongo.",
      "keywords": [
        "Documental",
        "Lengua palenquera",
        "Subt\u00edtulos en espa\u00f1ol",
        "Monte / territorio",
        "Relaci\u00f3n naturaleza\u2013cultura",
        "Vida palenquera",
        "Econom\u00eda comunitaria",
        "Sustento tradicional",
        "Identidad cultural",
        "M\u00fasica tradicional",
        "Resiliencia",
        "Saberes ancestrales",
        "Transmisi\u00f3n generacional",
        "Juventudes",
        "Memoria colectiva",
        "Producci\u00f3n comunitaria",
        "Konda Ku Monikongo",
        "Comunicaci\u00f3n audiovisual comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/6_Consejo%20Comunitario%20Ma-Kankamana%20de%20la%20Comunidad%20de%20San%20Basilio%20De%20Palenque/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/2.%20PRODUCTO/Lendro%20ri%20monde.mp4?csf=1&web=1&e=4JXROZ",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR Documental Lendro Ri Monde Documental Documental en palenquero con subt\u00edtulos en espa\u00f1ol. Lendro ri Monde explora la relaci\u00f3n entre el monte y la vida palenquera, como fuente econ\u00f3mica, cultural y social. Este espacio de trabajo y sustento se entrelaza con la m\u00fasica y la identidad del pueblo, reflejando su resiliencia. La obra resalta la transmisi\u00f3n de saberes a nuevas generaciones. Producci\u00f3n de la Escuela de Comunicaci\u00f3n Audiovisual Konda Ku Monikongo. Documental Lengua palenquera Subt\u00edtulos en espa\u00f1ol Monte / territorio Relaci\u00f3n naturaleza\u2013cultura Vida palenquera Econom\u00eda comunitaria Sustento tradicional Identidad cultural M\u00fasica tradicional Resiliencia Saberes ancestrales Transmisi\u00f3n generacional Juventudes Memoria colectiva Producci\u00f3n comunitaria Konda Ku Monikongo Comunicaci\u00f3n audiovisual comunitaria https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/6_Consejo%20Comunitario%20Ma-Kankamana%20de%20la%20Comunidad%20de%20San%20Basilio%20De%20Palenque/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/2.%20PRODUCTO/Lendro%20ri%20monde.mp4?csf=1&web=1&e=4JXROZ"
    },
    {
      "id": "somos-diversidad-linguistica-11",
      "row": 11,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR",
      "title": "Documental The Dogs Hero Kella \u2013 Alberto May Williams",
      "type": "Documental",
      "description": "Documental en creole con subt\u00edtulos en espa\u00f1ol. The Dogs Hero Kella, de Alberto May Williams, retrata a un hombre raizal, antes conocido por su emblem\u00e1tico bar, que hoy dedica su vida a proteger a los animales de la isla, especialmente perros, mediante un refugio canino. Producci\u00f3n de la Escuela de Comunicaci\u00f3n Native Films Fundation, en el Archipi\u00e9lago de San Andr\u00e9s, Providencia y Santa Catalina.",
      "keywords": [
        "Documental",
        "Lengua creole",
        "Subt\u00edtulos en espa\u00f1ol",
        "Pueblo raizal",
        "San Andr\u00e9s, Providencia y Santa Catalina",
        "Identidad isle\u00f1a",
        "Historia de vida",
        "Liderazgo comunitario",
        "Protecci\u00f3n animal",
        "Bienestar animal",
        "Refugio canino",
        "Relaci\u00f3n humano\u2013animal",
        "Transformaci\u00f3n personal",
        "Trabajo comunitario",
        "Resiliencia",
        "Producci\u00f3n comunitaria",
        "Native Films Fundation",
        "Comunicaci\u00f3n audiovisual comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CMI%202023/02_Proyectos%20Grupo%20CMI%202023/01_Comunicaci%C3%B3n%20para%20el%20buen%20vivir/02_Afrocolombias/3.%20Formaci%C3%B3n%20en%20comunicaci%C3%B3n/ESCUELAS%20DE%20FORMACI%C3%93N%202023/01.%20Escuelas%20de%20Formaci%C3%B3n/12.%20NATIVE%20FILMS/02.%20DOCUMENTACION%20-%20SEGUNDO%20DESEMBOLSO/02.%20Productos%20-%20Entregables/Documentales/Kella_TheDogsHero2_RS.mp4?csf=1&web=1&e=AL7AR1",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR Documental The Dogs Hero Kella \u2013 Alberto May Williams Documental Documental en creole con subt\u00edtulos en espa\u00f1ol. The Dogs Hero Kella, de Alberto May Williams, retrata a un hombre raizal, antes conocido por su emblem\u00e1tico bar, que hoy dedica su vida a proteger a los animales de la isla, especialmente perros, mediante un refugio canino. Producci\u00f3n de la Escuela de Comunicaci\u00f3n Native Films Fundation, en el Archipi\u00e9lago de San Andr\u00e9s, Providencia y Santa Catalina. Documental Lengua creole Subt\u00edtulos en espa\u00f1ol Pueblo raizal San Andr\u00e9s, Providencia y Santa Catalina Identidad isle\u00f1a Historia de vida Liderazgo comunitario Protecci\u00f3n animal Bienestar animal Refugio canino Relaci\u00f3n humano\u2013animal Transformaci\u00f3n personal Trabajo comunitario Resiliencia Producci\u00f3n comunitaria Native Films Fundation Comunicaci\u00f3n audiovisual comunitaria https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CMI%202023/02_Proyectos%20Grupo%20CMI%202023/01_Comunicaci%C3%B3n%20para%20el%20buen%20vivir/02_Afrocolombias/3.%20Formaci%C3%B3n%20en%20comunicaci%C3%B3n/ESCUELAS%20DE%20FORMACI%C3%93N%202023/01.%20Escuelas%20de%20Formaci%C3%B3n/12.%20NATIVE%20FILMS/02.%20DOCUMENTACION%20-%20SEGUNDO%20DESEMBOLSO/02.%20Productos%20-%20Entregables/Documentales/Kella_TheDogsHero2_RS.mp4?csf=1&web=1&e=AL7AR1"
    },
    {
      "id": "somos-diversidad-linguistica-12",
      "row": 12,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR",
      "title": "Documental A Raizal Woman \u2013 Silvia Archbold",
      "type": "Documental",
      "description": "Documental en creole con subt\u00edtulos en espa\u00f1ol. A Raizal Woman, de Silvia Archbold, narra la vida de Silvia Archbold Livingston, quien super\u00f3 una grave enfermedad y la oposici\u00f3n familiar para convertirse en una l\u00edder raizal comprometida con su comunidad. Producci\u00f3n de la Escuela de Comunicaci\u00f3n Native Films Fundation, en el Archipi\u00e9lago de San Andr\u00e9s, Providencia y Santa Catalina.",
      "keywords": [
        "Documental",
        "Lengua creole",
        "Subt\u00edtulos en espa\u00f1ol",
        "Pueblo raizal",
        "San Andr\u00e9s, Providencia y Santa Catalina",
        "Identidad raizal",
        "Liderazgo femenino",
        "Mujer raizal",
        "Historia de vida",
        "Superaci\u00f3n personal",
        "Enfermedad y resiliencia",
        "Liderazgo comunitario",
        "Compromiso social",
        "Empoderamiento",
        "Memoria comunitaria",
        "Producci\u00f3n audiovisual comunitaria",
        "Native Films Fundation",
        "Cultura caribe insular"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CMI%202023/02_Proyectos%20Grupo%20CMI%202023/01_Comunicaci%C3%B3n%20para%20el%20buen%20vivir/02_Afrocolombias/3.%20Formaci%C3%B3n%20en%20comunicaci%C3%B3n/ESCUELAS%20DE%20FORMACI%C3%93N%202023/01.%20Escuelas%20de%20Formaci%C3%B3n/12.%20NATIVE%20FILMS/02.%20DOCUMENTACION%20-%20SEGUNDO%20DESEMBOLSO/02.%20Productos%20-%20Entregables/Documentales/MISS%20SILVIA_2_RS.mp4?csf=1&web=1&e=ishaZB",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR Documental A Raizal Woman \u2013 Silvia Archbold Documental Documental en creole con subt\u00edtulos en espa\u00f1ol. A Raizal Woman, de Silvia Archbold, narra la vida de Silvia Archbold Livingston, quien super\u00f3 una grave enfermedad y la oposici\u00f3n familiar para convertirse en una l\u00edder raizal comprometida con su comunidad. Producci\u00f3n de la Escuela de Comunicaci\u00f3n Native Films Fundation, en el Archipi\u00e9lago de San Andr\u00e9s, Providencia y Santa Catalina. Documental Lengua creole Subt\u00edtulos en espa\u00f1ol Pueblo raizal San Andr\u00e9s, Providencia y Santa Catalina Identidad raizal Liderazgo femenino Mujer raizal Historia de vida Superaci\u00f3n personal Enfermedad y resiliencia Liderazgo comunitario Compromiso social Empoderamiento Memoria comunitaria Producci\u00f3n audiovisual comunitaria Native Films Fundation Cultura caribe insular https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CMI%202023/02_Proyectos%20Grupo%20CMI%202023/01_Comunicaci%C3%B3n%20para%20el%20buen%20vivir/02_Afrocolombias/3.%20Formaci%C3%B3n%20en%20comunicaci%C3%B3n/ESCUELAS%20DE%20FORMACI%C3%93N%202023/01.%20Escuelas%20de%20Formaci%C3%B3n/12.%20NATIVE%20FILMS/02.%20DOCUMENTACION%20-%20SEGUNDO%20DESEMBOLSO/02.%20Productos%20-%20Entregables/Documentales/MISS%20SILVIA_2_RS.mp4?csf=1&web=1&e=ishaZB"
    },
    {
      "id": "somos-diversidad-linguistica-13",
      "row": 13,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR",
      "title": "Podcast Rezos y santiguos: herencia espiritual de Palenque",
      "type": "Podcast",
      "description": "Podcast en lengua palenquera. Rezos y Santiguos: Herencia espiritual de San Basilio de Palenque honra las ra\u00edces y la tradici\u00f3n oral del territorio. Los rezos y santiguos se entienden como resistencia espiritual. Participan ni\u00f1os, j\u00f3venes y adultos de La Bonga, del proceso \u201cEscuela de Comunicaci\u00f3n y Territorio para la Vida\u201d (Afrocolombias). Producci\u00f3n del colectivo Narradoras y Narradores de la memoria Kuch\u00e1 Suto de San Basilio de Palenque.",
      "keywords": [
        "Podcast",
        "Lengua palenquera",
        "Tradici\u00f3n oral",
        "Rezos",
        "Santiguos",
        "Espiritualidad afrodescendiente",
        "Resistencia espiritual",
        "Memoria colectiva",
        "Saberes ancestrales",
        "San Basilio de Palenque",
        "Comunidad afro",
        "Transmisi\u00f3n generacional",
        "Ni\u00f1ez y juventudes",
        "Participaci\u00f3n comunitaria",
        "Educaci\u00f3n comunitaria",
        "Escuela de Comunicaci\u00f3n y Territorio para la Vida",
        "Narradoras y Narradores de la memoria Kuch\u00e1 Suto",
        "Comunicaci\u00f3n comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:u:/s/DACMI/IQDYIk3NV06SRJMalScNzuHJAevj99b6qA1kdjVhahiKIAw?e=nonHSO",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR Podcast Rezos y santiguos: herencia espiritual de Palenque Podcast Podcast en lengua palenquera. Rezos y Santiguos: Herencia espiritual de San Basilio de Palenque honra las ra\u00edces y la tradici\u00f3n oral del territorio. Los rezos y santiguos se entienden como resistencia espiritual. Participan ni\u00f1os, j\u00f3venes y adultos de La Bonga, del proceso \u201cEscuela de Comunicaci\u00f3n y Territorio para la Vida\u201d (Afrocolombias). Producci\u00f3n del colectivo Narradoras y Narradores de la memoria Kuch\u00e1 Suto de San Basilio de Palenque. Podcast Lengua palenquera Tradici\u00f3n oral Rezos Santiguos Espiritualidad afrodescendiente Resistencia espiritual Memoria colectiva Saberes ancestrales San Basilio de Palenque Comunidad afro Transmisi\u00f3n generacional Ni\u00f1ez y juventudes Participaci\u00f3n comunitaria Educaci\u00f3n comunitaria Escuela de Comunicaci\u00f3n y Territorio para la Vida Narradoras y Narradores de la memoria Kuch\u00e1 Suto Comunicaci\u00f3n comunitaria https://mcultura.sharepoint.com/:u:/s/DACMI/IQDYIk3NV06SRJMalScNzuHJAevj99b6qA1kdjVhahiKIAw?e=nonHSO"
    },
    {
      "id": "somos-diversidad-linguistica-14",
      "row": 14,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR",
      "title": "Documental Memoria de un pescador: donde la historia y el ma\u00f1ana se encuentran",
      "type": "Documental",
      "description": "Documental en creole con subt\u00edtulos en espa\u00f1ol. Memoria de un pescador: donde la historia y el ma\u00f1ana se encuentran Explora la pesca artesanal y su v\u00ednculo con la identidad cultural de Providencia. Recupera memorias transmitidas entre generaciones y aborda los retos actuales del oficio, como la preservaci\u00f3n de t\u00e9cnicas ancestrales y las restricciones legales. Producci\u00f3n del proceso Sucomedia de San Andr\u00e9s Islas.",
      "keywords": [
        "Documental",
        "Lengua creole",
        "Subt\u00edtulos en espa\u00f1ol",
        "Pesca artesanal",
        "Providencia",
        "Identidad cultural",
        "Cultura isle\u00f1a",
        "Oficios tradicionales",
        "Saberes ancestrales",
        "Transmisi\u00f3n generacional",
        "Memoria colectiva",
        "Relaci\u00f3n con el mar",
        "Econom\u00eda local",
        "Sostenibilidad",
        "Restricciones legales",
        "Transformaciones del oficio",
        "Producci\u00f3n comunitaria",
        "Sucomedia",
        "Caribe insular"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/4_Suco%20Media%20SAS/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/1.%20PRODUCTO/Documental%20Memoria%20de%20un%20Pescador.mp4?csf=1&web=1&e=VXULA7",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS-COMUNICACI\u00d3N PARA EL BUEN VIVIR Documental Memoria de un pescador: donde la historia y el ma\u00f1ana se encuentran Documental Documental en creole con subt\u00edtulos en espa\u00f1ol. Memoria de un pescador: donde la historia y el ma\u00f1ana se encuentran Explora la pesca artesanal y su v\u00ednculo con la identidad cultural de Providencia. Recupera memorias transmitidas entre generaciones y aborda los retos actuales del oficio, como la preservaci\u00f3n de t\u00e9cnicas ancestrales y las restricciones legales. Producci\u00f3n del proceso Sucomedia de San Andr\u00e9s Islas. Documental Lengua creole Subt\u00edtulos en espa\u00f1ol Pesca artesanal Providencia Identidad cultural Cultura isle\u00f1a Oficios tradicionales Saberes ancestrales Transmisi\u00f3n generacional Memoria colectiva Relaci\u00f3n con el mar Econom\u00eda local Sostenibilidad Restricciones legales Transformaciones del oficio Producci\u00f3n comunitaria Sucomedia Caribe insular https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/02_AFROCOLOMBIAS%20NACIONAL/1_%20Escuelas%20Nacionales/4_Suco%20Media%20SAS/3_TERCER_PAGO_3_20%25/1.%20CONTENIDOS/1.%20PRODUCTO/Documental%20Memoria%20de%20un%20Pescador.mp4?csf=1&web=1&e=VXULA7"
    },
    {
      "id": "somos-diversidad-linguistica-15",
      "row": 15,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - internacionalizaci\u00f3n",
      "title": "Multimedia Relatos propios: lenguas nativas",
      "type": "Multimedia",
      "description": "La Multimedia Relatos Propios Lenguas Nativas es una plataforma digital que re\u00fane producciones sonoras, audiovisuales y narrativas de Comunicaci\u00f3n para el Buen Vivir y Afrocolombias. Organiza contenidos por pueblos, lenguas y territorios, con recorridos interactivos que acercan a la diversidad cultural del pa\u00eds. Integra mapas, fichas, cat\u00e1logos y recursos creados entre 2023 y 2025, adem\u00e1s de espacios de consulta, juego y eventos, como un espacio vivo de narrativas propias.",
      "keywords": [
        "Plataforma digital",
        "Multimedia",
        "Relatos propios",
        "Lenguas nativas",
        "Diversidad cultural",
        "Comunicaci\u00f3n para el Buen Vivir",
        "Afrocolombias",
        "Producci\u00f3n sonora",
        "Producci\u00f3n audiovisual",
        "Narrativas digitales",
        "Organizaci\u00f3n por pueblos",
        "Organizaci\u00f3n por territorios",
        "Organizaci\u00f3n por lenguas",
        "Recorridos interactivos",
        "Mapas interactivos"
      ],
      "link": "http://lenguasnativas.conectacultura.co/relatos-propios",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - internacionalizaci\u00f3n Multimedia Relatos propios: lenguas nativas Multimedia La Multimedia Relatos Propios Lenguas Nativas es una plataforma digital que re\u00fane producciones sonoras, audiovisuales y narrativas de Comunicaci\u00f3n para el Buen Vivir y Afrocolombias. Organiza contenidos por pueblos, lenguas y territorios, con recorridos interactivos que acercan a la diversidad cultural del pa\u00eds. Integra mapas, fichas, cat\u00e1logos y recursos creados entre 2023 y 2025, adem\u00e1s de espacios de consulta, juego y eventos, como un espacio vivo de narrativas propias. Plataforma digital Multimedia Relatos propios Lenguas nativas Diversidad cultural Comunicaci\u00f3n para el Buen Vivir Afrocolombias Producci\u00f3n sonora Producci\u00f3n audiovisual Narrativas digitales Organizaci\u00f3n por pueblos Organizaci\u00f3n por territorios Organizaci\u00f3n por lenguas Recorridos interactivos Mapas interactivos http://lenguasnativas.conectacultura.co/relatos-propios"
    },
    {
      "id": "somos-diversidad-linguistica-16",
      "row": 16,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - internacionalizaci\u00f3n",
      "title": "Gu\u00edas gr\u00e1ficas Destinos para la internacionalizaci\u00f3n del cine afrocolombiano",
      "type": "Gu\u00edas gr\u00e1ficas",
      "description": "Estas rutas son gu\u00edas gr\u00e1ficas de consulta que orientan la internacionalizaci\u00f3n del cine colombiano, especialmente en clave afro e ind\u00edgena. Ofrecen informaci\u00f3n sobre financiaci\u00f3n, circulaci\u00f3n y distribuci\u00f3n para la industria audiovisual. Cine en Ruta apoya estrategias para cine afrocolombiano en festivales, mercados y espacios internacionales. La Ruta Muntu impulsa el cine afrocolombiano, promoviendo conexiones con \u00c1frica, Brasil, EE. UU. y Europa y nuevos p\u00fablicos globales.",
      "keywords": [
        "Rutas de internacionalizaci\u00f3n",
        "Cine colombiano",
        "Cine ind\u00edgena",
        "Cine afrocolombiano",
        "Industria audiovisual",
        "Circulaci\u00f3n internacional",
        "Distribuci\u00f3n audiovisual",
        "Financiaci\u00f3n",
        "Mercados audiovisuales",
        "Festivales de cine",
        "Estrategias de circulaci\u00f3n",
        "Cine en Ruta",
        "Ruta Muntu",
        "Conexiones internacionales",
        "\u00c1frica",
        "Brasil",
        "Estados Unidos",
        "Europa",
        "P\u00fablicos globales",
        "Diversidad cultural",
        "Redes de colaboraci\u00f3n",
        "Proyecci\u00f3n internacional"
      ],
      "link": "https://drive.google.com/file/d/18BavPBhVzTdCCFU_l9v9_iWxozJse1ef/view",
      "asset_link": "",
      "force_message": "Estos instrumentos hacen parte de la estrategia de internacionalizaci\u00f3n: Cine Biocultural Colombiano de la Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos. El objetivo es abrir caminos para las producciones nacionales y nuevas oportunidades en el mundo, para agentes del sector cinematogr\u00e1fico del pa\u00eds.",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - internacionalizaci\u00f3n Gu\u00edas gr\u00e1ficas Destinos para la internacionalizaci\u00f3n del cine afrocolombiano Gu\u00edas gr\u00e1ficas Estas rutas son gu\u00edas gr\u00e1ficas de consulta que orientan la internacionalizaci\u00f3n del cine colombiano, especialmente en clave afro e ind\u00edgena. Ofrecen informaci\u00f3n sobre financiaci\u00f3n, circulaci\u00f3n y distribuci\u00f3n para la industria audiovisual. Cine en Ruta apoya estrategias para cine afrocolombiano en festivales, mercados y espacios internacionales. La Ruta Muntu impulsa el cine afrocolombiano, promoviendo conexiones con \u00c1frica, Brasil, EE. UU. y Europa y nuevos p\u00fablicos globales. Estos instrumentos hacen parte de la estrategia de internacionalizaci\u00f3n: Cine Biocultural Colombiano de la Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos. El objetivo es abrir caminos para las producciones nacionales y nuevas oportunidades en el mundo, para agentes del sector cinematogr\u00e1fico del pa\u00eds. Rutas de internacionalizaci\u00f3n Cine colombiano Cine ind\u00edgena Cine afrocolombiano Industria audiovisual Circulaci\u00f3n internacional Distribuci\u00f3n audiovisual Financiaci\u00f3n Mercados audiovisuales Festivales de cine Estrategias de circulaci\u00f3n Cine en Ruta Ruta Muntu Conexiones internacionales \u00c1frica Brasil Estados Unidos Europa P\u00fablicos globales Diversidad cultural Redes de colaboraci\u00f3n Proyecci\u00f3n internacional https://drive.google.com/file/d/18BavPBhVzTdCCFU_l9v9_iWxozJse1ef/view"
    },
    {
      "id": "somos-diversidad-linguistica-17",
      "row": 17,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - internacionalizaci\u00f3n",
      "title": "Gu\u00edas gr\u00e1ficas Conexiones y destinos internacionales para el cine ind\u00edgena colombiano.",
      "type": "Gu\u00edas gr\u00e1ficas",
      "description": "Estas rutas son gu\u00edas gr\u00e1ficas de consulta que orientan la internacionalizaci\u00f3n del cine colombiano, especialmente en clave afro e ind\u00edgena. Ofrecen informaci\u00f3n sobre financiaci\u00f3n, circulaci\u00f3n y distribuci\u00f3n para la industria audiovisual. Cine en Ruta apoya estrategias para cine ind\u00edgena en festivales, mercados y espacios internacionales. La Ruta Muntu impulsa el cine afrocolombiano, promoviendo conexiones con \u00c1frica, Brasil, EE. UU., Europa y nuevos p\u00fablicos globales.",
      "keywords": [
        "Rutas de internacionalizaci\u00f3n",
        "Cine colombiano",
        "Cine ind\u00edgena",
        "Cine afrocolombiano",
        "Industria audiovisual",
        "Circulaci\u00f3n internacional",
        "Distribuci\u00f3n audiovisual",
        "Financiaci\u00f3n",
        "Mercados audiovisuales",
        "Festivales de cine",
        "Estrategias de circulaci\u00f3n",
        "Cine en Ruta",
        "Ruta Muntu",
        "Conexiones internacionales",
        "\u00c1frica",
        "Brasil",
        "Estados Unidos",
        "Europa",
        "P\u00fablicos globales",
        "Diversidad cultural",
        "Redes de colaboraci\u00f3n",
        "Proyecci\u00f3n internacional"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos diversidad ling\u00fc\u00edstica MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - internacionalizaci\u00f3n Gu\u00edas gr\u00e1ficas Conexiones y destinos internacionales para el cine ind\u00edgena colombiano. Gu\u00edas gr\u00e1ficas Estas rutas son gu\u00edas gr\u00e1ficas de consulta que orientan la internacionalizaci\u00f3n del cine colombiano, especialmente en clave afro e ind\u00edgena. Ofrecen informaci\u00f3n sobre financiaci\u00f3n, circulaci\u00f3n y distribuci\u00f3n para la industria audiovisual. Cine en Ruta apoya estrategias para cine ind\u00edgena en festivales, mercados y espacios internacionales. La Ruta Muntu impulsa el cine afrocolombiano, promoviendo conexiones con \u00c1frica, Brasil, EE. UU., Europa y nuevos p\u00fablicos globales. Rutas de internacionalizaci\u00f3n Cine colombiano Cine ind\u00edgena Cine afrocolombiano Industria audiovisual Circulaci\u00f3n internacional Distribuci\u00f3n audiovisual Financiaci\u00f3n Mercados audiovisuales Festivales de cine Estrategias de circulaci\u00f3n Cine en Ruta Ruta Muntu Conexiones internacionales \u00c1frica Brasil Estados Unidos Europa P\u00fablicos globales Diversidad cultural Redes de colaboraci\u00f3n Proyecci\u00f3n internacional NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-diversidad-linguistica-18",
      "row": 18,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Editorial Los indigenismos l\u00e9xicos en el espa\u00f1ol de Colombia",
      "type": "Publicaciones",
      "description": "Los \u201cpr\u00e9stamos l\u00e9xicos\u201d son palabras que pasan de una lengua a otra por contacto cultural. En Am\u00e9rica, los indigenismos han enriquecido el espa\u00f1ol desde la Conquista, nombrando nuevas realidades. Esta acci\u00f3n visibiliza palabras de origen caribe, tup\u00ed-guaran\u00ed y muisca como arepa, totuma o maracuy\u00e1, resaltando la presencia viva de lenguas nativas. A trav\u00e9s de la alianza entre La Casa de las Palabras y El Tiempo, se promueve su reconocimiento en formatos impresos y digitales.",
      "keywords": [
        "Pr\u00e9stamos l\u00e9xicos",
        "Contacto cultural",
        "Indigenismos",
        "Lenguas nativas",
        "Espa\u00f1ol en Am\u00e9rica",
        "Diversidad ling\u00fc\u00edstica",
        "Caribe",
        "Tup\u00ed-guaran\u00ed",
        "Muisca",
        "Arepa",
        "Totuma",
        "Maracuy\u00e1",
        "Patrimonio ling\u00fc\u00edstico",
        "Visibilizaci\u00f3n cultural",
        "Lengua viva",
        "Intercambio cultural",
        "Historia ling\u00fc\u00edstica",
        "La Casa de las Palabras",
        "El Tiempo",
        "Difusi\u00f3n en medios",
        "Formatos impresos",
        "Contenidos digitales"
      ],
      "link": "https://lenguasyliteraturasnativas.caroycuervo.gov.co/los-indigenismos-lexicos-en-el-espanol-de-colombia/",
      "asset_link": "",
      "force_message": "Las lenguas ind\u00edgenas viven en lo que decimos todos los d\u00edas. Nuestro espa\u00f1ol tambi\u00e9n tiene ra\u00edces ind\u00edgenas. La ra\u00edz ind\u00edgena de nuestro espa\u00f1ol",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo Editorial Los indigenismos l\u00e9xicos en el espa\u00f1ol de Colombia Publicaciones Los \u201cpr\u00e9stamos l\u00e9xicos\u201d son palabras que pasan de una lengua a otra por contacto cultural. En Am\u00e9rica, los indigenismos han enriquecido el espa\u00f1ol desde la Conquista, nombrando nuevas realidades. Esta acci\u00f3n visibiliza palabras de origen caribe, tup\u00ed-guaran\u00ed y muisca como arepa, totuma o maracuy\u00e1, resaltando la presencia viva de lenguas nativas. A trav\u00e9s de la alianza entre La Casa de las Palabras y El Tiempo, se promueve su reconocimiento en formatos impresos y digitales. Las lenguas ind\u00edgenas viven en lo que decimos todos los d\u00edas. Nuestro espa\u00f1ol tambi\u00e9n tiene ra\u00edces ind\u00edgenas. La ra\u00edz ind\u00edgena de nuestro espa\u00f1ol Pr\u00e9stamos l\u00e9xicos Contacto cultural Indigenismos Lenguas nativas Espa\u00f1ol en Am\u00e9rica Diversidad ling\u00fc\u00edstica Caribe Tup\u00ed-guaran\u00ed Muisca Arepa Totuma Maracuy\u00e1 Patrimonio ling\u00fc\u00edstico Visibilizaci\u00f3n cultural Lengua viva Intercambio cultural Historia ling\u00fc\u00edstica La Casa de las Palabras El Tiempo Difusi\u00f3n en medios Formatos impresos Contenidos digitales https://lenguasyliteraturasnativas.caroycuervo.gov.co/los-indigenismos-lexicos-en-el-espanol-de-colombia/"
    },
    {
      "id": "somos-diversidad-linguistica-19",
      "row": 19,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Programa de Documentaci\u00f3n de Lenguas Nativas",
      "type": "Programa",
      "description": "Es una iniciativa que desarrolla actividades de formaci\u00f3n, investigaci\u00f3n y acompa\u00f1amiento para registrar, preservar y fortalecer las lenguas nativas de Colombia. A trav\u00e9s de talleres, ciclos de formaci\u00f3n en territorio y apoyo t\u00e9cnico a comunidades ind\u00edgenas, el programa impulsa la creaci\u00f3n de materiales ling\u00fc\u00edsticos y culturales que contribuyen a la salvaguardia del patrimonio inmaterial del pa\u00eds.",
      "keywords": [
        "Iniciativa cultural",
        "Lenguas nativas",
        "Salvaguardia ling\u00fc\u00edstica",
        "Patrimonio inmaterial",
        "Formaci\u00f3n",
        "Investigaci\u00f3n",
        "Acompa\u00f1amiento comunitario",
        "Comunidades ind\u00edgenas",
        "Enfoque territorial",
        "Talleres",
        "Ciclos de formaci\u00f3n",
        "Fortalecimiento cultural",
        "Registro ling\u00fc\u00edstico",
        "Preservaci\u00f3n cultural",
        "Materiales ling\u00fc\u00edsticos",
        "Producci\u00f3n cultural",
        "Transmisi\u00f3n de saberes",
        "Diversidad ling\u00fc\u00edstica"
      ],
      "link": "https://www.caroycuervo.gov.co/sala-de-prensa/programa-de-documentacion-de-lenguas/ https://www.caroycuervo.gov.co/la-lengua-como-el-hogar-la-historia-de-una-madre-que-siembra-el-nasa-yuwe-en-su-hija/ https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/ https://www.caroycuervo.gov.co/podemos-perderlo-todo-incluido-el-territorio-pero-nunca-la-lengua-mirana-elio-mirana/ https://www.caroycuervo.gov.co/reunirse-alrededor-del-fuego-para-mantener-vivo-el-namui-wam-la-lengua-de-los-misak/ https://www.caroycuervo.gov.co/reencontrarse-con-el-pensamiento-y-recuperar-la-palabra-murui/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo Programa de Documentaci\u00f3n de Lenguas Nativas Programa Es una iniciativa que desarrolla actividades de formaci\u00f3n, investigaci\u00f3n y acompa\u00f1amiento para registrar, preservar y fortalecer las lenguas nativas de Colombia. A trav\u00e9s de talleres, ciclos de formaci\u00f3n en territorio y apoyo t\u00e9cnico a comunidades ind\u00edgenas, el programa impulsa la creaci\u00f3n de materiales ling\u00fc\u00edsticos y culturales que contribuyen a la salvaguardia del patrimonio inmaterial del pa\u00eds. Iniciativa cultural Lenguas nativas Salvaguardia ling\u00fc\u00edstica Patrimonio inmaterial Formaci\u00f3n Investigaci\u00f3n Acompa\u00f1amiento comunitario Comunidades ind\u00edgenas Enfoque territorial Talleres Ciclos de formaci\u00f3n Fortalecimiento cultural Registro ling\u00fc\u00edstico Preservaci\u00f3n cultural Materiales ling\u00fc\u00edsticos Producci\u00f3n cultural Transmisi\u00f3n de saberes Diversidad ling\u00fc\u00edstica https://www.caroycuervo.gov.co/sala-de-prensa/programa-de-documentacion-de-lenguas/ https://www.caroycuervo.gov.co/la-lengua-como-el-hogar-la-historia-de-una-madre-que-siembra-el-nasa-yuwe-en-su-hija/ https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/ https://www.caroycuervo.gov.co/podemos-perderlo-todo-incluido-el-territorio-pero-nunca-la-lengua-mirana-elio-mirana/ https://www.caroycuervo.gov.co/reunirse-alrededor-del-fuego-para-mantener-vivo-el-namui-wam-la-lengua-de-los-misak/ https://www.caroycuervo.gov.co/reencontrarse-con-el-pensamiento-y-recuperar-la-palabra-murui/"
    },
    {
      "id": "somos-diversidad-linguistica-20",
      "row": 20,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video \u00bfQu\u00e9 se pierde cuando desaparece una lengua?",
      "type": "Video",
      "description": "Miembros del Programa de Documentaci\u00f3n de Lenguas Nativas reflexionan sobre lo que para ellos significa la p\u00e9rdida del idioma y la importancia de los procesos de documentaci\u00f3n ling\u00fc\u00edstica.",
      "keywords": [
        "Iniciativa cultural",
        "Lenguas nativas",
        "Salvaguardia ling\u00fc\u00edstica",
        "Patrimonio inmaterial",
        "Comunidades ind\u00edgenas",
        "Enfoque territorial",
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Fortalecimiento cultural",
        "Registro ling\u00fc\u00edstico",
        "Preservaci\u00f3n cultural",
        "Diversidad ling\u00fc\u00edstica"
      ],
      "link": "https://www.youtube.com/shorts/A_CbkRU86-8",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video \u00bfQu\u00e9 se pierde cuando desaparece una lengua? Video Miembros del Programa de Documentaci\u00f3n de Lenguas Nativas reflexionan sobre lo que para ellos significa la p\u00e9rdida del idioma y la importancia de los procesos de documentaci\u00f3n ling\u00fc\u00edstica. Iniciativa cultural Lenguas nativas Salvaguardia ling\u00fc\u00edstica Patrimonio inmaterial Comunidades ind\u00edgenas Enfoque territorial Documentaci\u00f3n ling\u00fc\u00edstica Fortalecimiento cultural Registro ling\u00fc\u00edstico Preservaci\u00f3n cultural Diversidad ling\u00fc\u00edstica https://www.youtube.com/shorts/A_CbkRU86-8"
    },
    {
      "id": "somos-diversidad-linguistica-21",
      "row": 21,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video En busca del origen Cacua",
      "type": "Video",
      "description": "Como parte del trabajo de recuperaci\u00f3n y preservaci\u00f3n de la memoria y la lengua cacua, adelantado por la comunidad Cacua Wacar\u00e1 y el Instituto Caro y Cuervo, Elena L\u00f3pez, sabedora cacua, comparte en cacua el relato de la mujer Po\u00f3j, una rana que se transforma en mujer y acompa\u00f1a a un caminante.",
      "keywords": [
        "Pueblo cacua",
        "Lengua cacua",
        "Memoria ancestral",
        "Tradici\u00f3n oral",
        "Sabidur\u00eda ancestral",
        "Cosmovisi\u00f3n ind\u00edgena",
        "Pervivencia cultural",
        "Salvaguardia ling\u00fc\u00edstica",
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Patrimonio inmaterial"
      ],
      "link": "https://www.youtube.com/shorts/ayxTEN9HMIM",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video En busca del origen Cacua Video Como parte del trabajo de recuperaci\u00f3n y preservaci\u00f3n de la memoria y la lengua cacua, adelantado por la comunidad Cacua Wacar\u00e1 y el Instituto Caro y Cuervo, Elena L\u00f3pez, sabedora cacua, comparte en cacua el relato de la mujer Po\u00f3j, una rana que se transforma en mujer y acompa\u00f1a a un caminante. Pueblo cacua Lengua cacua Memoria ancestral Tradici\u00f3n oral Sabidur\u00eda ancestral Cosmovisi\u00f3n ind\u00edgena Pervivencia cultural Salvaguardia ling\u00fc\u00edstica Documentaci\u00f3n ling\u00fc\u00edstica Patrimonio inmaterial https://www.youtube.com/shorts/ayxTEN9HMIM"
    },
    {
      "id": "somos-diversidad-linguistica-22",
      "row": 22,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video La historia en los cantos de los nukak",
      "type": "Video",
      "description": "En sus canciones, los nukak preservan su historia, su cultura y su vida cotidiana. Marina L\u00f3pez, documentalista y miembro de la comunidad cacua, y Katherine Bola\u00f1os, investigadora del programa de documentaci\u00f3n ling\u00fc\u00edstica del Instituto Caro y Cuervo, viajaron al Guaviare para reunirse con miembros de la comunidad nukak. All\u00ed, Mauricio Yau, sabedor local, les habl\u00f3 sobre la importancia de las canciones en su cultura. Porque una canci\u00f3n no necesita im\u00e1genes, su testimonio tampoco las tiene. Durante la visita, no se permiti\u00f3 el registro en video por razones culturales. Seg\u00fan sus costumbres, cuando una persona muere, su palabra desaparece con ella. Por esta raz\u00f3n, muchos miembros de la comunidad evitan ver im\u00e1genes o referencias de quienes han fallecido. Esta tradici\u00f3n tambi\u00e9n se extiende a los registros visuales, que se consideran parte de aquello que no debe permanecer tras la muerte.",
      "keywords": [
        "Pueblo Nukak",
        "Cantos tradicionales",
        "Memoria ancestral",
        "Tradici\u00f3n oral",
        "Sabidur\u00eda ancestral",
        "Cosmovisi\u00f3n ind\u00edgena",
        "Pervivencia cultural",
        "Pr\u00e1cticas culturales",
        "Salvaguardia ling\u00fc\u00edstica"
      ],
      "link": "https://www.youtube.com/shorts/hqm8if324rg",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video La historia en los cantos de los nukak Video En sus canciones, los nukak preservan su historia, su cultura y su vida cotidiana. Marina L\u00f3pez, documentalista y miembro de la comunidad cacua, y Katherine Bola\u00f1os, investigadora del programa de documentaci\u00f3n ling\u00fc\u00edstica del Instituto Caro y Cuervo, viajaron al Guaviare para reunirse con miembros de la comunidad nukak. All\u00ed, Mauricio Yau, sabedor local, les habl\u00f3 sobre la importancia de las canciones en su cultura. Porque una canci\u00f3n no necesita im\u00e1genes, su testimonio tampoco las tiene. Durante la visita, no se permiti\u00f3 el registro en video por razones culturales. Seg\u00fan sus costumbres, cuando una persona muere, su palabra desaparece con ella. Por esta raz\u00f3n, muchos miembros de la comunidad evitan ver im\u00e1genes o referencias de quienes han fallecido. Esta tradici\u00f3n tambi\u00e9n se extiende a los registros visuales, que se consideran parte de aquello que no debe permanecer tras la muerte. Pueblo Nukak Cantos tradicionales Memoria ancestral Tradici\u00f3n oral Sabidur\u00eda ancestral Cosmovisi\u00f3n ind\u00edgena Pervivencia cultural Pr\u00e1cticas culturales Salvaguardia ling\u00fc\u00edstica https://www.youtube.com/shorts/hqm8if324rg"
    },
    {
      "id": "somos-diversidad-linguistica-23",
      "row": 23,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video El fuego como s\u00edmbolo de resistencia y origen de la lengua de los misak",
      "type": "Video",
      "description": "En el Resguardo Ind\u00edgena Misak de San Antonio, ubicado en Morales (Cauca), el fuego no es solo calor: es memoria, es lengua y es identidad. Mientras los m\u00e1s peque\u00f1os aprenden a grabar su cultura y costumbres con celulares, los tatas y mamas lideran el Pishi Ya, un encuentro alrededor del fog\u00f3n en el que toman decisiones importantes para su comunidad, fortalecen su esp\u00edritu y conectan con sus ra\u00edces.",
      "keywords": [
        "Pueblo misak",
        "Namui wam",
        "Memoria ancestral",
        "Identidad cultural",
        "Pishi Ya",
        "Tradici\u00f3n oral",
        "Transmisi\u00f3n de saberes",
        "Fortalecimiento cultural",
        "Pervivencia ind\u00edgena"
      ],
      "link": "https://www.youtube.com/shorts/6tfqFSrr_x0",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video El fuego como s\u00edmbolo de resistencia y origen de la lengua de los misak Video En el Resguardo Ind\u00edgena Misak de San Antonio, ubicado en Morales (Cauca), el fuego no es solo calor: es memoria, es lengua y es identidad. Mientras los m\u00e1s peque\u00f1os aprenden a grabar su cultura y costumbres con celulares, los tatas y mamas lideran el Pishi Ya, un encuentro alrededor del fog\u00f3n en el que toman decisiones importantes para su comunidad, fortalecen su esp\u00edritu y conectan con sus ra\u00edces. Pueblo misak Namui wam Memoria ancestral Identidad cultural Pishi Ya Tradici\u00f3n oral Transmisi\u00f3n de saberes Fortalecimiento cultural Pervivencia ind\u00edgena https://www.youtube.com/shorts/6tfqFSrr_x0"
    },
    {
      "id": "somos-diversidad-linguistica-24",
      "row": 24,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video El canto de la perra de monte",
      "type": "Video",
      "description": "Desde las ciudades amaz\u00f3nicas de Leticia (Colombia) y Tabatinga (Brasil), el documentador Elio Mira\u00f1a est\u00e1 interesado en la documentaci\u00f3n de los cantos, que dentro de su cultura son esenciales para el bienestar de su pueblo. Porque los cantos son fragmentos de historias; las historias son curaciones. Entonces, los cantos son curaciones con las que se armoniza el territorio. En una visita con Neeba J\u0289mille (Elvira Mira\u00f1a), la \u00faltima abuela del clan Neebaje, Elio registr\u00f3 el canto de arrullo de la perra de monte. Este canto cuenta la historia de una perra con la capacidad de transformarse en mujer, que, durante las noches de baile, se acerca a las malocas para robarse a los ni\u00f1os varones y transformarlos en perros.",
      "keywords": [
        "Pueblo mira\u00f1a",
        "Lengua mira\u00f1a",
        "Cantos tradicionales",
        "Memoria ancestral",
        "Tradici\u00f3n oral",
        "Sabidur\u00eda ancestral",
        "Cosmovisi\u00f3n ind\u00edgena",
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/shorts/q7xpw5Hqwk8",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video El canto de la perra de monte Video Desde las ciudades amaz\u00f3nicas de Leticia (Colombia) y Tabatinga (Brasil), el documentador Elio Mira\u00f1a est\u00e1 interesado en la documentaci\u00f3n de los cantos, que dentro de su cultura son esenciales para el bienestar de su pueblo. Porque los cantos son fragmentos de historias; las historias son curaciones. Entonces, los cantos son curaciones con las que se armoniza el territorio. En una visita con Neeba J\u0289mille (Elvira Mira\u00f1a), la \u00faltima abuela del clan Neebaje, Elio registr\u00f3 el canto de arrullo de la perra de monte. Este canto cuenta la historia de una perra con la capacidad de transformarse en mujer, que, durante las noches de baile, se acerca a las malocas para robarse a los ni\u00f1os varones y transformarlos en perros. Pueblo mira\u00f1a Lengua mira\u00f1a Cantos tradicionales Memoria ancestral Tradici\u00f3n oral Sabidur\u00eda ancestral Cosmovisi\u00f3n ind\u00edgena Documentaci\u00f3n ling\u00fc\u00edstica Pervivencia cultural https://www.youtube.com/shorts/q7xpw5Hqwk8"
    },
    {
      "id": "somos-diversidad-linguistica-25",
      "row": 25,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video La siembra y la cosecha de la sandona",
      "type": "Video",
      "description": "En la vereda Muchivioy, en el municipio de Santiago (Putumayo), Juana Jacanamijoy, sabedora inga, comparti\u00f3 con el equipo de documentaci\u00f3n el proceso de siembra y cosecha de la sandona o sigsi, un tub\u00e9rculo fundamental para la alimentaci\u00f3n de la comunidad, que lleg\u00f3 al territorio desde Sibundoy. Esta visita fue una oportunidad para resaltar la importancia del cuidado de la chagra y la cosecha de alimentos propios sin el uso de qu\u00edmicos, una pr\u00e1ctica que se ha ido perdiendo pero que resulta esencial para el sostenimiento de su pueblo.",
      "keywords": [
        "Pueblo Inga",
        "Alimentos tradicionales",
        "Memoria ancestral",
        "Sabidur\u00eda ancestral",
        "Pr\u00e1cticas agr\u00edcolas",
        "Preservaci\u00f3n cultural",
        "Pervivencia ind\u00edgena"
      ],
      "link": "https://www.youtube.com/shorts/pdwu-cznFqs",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video La siembra y la cosecha de la sandona Video En la vereda Muchivioy, en el municipio de Santiago (Putumayo), Juana Jacanamijoy, sabedora inga, comparti\u00f3 con el equipo de documentaci\u00f3n el proceso de siembra y cosecha de la sandona o sigsi, un tub\u00e9rculo fundamental para la alimentaci\u00f3n de la comunidad, que lleg\u00f3 al territorio desde Sibundoy. Esta visita fue una oportunidad para resaltar la importancia del cuidado de la chagra y la cosecha de alimentos propios sin el uso de qu\u00edmicos, una pr\u00e1ctica que se ha ido perdiendo pero que resulta esencial para el sostenimiento de su pueblo. Pueblo Inga Alimentos tradicionales Memoria ancestral Sabidur\u00eda ancestral Pr\u00e1cticas agr\u00edcolas Preservaci\u00f3n cultural Pervivencia ind\u00edgena https://www.youtube.com/shorts/pdwu-cznFqs"
    },
    {
      "id": "somos-diversidad-linguistica-26",
      "row": 26,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video Historias que cuentan, que sanan, que tejen, que inspiran",
      "type": "Video",
      "description": "Para las mujeres kam\u00ebnt\u0161\u00e1 del Valle de Sibundoy (Tabanok), en el Putumayo, el tejido ha sido un oficio ancestral que mantiene viva su cosmovisi\u00f3n, sus relatos y su lengua. Con el deseo de preservar estos saberes, Mar\u00eda Antonia Narv\u00e1ez Agreda, documentadora de la lengua kam\u00ebnt\u0161\u00e1, recorre su territorio escuchando las voces de las tejedoras. Su trabajo hace parte del Programa de documentaci\u00f3n de diez lenguas para el 2025 del Instituto Caro y Cuervo, una apuesta por salvaguardar idiomas ind\u00edgenas en riesgo de desaparici\u00f3n. En esta ocasi\u00f3n, la documentara presenta un extracto de su entrevista con la sabedora Margarita Chindoy Chindoy , en la vereda Machindinoy (Sibundoy, Putumayo), con apoyo t\u00e9cnico de Alex Achicanoy Botina.",
      "keywords": [
        "Pueblo kam\u00ebnt\u0161\u00e1",
        "Lengua kam\u00ebnt\u0161\u00e1",
        "Tejido ancestral",
        "Memoria ancestral",
        "Sabidur\u00eda de las tejedoras",
        "Cosmovisi\u00f3n ind\u00edgena",
        "Tradici\u00f3n oral",
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Salvaguardia ling\u00fc\u00edstica",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/watch?v=e1R_I_k7gpE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=6",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video Historias que cuentan, que sanan, que tejen, que inspiran Video Para las mujeres kam\u00ebnt\u0161\u00e1 del Valle de Sibundoy (Tabanok), en el Putumayo, el tejido ha sido un oficio ancestral que mantiene viva su cosmovisi\u00f3n, sus relatos y su lengua. Con el deseo de preservar estos saberes, Mar\u00eda Antonia Narv\u00e1ez Agreda, documentadora de la lengua kam\u00ebnt\u0161\u00e1, recorre su territorio escuchando las voces de las tejedoras. Su trabajo hace parte del Programa de documentaci\u00f3n de diez lenguas para el 2025 del Instituto Caro y Cuervo, una apuesta por salvaguardar idiomas ind\u00edgenas en riesgo de desaparici\u00f3n. En esta ocasi\u00f3n, la documentara presenta un extracto de su entrevista con la sabedora Margarita Chindoy Chindoy , en la vereda Machindinoy (Sibundoy, Putumayo), con apoyo t\u00e9cnico de Alex Achicanoy Botina. Pueblo kam\u00ebnt\u0161\u00e1 Lengua kam\u00ebnt\u0161\u00e1 Tejido ancestral Memoria ancestral Sabidur\u00eda de las tejedoras Cosmovisi\u00f3n ind\u00edgena Tradici\u00f3n oral Documentaci\u00f3n ling\u00fc\u00edstica Salvaguardia ling\u00fc\u00edstica Pervivencia cultural https://www.youtube.com/watch?v=e1R_I_k7gpE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=6"
    },
    {
      "id": "somos-diversidad-linguistica-27",
      "row": 27,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video La escolarizaci\u00f3n dentro de los territorios inga",
      "type": "Video",
      "description": "Desde el interior del Cabildo Inga de Santiago (Putumayo), M\u00f3nica Jansasoy Tisoy escucha los testimonios de las mayoras y los mayores para conocer las experiencias de su comunidad, tanto las agradables como aquellas dolorosas que tuvieron lugar durante el periodo de escolarizaci\u00f3n impuesta por la Iglesia cat\u00f3lica. En esta oportunidad, M\u00f3nica, documentadora de la lengua inga, se desplaz\u00f3 hasta la vereda Muchivioy para recoger el testimonio de Margarita Jajoy sobre las dificultades que enfrent\u00f3 para asistir a la escuela durante su infancia y el papel de la instrucci\u00f3n religiosa en la educaci\u00f3n.",
      "keywords": [
        "Pueblo Inga",
        "Lengua inga",
        "Memoria ancestral",
        "Testimonios de los mayores",
        "Escolarizaci\u00f3n ind\u00edgena",
        "Historia comunitaria",
        "Tradici\u00f3n oral",
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Preservaci\u00f3n cultural",
        "Pervivencia ind\u00edgena"
      ],
      "link": "https://www.youtube.com/watch?v=yLlyjt2OnqM&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=5",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video La escolarizaci\u00f3n dentro de los territorios inga Video Desde el interior del Cabildo Inga de Santiago (Putumayo), M\u00f3nica Jansasoy Tisoy escucha los testimonios de las mayoras y los mayores para conocer las experiencias de su comunidad, tanto las agradables como aquellas dolorosas que tuvieron lugar durante el periodo de escolarizaci\u00f3n impuesta por la Iglesia cat\u00f3lica. En esta oportunidad, M\u00f3nica, documentadora de la lengua inga, se desplaz\u00f3 hasta la vereda Muchivioy para recoger el testimonio de Margarita Jajoy sobre las dificultades que enfrent\u00f3 para asistir a la escuela durante su infancia y el papel de la instrucci\u00f3n religiosa en la educaci\u00f3n. Pueblo Inga Lengua inga Memoria ancestral Testimonios de los mayores Escolarizaci\u00f3n ind\u00edgena Historia comunitaria Tradici\u00f3n oral Documentaci\u00f3n ling\u00fc\u00edstica Preservaci\u00f3n cultural Pervivencia ind\u00edgena https://www.youtube.com/watch?v=yLlyjt2OnqM&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=5"
    },
    {
      "id": "somos-diversidad-linguistica-28",
      "row": 28,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video El tejido tsombiasb",
      "type": "Video",
      "description": "En la vereda Tamabioy, en el municipio de Sibundoy, el equipo de documentalistas kam\u00ebnt\u0161\u00e1 visit\u00f3 a la mamita Luz Mar\u00eda Victoria Chicunque para conocer m\u00e1s sobre el proceso de tejido del tsombiash (faja o ce\u00f1idor femenino) desde su ni\u00f1ez. En su relato cuenta c\u00f3mo empez\u00f3 tejiendo las primeras l\u00edneas y, posteriormente, las labores (patrones o dibujos con s\u00edmbolos). Cada labor tiene su nombre y significado, representando creencias del territorio, as\u00ed como deidades naturales: el sol (Shin\u00ff\ufe0f), la luna (Juashc\u00f3n) y las estrellas (Shin\u00ffin\u00ffantem), adem\u00e1s de elementos cotidianos como el canasto (sbar\u00ebk), utilizado para recolectar semillas, alimentos y frutos del jaja\u00f1 (chagra).",
      "keywords": [
        "Pueblo inga",
        "Lengua inga",
        "Memoria ancestral",
        "Escolarizaci\u00f3n ind\u00edgena",
        "Tradici\u00f3n oral",
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/watch?v=Kq3eD4zJjWE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=4",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video El tejido tsombiasb Video En la vereda Tamabioy, en el municipio de Sibundoy, el equipo de documentalistas kam\u00ebnt\u0161\u00e1 visit\u00f3 a la mamita Luz Mar\u00eda Victoria Chicunque para conocer m\u00e1s sobre el proceso de tejido del tsombiash (faja o ce\u00f1idor femenino) desde su ni\u00f1ez. En su relato cuenta c\u00f3mo empez\u00f3 tejiendo las primeras l\u00edneas y, posteriormente, las labores (patrones o dibujos con s\u00edmbolos). Cada labor tiene su nombre y significado, representando creencias del territorio, as\u00ed como deidades naturales: el sol (Shin\u00ff\ufe0f), la luna (Juashc\u00f3n) y las estrellas (Shin\u00ffin\u00ffantem), adem\u00e1s de elementos cotidianos como el canasto (sbar\u00ebk), utilizado para recolectar semillas, alimentos y frutos del jaja\u00f1 (chagra). Pueblo inga Lengua inga Memoria ancestral Escolarizaci\u00f3n ind\u00edgena Tradici\u00f3n oral Documentaci\u00f3n ling\u00fc\u00edstica Pervivencia cultural https://www.youtube.com/watch?v=Kq3eD4zJjWE&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=4"
    },
    {
      "id": "somos-diversidad-linguistica-29",
      "row": 29,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video Cantos y arrullos para no olvidar la palabra",
      "type": "Video",
      "description": "En este video vemos y escuchamos a la abuela Genoveva, partera y sabedora de las plantas y de los bailes tradicionales de los murui. Emocionada por poder conversar con alguien m\u00e1s en su lengua, la abuela se uni\u00f3 al proceso de documentaci\u00f3n que adelanta Luz Dary Fl\u00f3rez, tambi\u00e9n murui, en Leticia, Amazonas. En el encuentro, interpret\u00f3 un canto y un arrullo para dormir a los ni\u00f1os en su lengua.",
      "keywords": [
        "Pueblo murui",
        "Lengua murui",
        "Cantos tradicionales",
        "Arrullos ancestrales",
        "Memoria ancestral",
        "Sabidur\u00eda de las abuelas",
        "Cosmovisi\u00f3n ind\u00edgena",
        "Tradici\u00f3n oral",
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/watch?v=8vcYGrB_hFg&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=3",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video Cantos y arrullos para no olvidar la palabra Video En este video vemos y escuchamos a la abuela Genoveva, partera y sabedora de las plantas y de los bailes tradicionales de los murui. Emocionada por poder conversar con alguien m\u00e1s en su lengua, la abuela se uni\u00f3 al proceso de documentaci\u00f3n que adelanta Luz Dary Fl\u00f3rez, tambi\u00e9n murui, en Leticia, Amazonas. En el encuentro, interpret\u00f3 un canto y un arrullo para dormir a los ni\u00f1os en su lengua. Pueblo murui Lengua murui Cantos tradicionales Arrullos ancestrales Memoria ancestral Sabidur\u00eda de las abuelas Cosmovisi\u00f3n ind\u00edgena Tradici\u00f3n oral Documentaci\u00f3n ling\u00fc\u00edstica Pervivencia cultural https://www.youtube.com/watch?v=8vcYGrB_hFg&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=3"
    },
    {
      "id": "somos-diversidad-linguistica-30",
      "row": 30,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "C\u00e1psula de video En vida, una canci\u00f3n en lengua kam\u00ebnt\u0161\u00e1",
      "type": "Video",
      "description": "Con el deseo de documentar su idioma y las pr\u00e1cticas cultuales de su pueblo, Mar\u00eda Antonia Narv\u00e1ez Agreda, documentadora de la lengua kam\u00ebnt\u0161\u00e1, se reuni\u00f3 con bat\u00e1 Eufracia Agreda Miticanoy, en el municipio de Sibundoy (Putumayo), para registrar una canci\u00f3n de su comunidad. Este canto habla sobre el compartir, el cuidado y la importancia de disfrutar y divertirse, siempre con prudencia para evitar cualquier problema de salud.",
      "keywords": [
        "Kam\u00ebnt\u0161\u00e1",
        "Lengua kam\u00ebnt\u0161\u00e1",
        "Cantos tradicionales",
        "Memoria ancestral",
        "Sabidur\u00eda de las mayores",
        "Cosmovisi\u00f3n ind\u00edgena",
        "Tradici\u00f3n oral",
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Fortalecimiento cultural",
        "Pervivencia cultural"
      ],
      "link": "https://www.youtube.com/watch?v=pGvc3CZhRAo&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=2",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo C\u00e1psula de video En vida, una canci\u00f3n en lengua kam\u00ebnt\u0161\u00e1 Video Con el deseo de documentar su idioma y las pr\u00e1cticas cultuales de su pueblo, Mar\u00eda Antonia Narv\u00e1ez Agreda, documentadora de la lengua kam\u00ebnt\u0161\u00e1, se reuni\u00f3 con bat\u00e1 Eufracia Agreda Miticanoy, en el municipio de Sibundoy (Putumayo), para registrar una canci\u00f3n de su comunidad. Este canto habla sobre el compartir, el cuidado y la importancia de disfrutar y divertirse, siempre con prudencia para evitar cualquier problema de salud. Kam\u00ebnt\u0161\u00e1 Lengua kam\u00ebnt\u0161\u00e1 Cantos tradicionales Memoria ancestral Sabidur\u00eda de las mayores Cosmovisi\u00f3n ind\u00edgena Tradici\u00f3n oral Documentaci\u00f3n ling\u00fc\u00edstica Fortalecimiento cultural Pervivencia cultural https://www.youtube.com/watch?v=pGvc3CZhRAo&list=PLddip9xtzY_zaOdYNgfcftmyz7TeOqRCB&index=2"
    },
    {
      "id": "somos-diversidad-linguistica-31",
      "row": 31,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Repositorio de Lenguas Nativas de Colombia",
      "type": "Repositorio",
      "description": "Repositorio de Lenguas Nativas de Colombia del Instituto Caro y Cuervo En el marco de la Feria Internacional del Libro de Bogot\u00e1 (FILBo) 2026, el Instituto Caro y Cuervo presenta el Repositorio de Lenguas Nativas de Colombia, un acervo digital que resguardar\u00e1 las voces, cantos, narrativas orales y saberes ancestrales de comunidades ind\u00edgenas de distintos lugares del pa\u00eds. Se trata del primer repositorio que busca recopilar materiales de todas las lenguas habladas en Colombia, constituy\u00e9ndose en una apuesta sin precedentes por la preservaci\u00f3n y visibilizaci\u00f3n de la diversidad ling\u00fc\u00edstica nacional. El repositorio es uno de los resultados del Programa de Documentaci\u00f3n de Lenguas Nativas, una iniciativa que en 2026 avanza en el registro audiovisual y sonoro de quince lenguas: mira\u00f1a, inga, kam\u00ebnts\u00e1, murui, cacua, nukak, nasa yuwe, namui wam, tatuyo, barasano, wayuunaiki, d\u0289m\u0289na, kankuamo, embera y mapayerri, junto con las pr\u00e1cticas culturales y los saberes que las habitan. Hasta la fecha, este trabajo ha producido m\u00e1s de 130 horas de grabaci\u00f3n, 50 productos audiovisuales que incluyen palabras, frases, narrativas y canciones, y el registro de entre 100 y 300 t\u00e9rminos por lengua en un software especializado para la construcci\u00f3n de diccionarios. Este repositorio tambi\u00e9n se distingue por ser el primero construido con el liderazgo de miembros de comunidades ind\u00edgenas y bajo principios de autonom\u00eda en la gobernanza de los datos. Son los propios documentadores quienes no solo lideran los procesos en sus territorios, sino que adem\u00e1s alimentan de manera continua este acervo, garantizando que los contenidos respondan a sus perspectivas, necesidades y formas de transmisi\u00f3n del conocimiento. Los contenidos del repositorio cuentan con distintos niveles de acceso definidos por los propios miembros de las comunidades. Algunos estar\u00e1n disponibles para consulta abierta de toda la ciudadan\u00eda, mientras que otros ser\u00e1n de acceso restringido para integrantes de los pueblos e investigadores, en respeto de su autonom\u00eda sobre la circulaci\u00f3n de estos saberes. En este sentido, el repositorio ha sido concebido desde su origen como una plataforma accesible para el p\u00fablico general, que trasciende el \u00e1mbito acad\u00e9mico y promueve un acercamiento amplio, respetuoso y significativo a las lenguas y culturas del pa\u00eds. Este archivo es posible gracias al trabajo de los documentadores ind\u00edgenas Elio Mira\u00f1a, M\u00f3nica Jansasoy, Mar\u00eda Antonia Narv\u00e1ez, Luz Dary Fl\u00f3rez, Marina L\u00f3pez, Andersson Causaya, Leonel Cabiyar\u00ed, Jes\u00fas L\u00f3pez y Leonel Vega, quienes lideran los procesos en sus territorios, con el acompa\u00f1amiento de las investigadoras del Instituto Caro y Cuervo Yaty Urquijo y Katherine Bola\u00f1os. El repositorio es un proyecto vivo, en permanente construcci\u00f3n, que crecer\u00e1 de manera progresiva a medida que los documentadores contin\u00faen con su labor en sus territorios. Inicialmente contar\u00e1 con los contenidos documentados en 2025, sobre las lenguas cacua, nukak, inga, mira\u00f1a, kam\u00ebnts\u00e1, murui, nasa yuwe y namui wam, y, a lo largo de este a\u00f1o, se ir\u00e1 complementando con archivos de las otras lenguas que est\u00e1n siendo documentadas. Este repositorio tiene como objetivo abarcar todas las 65 lenguas ind\u00edgenas del pa\u00eds, as\u00ed como las dos lenguas criollas y el roman\u00ed. El Repositorio de Lenguas Nativas de Colombia es una invitaci\u00f3n abierta a escuchar, conocer y reconocer las m\u00faltiples formas en que este pa\u00eds nombra el mundo. Es, adem\u00e1s, una apuesta por preservar estos conocimientos para las generaciones venideras, de modo que puedan encontrar en estos materiales un punto de encuentro consigo mismas y con sus territorios. El repositorio puede consultarse en repositoriolenguas.caroycuervo.gov.co.",
      "keywords": [
        "Repositorio de Lenguas Nativas",
        "Lenguas nativas",
        "Diversidad ling\u00fc\u00edstica",
        "Patrimonio ling\u00fc\u00edstico",
        "Preservaci\u00f3n ling\u00fc\u00edstica",
        "Comunidades ind\u00edgenas",
        "Saberes ancestrales",
        "Documentaci\u00f3n de Lenguas Nativas",
        "Repositorio digital",
        "Salvaguardia cultural",
        "Revitalizaci\u00f3n ling\u00fc\u00edstica"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "repositoriolenguas.caroycuervo.gov.co (actualmente el enlace no est\u00e1 activo, pero funcionar\u00e1 en los pr\u00f3ximos d\u00edas) https://drive.google.com/drive/folders/1DW44cLMa4u01SQuZrbJuKV3n9bxx0PC3?usp=drive_link",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo Repositorio de Lenguas Nativas de Colombia Repositorio Repositorio de Lenguas Nativas de Colombia del Instituto Caro y Cuervo En el marco de la Feria Internacional del Libro de Bogot\u00e1 (FILBo) 2026, el Instituto Caro y Cuervo presenta el Repositorio de Lenguas Nativas de Colombia, un acervo digital que resguardar\u00e1 las voces, cantos, narrativas orales y saberes ancestrales de comunidades ind\u00edgenas de distintos lugares del pa\u00eds. Se trata del primer repositorio que busca recopilar materiales de todas las lenguas habladas en Colombia, constituy\u00e9ndose en una apuesta sin precedentes por la preservaci\u00f3n y visibilizaci\u00f3n de la diversidad ling\u00fc\u00edstica nacional. El repositorio es uno de los resultados del Programa de Documentaci\u00f3n de Lenguas Nativas, una iniciativa que en 2026 avanza en el registro audiovisual y sonoro de quince lenguas: mira\u00f1a, inga, kam\u00ebnts\u00e1, murui, cacua, nukak, nasa yuwe, namui wam, tatuyo, barasano, wayuunaiki, d\u0289m\u0289na, kankuamo, embera y mapayerri, junto con las pr\u00e1cticas culturales y los saberes que las habitan. Hasta la fecha, este trabajo ha producido m\u00e1s de 130 horas de grabaci\u00f3n, 50 productos audiovisuales que incluyen palabras, frases, narrativas y canciones, y el registro de entre 100 y 300 t\u00e9rminos por lengua en un software especializado para la construcci\u00f3n de diccionarios. Este repositorio tambi\u00e9n se distingue por ser el primero construido con el liderazgo de miembros de comunidades ind\u00edgenas y bajo principios de autonom\u00eda en la gobernanza de los datos. Son los propios documentadores quienes no solo lideran los procesos en sus territorios, sino que adem\u00e1s alimentan de manera continua este acervo, garantizando que los contenidos respondan a sus perspectivas, necesidades y formas de transmisi\u00f3n del conocimiento. Los contenidos del repositorio cuentan con distintos niveles de acceso definidos por los propios miembros de las comunidades. Algunos estar\u00e1n disponibles para consulta abierta de toda la ciudadan\u00eda, mientras que otros ser\u00e1n de acceso restringido para integrantes de los pueblos e investigadores, en respeto de su autonom\u00eda sobre la circulaci\u00f3n de estos saberes. En este sentido, el repositorio ha sido concebido desde su origen como una plataforma accesible para el p\u00fablico general, que trasciende el \u00e1mbito acad\u00e9mico y promueve un acercamiento amplio, respetuoso y significativo a las lenguas y culturas del pa\u00eds. Este archivo es posible gracias al trabajo de los documentadores ind\u00edgenas Elio Mira\u00f1a, M\u00f3nica Jansasoy, Mar\u00eda Antonia Narv\u00e1ez, Luz Dary Fl\u00f3rez, Marina L\u00f3pez, Andersson Causaya, Leonel Cabiyar\u00ed, Jes\u00fas L\u00f3pez y Leonel Vega, quienes lideran los procesos en sus territorios, con el acompa\u00f1amiento de las investigadoras del Instituto Caro y Cuervo Yaty Urquijo y Katherine Bola\u00f1os. El repositorio es un proyecto vivo, en permanente construcci\u00f3n, que crecer\u00e1 de manera progresiva a medida que los documentadores contin\u00faen con su labor en sus territorios. Inicialmente contar\u00e1 con los contenidos documentados en 2025, sobre las lenguas cacua, nukak, inga, mira\u00f1a, kam\u00ebnts\u00e1, murui, nasa yuwe y namui wam, y, a lo largo de este a\u00f1o, se ir\u00e1 complementando con archivos de las otras lenguas que est\u00e1n siendo documentadas. Este repositorio tiene como objetivo abarcar todas las 65 lenguas ind\u00edgenas del pa\u00eds, as\u00ed como las dos lenguas criollas y el roman\u00ed. El Repositorio de Lenguas Nativas de Colombia es una invitaci\u00f3n abierta a escuchar, conocer y reconocer las m\u00faltiples formas en que este pa\u00eds nombra el mundo. Es, adem\u00e1s, una apuesta por preservar estos conocimientos para las generaciones venideras, de modo que puedan encontrar en estos materiales un punto de encuentro consigo mismas y con sus territorios. El repositorio puede consultarse en repositoriolenguas.caroycuervo.gov.co. Repositorio de Lenguas Nativas Lenguas nativas Diversidad ling\u00fc\u00edstica Patrimonio ling\u00fc\u00edstico Preservaci\u00f3n ling\u00fc\u00edstica Comunidades ind\u00edgenas Saberes ancestrales Documentaci\u00f3n de Lenguas Nativas Repositorio digital Salvaguardia cultural Revitalizaci\u00f3n ling\u00fc\u00edstica repositoriolenguas.caroycuervo.gov.co (actualmente el enlace no est\u00e1 activo, pero funcionar\u00e1 en los pr\u00f3ximos d\u00edas) https://drive.google.com/drive/folders/1DW44cLMa4u01SQuZrbJuKV3n9bxx0PC3?usp=drive_link"
    },
    {
      "id": "somos-diversidad-linguistica-32",
      "row": 32,
      "theme": "Somos diversidad ling\u00fc\u00edstica",
      "theme_slug": "somos-diversidad-linguistica",
      "responsable": "Instituto Caro y Cuervo",
      "title": "Actualizaci\u00f3n del Mapa de lenguas nativas de Colombia",
      "type": "Programa",
      "description": "Integrantes de pueblos ind\u00edgenas de Colombia, en articulaci\u00f3n con el Instituto Caro y Cuervo, la Direcci\u00f3n de Poblaciones del Ministerio de las Culturas, las Artes y los Saberes, Amazon Conservation Team, el Instituto Geogr\u00e1fico Agust\u00edn Codazzi y el Instituto Colombiano de Antropolog\u00eda e Historia, avanzan en la actualizaci\u00f3n del Mapa de Lenguas Nativas de Colombia. Este proceso busca consolidar un mapa concebido como una herramienta viva, en constante construcci\u00f3n y transformaci\u00f3n, capaz de dar cuenta de la diversidad ling\u00fc\u00edstica del pa\u00eds desde una perspectiva amplia e incluyente. M\u00e1s all\u00e1 de ubicar geogr\u00e1ficamente las lenguas, la iniciativa pretende visibilizar a los pueblos desde sus propias formas de nombrarse, reconocer la riqueza de sus pr\u00e1cticas culturales y ofrecer una comprensi\u00f3n m\u00e1s profunda sobre d\u00f3nde se hablan las lenguas y cu\u00e1l es su situaci\u00f3n actual. El Mapa de Lenguas Nativas se proyecta como un instrumento clave para el reconocimiento, la salvaguardia y la valoraci\u00f3n del patrimonio ling\u00fc\u00edstico de Colombia, as\u00ed como un punto de encuentro entre comunidades, instituciones y saberes que contribuye al fortalecimiento de la diversidad cultural del pa\u00eds.",
      "keywords": [
        "Mapa de lenguas",
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Registro ling\u00fc\u00edstico",
        "Salvaguardia ling\u00fc\u00edstica",
        "Preservaci\u00f3n cultural",
        "Fortalecimiento cultural"
      ],
      "link": "https://www.caroycuervo.gov.co/desde-los-pueblos-con-los-pueblos-asi-avanzamos-en-la-actualizacion-del-mapa-de-lenguas-nativas-de-colombia/ https://www.flickr.com/photos/caroycuervo/albums/72177720331844010/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos diversidad ling\u00fc\u00edstica Instituto Caro y Cuervo Actualizaci\u00f3n del Mapa de lenguas nativas de Colombia Programa Integrantes de pueblos ind\u00edgenas de Colombia, en articulaci\u00f3n con el Instituto Caro y Cuervo, la Direcci\u00f3n de Poblaciones del Ministerio de las Culturas, las Artes y los Saberes, Amazon Conservation Team, el Instituto Geogr\u00e1fico Agust\u00edn Codazzi y el Instituto Colombiano de Antropolog\u00eda e Historia, avanzan en la actualizaci\u00f3n del Mapa de Lenguas Nativas de Colombia. Este proceso busca consolidar un mapa concebido como una herramienta viva, en constante construcci\u00f3n y transformaci\u00f3n, capaz de dar cuenta de la diversidad ling\u00fc\u00edstica del pa\u00eds desde una perspectiva amplia e incluyente. M\u00e1s all\u00e1 de ubicar geogr\u00e1ficamente las lenguas, la iniciativa pretende visibilizar a los pueblos desde sus propias formas de nombrarse, reconocer la riqueza de sus pr\u00e1cticas culturales y ofrecer una comprensi\u00f3n m\u00e1s profunda sobre d\u00f3nde se hablan las lenguas y cu\u00e1l es su situaci\u00f3n actual. El Mapa de Lenguas Nativas se proyecta como un instrumento clave para el reconocimiento, la salvaguardia y la valoraci\u00f3n del patrimonio ling\u00fc\u00edstico de Colombia, as\u00ed como un punto de encuentro entre comunidades, instituciones y saberes que contribuye al fortalecimiento de la diversidad cultural del pa\u00eds. Mapa de lenguas Documentaci\u00f3n ling\u00fc\u00edstica Registro ling\u00fc\u00edstico Salvaguardia ling\u00fc\u00edstica Preservaci\u00f3n cultural Fortalecimiento cultural https://www.caroycuervo.gov.co/desde-los-pueblos-con-los-pueblos-asi-avanzamos-en-la-actualizacion-del-mapa-de-lenguas-nativas-de-colombia/ https://www.flickr.com/photos/caroycuervo/albums/72177720331844010/"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-33",
      "row": 33,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "C\u00e1psula de Video Yo quisiera vivir en el para\u00edso",
      "type": "Video",
      "description": "La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de naci\u00f3n",
        "Representaci\u00f3n social",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusi\u00f3n",
        "Enfoque territorial",
        "Investigaci\u00f3n colaborativa",
        "Participaci\u00f3n comunitaria",
        "Espacios de di\u00e1logo",
        "Transformaci\u00f3n cultural",
        "Memoria campesina",
        "Pr\u00e1cticas culturales",
        "Reconocimiento social",
        "M\u00fasica campesina"
      ],
      "link": "https://www.youtube.com/shorts/DICSihgX_OU",
      "asset_link": "",
      "force_message": "La m\u00fasica nos recuerda que Colombia es campesina. \u00a1Y as\u00ed le cantan campesinas y campesinos a nuestro pa\u00eds!",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH C\u00e1psula de Video Yo quisiera vivir en el para\u00edso Video La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n. La m\u00fasica nos recuerda que Colombia es campesina. \u00a1Y as\u00ed le cantan campesinas y campesinos a nuestro pa\u00eds! Vidas campesinas Cultura campesina Identidad rural Narrativas de naci\u00f3n Representaci\u00f3n social Diversidad cultural Diversidad regional Inclusi\u00f3n Enfoque territorial Investigaci\u00f3n colaborativa Participaci\u00f3n comunitaria Espacios de di\u00e1logo Transformaci\u00f3n cultural Memoria campesina Pr\u00e1cticas culturales Reconocimiento social M\u00fasica campesina https://www.youtube.com/shorts/DICSihgX_OU"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-34",
      "row": 34,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composici\u00f3n musical Somos Campesinos",
      "type": "Sonoro",
      "description": "La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta inicitiva busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de naci\u00f3n",
        "Representaci\u00f3n cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusi\u00f3n",
        "Enfoque territorial",
        "Investigaci\u00f3n colaborativa",
        "Participaci\u00f3n comunitaria",
        "Espacios de di\u00e1logo",
        "Transformaci\u00f3n de narrativas",
        "Memoria campesina",
        "Pr\u00e1cticas culturales",
        "Reconocimiento social",
        "M\u00fasica campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/5CdycWicFUq4jColTv8CBs?si=64536e13fa48463c&nd=1&dlsi=cec411540c2b4f74",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Composici\u00f3n musical Somos Campesinos Sonoro La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta inicitiva busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n. Vidas campesinas Cultura campesina Identidad rural Narrativas de naci\u00f3n Representaci\u00f3n cultural Diversidad cultural Diversidad regional Inclusi\u00f3n Enfoque territorial Investigaci\u00f3n colaborativa Participaci\u00f3n comunitaria Espacios de di\u00e1logo Transformaci\u00f3n de narrativas Memoria campesina Pr\u00e1cticas culturales Reconocimiento social M\u00fasica campesina https://open.spotify.com/intl-es/track/5CdycWicFUq4jColTv8CBs?si=64536e13fa48463c&nd=1&dlsi=cec411540c2b4f74"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-35",
      "row": 35,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composici\u00f3n musical El tesoro",
      "type": "Sonoro",
      "description": "La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de naci\u00f3n",
        "Representaci\u00f3n cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusi\u00f3n",
        "Enfoque territorial",
        "Investigaci\u00f3n colaborativa",
        "Participaci\u00f3n comunitaria",
        "Espacios de di\u00e1logo",
        "Transformaci\u00f3n de narrativas",
        "Memoria campesina",
        "Pr\u00e1cticas culturales",
        "Reconocimiento social",
        "M\u00fasica campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/64aulKuVu2F5dUXunHXez2?si=6b28115326f24df1&nd=1&dlsi=63a6f7c995914cbb",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Composici\u00f3n musical El tesoro Sonoro La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n. Vidas campesinas Cultura campesina Identidad rural Narrativas de naci\u00f3n Representaci\u00f3n cultural Diversidad cultural Diversidad regional Inclusi\u00f3n Enfoque territorial Investigaci\u00f3n colaborativa Participaci\u00f3n comunitaria Espacios de di\u00e1logo Transformaci\u00f3n de narrativas Memoria campesina Pr\u00e1cticas culturales Reconocimiento social M\u00fasica campesina https://open.spotify.com/intl-es/track/64aulKuVu2F5dUXunHXez2?si=6b28115326f24df1&nd=1&dlsi=63a6f7c995914cbb"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-36",
      "row": 36,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composici\u00f3n musical Tonada del arcoiris",
      "type": "Sonoro",
      "description": "La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de naci\u00f3n",
        "Representaci\u00f3n cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusi\u00f3n",
        "Enfoque territorial",
        "Investigaci\u00f3n colaborativa",
        "Participaci\u00f3n comunitaria",
        "Espacios de di\u00e1logo",
        "Transformaci\u00f3n de narrativas",
        "Memoria campesina",
        "Pr\u00e1cticas culturales",
        "Reconocimiento social",
        "M\u00fasica campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/5W0b96rV74nne5rhtoukk8?si=ede9b48ddead49ff&nd=1&dlsi=06d4b015c4fb4c85",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Composici\u00f3n musical Tonada del arcoiris Sonoro La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n. Vidas campesinas Cultura campesina Identidad rural Narrativas de naci\u00f3n Representaci\u00f3n cultural Diversidad cultural Diversidad regional Inclusi\u00f3n Enfoque territorial Investigaci\u00f3n colaborativa Participaci\u00f3n comunitaria Espacios de di\u00e1logo Transformaci\u00f3n de narrativas Memoria campesina Pr\u00e1cticas culturales Reconocimiento social M\u00fasica campesina https://open.spotify.com/intl-es/track/5W0b96rV74nne5rhtoukk8?si=ede9b48ddead49ff&nd=1&dlsi=06d4b015c4fb4c85"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-37",
      "row": 37,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composici\u00f3n musical Hay que sembrar",
      "type": "Sonoro",
      "description": "La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de naci\u00f3n",
        "Representaci\u00f3n cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusi\u00f3n",
        "Enfoque territorial",
        "Investigaci\u00f3n colaborativa",
        "Participaci\u00f3n comunitaria",
        "Espacios de di\u00e1logo",
        "Transformaci\u00f3n de narrativas",
        "Memoria campesina",
        "Pr\u00e1cticas culturales",
        "Reconocimiento social",
        "M\u00fasica campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/5CdycWicFUq4jColTv8CBs?si=64536e13fa48463c&nd=1&dlsi=92297bdebec44158",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Composici\u00f3n musical Hay que sembrar Sonoro La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n Vidas campesinas Cultura campesina Identidad rural Narrativas de naci\u00f3n Representaci\u00f3n cultural Diversidad cultural Diversidad regional Inclusi\u00f3n Enfoque territorial Investigaci\u00f3n colaborativa Participaci\u00f3n comunitaria Espacios de di\u00e1logo Transformaci\u00f3n de narrativas Memoria campesina Pr\u00e1cticas culturales Reconocimiento social M\u00fasica campesina https://open.spotify.com/intl-es/track/5CdycWicFUq4jColTv8CBs?si=64536e13fa48463c&nd=1&dlsi=92297bdebec44158"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-38",
      "row": 38,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composici\u00f3n musical Con zapatillas o botas",
      "type": "Sonoro",
      "description": "La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia, incidiendo en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de naci\u00f3n",
        "Representaci\u00f3n cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusi\u00f3n",
        "Enfoque territorial",
        "Investigaci\u00f3n colaborativa",
        "Participaci\u00f3n comunitaria",
        "Espacios de di\u00e1logo",
        "Transformaci\u00f3n de narrativas",
        "Memoria campesina",
        "Pr\u00e1cticas culturales",
        "Reconocimiento social",
        "M\u00fasica campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/4ei8KDPBbRa5comqMkrt5r?si=a0033be3ff164b88",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Composici\u00f3n musical Con zapatillas o botas Sonoro La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia, incidiendo en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n. Vidas campesinas Cultura campesina Identidad rural Narrativas de naci\u00f3n Representaci\u00f3n cultural Diversidad cultural Diversidad regional Inclusi\u00f3n Enfoque territorial Investigaci\u00f3n colaborativa Participaci\u00f3n comunitaria Espacios de di\u00e1logo Transformaci\u00f3n de narrativas Memoria campesina Pr\u00e1cticas culturales Reconocimiento social M\u00fasica campesina https://open.spotify.com/intl-es/track/4ei8KDPBbRa5comqMkrt5r?si=a0033be3ff164b88"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-39",
      "row": 39,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Composici\u00f3n musical Semillas del futuro",
      "type": "Sonoro",
      "description": "La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n.",
      "keywords": [
        "Vidas campesinas",
        "Cultura campesina",
        "Identidad rural",
        "Narrativas de naci\u00f3n",
        "Representaci\u00f3n cultural",
        "Diversidad cultural",
        "Diversidad regional",
        "Inclusi\u00f3n",
        "Enfoque territorial",
        "Investigaci\u00f3n colaborativa",
        "Participaci\u00f3n comunitaria",
        "Espacios de di\u00e1logo",
        "Transformaci\u00f3n de narrativas",
        "Memoria campesina",
        "Pr\u00e1cticas culturales",
        "Reconocimiento social",
        "M\u00fasica campesina"
      ],
      "link": "https://open.spotify.com/intl-es/track/5W0b96rV74nne5rhtoukk8?si=73cac6b965584e92",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Composici\u00f3n musical Semillas del futuro Sonoro La m\u00fasica nos recuerda que Colombia es campesina. Vidas campesinas es un proyecto que busca incidir en la transformaci\u00f3n de las narrativas de naci\u00f3n sobre las formas de vida campesina, promoviendo una visi\u00f3n inclusiva y respetuosa de la diversidad cultural y regional de Colombia. Esta iniciativa busca incidir en las formas de representaci\u00f3n de las vidas campesinas a trav\u00e9s de la investigaci\u00f3n colaborativa, la generaci\u00f3n de espacios de di\u00e1logo y participaci\u00f3n. Vidas campesinas Cultura campesina Identidad rural Narrativas de naci\u00f3n Representaci\u00f3n cultural Diversidad cultural Diversidad regional Inclusi\u00f3n Enfoque territorial Investigaci\u00f3n colaborativa Participaci\u00f3n comunitaria Espacios de di\u00e1logo Transformaci\u00f3n de narrativas Memoria campesina Pr\u00e1cticas culturales Reconocimiento social M\u00fasica campesina https://open.spotify.com/intl-es/track/5W0b96rV74nne5rhtoukk8?si=73cac6b965584e92"
    },
    {
      "id": "somos-economias-populares-40",
      "row": 40,
      "theme": "Somos econom\u00edas populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "Videoclip As\u00ed se vive el campo",
      "type": "Videoclip",
      "description": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta. Videoclip de la canci\u00f3n As\u00ed se vive en el campo compuesta e interpretada por Pedro Nel Amado Buitrago y Campesino Faculto (Juan Ram\u00f3n Amado Quintero), con im\u00e1genes de una jornada de Convite y sacanza de papa en San Pedro de Iguaque y Motavita.",
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Vida campesina",
        "Cultura rural",
        "M\u00fasica campesina",
        "Videoclip",
        "Representaci\u00f3n territorial",
        "Boyac\u00e1",
        "Caribe",
        "Bogot\u00e1",
        "Guain\u00eda",
        "Identidad cultural",
        "Pr\u00e1cticas campesinas",
        "Convite",
        "Sacanza de papa",
        "Trabajo comunitario",
        "Tradici\u00f3n rural",
        "Pedro Nel Amado Buitrago",
        "Campesino Faculto",
        "Narrativas audiovisuales"
      ],
      "link": "https://www.youtube.com/watch?v=9a60iotLujI",
      "asset_link": "",
      "force_message": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta.",
      "availability_note": "",
      "search_text": "Somos econom\u00edas populares ICANH Videoclip As\u00ed se vive el campo Videoclip La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta. Videoclip de la canci\u00f3n As\u00ed se vive en el campo compuesta e interpretada por Pedro Nel Amado Buitrago y Campesino Faculto (Juan Ram\u00f3n Amado Quintero), con im\u00e1genes de una jornada de Convite y sacanza de papa en San Pedro de Iguaque y Motavita. La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta. Diversidad cultural Territorios Vida campesina Cultura rural M\u00fasica campesina Videoclip Representaci\u00f3n territorial Boyac\u00e1 Caribe Bogot\u00e1 Guain\u00eda Identidad cultural Pr\u00e1cticas campesinas Convite Sacanza de papa Trabajo comunitario Tradici\u00f3n rural Pedro Nel Amado Buitrago Campesino Faculto Narrativas audiovisuales https://www.youtube.com/watch?v=9a60iotLujI"
    },
    {
      "id": "somos-economias-populares-41",
      "row": 41,
      "theme": "Somos econom\u00edas populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "Videoclip Sempegua, mi tierra",
      "type": "Videoclip",
      "description": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta.Videoclip de la canci\u00f3n Sempegua, mi tierra, de Alfonso Rocha y Leonar Morales, rodado en Sempegua y en la ci\u00e9naga de Zapatosa, que ilustra sobre las diversas maneras en que los habitantes de la regi\u00f3n viven el d\u00eda a d\u00eda de la econom\u00eda popular.",
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Vida cotidiana",
        "Econom\u00eda popular",
        "Cultura local",
        "M\u00fasica tradicional",
        "Videoclip",
        "Identidad cultural",
        "Regi\u00f3n Caribe",
        "Sempegua",
        "Ci\u00e9naga de Zapatosa",
        "Alfonso Rocha",
        "Leonar Morales",
        "Pr\u00e1cticas econ\u00f3micas",
        "Trabajo comunitario",
        "Narrativas audiovisuales",
        "Representaci\u00f3n territorial",
        "Cultura anfibia"
      ],
      "link": "https://www.youtube.com/watch?v=OMBEbA1jh80",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos econom\u00edas populares ICANH Videoclip Sempegua, mi tierra Videoclip La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta.Videoclip de la canci\u00f3n Sempegua, mi tierra, de Alfonso Rocha y Leonar Morales, rodado en Sempegua y en la ci\u00e9naga de Zapatosa, que ilustra sobre las diversas maneras en que los habitantes de la regi\u00f3n viven el d\u00eda a d\u00eda de la econom\u00eda popular. Diversidad cultural Territorios Vida cotidiana Econom\u00eda popular Cultura local M\u00fasica tradicional Videoclip Identidad cultural Regi\u00f3n Caribe Sempegua Ci\u00e9naga de Zapatosa Alfonso Rocha Leonar Morales Pr\u00e1cticas econ\u00f3micas Trabajo comunitario Narrativas audiovisuales Representaci\u00f3n territorial Cultura anfibia https://www.youtube.com/watch?v=OMBEbA1jh80"
    },
    {
      "id": "somos-economias-populares-42",
      "row": 42,
      "theme": "Somos econom\u00edas populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "Videoclip Bajo el sol",
      "type": "Videoclip",
      "description": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta. Compuesto para la producci\u00f3n audiovisual y sonora Econom\u00edas populares. Videoclip de Bajo el sol, canci\u00f3n del artista JHECO, con los escenarios del cerro de Mavecure, el mercado de El Paujil y las calles de In\u00edrida, cantada en curripaco y espa\u00f1ol.",
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Econom\u00edas populares",
        "Vida cotidiana",
        "M\u00fasica",
        "Videoclip",
        "JHECO",
        "Curripaco",
        "Espa\u00f1ol (biling\u00fcismo)",
        "Lenguas nativas",
        "Identidad cultural",
        "Guain\u00eda",
        "Cerro de Mavecure",
        "In\u00edrida",
        "Mercado de El Paujil",
        "Trabajo local",
        "Pr\u00e1cticas econ\u00f3micas",
        "Narrativas audiovisuales",
        "Representaci\u00f3n territorial"
      ],
      "link": "https://www.youtube.com/watch?v=UVvkf-CJPFE",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos econom\u00edas populares ICANH Videoclip Bajo el sol Videoclip La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta. Compuesto para la producci\u00f3n audiovisual y sonora Econom\u00edas populares. Videoclip de Bajo el sol, canci\u00f3n del artista JHECO, con los escenarios del cerro de Mavecure, el mercado de El Paujil y las calles de In\u00edrida, cantada en curripaco y espa\u00f1ol. Diversidad cultural Territorios Econom\u00edas populares Vida cotidiana M\u00fasica Videoclip JHECO Curripaco Espa\u00f1ol (biling\u00fcismo) Lenguas nativas Identidad cultural Guain\u00eda Cerro de Mavecure In\u00edrida Mercado de El Paujil Trabajo local Pr\u00e1cticas econ\u00f3micas Narrativas audiovisuales Representaci\u00f3n territorial https://www.youtube.com/watch?v=UVvkf-CJPFE"
    },
    {
      "id": "somos-economias-populares-43",
      "row": 43,
      "theme": "Somos econom\u00edas populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "Videoclip El Siete existe",
      "type": "Videoclip",
      "description": "La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta.Videoclip de la canci\u00f3n El 7 existe de la rapera bogotana Feback (Fernanda Blanco), que ilustra con su l\u00edrica los pormenores de la vida cotidiana en el mercado de autopartes del Siete de agosto, tanto en los talleres donde mujeres mec\u00e1nicas trabajan d\u00eda a d\u00eda, como en las calles del barrio.",
      "keywords": [
        "Diversidad cultural",
        "Territorios",
        "Vida urbana",
        "Cultura popular",
        "M\u00fasica urbana",
        "Rap",
        "Videoclip",
        "Feback (Fernanda Blanco)",
        "Bogot\u00e1",
        "Siete de Agosto",
        "Mercado de autopartes",
        "Trabajo mec\u00e1nico",
        "Mujeres mec\u00e1nicas",
        "G\u00e9nero y trabajo",
        "Vida cotidiana",
        "Econom\u00eda popular",
        "Barrio",
        "Narrativas audiovisuales",
        "Representaci\u00f3n urbana"
      ],
      "link": "https://www.youtube.com/watch?v=RDSuHcJlZCc",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos econom\u00edas populares ICANH Videoclip El Siete existe Videoclip La diversidad en Colombia se refleja en las formas que tenemos de vivir en los diferentes territorios del pa\u00eds. De Guain\u00eda a Boyac\u00e1, del Caribe a Bogot\u00e1, la vida se canta.Videoclip de la canci\u00f3n El 7 existe de la rapera bogotana Feback (Fernanda Blanco), que ilustra con su l\u00edrica los pormenores de la vida cotidiana en el mercado de autopartes del Siete de agosto, tanto en los talleres donde mujeres mec\u00e1nicas trabajan d\u00eda a d\u00eda, como en las calles del barrio. Diversidad cultural Territorios Vida urbana Cultura popular M\u00fasica urbana Rap Videoclip Feback (Fernanda Blanco) Bogot\u00e1 Siete de Agosto Mercado de autopartes Trabajo mec\u00e1nico Mujeres mec\u00e1nicas G\u00e9nero y trabajo Vida cotidiana Econom\u00eda popular Barrio Narrativas audiovisuales Representaci\u00f3n urbana https://www.youtube.com/watch?v=RDSuHcJlZCc"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-44",
      "row": 44,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Podcast En movimiento: m\u00fasicas y fronteras",
      "type": "Podcast",
      "description": "En Movimiento: m\u00fasicas y fronteras es un podcast que se enfoca en la m\u00fasica y su relaci\u00f3n con las fronteras, explorando y celebrando la diversidad cultural y musical en Colombia. A lo largo de ocho episodios, exploramos distintas narrativas y perspectivas relacionadas con expresiones culturales de poblaciones fronterizas, su relaci\u00f3n con la poblaci\u00f3n migrante y los paisajes sonoros que los acompa\u00f1an.",
      "keywords": [
        "Podcast",
        "M\u00fasica",
        "Fronteras",
        "M\u00fasicas fronterizas",
        "Diversidad cultural",
        "Paisajes sonoros",
        "Narrativas culturales",
        "Expresiones culturales",
        "Poblaciones fronterizas",
        "Migraci\u00f3n",
        "Interculturalidad",
        "Identidad cultural",
        "Territorio",
        "Movilidad humana",
        "Sonoridades",
        "Relaci\u00f3n cultura\u2013territorio",
        "Producci\u00f3n sonora"
      ],
      "link": "https://open.spotify.com/show/43DiLAqH6fAGv5qtdDJlme?si=0ee8770b52ef44ef",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Podcast En movimiento: m\u00fasicas y fronteras Podcast En Movimiento: m\u00fasicas y fronteras es un podcast que se enfoca en la m\u00fasica y su relaci\u00f3n con las fronteras, explorando y celebrando la diversidad cultural y musical en Colombia. A lo largo de ocho episodios, exploramos distintas narrativas y perspectivas relacionadas con expresiones culturales de poblaciones fronterizas, su relaci\u00f3n con la poblaci\u00f3n migrante y los paisajes sonoros que los acompa\u00f1an. Podcast M\u00fasica Fronteras M\u00fasicas fronterizas Diversidad cultural Paisajes sonoros Narrativas culturales Expresiones culturales Poblaciones fronterizas Migraci\u00f3n Interculturalidad Identidad cultural Territorio Movilidad humana Sonoridades Relaci\u00f3n cultura\u2013territorio Producci\u00f3n sonora https://open.spotify.com/show/43DiLAqH6fAGv5qtdDJlme?si=0ee8770b52ef44ef"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-45",
      "row": 45,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Documental Saberes soberanos",
      "type": "Documental",
      "description": "Campesinas y campesinos, l\u00edderes sociales, artistas, profesionales y t\u00e9cnicos de los municipios de Morelia, San Jos\u00e9 del Fragua, Bel\u00e9n de los Andaqu\u00edes, El Doncello, Solano y Florencia, en el departamento del Caquet\u00e1, se han unido en un espacio aut\u00f3nomo y comunitario de investigaci\u00f3n y educaci\u00f3n propia. Todos ellos buscan frenar la deforestaci\u00f3n en las veredas, restaurar los bosques, mejorar la calidad de las aguas, planificar las fincas y generar sistemas de producci\u00f3n basados en la naturaleza.",
      "keywords": [
        "Campesinos y campesinas",
        "Liderazgo social",
        "Participaci\u00f3n comunitaria",
        "Investigaci\u00f3n comunitaria",
        "Educaci\u00f3n propia",
        "Autonom\u00eda territorial",
        "Caquet\u00e1",
        "Morelia",
        "San Jos\u00e9 del Fragua",
        "Bel\u00e9n de los Andaqu\u00edes",
        "El Doncello",
        "Solano",
        "Florencia",
        "Deforestaci\u00f3n",
        "Restauraci\u00f3n de bosques",
        "Cuidado del agua",
        "Planificaci\u00f3n territorial",
        "Sistemas productivos sostenibles",
        "Producci\u00f3n basada en la naturaleza",
        "Sostenibilidad ambiental"
      ],
      "link": "https://www.youtube.com/watch?v=YAlY5hnZgBY&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=34",
      "asset_link": "",
      "force_message": "Colombia se construye desde nuestra relaci\u00f3n con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor.",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Documental Saberes soberanos Documental Campesinas y campesinos, l\u00edderes sociales, artistas, profesionales y t\u00e9cnicos de los municipios de Morelia, San Jos\u00e9 del Fragua, Bel\u00e9n de los Andaqu\u00edes, El Doncello, Solano y Florencia, en el departamento del Caquet\u00e1, se han unido en un espacio aut\u00f3nomo y comunitario de investigaci\u00f3n y educaci\u00f3n propia. Todos ellos buscan frenar la deforestaci\u00f3n en las veredas, restaurar los bosques, mejorar la calidad de las aguas, planificar las fincas y generar sistemas de producci\u00f3n basados en la naturaleza. Colombia se construye desde nuestra relaci\u00f3n con la tierra. Conocimientos que se crean y se comparten a diario para vivir mejor. Campesinos y campesinas Liderazgo social Participaci\u00f3n comunitaria Investigaci\u00f3n comunitaria Educaci\u00f3n propia Autonom\u00eda territorial Caquet\u00e1 Morelia San Jos\u00e9 del Fragua Bel\u00e9n de los Andaqu\u00edes El Doncello Solano Florencia Deforestaci\u00f3n Restauraci\u00f3n de bosques Cuidado del agua Planificaci\u00f3n territorial Sistemas productivos sostenibles Producci\u00f3n basada en la naturaleza Sostenibilidad ambiental https://www.youtube.com/watch?v=YAlY5hnZgBY&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=34"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-46",
      "row": 46,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Documental De pasados y presentes remotos",
      "type": "Documental",
      "description": "En la vereda Bocas del Raudal de San Jos\u00e9 del Guaviare, afectada durante d\u00e9cadas por las inclemencias de la guerra, la comunidad campesina aprovecha desde 2016 las oportunidades que trajo la firma del Acuerdo de Paz entre las FARC-EP y el gobierno colombiano. La regi\u00f3n, antes mayoritariamente cocalera, desaf\u00eda hoy las tensiones propias de una vida campesina que ha sumado a sus actividades productivas el turismo comunitario, la conservaci\u00f3n ambiental y la protecci\u00f3n del patrimonio arqueol\u00f3gico.",
      "keywords": [
        "Comunidad campesina",
        "San Jos\u00e9 del Guaviare",
        "Bocas del Raudal",
        "Posconflicto",
        "Acuerdo de Paz",
        "FARC-EP",
        "Transformaci\u00f3n territorial",
        "Sustituci\u00f3n de econom\u00edas il\u00edcitas",
        "Turismo comunitario",
        "Conservaci\u00f3n ambiental",
        "Patrimonio arqueol\u00f3gico",
        "Memoria territorial",
        "Resiliencia",
        "Desarrollo rural",
        "Diversificaci\u00f3n productiva",
        "Econom\u00eda campesina",
        "Construcci\u00f3n de paz"
      ],
      "link": "https://www.youtube.com/watch?v=QtbQh-x3ohI&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=33",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Documental De pasados y presentes remotos Documental En la vereda Bocas del Raudal de San Jos\u00e9 del Guaviare, afectada durante d\u00e9cadas por las inclemencias de la guerra, la comunidad campesina aprovecha desde 2016 las oportunidades que trajo la firma del Acuerdo de Paz entre las FARC-EP y el gobierno colombiano. La regi\u00f3n, antes mayoritariamente cocalera, desaf\u00eda hoy las tensiones propias de una vida campesina que ha sumado a sus actividades productivas el turismo comunitario, la conservaci\u00f3n ambiental y la protecci\u00f3n del patrimonio arqueol\u00f3gico. Comunidad campesina San Jos\u00e9 del Guaviare Bocas del Raudal Posconflicto Acuerdo de Paz FARC-EP Transformaci\u00f3n territorial Sustituci\u00f3n de econom\u00edas il\u00edcitas Turismo comunitario Conservaci\u00f3n ambiental Patrimonio arqueol\u00f3gico Memoria territorial Resiliencia Desarrollo rural Diversificaci\u00f3n productiva Econom\u00eda campesina Construcci\u00f3n de paz https://www.youtube.com/watch?v=QtbQh-x3ohI&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=33"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-47",
      "row": 47,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Documental Cuidar lo nuestro",
      "type": "Documental",
      "description": "En el contexto actual del conflicto armado en Colombia y pese al Acuerdo de paz con las FARC-EP, distintos actores se disputan el control de los territorios, sus recursos y las fidelidades de las comunidades. Como una forma de defender los territorios vulnerados, las guardias ind\u00edgenas, campesinas y cimarronas del municipio de Su\u00e1rez, al norte del departamento del Cauca, son un ejemplo de resistencia pac\u00edfica, de convivencias interculturales y una alternativa a la defensa de la vida campesina.",
      "keywords": [
        "Conflicto armado",
        "Posacuerdo de paz",
        "Disputa territorial",
        "Control de recursos",
        "Su\u00e1rez (Cauca)",
        "Norte del Cauca",
        "Guardias ind\u00edgenas",
        "Guardias campesinas",
        "Guardias cimarronas",
        "Resistencia pac\u00edfica",
        "Defensa del territorio",
        "Defensa de la vida",
        "Convivencia intercultural",
        "Autonom\u00eda comunitaria",
        "Organizaci\u00f3n social",
        "Seguridad comunitaria",
        "Justicia propia",
        "Protecci\u00f3n comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=M_YXgXdRecQ",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Documental Cuidar lo nuestro Documental En el contexto actual del conflicto armado en Colombia y pese al Acuerdo de paz con las FARC-EP, distintos actores se disputan el control de los territorios, sus recursos y las fidelidades de las comunidades. Como una forma de defender los territorios vulnerados, las guardias ind\u00edgenas, campesinas y cimarronas del municipio de Su\u00e1rez, al norte del departamento del Cauca, son un ejemplo de resistencia pac\u00edfica, de convivencias interculturales y una alternativa a la defensa de la vida campesina. Conflicto armado Posacuerdo de paz Disputa territorial Control de recursos Su\u00e1rez (Cauca) Norte del Cauca Guardias ind\u00edgenas Guardias campesinas Guardias cimarronas Resistencia pac\u00edfica Defensa del territorio Defensa de la vida Convivencia intercultural Autonom\u00eda comunitaria Organizaci\u00f3n social Seguridad comunitaria Justicia propia Protecci\u00f3n comunitaria https://www.youtube.com/watch?v=M_YXgXdRecQ"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-48",
      "row": 48,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "C\u00e1psula de v\u00eddeo Huerta de Lupe",
      "type": "Video",
      "description": "Conocemos toda la diversidad que habita la finca La Lupe, recorri\u00e9ndola en compa\u00f1ia de do\u00f1a Yolanda quien nos comparte el proceso del ciclo de vida de los alimentos y plantas medicinales que siembra, cuida, cosecha y consume junto a su familia. Do\u00f1a Yolanda nos muestra c\u00f3mo el abono que produce en su cocina es alimento para sus cultivos.",
      "keywords": [
        "Finca La Lupe",
        "Vida campesina",
        "Agroecolog\u00eda",
        "Ciclo de vida de los alimentos",
        "Plantas medicinales",
        "Saberes campesinos",
        "Agricultura familiar",
        "Producci\u00f3n sostenible",
        "Abonos org\u00e1nicos",
        "Econom\u00eda del cuidado",
        "Autoconsumo",
        "Soberan\u00eda alimentaria",
        "Pr\u00e1cticas agroecol\u00f3gicas",
        "Conocimiento tradicional",
        "Trabajo familiar",
        "Relaci\u00f3n naturaleza\u2013alimentaci\u00f3n",
        "Diversidad biocultural"
      ],
      "link": "https://www.youtube.com/shorts/iRAPewJFBkI",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH C\u00e1psula de v\u00eddeo Huerta de Lupe Video Conocemos toda la diversidad que habita la finca La Lupe, recorri\u00e9ndola en compa\u00f1ia de do\u00f1a Yolanda quien nos comparte el proceso del ciclo de vida de los alimentos y plantas medicinales que siembra, cuida, cosecha y consume junto a su familia. Do\u00f1a Yolanda nos muestra c\u00f3mo el abono que produce en su cocina es alimento para sus cultivos. Finca La Lupe Vida campesina Agroecolog\u00eda Ciclo de vida de los alimentos Plantas medicinales Saberes campesinos Agricultura familiar Producci\u00f3n sostenible Abonos org\u00e1nicos Econom\u00eda del cuidado Autoconsumo Soberan\u00eda alimentaria Pr\u00e1cticas agroecol\u00f3gicas Conocimiento tradicional Trabajo familiar Relaci\u00f3n naturaleza\u2013alimentaci\u00f3n Diversidad biocultural https://www.youtube.com/shorts/iRAPewJFBkI"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-49",
      "row": 49,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "C\u00e1psula de v\u00eddeo La mata no es quien mata",
      "type": "Video",
      "description": "Dos visiones campesinas sobre la siembra y uso de la hoja de coca nos proponen una mirada m\u00e1s all\u00e1 de la estigmatizaci\u00f3n de la mal llamada \"mata que mata\". Las alternativas de transformaci\u00f3n de la coca que involucran lo colectivo atraviesan el uso tradicional de los pueblos ind\u00edgenas hasta la elaboraci\u00f3n de productos medicinales, et\u00edlicos y gastron\u00f3micos.",
      "keywords": [
        "Hoja de coca",
        "Cultura campesina",
        "Saberes tradicionales",
        "Uso ancestral",
        "Pueblos ind\u00edgenas",
        "Desestigmatizaci\u00f3n",
        "Narrativas alternativas",
        "Transformaci\u00f3n de la coca",
        "Econom\u00eda campesina",
        "Producci\u00f3n alternativa",
        "Productos medicinales",
        "Usos gastron\u00f3micos",
        "Usos et\u00edlicos",
        "Trabajo colectivo",
        "Conocimiento tradicional",
        "Diversidad cultural",
        "Soberan\u00eda productiva"
      ],
      "link": "https://www.youtube.com/watch?v=VMHQAqYwoSg",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH C\u00e1psula de v\u00eddeo La mata no es quien mata Video Dos visiones campesinas sobre la siembra y uso de la hoja de coca nos proponen una mirada m\u00e1s all\u00e1 de la estigmatizaci\u00f3n de la mal llamada \"mata que mata\". Las alternativas de transformaci\u00f3n de la coca que involucran lo colectivo atraviesan el uso tradicional de los pueblos ind\u00edgenas hasta la elaboraci\u00f3n de productos medicinales, et\u00edlicos y gastron\u00f3micos. Hoja de coca Cultura campesina Saberes tradicionales Uso ancestral Pueblos ind\u00edgenas Desestigmatizaci\u00f3n Narrativas alternativas Transformaci\u00f3n de la coca Econom\u00eda campesina Producci\u00f3n alternativa Productos medicinales Usos gastron\u00f3micos Usos et\u00edlicos Trabajo colectivo Conocimiento tradicional Diversidad cultural Soberan\u00eda productiva https://www.youtube.com/watch?v=VMHQAqYwoSg"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-50",
      "row": 50,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "C\u00e1psula de v\u00eddeo Fogones campesinos",
      "type": "Video",
      "description": "En el mundo campesino se encienden los fogones. El tradicional fog\u00f3n de le\u00f1a, el fog\u00f3n a gas y el innovador fog\u00f3n de biog\u00e1s son elementos vitales para la preparaci\u00f3n de alimentos. Do\u00f1a Yolanda y su hijo Iv\u00e1n explican c\u00f3mo funcionan los biodigestores, un sistema de producci\u00f3n aut\u00f3nomo de biogas a partir del excremento de los animales que cr\u00edan en su finca.",
      "keywords": [
        "Mundo campesino",
        "Fogones tradicionales",
        "Fog\u00f3n de le\u00f1a",
        "Fog\u00f3n a gas",
        "Fog\u00f3n de biog\u00e1s",
        "Preparaci\u00f3n de alimentos",
        "Saberes rurales",
        "Energ\u00eda alternativa",
        "Biodigestores",
        "Producci\u00f3n aut\u00f3noma",
        "Biog\u00e1s",
        "Aprovechamiento de residuos",
        "Excremento animal",
        "Sostenibilidad",
        "Econom\u00eda campesina",
        "Innovaci\u00f3n rural",
        "Finca campesina",
        "Pr\u00e1cticas ancestrales y tecnol\u00f3gicas",
        "Transici\u00f3n energ\u00e9tica rural",
        "Autogesti\u00f3n energ\u00e9tica"
      ],
      "link": "https://www.youtube.com/watch?v=51JGieT5zUo&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=46",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH C\u00e1psula de v\u00eddeo Fogones campesinos Video En el mundo campesino se encienden los fogones. El tradicional fog\u00f3n de le\u00f1a, el fog\u00f3n a gas y el innovador fog\u00f3n de biog\u00e1s son elementos vitales para la preparaci\u00f3n de alimentos. Do\u00f1a Yolanda y su hijo Iv\u00e1n explican c\u00f3mo funcionan los biodigestores, un sistema de producci\u00f3n aut\u00f3nomo de biogas a partir del excremento de los animales que cr\u00edan en su finca. Mundo campesino Fogones tradicionales Fog\u00f3n de le\u00f1a Fog\u00f3n a gas Fog\u00f3n de biog\u00e1s Preparaci\u00f3n de alimentos Saberes rurales Energ\u00eda alternativa Biodigestores Producci\u00f3n aut\u00f3noma Biog\u00e1s Aprovechamiento de residuos Excremento animal Sostenibilidad Econom\u00eda campesina Innovaci\u00f3n rural Finca campesina Pr\u00e1cticas ancestrales y tecnol\u00f3gicas Transici\u00f3n energ\u00e9tica rural Autogesti\u00f3n energ\u00e9tica https://www.youtube.com/watch?v=51JGieT5zUo&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=46"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-51",
      "row": 51,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "C\u00e1psula de v\u00eddeo Sin campo no hay futuro",
      "type": "Video",
      "description": "Sin campo no hay ciudad. Para que un vaso de leche llegue a una mesa en la ciudad se requiere el trabajo diario de muchas familias campesinas. Un trabajo cotidiano de cuidado que implica una relaci\u00f3n de intimidad y afectos con las vacas y terneros para un buen orde\u00f1o. Uno de los mayores retos de la producci\u00f3n lechera es que los campesinos puedan realizar localmente procesos de transformaci\u00f3n de la leche para que el mayor beneficio econ\u00f3mico quede en manos de los peque\u00f1os productores.",
      "keywords": [
        "Econom\u00edas Populares",
        "Campo y ciudad",
        "Interdependencia rural-urbana",
        "Producci\u00f3n lechera",
        "Cadena de valor de la leche",
        "Trabajo campesino",
        "Econom\u00eda rural",
        "Familias campesinas",
        "Orde\u00f1o",
        "Cuidado animal",
        "Bienestar animal",
        "Relaci\u00f3n humano-animal",
        "V\u00ednculo afectivo",
        "Producci\u00f3n sostenible",
        "Transformaci\u00f3n de la leche",
        "Valor agregado",
        "Econom\u00eda local",
        "Comercializaci\u00f3n justa",
        "Soberan\u00eda alimentaria",
        "Peque\u00f1os productores",
        "Desaf\u00edos del campo"
      ],
      "link": "https://www.youtube.com/watch?v=ca0-LXT3YhM&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=43",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH C\u00e1psula de v\u00eddeo Sin campo no hay futuro Video Sin campo no hay ciudad. Para que un vaso de leche llegue a una mesa en la ciudad se requiere el trabajo diario de muchas familias campesinas. Un trabajo cotidiano de cuidado que implica una relaci\u00f3n de intimidad y afectos con las vacas y terneros para un buen orde\u00f1o. Uno de los mayores retos de la producci\u00f3n lechera es que los campesinos puedan realizar localmente procesos de transformaci\u00f3n de la leche para que el mayor beneficio econ\u00f3mico quede en manos de los peque\u00f1os productores. Econom\u00edas Populares Campo y ciudad Interdependencia rural-urbana Producci\u00f3n lechera Cadena de valor de la leche Trabajo campesino Econom\u00eda rural Familias campesinas Orde\u00f1o Cuidado animal Bienestar animal Relaci\u00f3n humano-animal V\u00ednculo afectivo Producci\u00f3n sostenible Transformaci\u00f3n de la leche Valor agregado Econom\u00eda local Comercializaci\u00f3n justa Soberan\u00eda alimentaria Peque\u00f1os productores Desaf\u00edos del campo https://www.youtube.com/watch?v=ca0-LXT3YhM&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=43"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-52",
      "row": 52,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "C\u00e1psula de v\u00eddeo Se\u00f1or prontoalivio",
      "type": "Video",
      "description": "Prontoalivio para la tos. Dayana cuida todos los d\u00edas su huerta donde siembra plantas medicinales para ella y sus hijas. Una muestra de la relaci\u00f3n de afecto y cuidado de las mujeres con su familia y sus plantas.",
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
        "Relaci\u00f3n humano-naturaleza",
        "Afecto y cuidado",
        "Bienestar familiar",
        "Conocimiento herbal",
        "Pr\u00e1cticas tradicionales",
        "Soberan\u00eda medicinal"
      ],
      "link": "https://www.youtube.com/watch?v=MScs6fJWHr8&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=36",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH C\u00e1psula de v\u00eddeo Se\u00f1or prontoalivio Video Prontoalivio para la tos. Dayana cuida todos los d\u00edas su huerta donde siembra plantas medicinales para ella y sus hijas. Una muestra de la relaci\u00f3n de afecto y cuidado de las mujeres con su familia y sus plantas. Plantas medicinales Huerta casera Medicina tradicional Remedios naturales Cuidado familiar Saberes ancestrales Mujeres campesinas Rol de cuidado Salud natural Tos (alivio natural) Autocuidado Cultivo de plantas Relaci\u00f3n humano-naturaleza Afecto y cuidado Bienestar familiar Conocimiento herbal Pr\u00e1cticas tradicionales Soberan\u00eda medicinal https://www.youtube.com/watch?v=MScs6fJWHr8&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=36"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-53",
      "row": 53,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "C\u00e1psula de v\u00eddeo El r\u00edo es fuente de vida",
      "type": "Video",
      "description": "Antonio es un hombre que tiene como uno de sus oficios medir el r\u00edo todos los d\u00edas para monitorear las crecientes y posibles desbordes. Esto le ha dado un conocimiento profundo sobre el r\u00edo y sus ciclos anuales.",
      "keywords": [
        "Monitoreo del r\u00edo",
        "Niveles del agua",
        "Crecientes",
        "Desbordamientos",
        "Gesti\u00f3n del riesgo",
        "Conocimiento emp\u00edrico",
        "Saberes locales",
        "Ciclos del r\u00edo",
        "Observaci\u00f3n diaria",
        "Oficios del territorio",
        "Vigilancia comunitaria",
        "Prevenci\u00f3n de desastres",
        "Relaci\u00f3n humano-naturaleza",
        "Hidrolog\u00eda local",
        "Adaptaci\u00f3n al entorno",
        "Memoria ambiental",
        "Cultura ribere\u00f1a"
      ],
      "link": "https://www.youtube.com/shorts/RfdV2t5BopQ",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH C\u00e1psula de v\u00eddeo El r\u00edo es fuente de vida Video Antonio es un hombre que tiene como uno de sus oficios medir el r\u00edo todos los d\u00edas para monitorear las crecientes y posibles desbordes. Esto le ha dado un conocimiento profundo sobre el r\u00edo y sus ciclos anuales. Monitoreo del r\u00edo Niveles del agua Crecientes Desbordamientos Gesti\u00f3n del riesgo Conocimiento emp\u00edrico Saberes locales Ciclos del r\u00edo Observaci\u00f3n diaria Oficios del territorio Vigilancia comunitaria Prevenci\u00f3n de desastres Relaci\u00f3n humano-naturaleza Hidrolog\u00eda local Adaptaci\u00f3n al entorno Memoria ambiental Cultura ribere\u00f1a https://www.youtube.com/shorts/RfdV2t5BopQ"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-54",
      "row": 54,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "C\u00e1psula de v\u00eddeo Saber sobar",
      "type": "Video",
      "description": "Do\u00f1a Ofelia recibe en su casa a un ni\u00f1o enfermo del est\u00f3mago. Con la sospecha de que el ni\u00f1o est\u00e1 descuajado, do\u00f1a Ofelia se dispone a sobarlo para curarle su mal de est\u00f3mago.",
      "keywords": [
        "Medicina tradicional",
        "Sobander\u00eda",
        "Descuajado",
        "Dolor de est\u00f3mago",
        "Curaci\u00f3n tradicional",
        "Saberes ancestrales",
        "Sanaci\u00f3n comunitaria",
        "Pr\u00e1cticas de cuidado",
        "Atenci\u00f3n dom\u00e9stica",
        "Medicina popular",
        "Cuerpo y equilibrio",
        "Conocimiento emp\u00edrico",
        "Mujeres sabedoras",
        "Transmisi\u00f3n de saberes",
        "Cultura rural",
        "Salud comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=WMTPk_KX4BE&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=35",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH C\u00e1psula de v\u00eddeo Saber sobar Video Do\u00f1a Ofelia recibe en su casa a un ni\u00f1o enfermo del est\u00f3mago. Con la sospecha de que el ni\u00f1o est\u00e1 descuajado, do\u00f1a Ofelia se dispone a sobarlo para curarle su mal de est\u00f3mago. Medicina tradicional Sobander\u00eda Descuajado Dolor de est\u00f3mago Curaci\u00f3n tradicional Saberes ancestrales Sanaci\u00f3n comunitaria Pr\u00e1cticas de cuidado Atenci\u00f3n dom\u00e9stica Medicina popular Cuerpo y equilibrio Conocimiento emp\u00edrico Mujeres sabedoras Transmisi\u00f3n de saberes Cultura rural Salud comunitaria https://www.youtube.com/watch?v=WMTPk_KX4BE&list=PLtPYRLbXJ5KFaClNB0k3oqcNsGN3VOnrS&index=35"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-55",
      "row": 55,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "C\u00e1psula de v\u00eddeo El oro es vivo",
      "type": "Video",
      "description": "Omaira y Leonilde van al r\u00edo a buscar oro. Con su cuerpo dan vueltas y vueltas a la batea, tal como lo hac\u00edan sus ancestros. Con su mirada buscan detenidamente el brillo dorado que se asoma entre las piedras, la tierra y el agua. Encontrar el oro no es tarea f\u00e1cil porque, en palabras de Omaira, el oro es un metal vivo que no comparte con gente envidiosa, solo se muestra a personas de buen coraz\u00f3n.",
      "keywords": [
        "Miner\u00eda artesanal",
        "Barequeo",
        "Batea",
        "B\u00fasqueda de oro",
        "Saberes ancestrales",
        "Oficios tradicionales",
        "Mujeres mineras",
        "Trabajo en el r\u00edo",
        "Relaci\u00f3n espiritual con la naturaleza",
        "Cosmovisi\u00f3n del oro",
        "Metal vivo",
        "Paciencia y destreza",
        "Observaci\u00f3n detallada",
        "Cultura ribere\u00f1a",
        "Tradici\u00f3n oral",
        "Econom\u00eda de subsistencia",
        "Herencia ancestral"
      ],
      "link": "https://www.youtube.com/watch?v=DRduippHOAI",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH C\u00e1psula de v\u00eddeo El oro es vivo Video Omaira y Leonilde van al r\u00edo a buscar oro. Con su cuerpo dan vueltas y vueltas a la batea, tal como lo hac\u00edan sus ancestros. Con su mirada buscan detenidamente el brillo dorado que se asoma entre las piedras, la tierra y el agua. Encontrar el oro no es tarea f\u00e1cil porque, en palabras de Omaira, el oro es un metal vivo que no comparte con gente envidiosa, solo se muestra a personas de buen coraz\u00f3n. Miner\u00eda artesanal Barequeo Batea B\u00fasqueda de oro Saberes ancestrales Oficios tradicionales Mujeres mineras Trabajo en el r\u00edo Relaci\u00f3n espiritual con la naturaleza Cosmovisi\u00f3n del oro Metal vivo Paciencia y destreza Observaci\u00f3n detallada Cultura ribere\u00f1a Tradici\u00f3n oral Econom\u00eda de subsistencia Herencia ancestral https://www.youtube.com/watch?v=DRduippHOAI"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-56",
      "row": 56,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro De una vaca vive mucha gente",
      "type": "Sonoro",
      "description": "Un mensaje que nos invita a comprender el esfuerzo de las vidas campesinas para poner un vaso de leche en nuestras mesas.",
      "keywords": [
        "Vidas campesinas",
        "Esfuerzo rural",
        "Producci\u00f3n lechera",
        "Trabajo diario",
        "Madrugadas campesinas",
        "Cuidado animal",
        "Orde\u00f1o",
        "Cadena alimentaria",
        "Campo y ciudad",
        "Interdependencia",
        "Alimentaci\u00f3n"
      ],
      "link": "https://open.spotify.com/episode/0vsFAp9yGDGqevLhBtqTyP?si=062c747d623b4c6d",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Mensaje sonoro De una vaca vive mucha gente Sonoro Un mensaje que nos invita a comprender el esfuerzo de las vidas campesinas para poner un vaso de leche en nuestras mesas. Vidas campesinas Esfuerzo rural Producci\u00f3n lechera Trabajo diario Madrugadas campesinas Cuidado animal Orde\u00f1o Cadena alimentaria Campo y ciudad Interdependencia Alimentaci\u00f3n https://open.spotify.com/episode/0vsFAp9yGDGqevLhBtqTyP?si=062c747d623b4c6d"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-57",
      "row": 57,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro El r\u00edo tiene memoria",
      "type": "Sonoro",
      "description": "Una joven cantautora caquete\u00f1a que estudia en Bogot\u00e1, nos comparte los aprendizajes que el r\u00edo le ha dado para cantar por las vidas campesinas donde quiera que se encuentre, porque el rio \"nos ensen\u00f3 a pensar en colectivo\".",
      "keywords": [
        "Cantautora",
        "Joven artista",
        "Caquet\u00e1",
        "Bogot\u00e1",
        "Inspiraci\u00f3n del r\u00edo",
        "Vidas campesinas",
        "M\u00fasica con sentido social",
        "Aprendizajes del r\u00edo",
        "Pensamiento colectivo",
        "Cultura rural",
        "Tradici\u00f3n y modernidad",
        "Voz de la comunidad",
        "Conexi\u00f3n con el territorio",
        "Arte comprometido",
        "Memoria campesina",
        "Educaci\u00f3n art\u00edstica",
        "Transformaci\u00f3n social"
      ],
      "link": "https://open.spotify.com/episode/0fVY4zBLDRMlU9L36lnA58?si=95982b1750ef49e4",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Mensaje sonoro El r\u00edo tiene memoria Sonoro Una joven cantautora caquete\u00f1a que estudia en Bogot\u00e1, nos comparte los aprendizajes que el r\u00edo le ha dado para cantar por las vidas campesinas donde quiera que se encuentre, porque el rio \"nos ensen\u00f3 a pensar en colectivo\". Cantautora Joven artista Caquet\u00e1 Bogot\u00e1 Inspiraci\u00f3n del r\u00edo Vidas campesinas M\u00fasica con sentido social Aprendizajes del r\u00edo Pensamiento colectivo Cultura rural Tradici\u00f3n y modernidad Voz de la comunidad Conexi\u00f3n con el territorio Arte comprometido Memoria campesina Educaci\u00f3n art\u00edstica Transformaci\u00f3n social https://open.spotify.com/episode/0fVY4zBLDRMlU9L36lnA58?si=95982b1750ef49e4"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-58",
      "row": 58,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro En el campo est\u00e1 el futuro",
      "type": "Sonoro",
      "description": "Los pregones se escuchan temprano en las calles de los pueblos caquete\u00f1os con los que las y los campesinos ofrecen sus productos. Esta copla nos invita a promover cadenas de producci\u00f3n que garanticen la vida digna de las vidas campesinas.",
      "keywords": [
        "Pregones",
        "Calles de pueblo",
        "Caquet\u00e1",
        "Campesinos y campesinas",
        "Oferta de productos",
        "Coplas tradicionales",
        "Econom\u00eda local",
        "Producci\u00f3n campesina",
        "Vida digna",
        "Cadenas de valor",
        "Comercio justo",
        "Cultura popular",
        "Saberes rurales",
        "Tradici\u00f3n oral",
        "Sostenibilidad econ\u00f3mica",
        "Promoci\u00f3n del campo",
        "Identidad regional"
      ],
      "link": "https://open.spotify.com/episode/5qZrGoTGI8JwDU4Xnz81D3?si=7ea1236bc79643f3",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Mensaje sonoro En el campo est\u00e1 el futuro Sonoro Los pregones se escuchan temprano en las calles de los pueblos caquete\u00f1os con los que las y los campesinos ofrecen sus productos. Esta copla nos invita a promover cadenas de producci\u00f3n que garanticen la vida digna de las vidas campesinas. Pregones Calles de pueblo Caquet\u00e1 Campesinos y campesinas Oferta de productos Coplas tradicionales Econom\u00eda local Producci\u00f3n campesina Vida digna Cadenas de valor Comercio justo Cultura popular Saberes rurales Tradici\u00f3n oral Sostenibilidad econ\u00f3mica Promoci\u00f3n del campo Identidad regional https://open.spotify.com/episode/5qZrGoTGI8JwDU4Xnz81D3?si=7ea1236bc79643f3"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-59",
      "row": 59,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro Pregones son sabores",
      "type": "Sonoro",
      "description": "Los pregones se escuchan temprano en las calles de los pueblos caquetenos con los que las y los campesinos ofrecen sus productos. Esta copla nos invita a promover cadenas de producci\u00f3n que garanticen la vida digna de las vidas campesinas.",
      "keywords": [
        "Pregones",
        "Calles de pueblo",
        "Caquet\u00e1",
        "Campesinos y campesinas",
        "Oferta de productos",
        "Coplas tradicionales",
        "Econom\u00eda local",
        "Producci\u00f3n campesina",
        "Vida digna",
        "Cadenas de valor",
        "Comercio justo",
        "Cultura popular",
        "Saberes rurales",
        "Tradici\u00f3n oral",
        "Sostenibilidad econ\u00f3mica",
        "Promoci\u00f3n del campo",
        "Identidad regional"
      ],
      "link": "https://open.spotify.com/episode/0HBXBxa8uije8ggncoirU5?si=16c825cc2b674869",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Mensaje sonoro Pregones son sabores Sonoro Los pregones se escuchan temprano en las calles de los pueblos caquetenos con los que las y los campesinos ofrecen sus productos. Esta copla nos invita a promover cadenas de producci\u00f3n que garanticen la vida digna de las vidas campesinas. Pregones Calles de pueblo Caquet\u00e1 Campesinos y campesinas Oferta de productos Coplas tradicionales Econom\u00eda local Producci\u00f3n campesina Vida digna Cadenas de valor Comercio justo Cultura popular Saberes rurales Tradici\u00f3n oral Sostenibilidad econ\u00f3mica Promoci\u00f3n del campo Identidad regional https://open.spotify.com/episode/0HBXBxa8uije8ggncoirU5?si=16c825cc2b674869"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-60",
      "row": 60,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "ICANH",
      "title": "Mensaje sonoro De c\u00f3mo curar la picadura de raya",
      "type": "Sonoro",
      "description": "En curas, remedios y saberes, William nos cuenta como la sabidur\u00eda de las vidas campesinas lo cur\u00f3 de la picadura de una raya, en medio de los remolinos del Raudal del Guayabero.",
      "keywords": [
        "Saberes campesinos",
        "Medicina tradicional",
        "Remedios naturales",
        "Curaci\u00f3n ancestral",
        "William",
        "Picadura de raya",
        "Raudal del Guayabero",
        "Experiencia en el r\u00edo",
        "Conocimiento emp\u00edrico",
        "Relaci\u00f3n humano-naturaleza",
        "Protecci\u00f3n y cuidado",
        "Cultura rural",
        "Sabidur\u00eda popular",
        "Oficios y pr\u00e1cticas del campo",
        "Resiliencia ante riesgos naturales",
        "Tradici\u00f3n oral"
      ],
      "link": "https://open.spotify.com/episode/7JlImc0wFU8XznXn2UFwXF?si=3869965fc1f0416f",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural ICANH Mensaje sonoro De c\u00f3mo curar la picadura de raya Sonoro En curas, remedios y saberes, William nos cuenta como la sabidur\u00eda de las vidas campesinas lo cur\u00f3 de la picadura de una raya, en medio de los remolinos del Raudal del Guayabero. Saberes campesinos Medicina tradicional Remedios naturales Curaci\u00f3n ancestral William Picadura de raya Raudal del Guayabero Experiencia en el r\u00edo Conocimiento emp\u00edrico Relaci\u00f3n humano-naturaleza Protecci\u00f3n y cuidado Cultura rural Sabidur\u00eda popular Oficios y pr\u00e1cticas del campo Resiliencia ante riesgos naturales Tradici\u00f3n oral https://open.spotify.com/episode/7JlImc0wFU8XznXn2UFwXF?si=3869965fc1f0416f"
    },
    {
      "id": "somos-cultura-de-paz-61",
      "row": 61,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Transmedia T\u00fanel del Tiempo",
      "type": "Transmedia",
      "description": "T\u00fanel del Tiempo es un proyecto transmedia de comunicaci\u00f3n propia desarrollado en el marco de la conmemoraci\u00f3n de los 500 a\u00f1os de Santa Marta. Es un ejercicio de participaci\u00f3n \u00e9tnica, gobernanza narrativa y soberan\u00eda cultural y digital, con los siete pueblos ind\u00edgenas del distrito (Arhuaco, Wiwa, Kogui, Kankuamo, Ette Ennaka, Wayuu y Taganga). La plataforma web se estructura en un mapa interactivo con documentales, piezas sonoras, fotogaler\u00edas y contenidos del proceso, como memoria de resistencia cultural y espiritual.",
      "keywords": [
        "T\u00fanel del Tiempo",
        "Proyecto transmedia",
        "Comunicaci\u00f3n propia",
        "Conmemoraci\u00f3n 500 a\u00f1os Santa Marta",
        "Participaci\u00f3n \u00e9tnica",
        "Gobernanza narrativa",
        "Soberan\u00eda cultural",
        "Soberan\u00eda digital",
        "Pueblos ind\u00edgenas",
        "Arhuaco, Wiwa, Kogui, Kankuamo, Ette Ennaka, Wayuu, Taganga",
        "Plataforma web",
        "Mapa interactivo",
        "Documentales",
        "Piezas sonoras",
        "Fotogaler\u00edas",
        "Memoria cultural",
        "Resistencia cultural",
        "Espiritualidad ind\u00edgena",
        "Contenidos participativos"
      ],
      "link": "https://tuneldeltiemposantamarta.mincultura.gov.co/index.html",
      "asset_link": "",
      "force_message": "El T\u00fanel del Tiempo es un dispositivo digital de memoria y gobernanza cultural donde los siete pueblos ind\u00edgenas relatan la resistencia cultural y espiritual en el marco de los 500 a\u00f1os de Santa Marta. El T\u00fanel es un ejercicio de comunicaci\u00f3n propia y soberan\u00eda que reafirma el derecho de los pueblos a narrarse, a existir y a decidir sobre la circulaci\u00f3n de sus memorias.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS Transmedia T\u00fanel del Tiempo Transmedia T\u00fanel del Tiempo es un proyecto transmedia de comunicaci\u00f3n propia desarrollado en el marco de la conmemoraci\u00f3n de los 500 a\u00f1os de Santa Marta. Es un ejercicio de participaci\u00f3n \u00e9tnica, gobernanza narrativa y soberan\u00eda cultural y digital, con los siete pueblos ind\u00edgenas del distrito (Arhuaco, Wiwa, Kogui, Kankuamo, Ette Ennaka, Wayuu y Taganga). La plataforma web se estructura en un mapa interactivo con documentales, piezas sonoras, fotogaler\u00edas y contenidos del proceso, como memoria de resistencia cultural y espiritual. El T\u00fanel del Tiempo es un dispositivo digital de memoria y gobernanza cultural donde los siete pueblos ind\u00edgenas relatan la resistencia cultural y espiritual en el marco de los 500 a\u00f1os de Santa Marta. El T\u00fanel es un ejercicio de comunicaci\u00f3n propia y soberan\u00eda que reafirma el derecho de los pueblos a narrarse, a existir y a decidir sobre la circulaci\u00f3n de sus memorias. T\u00fanel del Tiempo Proyecto transmedia Comunicaci\u00f3n propia Conmemoraci\u00f3n 500 a\u00f1os Santa Marta Participaci\u00f3n \u00e9tnica Gobernanza narrativa Soberan\u00eda cultural Soberan\u00eda digital Pueblos ind\u00edgenas Arhuaco, Wiwa, Kogui, Kankuamo, Ette Ennaka, Wayuu, Taganga Plataforma web Mapa interactivo Documentales Piezas sonoras Fotogaler\u00edas Memoria cultural Resistencia cultural Espiritualidad ind\u00edgena Contenidos participativos https://tuneldeltiemposantamarta.mincultura.gov.co/index.html"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-62",
      "row": 62,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Documental Bullerengue, memoria viva de Puerto Escondido",
      "type": "Documental",
      "description": "Documental de la Escuela de Comunicaci\u00f3n Carambant\u00faa Lab: Narrativas del Bullerengue. Bullerengue, Memoria Viva de Puerto Escondido recoge memorias orales, historias de vida y pr\u00e1cticas culturales de maestros, maestras y sabedoras del bullerengue. Explora sus ra\u00edces ancestrales, la identidad y el territorio, mostrando c\u00f3mo esta tradici\u00f3n ha resistido el tiempo y c\u00f3mo las nuevas generaciones contin\u00faan heredando y recreando este legado cultural.",
      "keywords": [
        "Documental",
        "Escuela de Comunicaci\u00f3n Carambant\u00faa Lab",
        "Narrativas del Bullerengue",
        "Bullerengue",
        "Memoria viva",
        "Puerto Escondido",
        "Memorias orales",
        "Historias de vida",
        "Pr\u00e1cticas culturales",
        "Maestros y maestras",
        "Sabedoras",
        "Ra\u00edces ancestrales",
        "Identidad cultural",
        "Territorio",
        "Resistencia cultural",
        "Herencia intergeneracional",
        "Legado cultural",
        "Tradici\u00f3n musical",
        "Cultura afrocolombiana",
        "Recreaci\u00f3n cultural"
      ],
      "link": "https://mcultura.sharepoint.com/sites/DACMI/_layouts/15/stream.aspx?id=%2Fsites%2FDACMI%2FDocumentos%20compartidos%2FGeneral%2FGrupo%20CCT%202025%2F003%5FCONVENIOS%20GRUPO%20COM%5F2025%2F1%5F0798%5FCONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O%2F3%5F%20EJECUCI%C3%93N%2F5%5F%20ESTRATEGIAS%2F1%5FAFROCOLOMBIAS%2F1%5FFORMACI%C3%93N%2F004%5FEscuelas%20Comunicaci%C3%B3n%20Afrocolombias2025%2F9%2E%20%20PUERTO%20ESCONDIDO%2F3%5F%20pago%5F10%25%2F1%2E%20Contenidos%2F1%2E%20Contenido%2FDocumental%2Emp4&referrer=StreamWebApp%2EWeb&referrerScenario=AddressBarCopied%2Eview%2Ea7b1548c%2D54ac%2D4513%2D933c%2D56fd0506d4af",
      "asset_link": "",
      "force_message": "La comunicaci\u00f3n es memoria viva: guarda la palabra, el ritmo y los relatos que las comunidades han sembrado en su territorio. Desde el bullerengue hasta las voces de los r\u00edos, comunicar es preservar lo que permanece, transmitir identidad y proyectar futuro desde la memoria colectiva.",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS Documental Bullerengue, memoria viva de Puerto Escondido Documental Documental de la Escuela de Comunicaci\u00f3n Carambant\u00faa Lab: Narrativas del Bullerengue. Bullerengue, Memoria Viva de Puerto Escondido recoge memorias orales, historias de vida y pr\u00e1cticas culturales de maestros, maestras y sabedoras del bullerengue. Explora sus ra\u00edces ancestrales, la identidad y el territorio, mostrando c\u00f3mo esta tradici\u00f3n ha resistido el tiempo y c\u00f3mo las nuevas generaciones contin\u00faan heredando y recreando este legado cultural. La comunicaci\u00f3n es memoria viva: guarda la palabra, el ritmo y los relatos que las comunidades han sembrado en su territorio. Desde el bullerengue hasta las voces de los r\u00edos, comunicar es preservar lo que permanece, transmitir identidad y proyectar futuro desde la memoria colectiva. Documental Escuela de Comunicaci\u00f3n Carambant\u00faa Lab Narrativas del Bullerengue Bullerengue Memoria viva Puerto Escondido Memorias orales Historias de vida Pr\u00e1cticas culturales Maestros y maestras Sabedoras Ra\u00edces ancestrales Identidad cultural Territorio Resistencia cultural Herencia intergeneracional Legado cultural Tradici\u00f3n musical Cultura afrocolombiana Recreaci\u00f3n cultural https://mcultura.sharepoint.com/sites/DACMI/_layouts/15/stream.aspx?id=%2Fsites%2FDACMI%2FDocumentos%20compartidos%2FGeneral%2FGrupo%20CCT%202025%2F003%5FCONVENIOS%20GRUPO%20COM%5F2025%2F1%5F0798%5FCONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O%2F3%5F%20EJECUCI%C3%93N%2F5%5F%20ESTRATEGIAS%2F1%5FAFROCOLOMBIAS%2F1%5FFORMACI%C3%93N%2F004%5FEscuelas%20Comunicaci%C3%B3n%20Afrocolombias2025%2F9%2E%20%20PUERTO%20ESCONDIDO%2F3%5F%20pago%5F10%25%2F1%2E%20Contenidos%2F1%2E%20Contenido%2FDocumental%2Emp4&referrer=StreamWebApp%2EWeb&referrerScenario=AddressBarCopied%2Eview%2Ea7b1548c%2D54ac%2D4513%2D933c%2D56fd0506d4af"
    },
    {
      "id": "somos-cultura-de-paz-63",
      "row": 63,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Reportaje Pusandao",
      "type": "Reportaje",
      "description": "Colectivo Las Leyendas del Mag\u00fc\u00ed. Relatos Mag\u00fcire\u00f1os. Pusandao. El relato aborda el r\u00edo Mag\u00fc\u00ed y su importancia para la vida en Mag\u00fc\u00ed Pay\u00e1n, as\u00ed como la preocupaci\u00f3n por su contaminaci\u00f3n debido a la extracci\u00f3n de oro, evidenciando impactos ambientales y sociales. La comunicaci\u00f3n es memoria viva: guarda la palabra, el ritmo y los relatos del territorio, preservando identidad y proyectando futuro desde la memoria colectiva.",
      "keywords": [
        "Colectivo Las Leyendas del Mag\u00fc\u00ed",
        "Relatos Mag\u00fcire\u00f1os",
        "Pusandao",
        "R\u00edo Mag\u00fc\u00ed",
        "Mag\u00fc\u00ed Pay\u00e1n",
        "Importancia del r\u00edo",
        "Contaminaci\u00f3n ambiental",
        "Miner\u00eda de oro",
        "Impactos sociales y ambientales",
        "Memoria viva",
        "Palabra y relato",
        "Ritmo tradicional",
        "Identidad territorial",
        "Cultura local",
        "Territorio y comunidad",
        "Memoria colectiva",
        "Conservaci\u00f3n del patrimonio",
        "Sostenibilidad",
        "Comunicaci\u00f3n participativa",
        "Proyecci\u00f3n futura desde la memoria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/01_PAC%C3%8DFICO%20NARI%C3%91ENSE/01.%20Escuelas/1_FUNDACION%20BOGANDO%20PRODUCCIONES/3_PAGO%203/1.%20CONTENIDOS/3.%20PRODUCTO/3.%20PUSANDAO.mp4?csf=1&web=1&e=fBlv70",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS Reportaje Pusandao Reportaje Colectivo Las Leyendas del Mag\u00fc\u00ed. Relatos Mag\u00fcire\u00f1os. Pusandao. El relato aborda el r\u00edo Mag\u00fc\u00ed y su importancia para la vida en Mag\u00fc\u00ed Pay\u00e1n, as\u00ed como la preocupaci\u00f3n por su contaminaci\u00f3n debido a la extracci\u00f3n de oro, evidenciando impactos ambientales y sociales. La comunicaci\u00f3n es memoria viva: guarda la palabra, el ritmo y los relatos del territorio, preservando identidad y proyectando futuro desde la memoria colectiva. Colectivo Las Leyendas del Mag\u00fc\u00ed Relatos Mag\u00fcire\u00f1os Pusandao R\u00edo Mag\u00fc\u00ed Mag\u00fc\u00ed Pay\u00e1n Importancia del r\u00edo Contaminaci\u00f3n ambiental Miner\u00eda de oro Impactos sociales y ambientales Memoria viva Palabra y relato Ritmo tradicional Identidad territorial Cultura local Territorio y comunidad Memoria colectiva Conservaci\u00f3n del patrimonio Sostenibilidad Comunicaci\u00f3n participativa Proyecci\u00f3n futura desde la memoria https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20COM%202024/02_Proyectos%20Grupo%20COM%202024/4_Afrocolombias/02.%20Escuelas%20de%20Comunicaci%C3%B3n%20AFRO/01_PAC%C3%8DFICO%20NARI%C3%91ENSE/01.%20Escuelas/1_FUNDACION%20BOGANDO%20PRODUCCIONES/3_PAGO%203/1.%20CONTENIDOS/3.%20PRODUCTO/3.%20PUSANDAO.mp4?csf=1&web=1&e=fBlv70"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-64",
      "row": 64,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Documental El Bullerengue y las voces del r\u00edo",
      "type": "Documental",
      "description": "Escuela Voces Vivas del R\u00edo de Guaduas. El Bullerengue y las Voces del R\u00edo. El proyecto muestra la conexi\u00f3n entre el bullerengue y las voces del r\u00edo, destacando c\u00f3mo matronas, juglares, sabedores, maestros y hacedores han preservado esta tradici\u00f3n cultural a trav\u00e9s de generaciones. La comunicaci\u00f3n es memoria viva: guarda la palabra, el ritmo y los relatos del territorio, preservando identidad y proyectando futuro desde la memoria colectiva.",
      "keywords": [
        "Escuela Voces Vivas del R\u00edo de Guaduas",
        "Bullerengue",
        "Voces del r\u00edo",
        "Tradici\u00f3n cultural",
        "Matronas",
        "Juglares",
        "Sabedores",
        "Maestros",
        "Hacedores",
        "Preservaci\u00f3n intergeneracional",
        "Memoria viva",
        "Palabra y relato",
        "Ritmo tradicional",
        "Identidad cultural",
        "Territorio",
        "Memoria colectiva",
        "Herencia cultural",
        "Educaci\u00f3n comunitaria",
        "Proyecci\u00f3n futura",
        "Cultura afrocolombiana"
      ],
      "link": "https://mcultura.sharepoint.com/sites/DACMI/Documentos%20compartidos/Forms/AllItems.aspx?id=%2Fsites%2FDACMI%2FDocumentos%20compartidos%2FGeneral%2FGrupo%20COM%202024%2F03%5FConvenios%20Grupo%20COM%202024%2F02%5FCONVENIO%20AFROCOLOMBIAS%5F2035%5F24%2F3%5FEJECUCI%C3%93N%2FESTRATEGIA%5F1%5FFORTALECIMIENTO%20COMUNICACI%C3%93N%20AFROCOLOMBIANA%2F00%5FESCUELAS%20DE%20COMUNICACI%C3%93N%2F2%5FCONVOCATORIA%20ESCUELAS%20NACIONAL%2F2%5FOrganizaci%C3%B3n%20de%20profesionales%20Afrodescendiente%20ra%C3%ADces%20de%20%C3%89bano%2F3%5FTERCER%5FPAGO%5F20%25%2F1%2E%20CONTENIDOS%2F2%2E%20PRODUCTO&viewid=812fa338%2Dbf7a%2D4ee1%2D8fe5%2Dbbb9b939e0f6&ct=1708359294608&or=OWA%2DNT&cid=9ed5b085%2D6b37%2Ddcc0%2Ddd84%2Dd71de767bec9",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS Documental El Bullerengue y las voces del r\u00edo Documental Escuela Voces Vivas del R\u00edo de Guaduas. El Bullerengue y las Voces del R\u00edo. El proyecto muestra la conexi\u00f3n entre el bullerengue y las voces del r\u00edo, destacando c\u00f3mo matronas, juglares, sabedores, maestros y hacedores han preservado esta tradici\u00f3n cultural a trav\u00e9s de generaciones. La comunicaci\u00f3n es memoria viva: guarda la palabra, el ritmo y los relatos del territorio, preservando identidad y proyectando futuro desde la memoria colectiva. Escuela Voces Vivas del R\u00edo de Guaduas Bullerengue Voces del r\u00edo Tradici\u00f3n cultural Matronas Juglares Sabedores Maestros Hacedores Preservaci\u00f3n intergeneracional Memoria viva Palabra y relato Ritmo tradicional Identidad cultural Territorio Memoria colectiva Herencia cultural Educaci\u00f3n comunitaria Proyecci\u00f3n futura Cultura afrocolombiana https://mcultura.sharepoint.com/sites/DACMI/Documentos%20compartidos/Forms/AllItems.aspx?id=%2Fsites%2FDACMI%2FDocumentos%20compartidos%2FGeneral%2FGrupo%20COM%202024%2F03%5FConvenios%20Grupo%20COM%202024%2F02%5FCONVENIO%20AFROCOLOMBIAS%5F2035%5F24%2F3%5FEJECUCI%C3%93N%2FESTRATEGIA%5F1%5FFORTALECIMIENTO%20COMUNICACI%C3%93N%20AFROCOLOMBIANA%2F00%5FESCUELAS%20DE%20COMUNICACI%C3%93N%2F2%5FCONVOCATORIA%20ESCUELAS%20NACIONAL%2F2%5FOrganizaci%C3%B3n%20de%20profesionales%20Afrodescendiente%20ra%C3%ADces%20de%20%C3%89bano%2F3%5FTERCER%5FPAGO%5F20%25%2F1%2E%20CONTENIDOS%2F2%2E%20PRODUCTO&viewid=812fa338%2Dbf7a%2D4ee1%2D8fe5%2Dbbb9b939e0f6&ct=1708359294608&or=OWA%2DNT&cid=9ed5b085%2D6b37%2Ddcc0%2Ddd84%2Dd71de767bec9"
    },
    {
      "id": "somos-cultura-de-paz-65",
      "row": 65,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Memoria y Circulaci\u00f3n.",
      "title": "Video memoria patrimonio audiovisual CRIDEC",
      "type": "Video",
      "description": "Video memoria que re\u00fane voces de l\u00edderes ind\u00edgenas, comuneros y profesionales que reflexionan sobre el valor de las memorias audiovisuales registradas dentro de los territorios del departamento de Caldas filiales al Consejo Regional Ind\u00edgena de Caldas (CRIDEC). Es importante dar a conocer c\u00f3mo se est\u00e1 llevando a acabo el proceso de gesti\u00f3n de la memoria en el marco del Programa de Patrimonio Audiovisual Colombiano, Cap\u00edtulo Pueblos Ind\u00edgenas (PACCPI).",
      "keywords": [
        "Video memoria",
        "L\u00edderes ind\u00edgenas",
        "Comuneros",
        "Profesionales",
        "Reflexi\u00f3n sobre memorias audiovisuales",
        "Territorios de Caldas",
        "Consejo Regional Ind\u00edgena de Caldas (CRIDEC)",
        "Gesti\u00f3n de la memoria",
        "Programa de Patrimonio Audiovisual Colombiano (PACCPI)",
        "Cap\u00edtulo Pueblos Ind\u00edgenas",
        "Registro audiovisual",
        "Cultura ind\u00edgena",
        "Conservaci\u00f3n del patrimonio",
        "Identidad territorial",
        "Memoria colectiva",
        "Procesos comunitarios",
        "Patrimonio cultural",
        "Difusi\u00f3n cultural",
        "Participaci\u00f3n ind\u00edgena",
        "Memoria hist\u00f3rica"
      ],
      "link": "https://mcultura-my.sharepoint.com/:v:/g/personal/avillanueva_mincultura_gov_co/IQBoZkpaqepUS5s2phXZJEZkAaipaEbfg0xTt2jQ1OIcCaw?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=JUah2G",
      "asset_link": "",
      "force_message": "Salvaguardar el patrimonio audiovisual es salvaguardar la memoria de nuestros ancestros, de nuestras luchas, de nuestro proceso organizativo.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Memoria y Circulaci\u00f3n. Video memoria patrimonio audiovisual CRIDEC Video Video memoria que re\u00fane voces de l\u00edderes ind\u00edgenas, comuneros y profesionales que reflexionan sobre el valor de las memorias audiovisuales registradas dentro de los territorios del departamento de Caldas filiales al Consejo Regional Ind\u00edgena de Caldas (CRIDEC). Es importante dar a conocer c\u00f3mo se est\u00e1 llevando a acabo el proceso de gesti\u00f3n de la memoria en el marco del Programa de Patrimonio Audiovisual Colombiano, Cap\u00edtulo Pueblos Ind\u00edgenas (PACCPI). Salvaguardar el patrimonio audiovisual es salvaguardar la memoria de nuestros ancestros, de nuestras luchas, de nuestro proceso organizativo. Video memoria L\u00edderes ind\u00edgenas Comuneros Profesionales Reflexi\u00f3n sobre memorias audiovisuales Territorios de Caldas Consejo Regional Ind\u00edgena de Caldas (CRIDEC) Gesti\u00f3n de la memoria Programa de Patrimonio Audiovisual Colombiano (PACCPI) Cap\u00edtulo Pueblos Ind\u00edgenas Registro audiovisual Cultura ind\u00edgena Conservaci\u00f3n del patrimonio Identidad territorial Memoria colectiva Procesos comunitarios Patrimonio cultural Difusi\u00f3n cultural Participaci\u00f3n ind\u00edgena Memoria hist\u00f3rica https://mcultura-my.sharepoint.com/:v:/g/personal/avillanueva_mincultura_gov_co/IQBoZkpaqepUS5s2phXZJEZkAaipaEbfg0xTt2jQ1OIcCaw?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=JUah2G"
    },
    {
      "id": "somos-cultura-de-paz-66",
      "row": 66,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Memoria y Circulaci\u00f3n.",
      "title": "Video Guardianes de la imagen y saberes del Padre Fuego en el CRIHU",
      "type": "Video",
      "description": "A trav\u00e9s de rostros, simbolog\u00edas, medicina ancestral y el palabreo alrededor del Padre Fuego, se revela la importancia del patrimonio audiovisual, los riesgos de su p\u00e9rdida, el despertar de conciencia con la implementaci\u00f3n del Patrimonio Audiovisual Colombiano, Cap\u00edtulo Pueblos Ind\u00edgenas, PACCPI en los ocho pueblos del CRIHU.",
      "keywords": [
        "Rostros y simbolog\u00edas",
        "Medicina ancestral",
        "Padre Fuego",
        "Patrimonio audiovisual",
        "Riesgos de p\u00e9rdida",
        "Despertar de conciencia",
        "Implementaci\u00f3n PACCPI",
        "Cap\u00edtulo Pueblos Ind\u00edgenas",
        "Ocho pueblos del CRIHU",
        "Cultura ind\u00edgena",
        "Tradici\u00f3n oral",
        "Memoria colectiva",
        "Conservaci\u00f3n del patrimonio",
        "Identidad cultural",
        "Saberes ancestrales",
        "Comunicaci\u00f3n audiovisual",
        "Preservaci\u00f3n hist\u00f3rica",
        "Territorio ind\u00edgena",
        "Participaci\u00f3n comunitaria",
        "Protecci\u00f3n del patrimonio intangible"
      ],
      "link": "https://mcultura-my.sharepoint.com/:v:/g/personal/avillanueva_mincultura_gov_co/IQAJ_x7nWYlAQKBtr05xwBLHAXgwb47s-3sdJxKYbJ5WmrY?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=UJfThE",
      "asset_link": "",
      "force_message": "El territorio tambi\u00e9n es un archivo. En cada piedra y en cada \u00e1rbol se guarda la huella de quienes nos ense\u00f1aron a mirar con respeto.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Memoria y Circulaci\u00f3n. Video Guardianes de la imagen y saberes del Padre Fuego en el CRIHU Video A trav\u00e9s de rostros, simbolog\u00edas, medicina ancestral y el palabreo alrededor del Padre Fuego, se revela la importancia del patrimonio audiovisual, los riesgos de su p\u00e9rdida, el despertar de conciencia con la implementaci\u00f3n del Patrimonio Audiovisual Colombiano, Cap\u00edtulo Pueblos Ind\u00edgenas, PACCPI en los ocho pueblos del CRIHU. El territorio tambi\u00e9n es un archivo. En cada piedra y en cada \u00e1rbol se guarda la huella de quienes nos ense\u00f1aron a mirar con respeto. Rostros y simbolog\u00edas Medicina ancestral Padre Fuego Patrimonio audiovisual Riesgos de p\u00e9rdida Despertar de conciencia Implementaci\u00f3n PACCPI Cap\u00edtulo Pueblos Ind\u00edgenas Ocho pueblos del CRIHU Cultura ind\u00edgena Tradici\u00f3n oral Memoria colectiva Conservaci\u00f3n del patrimonio Identidad cultural Saberes ancestrales Comunicaci\u00f3n audiovisual Preservaci\u00f3n hist\u00f3rica Territorio ind\u00edgena Participaci\u00f3n comunitaria Protecci\u00f3n del patrimonio intangible https://mcultura-my.sharepoint.com/:v:/g/personal/avillanueva_mincultura_gov_co/IQAJ_x7nWYlAQKBtr05xwBLHAXgwb47s-3sdJxKYbJ5WmrY?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=UJfThE"
    },
    {
      "id": "somos-cultura-de-paz-67",
      "row": 67,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Memorias",
      "type": "Cortometraje",
      "description": "Cortometraje colectivo creado en el marco del proceso de devoluci\u00f3n de archivos audiovisuales al CRIC, realizada por el Archivo Shub con el apoyo de Daupar\u00e1. Durante tres d\u00edas, siete creadoras se encontraron con un archivo fotogr\u00e1fico que no conoc\u00edan, y colectivamente hilaron esta experiencia audiovisual que es huella de lo que esas im\u00e1genes les hicieron sentir. El proceso de devoluci\u00f3n se da en el marco de la Beca de Gesti\u00f3n del Patrimonio Audiovisual Colombiano (PAC),",
      "keywords": [
        "Cortometraje colectivo",
        "Devoluci\u00f3n de archivos audiovisuales",
        "CRIC",
        "Archivo Shub",
        "Apoyo de Daupar\u00e1",
        "Encuentro con archivo fotogr\u00e1fico",
        "Siete creadoras",
        "Experiencia audiovisual",
        "Memoria colectiva",
        "Huella emocional",
        "Gesti\u00f3n del patrimonio audiovisual",
        "Beca PAC",
        "Cultura ind\u00edgena",
        "Registro hist\u00f3rico",
        "Narrativa participativa",
        "Preservaci\u00f3n de archivos",
        "Identidad cultural",
        "Procesos comunitarios",
        "Arte y memoria",
        "Creaci\u00f3n colaborativa"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "El retorno de la memoria fortalece la re-existencia de los pueblos ind\u00edgenas.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Memorias Cortometraje Cortometraje colectivo creado en el marco del proceso de devoluci\u00f3n de archivos audiovisuales al CRIC, realizada por el Archivo Shub con el apoyo de Daupar\u00e1. Durante tres d\u00edas, siete creadoras se encontraron con un archivo fotogr\u00e1fico que no conoc\u00edan, y colectivamente hilaron esta experiencia audiovisual que es huella de lo que esas im\u00e1genes les hicieron sentir. El proceso de devoluci\u00f3n se da en el marco de la Beca de Gesti\u00f3n del Patrimonio Audiovisual Colombiano (PAC), El retorno de la memoria fortalece la re-existencia de los pueblos ind\u00edgenas. Cortometraje colectivo Devoluci\u00f3n de archivos audiovisuales CRIC Archivo Shub Apoyo de Daupar\u00e1 Encuentro con archivo fotogr\u00e1fico Siete creadoras Experiencia audiovisual Memoria colectiva Huella emocional Gesti\u00f3n del patrimonio audiovisual Beca PAC Cultura ind\u00edgena Registro hist\u00f3rico Narrativa participativa Preservaci\u00f3n de archivos Identidad cultural Procesos comunitarios Arte y memoria Creaci\u00f3n colaborativa NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-68",
      "row": 68,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Calixto El Burro",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en el barrio Villa Mery del municipio de Maicao (La Guajira) en 2024. Diana y su hermano Andr\u00e9s son obligados por su padre a recoger agua en pesados tanques transportados por Calixto, el burro de la familia. La hija de una vecina, al notar el maltrato del animal, decide intervenir y lo roba para darle el agua que necesita y protegerlo.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Barrio Villa Mery",
        "Maicao, La Guajira",
        "2024",
        "Diana y Andr\u00e9s",
        "Trabajo infantil",
        "Recolecci\u00f3n de agua",
        "Tanques pesados",
        "Calixto, el burro",
        "Maltrato animal",
        "Intervenci\u00f3n vecinal",
        "Protecci\u00f3n animal",
        "Solidaridad comunitaria",
        "Derechos de los animales",
        "Vida rural",
        "Narrativa social",
        "Conciencia \u00e9tica",
        "Historias locales",
        "Cultura comunitaria"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "En un territorio de la Guajira, con escasez de agua, Calixto, el burro muestra c\u00f3mo la violencia normalizada se reproduce en la vida cotidiana, y c\u00f3mo la mirada de la infancia propone el cuidado y la compasi\u00f3n como formas de resistencia y dignificaci\u00f3n de la vida.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Calixto El Burro Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en el barrio Villa Mery del municipio de Maicao (La Guajira) en 2024. Diana y su hermano Andr\u00e9s son obligados por su padre a recoger agua en pesados tanques transportados por Calixto, el burro de la familia. La hija de una vecina, al notar el maltrato del animal, decide intervenir y lo roba para darle el agua que necesita y protegerlo. En un territorio de la Guajira, con escasez de agua, Calixto, el burro muestra c\u00f3mo la violencia normalizada se reproduce en la vida cotidiana, y c\u00f3mo la mirada de la infancia propone el cuidado y la compasi\u00f3n como formas de resistencia y dignificaci\u00f3n de la vida. Cortometraje comunitario Formaci\u00f3n en cine comunitario Barrio Villa Mery Maicao, La Guajira 2024 Diana y Andr\u00e9s Trabajo infantil Recolecci\u00f3n de agua Tanques pesados Calixto, el burro Maltrato animal Intervenci\u00f3n vecinal Protecci\u00f3n animal Solidaridad comunitaria Derechos de los animales Vida rural Narrativa social Conciencia \u00e9tica Historias locales Cultura comunitaria NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-69",
      "row": 69,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Huellas Ancestrales",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en el corregimiento Eduardo Santos del municipio de Barranquilla (Atl\u00e1ntico) en 2025. Narra c\u00f3mo el manglar y la ci\u00e9naga de Mallorqu\u00edn, antes dominantes en el territorio de La Playa, han sido afectados por el desarrollo urbano y la expansi\u00f3n de la ciudad. Pescadores, artesanos y cocineras reconstruyen la memoria del lugar y la urgencia de su preservaci\u00f3n.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Corregimiento Eduardo Santos",
        "Barranquilla, Atl\u00e1ntico",
        "2025",
        "Manglar",
        "Ci\u00e9naga de Mallorqu\u00edn",
        "La Playa",
        "Desarrollo urbano",
        "Expansi\u00f3n de la ciudad",
        "Pescadores",
        "Artesanos",
        "Cocineras",
        "Memoria del territorio",
        "Preservaci\u00f3n ambiental",
        "Conciencia ecol\u00f3gica",
        "Patrimonio natural",
        "Cultura local",
        "Impacto ambiental",
        "Historia comunitaria"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Huellas ancestrales reflexiona sobre la p\u00e9rdida del v\u00ednculo entre comunidad y naturaleza frente al avance del desarrollo urbano, evidenciando c\u00f3mo el deterioro del manglar y la ci\u00e9naga de Mallorqu\u00edn (Corregimiento La playa, Barranquilla), amenaza no solo la biodiversidad, sino tambi\u00e9n la memoria, los saberes y las pr\u00e1cticas culturales de quienes han habitado hist\u00f3ricamente el territorio. A trav\u00e9s de las voces comunitarias, se reivindica la urgencia de recuperar y proteger esa memoria ancestral como base para la vida y la identidad colectiva.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Huellas Ancestrales Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en el corregimiento Eduardo Santos del municipio de Barranquilla (Atl\u00e1ntico) en 2025. Narra c\u00f3mo el manglar y la ci\u00e9naga de Mallorqu\u00edn, antes dominantes en el territorio de La Playa, han sido afectados por el desarrollo urbano y la expansi\u00f3n de la ciudad. Pescadores, artesanos y cocineras reconstruyen la memoria del lugar y la urgencia de su preservaci\u00f3n. Huellas ancestrales reflexiona sobre la p\u00e9rdida del v\u00ednculo entre comunidad y naturaleza frente al avance del desarrollo urbano, evidenciando c\u00f3mo el deterioro del manglar y la ci\u00e9naga de Mallorqu\u00edn (Corregimiento La playa, Barranquilla), amenaza no solo la biodiversidad, sino tambi\u00e9n la memoria, los saberes y las pr\u00e1cticas culturales de quienes han habitado hist\u00f3ricamente el territorio. A trav\u00e9s de las voces comunitarias, se reivindica la urgencia de recuperar y proteger esa memoria ancestral como base para la vida y la identidad colectiva. Cortometraje comunitario Formaci\u00f3n en cine comunitario Corregimiento Eduardo Santos Barranquilla, Atl\u00e1ntico 2025 Manglar Ci\u00e9naga de Mallorqu\u00edn La Playa Desarrollo urbano Expansi\u00f3n de la ciudad Pescadores Artesanos Cocineras Memoria del territorio Preservaci\u00f3n ambiental Conciencia ecol\u00f3gica Patrimonio natural Cultura local Impacto ambiental Historia comunitaria NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-70",
      "row": 70,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje El Poz\u00f3n Baila",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en el barrio El Poz\u00f3n de Cartagena (Bol\u00edvar) en 2025. Nichol, una bailarina del barrio, y sus amigos luchan por cumplir su sue\u00f1o de bailar pese a los estigmas y la falta de apoyo familiar y comunitario. Tras no obtener un espacio en la Casa de la Cultura, organizan una toma cultural para reivindicar el baile como una expresi\u00f3n art\u00edstica y sana.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Barrio El Poz\u00f3n",
        "Cartagena, Bol\u00edvar",
        "2025",
        "Nichol",
        "Bailarina",
        "Sue\u00f1os art\u00edsticos",
        "Amigos del barrio",
        "Estigmas sociales",
        "Falta de apoyo familiar y comunitario",
        "Casa de la Cultura",
        "Toma cultural",
        "Reivindicaci\u00f3n del baile",
        "Expresi\u00f3n art\u00edstica",
        "Cultura local",
        "Arte urbano",
        "Juventud y creatividad",
        "Resiliencia comunitaria",
        "Participaci\u00f3n ciudadana"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "El Poz\u00f3n baila retrata el baile como una herramienta de resistencia y afirmaci\u00f3n juvenil frente a los estigmas, la falta de oportunidades y el abandono institucional. Desde la iniciativa colectiva, se reivindica el arte y la ocupaci\u00f3n cultural del espacio p\u00fablico como actos leg\u00edtimos de dignidad, expresi\u00f3n y transformaci\u00f3n social en los territorios populares del barrio El Poz\u00f3n Cartagena.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje El Poz\u00f3n Baila Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en el barrio El Poz\u00f3n de Cartagena (Bol\u00edvar) en 2025. Nichol, una bailarina del barrio, y sus amigos luchan por cumplir su sue\u00f1o de bailar pese a los estigmas y la falta de apoyo familiar y comunitario. Tras no obtener un espacio en la Casa de la Cultura, organizan una toma cultural para reivindicar el baile como una expresi\u00f3n art\u00edstica y sana. El Poz\u00f3n baila retrata el baile como una herramienta de resistencia y afirmaci\u00f3n juvenil frente a los estigmas, la falta de oportunidades y el abandono institucional. Desde la iniciativa colectiva, se reivindica el arte y la ocupaci\u00f3n cultural del espacio p\u00fablico como actos leg\u00edtimos de dignidad, expresi\u00f3n y transformaci\u00f3n social en los territorios populares del barrio El Poz\u00f3n Cartagena. Cortometraje comunitario Formaci\u00f3n en cine comunitario Barrio El Poz\u00f3n Cartagena, Bol\u00edvar 2025 Nichol Bailarina Sue\u00f1os art\u00edsticos Amigos del barrio Estigmas sociales Falta de apoyo familiar y comunitario Casa de la Cultura Toma cultural Reivindicaci\u00f3n del baile Expresi\u00f3n art\u00edstica Cultura local Arte urbano Juventud y creatividad Resiliencia comunitaria Participaci\u00f3n ciudadana NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-71",
      "row": 71,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Mar De Libertad",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en Apartad\u00f3 (Antioquia) en 2024. Romina sale del mar en busca de su hija Manuela, quien trabaja en una finca bananera. Desde un misterioso cuarto, Manuela escucha a su madre pedirle un llamador. Frente a un altar en su honor escondido en el cuarto, Romina le canta un arrullo, creando un v\u00ednculo profundo que impulsa a Manuela a liberarse. Con el mar como su \u00fanica salida, Manuela emprende una carrera hacia la libertad.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Apartad\u00f3, Antioquia",
        "2024",
        "Romina",
        "Manuela",
        "Mar",
        "Finca bananera",
        "Llamador",
        "Arrullo",
        "V\u00ednculo madre-hija",
        "Libertad",
        "Misterio y espiritualidad",
        "Altar",
        "Rescate emocional",
        "Empoderamiento femenino",
        "Narrativa simb\u00f3lica",
        "Cultura local",
        "Resistencia y esperanza",
        "Tradici\u00f3n oral y cantos"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Mar de libertad utiliza el v\u00ednculo espiritual entre madre e hija para narrar una b\u00fasqueda de emancipaci\u00f3n en medio de condiciones de encierro, explotaci\u00f3n laboral y violencias de g\u00e9nero. A trav\u00e9s del arrullo, la memoria y el mar como s\u00edmbolo de origen y escape, se plantea la libertad como un acto \u00edntimo y profundo de reconexi\u00f3n con la identidad y la dignidad.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Mar De Libertad Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en Apartad\u00f3 (Antioquia) en 2024. Romina sale del mar en busca de su hija Manuela, quien trabaja en una finca bananera. Desde un misterioso cuarto, Manuela escucha a su madre pedirle un llamador. Frente a un altar en su honor escondido en el cuarto, Romina le canta un arrullo, creando un v\u00ednculo profundo que impulsa a Manuela a liberarse. Con el mar como su \u00fanica salida, Manuela emprende una carrera hacia la libertad. Mar de libertad utiliza el v\u00ednculo espiritual entre madre e hija para narrar una b\u00fasqueda de emancipaci\u00f3n en medio de condiciones de encierro, explotaci\u00f3n laboral y violencias de g\u00e9nero. A trav\u00e9s del arrullo, la memoria y el mar como s\u00edmbolo de origen y escape, se plantea la libertad como un acto \u00edntimo y profundo de reconexi\u00f3n con la identidad y la dignidad. Cortometraje comunitario Formaci\u00f3n en cine comunitario Apartad\u00f3, Antioquia 2024 Romina Manuela Mar Finca bananera Llamador Arrullo V\u00ednculo madre-hija Libertad Misterio y espiritualidad Altar Rescate emocional Empoderamiento femenino Narrativa simb\u00f3lica Cultura local Resistencia y esperanza Tradici\u00f3n oral y cantos NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-72",
      "row": 72,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje La Tierra de La Dignidad",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en Su\u00e1rez (Cauca) en 2024.La madre tierra recorre el territorio en busca de sus habitantes para pedirles protecci\u00f3n. Los afros y los ind\u00edgenas se unen en una sola juntanza para danzar por el cuidado del territorio y de la vida.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Su\u00e1rez, Cauca",
        "2024",
        "Madre Tierra",
        "Protecci\u00f3n del territorio",
        "Afros e ind\u00edgenas",
        "Juntanza",
        "Danzas rituales",
        "Cuidado del medio ambiente",
        "Vida y naturaleza",
        "Unidad comunitaria",
        "Cultura ancestral",
        "Espiritualidad",
        "Memoria colectiva",
        "Tradici\u00f3n afrocolombiana",
        "Tradici\u00f3n ind\u00edgena",
        "Resistencia cultural",
        "Conciencia ambiental",
        "Participaci\u00f3n comunitaria"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "La tierra de la dignidad concibe el territorio como un ser vivo que interpela a sus pueblos a defenderlo. Desde la uni\u00f3n de comunidades afro e ind\u00edgenas, el cortometraje exalta la juntanza, la danza y la espiritualidad como expresiones colectivas de resistencia, cuidado de la vida y afirmaci\u00f3n de la dignidad frente a las amenazas al territorio de Su\u00e1rez, Cauca.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje La Tierra de La Dignidad Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en Su\u00e1rez (Cauca) en 2024.La madre tierra recorre el territorio en busca de sus habitantes para pedirles protecci\u00f3n. Los afros y los ind\u00edgenas se unen en una sola juntanza para danzar por el cuidado del territorio y de la vida. La tierra de la dignidad concibe el territorio como un ser vivo que interpela a sus pueblos a defenderlo. Desde la uni\u00f3n de comunidades afro e ind\u00edgenas, el cortometraje exalta la juntanza, la danza y la espiritualidad como expresiones colectivas de resistencia, cuidado de la vida y afirmaci\u00f3n de la dignidad frente a las amenazas al territorio de Su\u00e1rez, Cauca. Cortometraje comunitario Formaci\u00f3n en cine comunitario Su\u00e1rez, Cauca 2024 Madre Tierra Protecci\u00f3n del territorio Afros e ind\u00edgenas Juntanza Danzas rituales Cuidado del medio ambiente Vida y naturaleza Unidad comunitaria Cultura ancestral Espiritualidad Memoria colectiva Tradici\u00f3n afrocolombiana Tradici\u00f3n ind\u00edgena Resistencia cultural Conciencia ambiental Participaci\u00f3n comunitaria NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-73",
      "row": 73,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje La Explotaci\u00f3n de la Abundancia",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en La Chorrera (Amazonas) en 2024.Explotaci\u00f3n a la abundancia, es un mito que narra la historia de una mujer embarazada de la cual brota la semilla de la vida, simbolizando la esperanza, la abundancia y el sustento del mundo.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "La Chorrera, Amazonas",
        "2024",
        "Explotaci\u00f3n a la abundancia",
        "Mito",
        "Mujer embarazada",
        "Semilla de la vida",
        "Esperanza",
        "Abundancia",
        "Sustento del mundo",
        "Simbolismo",
        "Tradici\u00f3n oral",
        "Cosmovisi\u00f3n amaz\u00f3nica",
        "Cultura ind\u00edgena",
        "Naturaleza y vida",
        "Espiritualidad",
        "Memoria colectiva",
        "Herencia cultural",
        "Narrativa simb\u00f3lica"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Explotaci\u00f3n a la abundancia recurre al mito para representar el origen de la vida como un acto sagrado de gestaci\u00f3n y entrega. A trav\u00e9s de la figura de la mujer de la que brota la semilla vital, se reivindica la abundancia, la fertilidad y el equilibrio con la naturaleza como fundamentos espirituales para la continuidad del mundo y la esperanza colectiva desde La Chorrera, Amazonas",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje La Explotaci\u00f3n de la Abundancia Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en La Chorrera (Amazonas) en 2024.Explotaci\u00f3n a la abundancia, es un mito que narra la historia de una mujer embarazada de la cual brota la semilla de la vida, simbolizando la esperanza, la abundancia y el sustento del mundo. Explotaci\u00f3n a la abundancia recurre al mito para representar el origen de la vida como un acto sagrado de gestaci\u00f3n y entrega. A trav\u00e9s de la figura de la mujer de la que brota la semilla vital, se reivindica la abundancia, la fertilidad y el equilibrio con la naturaleza como fundamentos espirituales para la continuidad del mundo y la esperanza colectiva desde La Chorrera, Amazonas Cortometraje comunitario Formaci\u00f3n en cine comunitario La Chorrera, Amazonas 2024 Explotaci\u00f3n a la abundancia Mito Mujer embarazada Semilla de la vida Esperanza Abundancia Sustento del mundo Simbolismo Tradici\u00f3n oral Cosmovisi\u00f3n amaz\u00f3nica Cultura ind\u00edgena Naturaleza y vida Espiritualidad Memoria colectiva Herencia cultural Narrativa simb\u00f3lica NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-74",
      "row": 74,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje La Flor Amarilla",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en La Chorrera (Amazonas) en 2024. Una ni\u00f1a que recorre su territorio y ve una hermosa flor amarilla. Un pez le revela la forma de darle vida a los p\u00e9talos para que se abran. Su abuelo le regala una canci\u00f3n.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "La Chorrera, Amazonas",
        "2024",
        "Ni\u00f1a exploradora",
        "Territorio ancestral",
        "Flor amarilla",
        "Pez gu\u00eda",
        "Vida y naturaleza",
        "P\u00e9talos que se abren",
        "Abuelo",
        "Canci\u00f3n heredada",
        "Saberes ancestrales",
        "Cosmovisi\u00f3n amaz\u00f3nica",
        "Espiritualidad",
        "Tradici\u00f3n oral",
        "Memoria cultural",
        "Conexi\u00f3n intergeneracional",
        "Cultura ind\u00edgena",
        "Narrativa simb\u00f3lica"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Flor amarilla celebra la transmisi\u00f3n de saberes ancestrales y la relaci\u00f3n espiritual con la naturaleza a trav\u00e9s de la mirada de la infancia. El territorio como un espacio vivo donde la memoria, el canto y el di\u00e1logo con otros seres sostienen la vida y fortalecen el v\u00ednculo entre generaciones.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje La Flor Amarilla Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en La Chorrera (Amazonas) en 2024. Una ni\u00f1a que recorre su territorio y ve una hermosa flor amarilla. Un pez le revela la forma de darle vida a los p\u00e9talos para que se abran. Su abuelo le regala una canci\u00f3n. Flor amarilla celebra la transmisi\u00f3n de saberes ancestrales y la relaci\u00f3n espiritual con la naturaleza a trav\u00e9s de la mirada de la infancia. El territorio como un espacio vivo donde la memoria, el canto y el di\u00e1logo con otros seres sostienen la vida y fortalecen el v\u00ednculo entre generaciones. Cortometraje comunitario Formaci\u00f3n en cine comunitario La Chorrera, Amazonas 2024 Ni\u00f1a exploradora Territorio ancestral Flor amarilla Pez gu\u00eda Vida y naturaleza P\u00e9talos que se abren Abuelo Canci\u00f3n heredada Saberes ancestrales Cosmovisi\u00f3n amaz\u00f3nica Espiritualidad Tradici\u00f3n oral Memoria cultural Conexi\u00f3n intergeneracional Cultura ind\u00edgena Narrativa simb\u00f3lica NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-75",
      "row": 75,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Ritmo Prohibido",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Bellavista, municipio de Bojay\u00e1 (Choc\u00f3), en 2025. En una casa rural marcada por la autoridad y las tradiciones, un joven enfrenta la presi\u00f3n de su familia para abandonar el baile y dedicarse al trabajo en la finca. Entre prohibiciones y comparaciones con la figura ausente del padre, su deseo de bailar se convierte en un acto de rebeld\u00eda silenciosa.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Bellavista, Bojay\u00e1, Choc\u00f3",
        "Casa rural",
        "Autoridad familiar",
        "Tradiciones",
        "Joven protagonista",
        "Presi\u00f3n familiar",
        "Trabajo en la finca",
        "Prohibiciones",
        "Comparaciones paternas",
        "Ausencia del padre",
        "Baile como rebeld\u00eda",
        "Expresi\u00f3n art\u00edstica",
        "Identidad personal",
        "Cultura local",
        "Juventud y resistencia",
        "Narrativa social",
        "Creatividad y libertad"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Ritmo prohibido explora el conflicto entre tradici\u00f3n, autoridad familiar y deseo individual, donde el baile emerge como un acto \u00edntimo de resistencia frente a las imposiciones del entorno. La expresi\u00f3n art\u00edstica como un camino leg\u00edtimo de identidad, libertad y afirmaci\u00f3n personal en contextos rurales atravesados por normas heredadas y silencios familiares.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Ritmo Prohibido Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Bellavista, municipio de Bojay\u00e1 (Choc\u00f3), en 2025. En una casa rural marcada por la autoridad y las tradiciones, un joven enfrenta la presi\u00f3n de su familia para abandonar el baile y dedicarse al trabajo en la finca. Entre prohibiciones y comparaciones con la figura ausente del padre, su deseo de bailar se convierte en un acto de rebeld\u00eda silenciosa. Ritmo prohibido explora el conflicto entre tradici\u00f3n, autoridad familiar y deseo individual, donde el baile emerge como un acto \u00edntimo de resistencia frente a las imposiciones del entorno. La expresi\u00f3n art\u00edstica como un camino leg\u00edtimo de identidad, libertad y afirmaci\u00f3n personal en contextos rurales atravesados por normas heredadas y silencios familiares. Cortometraje comunitario Formaci\u00f3n en cine comunitario Bellavista, Bojay\u00e1, Choc\u00f3 Casa rural Autoridad familiar Tradiciones Joven protagonista Presi\u00f3n familiar Trabajo en la finca Prohibiciones Comparaciones paternas Ausencia del padre Baile como rebeld\u00eda Expresi\u00f3n art\u00edstica Identidad personal Cultura local Juventud y resistencia Narrativa social Creatividad y libertad NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-76",
      "row": 76,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Warana Kincha",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Bellavista, municipio de Bojay\u00e1 (Choc\u00f3), en 2025. Warana Kincha (\u201cnuestras costumbres\u201d en lengua embera dobid\u00e1) re\u00fane a mujeres embera dobid\u00e1 que narran sus saberes y pr\u00e1cticas culturales, visibilizando la relaci\u00f3n entre territorio, memoria e identidad, y la fuerza de una cultura viva que se transmite de generaci\u00f3n en generaci\u00f3n.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Bellavista, Bojay\u00e1, Choc\u00f3",
        "2025",
        "Warana Kincha",
        "Mujeres embera dobid\u00e1",
        "Saberes ancestrales",
        "Pr\u00e1cticas culturales",
        "Territorio",
        "Memoria",
        "Identidad cultural",
        "Cultura viva",
        "Transmisi\u00f3n generacional",
        "Lengua embera dobid\u00e1",
        "Resistencia cultural",
        "Narrativa participativa",
        "Empoderamiento femenino",
        "Patrimonio inmaterial",
        "Herencia comunitaria",
        "Tradici\u00f3n y modernidad"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Warana reivindica la voz de las mujeres Embera Dobid\u00e1 como portadoras de la memoria y las costumbres ancestrales. A trav\u00e9s de sus relatos y pr\u00e1cticas, se visibiliza la relaci\u00f3n profunda entre territorio, identidad y transmisi\u00f3n intergeneracional, afirmando la vigencia y fortaleza de una cultura viva que resiste y se cuida colectivamente.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Warana Kincha Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Bellavista, municipio de Bojay\u00e1 (Choc\u00f3), en 2025. Warana Kincha (\u201cnuestras costumbres\u201d en lengua embera dobid\u00e1) re\u00fane a mujeres embera dobid\u00e1 que narran sus saberes y pr\u00e1cticas culturales, visibilizando la relaci\u00f3n entre territorio, memoria e identidad, y la fuerza de una cultura viva que se transmite de generaci\u00f3n en generaci\u00f3n. Warana reivindica la voz de las mujeres Embera Dobid\u00e1 como portadoras de la memoria y las costumbres ancestrales. A trav\u00e9s de sus relatos y pr\u00e1cticas, se visibiliza la relaci\u00f3n profunda entre territorio, identidad y transmisi\u00f3n intergeneracional, afirmando la vigencia y fortaleza de una cultura viva que resiste y se cuida colectivamente. Cortometraje comunitario Formaci\u00f3n en cine comunitario Bellavista, Bojay\u00e1, Choc\u00f3 2025 Warana Kincha Mujeres embera dobid\u00e1 Saberes ancestrales Pr\u00e1cticas culturales Territorio Memoria Identidad cultural Cultura viva Transmisi\u00f3n generacional Lengua embera dobid\u00e1 Resistencia cultural Narrativa participativa Empoderamiento femenino Patrimonio inmaterial Herencia comunitaria Tradici\u00f3n y modernidad NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-77",
      "row": 77,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Monfort 1921",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en la comunidad de Monfort (Vaup\u00e9s) en 2025. Monfort 1921 narra la lucha por preservar las tradiciones de los pueblos ind\u00edgenas Tucano, Desano y Piratapuyo, frente a los procesos de conquista y transformaci\u00f3n cultural, destacando su resistencia, memoria ancestral y defensa del territorio como formas de permanencia y dignidad colectiva.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Comunidad de Monfort, Vaup\u00e9s",
        "2025",
        "Monfort 1921",
        "Pueblos ind\u00edgenas",
        "Tucano, Desano, Piratapuyo",
        "Preservaci\u00f3n de tradiciones",
        "Conquista cultural",
        "Transformaci\u00f3n cultural",
        "Resistencia ind\u00edgena",
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
      "force_message": "Monfort 1921 evoca la memoria hist\u00f3rica de los pueblos Tucano, Desano y Piratapuyo para afirmar la resistencia cultural frente a los procesos de conquista y transformaci\u00f3n forzada. Se reivindica la defensa del territorio, las tradiciones y la memoria ancestral como pilares de la dignidad colectiva y la permanencia de los pueblos ind\u00edgenas del Vaup\u00e9s, Colombia.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Monfort 1921 Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario implementada en la comunidad de Monfort (Vaup\u00e9s) en 2025. Monfort 1921 narra la lucha por preservar las tradiciones de los pueblos ind\u00edgenas Tucano, Desano y Piratapuyo, frente a los procesos de conquista y transformaci\u00f3n cultural, destacando su resistencia, memoria ancestral y defensa del territorio como formas de permanencia y dignidad colectiva. Monfort 1921 evoca la memoria hist\u00f3rica de los pueblos Tucano, Desano y Piratapuyo para afirmar la resistencia cultural frente a los procesos de conquista y transformaci\u00f3n forzada. Se reivindica la defensa del territorio, las tradiciones y la memoria ancestral como pilares de la dignidad colectiva y la permanencia de los pueblos ind\u00edgenas del Vaup\u00e9s, Colombia. Cortometraje comunitario Formaci\u00f3n en cine comunitario Comunidad de Monfort, Vaup\u00e9s 2025 Monfort 1921 Pueblos ind\u00edgenas Tucano, Desano, Piratapuyo Preservaci\u00f3n de tradiciones Conquista cultural Transformaci\u00f3n cultural Resistencia ind\u00edgena Memoria ancestral Defensa del territorio Dignidad colectiva Cultura viva Patrimonio intangible Herencia comunitaria Identidad cultural Permanencia cultural Narrativa participativa NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-78",
      "row": 78,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Lovavieja",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Bellavista, municipio de Barranco de Loba (Bol\u00edvar), en 2025. En este territorio, la tambora no es solo m\u00fasica, sino memoria, herencia y forma de existencia. A trav\u00e9s de las voces de abuelos, ni\u00f1os y maestros, se narra c\u00f3mo el canto, el baile y el tambor transmiten valores como el respeto, la uni\u00f3n y la humildad, consolid\u00e1ndose como un s\u00edmbolo de identidad colectiva y v\u00ednculo con el territorio.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Bellavista, Barranco de Loba, Bol\u00edvar",
        "2025",
        "Tambora",
        "M\u00fasica tradicional",
        "Memoria cultural",
        "Herencia ancestral",
        "Canto y baile",
        "Maestros, abuelos y ni\u00f1os",
        "Transmisi\u00f3n intergeneracional",
        "Valores comunitarios",
        "Respeto, uni\u00f3n, humildad",
        "Identidad colectiva",
        "V\u00ednculo con el territorio",
        "Cultura local",
        "Patrimonio intangible",
        "Tradici\u00f3n afrocolombiana",
        "Narrativa participativa",
        "Expresi\u00f3n art\u00edstica comunitaria"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "La tambora como un eje vital de la memoria y la identidad en Barranco de Loba. A trav\u00e9s de la transmisi\u00f3n intergeneracional del canto, el baile y el tambor. La m\u00fasica tradicional como herencia ancestral que fortalece los lazos comunitarios, el v\u00ednculo con el territorio y los valores que sostienen la vida colectiva.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Lovavieja Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Bellavista, municipio de Barranco de Loba (Bol\u00edvar), en 2025. En este territorio, la tambora no es solo m\u00fasica, sino memoria, herencia y forma de existencia. A trav\u00e9s de las voces de abuelos, ni\u00f1os y maestros, se narra c\u00f3mo el canto, el baile y el tambor transmiten valores como el respeto, la uni\u00f3n y la humildad, consolid\u00e1ndose como un s\u00edmbolo de identidad colectiva y v\u00ednculo con el territorio. La tambora como un eje vital de la memoria y la identidad en Barranco de Loba. A trav\u00e9s de la transmisi\u00f3n intergeneracional del canto, el baile y el tambor. La m\u00fasica tradicional como herencia ancestral que fortalece los lazos comunitarios, el v\u00ednculo con el territorio y los valores que sostienen la vida colectiva. Cortometraje comunitario Formaci\u00f3n en cine comunitario Bellavista, Barranco de Loba, Bol\u00edvar 2025 Tambora M\u00fasica tradicional Memoria cultural Herencia ancestral Canto y baile Maestros, abuelos y ni\u00f1os Transmisi\u00f3n intergeneracional Valores comunitarios Respeto, uni\u00f3n, humildad Identidad colectiva V\u00ednculo con el territorio Cultura local Patrimonio intangible Tradici\u00f3n afrocolombiana Narrativa participativa Expresi\u00f3n art\u00edstica comunitaria NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-79",
      "row": 79,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Cultura Ancestral Uni\u00f3n Cuity",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Uni\u00f3n Cuity, municipio de Bojay\u00e1 (Choc\u00f3), en 2025. Cultura ancestral es un cortometraje de la comunidad del resguardo Alto Napip\u00ed que narra la lucha por conservar las costumbres embera dobid\u00e1 a trav\u00e9s de pr\u00e1cticas como el corte de cabello ancestral, la danza femenina, la pesca, el cultivo y la pintura corporal, como expresiones fundamentales del ser ind\u00edgena.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Uni\u00f3n Cuity, Bojay\u00e1, Choc\u00f3",
        "2025",
        "Cultura ancestral",
        "Comunidad del resguardo Alto Napip\u00ed",
        "Pueblos embera dobid\u00e1",
        "Conservaci\u00f3n de costumbres",
        "Corte de cabello ancestral",
        "Danza femenina",
        "Pesca tradicional",
        "Cultivo ancestral",
        "Pintura corporal",
        "Expresiones culturales",
        "Identidad ind\u00edgena",
        "Patrimonio intangible",
        "Tradici\u00f3n y cultura viva",
        "Resistencia cultural",
        "Memoria comunitaria",
        "Narrativa participativa"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Cultural ancestral Uni\u00f3n Cuity afirma la preservaci\u00f3n de las costumbres del pueblo Embera Dobid\u00e1 como un acto de resistencia y continuidad cultural. A trav\u00e9s de pr\u00e1cticas cotidianas y rituales \u2014como el corte de cabello ancestral, la danza, la pesca, el cultivo y la pintura corporal\u2014 Se reivindica la identidad ind\u00edgena y la defensa de una forma de vida profundamente ligada al territorio y la memoria colectiva.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Cultura Ancestral Uni\u00f3n Cuity Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Uni\u00f3n Cuity, municipio de Bojay\u00e1 (Choc\u00f3), en 2025. Cultura ancestral es un cortometraje de la comunidad del resguardo Alto Napip\u00ed que narra la lucha por conservar las costumbres embera dobid\u00e1 a trav\u00e9s de pr\u00e1cticas como el corte de cabello ancestral, la danza femenina, la pesca, el cultivo y la pintura corporal, como expresiones fundamentales del ser ind\u00edgena. Cultural ancestral Uni\u00f3n Cuity afirma la preservaci\u00f3n de las costumbres del pueblo Embera Dobid\u00e1 como un acto de resistencia y continuidad cultural. A trav\u00e9s de pr\u00e1cticas cotidianas y rituales \u2014como el corte de cabello ancestral, la danza, la pesca, el cultivo y la pintura corporal\u2014 Se reivindica la identidad ind\u00edgena y la defensa de una forma de vida profundamente ligada al territorio y la memoria colectiva. Cortometraje comunitario Formaci\u00f3n en cine comunitario Uni\u00f3n Cuity, Bojay\u00e1, Choc\u00f3 2025 Cultura ancestral Comunidad del resguardo Alto Napip\u00ed Pueblos embera dobid\u00e1 Conservaci\u00f3n de costumbres Corte de cabello ancestral Danza femenina Pesca tradicional Cultivo ancestral Pintura corporal Expresiones culturales Identidad ind\u00edgena Patrimonio intangible Tradici\u00f3n y cultura viva Resistencia cultural Memoria comunitaria Narrativa participativa NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-80",
      "row": 80,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario",
      "title": "Cortometraje Sabdur-Jagua",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en la comunidad de Caim\u00e1n Alto, municipio de Necocl\u00ed (Antioquia), en 2025. El Sabdur o jagua es un fruto sagrado del pueblo Guna Dule, habitante ancestral de las selvas de la frontera colombo-paname\u00f1a. El cortometraje retrata sus usos, saberes y costumbres en torno a este fruto como expresi\u00f3n de identidad, espiritualidad y continuidad cultural.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Comunidad de Caim\u00e1n Alto, Necocl\u00ed, Antioquia",
        "2025",
        "Sabdur / jagua",
        "Fruto sagrado",
        "Pueblo Guna Dule",
        "Selvas colombo-paname\u00f1as",
        "Usos tradicionales",
        "Saberes ancestrales",
        "Costumbres culturales",
        "Identidad ind\u00edgena",
        "Espiritualidad",
        "Continuidad cultural",
        "Patrimonio intangible",
        "Cultura viva",
        "Tradici\u00f3n oral",
        "Pr\u00e1cticas rituales",
        "Conexi\u00f3n con la naturaleza",
        "Narrativa participativa"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "El Sabdur o jagua es un elemento sagrado que articula la vida espiritual, cultural y comunitaria del pueblo Guna Dule. A trav\u00e9s de sus usos y saberes ancestrales, se afirma la relaci\u00f3n profunda entre naturaleza, identidad y continuidad cultural, resaltando la vigencia de una tradici\u00f3n que sostiene la memoria colectiva y la cohesi\u00f3n del pueblo.",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Transversal-Cine Comunitario Cortometraje Sabdur-Jagua Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en la comunidad de Caim\u00e1n Alto, municipio de Necocl\u00ed (Antioquia), en 2025. El Sabdur o jagua es un fruto sagrado del pueblo Guna Dule, habitante ancestral de las selvas de la frontera colombo-paname\u00f1a. El cortometraje retrata sus usos, saberes y costumbres en torno a este fruto como expresi\u00f3n de identidad, espiritualidad y continuidad cultural. El Sabdur o jagua es un elemento sagrado que articula la vida espiritual, cultural y comunitaria del pueblo Guna Dule. A trav\u00e9s de sus usos y saberes ancestrales, se afirma la relaci\u00f3n profunda entre naturaleza, identidad y continuidad cultural, resaltando la vigencia de una tradici\u00f3n que sostiene la memoria colectiva y la cohesi\u00f3n del pueblo. Cortometraje comunitario Formaci\u00f3n en cine comunitario Comunidad de Caim\u00e1n Alto, Necocl\u00ed, Antioquia 2025 Sabdur / jagua Fruto sagrado Pueblo Guna Dule Selvas colombo-paname\u00f1as Usos tradicionales Saberes ancestrales Costumbres culturales Identidad ind\u00edgena Espiritualidad Continuidad cultural Patrimonio intangible Cultura viva Tradici\u00f3n oral Pr\u00e1cticas rituales Conexi\u00f3n con la naturaleza Narrativa participativa NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-81",
      "row": 81,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Cortometraje 20 de Julio",
      "type": "Cortometraje",
      "description": "Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Curuman\u00ed y Pailitas, en el corregimiento 20 de Julio (Cesar), en 2025. El 20 de Julio es una experiencia de resistencia campesina por el derecho a habitar, labrar y vivir en la propia tierra. El cortometraje narra, desde la voz de sus protagonistas, la lucha del campesinado del Cesar por la recuperaci\u00f3n de sus territorios y la defensa de su dignidad y forma de vida.",
      "keywords": [
        "Cortometraje comunitario",
        "Formaci\u00f3n en cine comunitario",
        "Curuman\u00ed y Pailitas, corregimiento 20 de Julio, Cesar",
        "2025",
        "El 20 de Julio",
        "Resistencia campesina",
        "Derecho a la tierra",
        "Habitar y labrar la tierra",
        "Campesinos y campesinas",
        "Recuperaci\u00f3n de territorios",
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
      "force_message": "20 de julio retrata la resistencia campesina como una lucha leg\u00edtima por el derecho a la tierra y a una vida digna. A trav\u00e9s de las voces de sus protagonistas, se visibiliza la recuperaci\u00f3n del territorio como un acto de memoria, justicia y defensa colectiva del modo de vida campesina en el Cesar.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Cortometraje 20 de Julio Cortometraje Cortometraje realizado en el marco de la estrategia de formaci\u00f3n en cine comunitario en Curuman\u00ed y Pailitas, en el corregimiento 20 de Julio (Cesar), en 2025. El 20 de Julio es una experiencia de resistencia campesina por el derecho a habitar, labrar y vivir en la propia tierra. El cortometraje narra, desde la voz de sus protagonistas, la lucha del campesinado del Cesar por la recuperaci\u00f3n de sus territorios y la defensa de su dignidad y forma de vida. 20 de julio retrata la resistencia campesina como una lucha leg\u00edtima por el derecho a la tierra y a una vida digna. A trav\u00e9s de las voces de sus protagonistas, se visibiliza la recuperaci\u00f3n del territorio como un acto de memoria, justicia y defensa colectiva del modo de vida campesina en el Cesar. Cortometraje comunitario Formaci\u00f3n en cine comunitario Curuman\u00ed y Pailitas, corregimiento 20 de Julio, Cesar 2025 El 20 de Julio Resistencia campesina Derecho a la tierra Habitar y labrar la tierra Campesinos y campesinas Recuperaci\u00f3n de territorios Defensa de la dignidad Forma de vida campesina Voz de los protagonistas Identidad rural Memoria colectiva Patrimonio cultural Justicia territorial Cultura campesina Lucha social Narrativa participativa PENDIENTE"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-82",
      "row": 82,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Documental El Siete",
      "type": "Documental",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Fanny trabaja junto a sus socios en un oficio tradicionalmente masculino: los talleres mec\u00e1nicos del barrio Siete de Agosto en Bogot\u00e1. Orgullosa de ganarse la vida en el que define como el mercado de autopartes m\u00e1s grande de Am\u00e9rica Latina, ella forma parte del nutrido mundo de latoneros, electricistas, torneros, pintores, gomeros, vendedores ambulantes y mec\u00e1nicos del Siete de Agosto.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Fanny",
        "Oficio tradicionalmente masculino",
        "Talleres mec\u00e1nicos",
        "Barrio Siete de Agosto, Bogot\u00e1",
        "Mercado de autopartes",
        "Am\u00e9rica Latina",
        "Latoneros",
        "Electricistas",
        "Torneros",
        "Pintores",
        "Gomeros",
        "Vendedores ambulantes",
        "Mec\u00e1nicos",
        "Trabajo urbano",
        "Econom\u00eda informal",
        "Empoderamiento femenino",
        "Cultura laboral",
        "Comunidad de oficios"
      ],
      "link": "https://www.youtube.com/watch?v=Lti0bxftY3M",
      "asset_link": "",
      "force_message": "Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a \u00e9l, pero tambi\u00e9n de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Documental El Siete Documental Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Fanny trabaja junto a sus socios en un oficio tradicionalmente masculino: los talleres mec\u00e1nicos del barrio Siete de Agosto en Bogot\u00e1. Orgullosa de ganarse la vida en el que define como el mercado de autopartes m\u00e1s grande de Am\u00e9rica Latina, ella forma parte del nutrido mundo de latoneros, electricistas, torneros, pintores, gomeros, vendedores ambulantes y mec\u00e1nicos del Siete de Agosto. Saber ganarse la vida en Colombia surge de conocer el entorno y adaptarse a \u00e9l, pero tambi\u00e9n de ser conscientes de nuestras herencias, de lo que aprendemos de nuestros antepasados. Serie audiovisual y sonora Econom\u00edas populares Fanny Oficio tradicionalmente masculino Talleres mec\u00e1nicos Barrio Siete de Agosto, Bogot\u00e1 Mercado de autopartes Am\u00e9rica Latina Latoneros Electricistas Torneros Pintores Gomeros Vendedores ambulantes Mec\u00e1nicos Trabajo urbano Econom\u00eda informal Empoderamiento femenino Cultura laboral Comunidad de oficios https://www.youtube.com/watch?v=Lti0bxftY3M"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-83",
      "row": 83,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Documental El convite",
      "type": "Documental",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Hern\u00e1n Pacheco se autodefine como papero de nacimiento, de profesi\u00f3n y vocaci\u00f3n; seg\u00fan lo permitan los ciclos clim\u00e1ticos, convoca un par de veces al a\u00f1o a la recolecci\u00f3n de la cosecha de papa en su terreno en San Pedro de Iguaque. Juan Ram\u00f3n y Pedro Nel, m\u00fasicos emp\u00edricos reconocidos en la regi\u00f3n, compondr\u00e1n en paralelo la canci\u00f3n As\u00ed se vive en el campo, cuyo proceso creativo podremos apreciar y disfrutar.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Hern\u00e1n Pacheco",
        "Papero",
        "Recolecci\u00f3n de papa",
        "San Pedro de Iguaque",
        "Ciclos clim\u00e1ticos",
        "Agricultura campesina",
        "Trabajo rural",
        "Juan Ram\u00f3n y Pedro Nel",
        "M\u00fasicos emp\u00edricos",
        "Composici\u00f3n musical",
        "Canci\u00f3n \u201cAs\u00ed se vive en el campo\u201d",
        "Procesos creativos",
        "Cultura campesina",
        "Saberes locales",
        "Tradici\u00f3n y oficio",
        "Vida en el campo",
        "Identidad rural",
        "Narrativa audiovisual"
      ],
      "link": "https://www.youtube.com/watch?v=HpDO8SEFNy8",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Documental El convite Documental Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Hern\u00e1n Pacheco se autodefine como papero de nacimiento, de profesi\u00f3n y vocaci\u00f3n; seg\u00fan lo permitan los ciclos clim\u00e1ticos, convoca un par de veces al a\u00f1o a la recolecci\u00f3n de la cosecha de papa en su terreno en San Pedro de Iguaque. Juan Ram\u00f3n y Pedro Nel, m\u00fasicos emp\u00edricos reconocidos en la regi\u00f3n, compondr\u00e1n en paralelo la canci\u00f3n As\u00ed se vive en el campo, cuyo proceso creativo podremos apreciar y disfrutar. Serie audiovisual y sonora Econom\u00edas populares Hern\u00e1n Pacheco Papero Recolecci\u00f3n de papa San Pedro de Iguaque Ciclos clim\u00e1ticos Agricultura campesina Trabajo rural Juan Ram\u00f3n y Pedro Nel M\u00fasicos emp\u00edricos Composici\u00f3n musical Canci\u00f3n \u201cAs\u00ed se vive en el campo\u201d Procesos creativos Cultura campesina Saberes locales Tradici\u00f3n y oficio Vida en el campo Identidad rural Narrativa audiovisual https://www.youtube.com/watch?v=HpDO8SEFNy8"
    },
    {
      "id": "somos-economias-populares-84",
      "row": 84,
      "theme": "Somos econom\u00edas populares",
      "theme_slug": "somos-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Aqu\u00ed vivimos al diario",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Uno de los oficios diarios de Karol es arreglar alternadores y arranques de carros en el barrio Siete de Agosto, en la ciudad de Bogot\u00e1. Karol narra los retos que enfrenta cotidianamente al ser una madre trabajadora que vive al diario y que usa su ingenio para reparar piezas mec\u00e1nicas.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Karol",
        "Oficio mec\u00e1nico",
        "Reparaci\u00f3n de alternadores y arranques",
        "Barrio Siete de Agosto, Bogot\u00e1",
        "Trabajo diario",
        "Madre trabajadora",
        "Retos cotidianos",
        "Ingenio y habilidad",
        "Econom\u00eda urbana",
        "Oficios t\u00e9cnicos",
        "Vida laboral femenina",
        "Resiliencia",
        "Cultura del trabajo",
        "Comunidad de mec\u00e1nicos",
        "Econom\u00eda informal",
        "Autonom\u00eda econ\u00f3mica",
        "Narrativa personal",
        "Experiencia urbana"
      ],
      "link": "https://www.youtube.com/watch?v=Sw8aQGVImaw",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos econom\u00edas populares ICANH C\u00e1psula de video Aqu\u00ed vivimos al diario Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Uno de los oficios diarios de Karol es arreglar alternadores y arranques de carros en el barrio Siete de Agosto, en la ciudad de Bogot\u00e1. Karol narra los retos que enfrenta cotidianamente al ser una madre trabajadora que vive al diario y que usa su ingenio para reparar piezas mec\u00e1nicas. Serie audiovisual y sonora Econom\u00edas populares Karol Oficio mec\u00e1nico Reparaci\u00f3n de alternadores y arranques Barrio Siete de Agosto, Bogot\u00e1 Trabajo diario Madre trabajadora Retos cotidianos Ingenio y habilidad Econom\u00eda urbana Oficios t\u00e9cnicos Vida laboral femenina Resiliencia Cultura del trabajo Comunidad de mec\u00e1nicos Econom\u00eda informal Autonom\u00eda econ\u00f3mica Narrativa personal Experiencia urbana https://www.youtube.com/watch?v=Sw8aQGVImaw"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-85",
      "row": 85,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Nos toca guerrearla",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Los saberes, oficios y especialidades de las trabajadoras y trabajadores del barrio Siete de Agosto en Bogot\u00e1 expresan las diferentes formas de rebusque y creatividad que ocurren en las econom\u00edas populares.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Saberes y oficios",
        "Trabajadoras y trabajadores",
        "Barrio Siete de Agosto, Bogot\u00e1",
        "Rebusque",
        "Creatividad",
        "Econom\u00eda informal",
        "Vida urbana",
        "Experiencia laboral"
      ],
      "link": "https://www.youtube.com/watch?v=DJKAUP8u9HY",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Nos toca guerrearla Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Los saberes, oficios y especialidades de las trabajadoras y trabajadores del barrio Siete de Agosto en Bogot\u00e1 expresan las diferentes formas de rebusque y creatividad que ocurren en las econom\u00edas populares. Serie audiovisual y sonora Econom\u00edas populares Saberes y oficios Trabajadoras y trabajadores Barrio Siete de Agosto, Bogot\u00e1 Rebusque Creatividad Econom\u00eda informal Vida urbana Experiencia laboral https://www.youtube.com/watch?v=DJKAUP8u9HY"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-86",
      "row": 86,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video No me falta nada",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Sandra, una mujer yerbatera de la plaza de mercado del barrio Siete de Agosto, vive de vender todo tipo de plantas medicinales, aceites esenciales, veladoras, estampas de santos, ba\u00f1os y sahumerios para la prosperidad, la abundancia y el amor. Ella es el reflejo de conocimientos, creencias y rituales populares sobre plantas, remedios, santos y rezos.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Sandra",
        "Yerbatera",
        "Plaza de mercado, Barrio Siete de Agosto, Bogot\u00e1",
        "Plantas medicinales",
        "Aceites esenciales",
        "Veladoras y estampas de santos",
        "Ba\u00f1os y sahumerios",
        "Prosperidad, abundancia y amor",
        "Conocimientos y creencias populares",
        "Rituales y remedios tradicionales",
        "Saberes ancestrales",
        "Cultura popular",
        "Econom\u00eda informal"
      ],
      "link": "https://www.youtube.com/watch?v=sJYtzOnKxeQ",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video No me falta nada Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Sandra, una mujer yerbatera de la plaza de mercado del barrio Siete de Agosto, vive de vender todo tipo de plantas medicinales, aceites esenciales, veladoras, estampas de santos, ba\u00f1os y sahumerios para la prosperidad, la abundancia y el amor. Ella es el reflejo de conocimientos, creencias y rituales populares sobre plantas, remedios, santos y rezos. Serie audiovisual y sonora Econom\u00edas populares Sandra Yerbatera Plaza de mercado, Barrio Siete de Agosto, Bogot\u00e1 Plantas medicinales Aceites esenciales Veladoras y estampas de santos Ba\u00f1os y sahumerios Prosperidad, abundancia y amor Conocimientos y creencias populares Rituales y remedios tradicionales Saberes ancestrales Cultura popular Econom\u00eda informal https://www.youtube.com/watch?v=sJYtzOnKxeQ"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-87",
      "row": 87,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Las comadres y el puntal",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. La labor de las mujeres de San Pedro de Iguaque en la preparaci\u00f3n de El puntal, una de las comidas que se les ofrece a los obreros agricultores durante la ma\u00f1ana en las jornadas laborales de recolecci\u00f3n de la cosecha de papa en Boyac\u00e1.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Mujeres de San Pedro de Iguaque",
        "Preparaci\u00f3n de El puntal",
        "Alimentaci\u00f3n de obreros agr\u00edcolas",
        "Recolecci\u00f3n de papa",
        "Boyac\u00e1",
        "Trabajo rural",
        "Apoyo a jornadas laborales",
        "Saberes culinarios tradicionales",
        "Econom\u00eda campesina"
      ],
      "link": "https://www.youtube.com/watch?v=QnkQaRrbOZU",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Las comadres y el puntal Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. La labor de las mujeres de San Pedro de Iguaque en la preparaci\u00f3n de El puntal, una de las comidas que se les ofrece a los obreros agricultores durante la ma\u00f1ana en las jornadas laborales de recolecci\u00f3n de la cosecha de papa en Boyac\u00e1. Serie audiovisual y sonora Econom\u00edas populares Mujeres de San Pedro de Iguaque Preparaci\u00f3n de El puntal Alimentaci\u00f3n de obreros agr\u00edcolas Recolecci\u00f3n de papa Boyac\u00e1 Trabajo rural Apoyo a jornadas laborales Saberes culinarios tradicionales Econom\u00eda campesina https://www.youtube.com/watch?v=QnkQaRrbOZU"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-88",
      "row": 88,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video La sacanza",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Durante la sacanza de la papa en Boyac\u00e1, las jornaleras y jornaleros trabajan varios d\u00edas para cosechar el producto que se vende en los mercados urbanos de Colombia. Lidia jornalea en la parcela de su hermano durante la cosecha y reflexiona sobre c\u00f3mo el precio de la papa en el mercado afecta su econom\u00eda familiar y campesina.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Sacanza de papa",
        "Jornaleras y jornaleros",
        "Cosecha en Boyac\u00e1",
        "Mercado urbano",
        "Econom\u00eda familiar y campesina",
        "Lidia",
        "Trabajo rural",
        "Impacto del precio en el mercado",
        "Agricultura campesina",
        "Producci\u00f3n y comercializaci\u00f3n"
      ],
      "link": "https://www.youtube.com/watch?v=Sg8yjxldxsI",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video La sacanza Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Durante la sacanza de la papa en Boyac\u00e1, las jornaleras y jornaleros trabajan varios d\u00edas para cosechar el producto que se vende en los mercados urbanos de Colombia. Lidia jornalea en la parcela de su hermano durante la cosecha y reflexiona sobre c\u00f3mo el precio de la papa en el mercado afecta su econom\u00eda familiar y campesina. Serie audiovisual y sonora Econom\u00edas populares Sacanza de papa Jornaleras y jornaleros Cosecha en Boyac\u00e1 Mercado urbano Econom\u00eda familiar y campesina Lidia Trabajo rural Impacto del precio en el mercado Agricultura campesina Producci\u00f3n y comercializaci\u00f3n https://www.youtube.com/watch?v=Sg8yjxldxsI"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-89",
      "row": 89,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Mi patio es bonito",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. En los patios de las casas en Sempegua, las familias siembran, cuidan y producen una gran diversidad de alimentos, plantas medicinales y ornamentales que aportan a la soberan\u00eda y seguridad alimentaria de la comunidad. Los alimentos cosechados impulsan la econom\u00eda campesina y forman parte de una red de intercambio y trueque entre familias.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Sempegua",
        "Familias campesinas",
        "Huertas dom\u00e9sticas",
        "Alimentos, plantas medicinales y ornamentales",
        "Soberan\u00eda alimentaria",
        "Seguridad alimentaria",
        "Econom\u00eda campesina",
        "Intercambio y trueque",
        "Producci\u00f3n local",
        "Saberes agr\u00edcolas tradicionales"
      ],
      "link": "https://www.youtube.com/watch?v=M8zDMrOm070",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Mi patio es bonito Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. En los patios de las casas en Sempegua, las familias siembran, cuidan y producen una gran diversidad de alimentos, plantas medicinales y ornamentales que aportan a la soberan\u00eda y seguridad alimentaria de la comunidad. Los alimentos cosechados impulsan la econom\u00eda campesina y forman parte de una red de intercambio y trueque entre familias. Serie audiovisual y sonora Econom\u00edas populares Sempegua Familias campesinas Huertas dom\u00e9sticas Alimentos, plantas medicinales y ornamentales Soberan\u00eda alimentaria Seguridad alimentaria Econom\u00eda campesina Intercambio y trueque Producci\u00f3n local Saberes agr\u00edcolas tradicionales https://www.youtube.com/watch?v=M8zDMrOm070"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-90",
      "row": 90,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video La uvita",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. La uvita, tambi\u00e9n conocida como corozo, es uno de los frutos nativos aprovechables del ecosistema cienaguero en Sempegua y una de las alternativas econ\u00f3micas para los momentos en que el pescado escasea. Las mujeres \"uviteras\" viven de ir al monte a recolectar racimos de uvita para venderlos como fruto, en jugo o en helados.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Uvita / corozo",
        "Ecosistema cienaguero, Sempegua",
        "Alternativa econ\u00f3mica",
        "Escasez de pescado",
        "Mujeres uviteras",
        "Recolecci\u00f3n de frutos",
        "Venta de fruto, jugo y helados",
        "Econom\u00eda local",
        "Producci\u00f3n comunitaria",
        "Saberes tradicionales"
      ],
      "link": "https://www.youtube.com/watch?v=26GmlIe36O4",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video La uvita Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. La uvita, tambi\u00e9n conocida como corozo, es uno de los frutos nativos aprovechables del ecosistema cienaguero en Sempegua y una de las alternativas econ\u00f3micas para los momentos en que el pescado escasea. Las mujeres \"uviteras\" viven de ir al monte a recolectar racimos de uvita para venderlos como fruto, en jugo o en helados. Serie audiovisual y sonora Econom\u00edas populares Uvita / corozo Ecosistema cienaguero, Sempegua Alternativa econ\u00f3mica Escasez de pescado Mujeres uviteras Recolecci\u00f3n de frutos Venta de fruto, jugo y helados Econom\u00eda local Producci\u00f3n comunitaria Saberes tradicionales https://www.youtube.com/watch?v=26GmlIe36O4"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-91",
      "row": 91,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video La manaca",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. En In\u00edrida, subir a la palma de manaca (tambi\u00e9n conocida como a\u00e7ai) es una actividad que se aprende desde la ni\u00f1ez. La manaca forma parte de la base alimentaria de las familias, y a las mujeres que tienen el oficio de prepararla se les llama \u00abmanaqueras\u00bb. Algunas la pilan y otras la despulpan; hay quienes la consumen con ma\u00f1oco y otros prefieren acompa\u00f1arla con almid\u00f3n.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "In\u00edrida",
        "Palma de manaca / a\u00e7ai",
        "Oficio tradicional",
        "Ni\u00f1ez y aprendizaje",
        "Base alimentaria familiar",
        "Mujeres manaqueras",
        "Pilado y despulpado",
        "Consumo con ma\u00f1oco o almid\u00f3n",
        "Saberes ancestrales",
        "Econom\u00eda local",
        "Producci\u00f3n y preparaci\u00f3n de alimentos",
        "Tradici\u00f3n comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=RkvokSVNOfg",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video La manaca Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. En In\u00edrida, subir a la palma de manaca (tambi\u00e9n conocida como a\u00e7ai) es una actividad que se aprende desde la ni\u00f1ez. La manaca forma parte de la base alimentaria de las familias, y a las mujeres que tienen el oficio de prepararla se les llama \u00abmanaqueras\u00bb. Algunas la pilan y otras la despulpan; hay quienes la consumen con ma\u00f1oco y otros prefieren acompa\u00f1arla con almid\u00f3n. Serie audiovisual y sonora Econom\u00edas populares In\u00edrida Palma de manaca / a\u00e7ai Oficio tradicional Ni\u00f1ez y aprendizaje Base alimentaria familiar Mujeres manaqueras Pilado y despulpado Consumo con ma\u00f1oco o almid\u00f3n Saberes ancestrales Econom\u00eda local Producci\u00f3n y preparaci\u00f3n de alimentos Tradici\u00f3n comunitaria https://www.youtube.com/watch?v=RkvokSVNOfg"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-92",
      "row": 92,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Casabe y ma\u00f1oco",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Arlenis camina todos los d\u00edas a trabajar en su conuco, donde siembra yuca brava, yuca dulce y pi\u00f1a. Su abuela le ense\u00f1\u00f3 desde peque\u00f1a a trabajar la yuca brava para exprimirle el veneno y preparar casabe, ma\u00f1oco, almid\u00f3n, katara y yarub\u00e9. Estos alimentos son la base alimentaria de los pueblos ind\u00edgenas del Guan\u00eda y es uno de los principales productos de circulaci\u00f3n econ\u00f3mica en In\u00edrida.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Arlenis",
        "Conuco",
        "Siembra de yuca brava, yuca dulce y pi\u00f1a",
        "Ense\u00f1anza de la abuela",
        "Procesamiento de yuca brava",
        "Casabe, ma\u00f1oco, almid\u00f3n, katara, yarub\u00e9",
        "Base alimentaria ind\u00edgena",
        "Pueblos ind\u00edgenas del Guan\u00eda",
        "Circulaci\u00f3n econ\u00f3mica",
        "In\u00edrida",
        "Saberes ancestrales",
        "Econom\u00eda local",
        "Tradici\u00f3n comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=O_4Lg5Qs_AI",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Casabe y ma\u00f1oco Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Arlenis camina todos los d\u00edas a trabajar en su conuco, donde siembra yuca brava, yuca dulce y pi\u00f1a. Su abuela le ense\u00f1\u00f3 desde peque\u00f1a a trabajar la yuca brava para exprimirle el veneno y preparar casabe, ma\u00f1oco, almid\u00f3n, katara y yarub\u00e9. Estos alimentos son la base alimentaria de los pueblos ind\u00edgenas del Guan\u00eda y es uno de los principales productos de circulaci\u00f3n econ\u00f3mica en In\u00edrida. Serie audiovisual y sonora Econom\u00edas populares Arlenis Conuco Siembra de yuca brava, yuca dulce y pi\u00f1a Ense\u00f1anza de la abuela Procesamiento de yuca brava Casabe, ma\u00f1oco, almid\u00f3n, katara, yarub\u00e9 Base alimentaria ind\u00edgena Pueblos ind\u00edgenas del Guan\u00eda Circulaci\u00f3n econ\u00f3mica In\u00edrida Saberes ancestrales Econom\u00eda local Tradici\u00f3n comunitaria https://www.youtube.com/watch?v=O_4Lg5Qs_AI"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-93",
      "row": 93,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Me gusta vivir esta vida",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. En la comunidad de La Ceiba han construido un hogar para las abejas meliponas y han propiciado estrategias de cuidado de los peces en los r\u00edos y lagunas en una apuesta por transformar su econom\u00eda hacia actividades no extractivas y sostenibles.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Comunidad de La Ceiba",
        "Abejas meliponas",
        "Cuidado de peces",
        "R\u00edos y lagunas",
        "Econom\u00eda sostenible",
        "Actividades no extractivas",
        "Conservaci\u00f3n ambiental",
        "Producci\u00f3n comunitaria",
        "Saberes tradicionales",
        "Protecci\u00f3n del territorio"
      ],
      "link": "https://www.youtube.com/watch?v=5zxCbENygQA",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Me gusta vivir esta vida Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. En la comunidad de La Ceiba han construido un hogar para las abejas meliponas y han propiciado estrategias de cuidado de los peces en los r\u00edos y lagunas en una apuesta por transformar su econom\u00eda hacia actividades no extractivas y sostenibles. Serie audiovisual y sonora Econom\u00edas populares Comunidad de La Ceiba Abejas meliponas Cuidado de peces R\u00edos y lagunas Econom\u00eda sostenible Actividades no extractivas Conservaci\u00f3n ambiental Producci\u00f3n comunitaria Saberes tradicionales Protecci\u00f3n del territorio https://www.youtube.com/watch?v=5zxCbENygQA"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-94",
      "row": 94,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Sabor y sabidur\u00eda",
      "type": "Videos",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Las cocinas en la casa, en la calle, en la comunidad est\u00e1n llenas de sabores, saberes y sazones en torno a la preparaci\u00f3n de alimentos y son el sustento econ\u00f3mico de quienes a diario prenden los fogones.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Cocinas dom\u00e9sticas y comunitarias",
        "Preparaci\u00f3n de alimentos",
        "Sabores, saberes y sazones",
        "Sustento econ\u00f3mico",
        "Trabajo diario",
        "Fogones",
        "Econom\u00eda local",
        "Cultura culinaria",
        "Producci\u00f3n comunitaria",
        "Tradici\u00f3n gastron\u00f3mica"
      ],
      "link": "https://www.youtube.com/watch?v=QQj6H7ZsgtA",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Sabor y sabidur\u00eda Videos Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Las cocinas en la casa, en la calle, en la comunidad est\u00e1n llenas de sabores, saberes y sazones en torno a la preparaci\u00f3n de alimentos y son el sustento econ\u00f3mico de quienes a diario prenden los fogones. Serie audiovisual y sonora Econom\u00edas populares Cocinas dom\u00e9sticas y comunitarias Preparaci\u00f3n de alimentos Sabores, saberes y sazones Sustento econ\u00f3mico Trabajo diario Fogones Econom\u00eda local Cultura culinaria Producci\u00f3n comunitaria Tradici\u00f3n gastron\u00f3mica https://www.youtube.com/watch?v=QQj6H7ZsgtA"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-95",
      "row": 95,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Las mujeres hacemos de todo",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Las mujeres realizan diferentes tipos de oficios para rebuscarse la vida, muchas veces tienen doble jornada de trabajo al asumir las labores de cuidado de la familia en el hogar y enfrentan los retos de ser mujeres en un mundo machista.",
      "keywords": [
        "Serie audiovisual y sonora",
        "Econom\u00edas populares",
        "Mujeres trabajadoras",
        "Diversos oficios",
        "Rebusque",
        "Doble jornada laboral",
        "Cuidado familiar",
        "Desaf\u00edos de g\u00e9nero",
        "Mundo machista",
        "Econom\u00eda informal",
        "Resiliencia femenina",
        "Trabajo dom\u00e9stico y productivo"
      ],
      "link": "https://www.youtube.com/watch?v=EDdwcp4hzak",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Las mujeres hacemos de todo Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Las mujeres realizan diferentes tipos de oficios para rebuscarse la vida, muchas veces tienen doble jornada de trabajo al asumir las labores de cuidado de la familia en el hogar y enfrentan los retos de ser mujeres en un mundo machista. Serie audiovisual y sonora Econom\u00edas populares Mujeres trabajadoras Diversos oficios Rebusque Doble jornada laboral Cuidado familiar Desaf\u00edos de g\u00e9nero Mundo machista Econom\u00eda informal Resiliencia femenina Trabajo dom\u00e9stico y productivo https://www.youtube.com/watch?v=EDdwcp4hzak"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-96",
      "row": 96,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El sonido de los cantos del pueblo mira\u00f1a",
      "type": "Editorial",
      "description": "Publicaci\u00f3n en la que el documentador de la lengua mira\u00f1a, Elio Mira\u00f1a, habla sobre la importancia de los cantos y los cantadores para su pueblo. A trav\u00e9s de una de estas canciones, escuchamos sus reflexiones sobre el valor de recuperar y fortalecer la lengua.",
      "keywords": [
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Elio Mira\u00f1a",
        "Lengua mira\u00f1a",
        "Cantos y cantadores",
        "Pueblo mira\u00f1a",
        "Recuperaci\u00f3n ling\u00fc\u00edstica",
        "Fortalecimiento de la lengua",
        "Saberes ancestrales",
        "Tradici\u00f3n oral",
        "Memoria cultural",
        "Patrimonio intangible"
      ],
      "link": "https://www.caroycuervo.gov.co/el-sonido-de-los-cantos-del-pueblo-mirana/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial El sonido de los cantos del pueblo mira\u00f1a Editorial Publicaci\u00f3n en la que el documentador de la lengua mira\u00f1a, Elio Mira\u00f1a, habla sobre la importancia de los cantos y los cantadores para su pueblo. A trav\u00e9s de una de estas canciones, escuchamos sus reflexiones sobre el valor de recuperar y fortalecer la lengua. Documentaci\u00f3n ling\u00fc\u00edstica Elio Mira\u00f1a Lengua mira\u00f1a Cantos y cantadores Pueblo mira\u00f1a Recuperaci\u00f3n ling\u00fc\u00edstica Fortalecimiento de la lengua Saberes ancestrales Tradici\u00f3n oral Memoria cultural Patrimonio intangible https://www.caroycuervo.gov.co/el-sonido-de-los-cantos-del-pueblo-mirana/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-97",
      "row": 97,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Escuchar, aprender y conservar las historias del pueblo inga",
      "type": "Editorial",
      "description": "Publicaci\u00f3n en la que la documentadora de la lengua inga, M\u00f3nica Jansasoy, comparte la importancia que su trabajo ha tenido en la recuperaci\u00f3n de las historias de su comunidad, as\u00ed como en la valoraci\u00f3n de los saberes y la identidad propia.",
      "keywords": [
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "M\u00f3nica Jansasoy",
        "Lengua inga",
        "Recuperaci\u00f3n de historias comunitarias",
        "Saberes ancestrales",
        "Identidad cultural",
        "Valoraci\u00f3n de la cultura",
        "Tradici\u00f3n oral",
        "Memoria colectiva",
        "Patrimonio intangible"
      ],
      "link": "https://www.caroycuervo.gov.co/escuchar-desde-el-interior-para-aprender-y-conservar-las-historias-del-pueblo-inga/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial Escuchar, aprender y conservar las historias del pueblo inga Editorial Publicaci\u00f3n en la que la documentadora de la lengua inga, M\u00f3nica Jansasoy, comparte la importancia que su trabajo ha tenido en la recuperaci\u00f3n de las historias de su comunidad, as\u00ed como en la valoraci\u00f3n de los saberes y la identidad propia. Documentaci\u00f3n ling\u00fc\u00edstica M\u00f3nica Jansasoy Lengua inga Recuperaci\u00f3n de historias comunitarias Saberes ancestrales Identidad cultural Valoraci\u00f3n de la cultura Tradici\u00f3n oral Memoria colectiva Patrimonio intangible https://www.caroycuervo.gov.co/escuchar-desde-el-interior-para-aprender-y-conservar-las-historias-del-pueblo-inga/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-98",
      "row": 98,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El tejido del tsombiash: memoria viva del pueblo kam\u00ebnt\u0161\u00e1",
      "type": "Editorial",
      "description": "Publicaci\u00f3n en la que la documentadora de la lengua kam\u00ebnt\u0161\u00e1, Mar\u00eda Antonia Narv\u00e1ez, nos hable sobre la importancia del tsombiash para su pueblo y sobre c\u00f3mo su trabajo en el Programa de Documentaci\u00f3n de Lenguas Nativas contribuye a preservar la memoria, los saberes y la lengua a trav\u00e9s de las pr\u00e1cticas culturales.",
      "keywords": [
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Mar\u00eda Antonia Narv\u00e1ez",
        "Lengua kam\u00ebnt\u0161\u00e1",
        "Tsombiash",
        "Pueblo kam\u00ebnt\u0161\u00e1",
        "Programa de Documentaci\u00f3n de Lenguas Nativas",
        "Preservaci\u00f3n de la memoria",
        "Saberes ancestrales",
        "Pr\u00e1cticas culturales",
        "Fortalecimiento de la lengua",
        "Patrimonio intangible",
        "Identidad cultural"
      ],
      "link": "https://www.caroycuervo.gov.co/el-tejido-del-tsombiash-memoria-viva-del-pueblo-kamentsa/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial El tejido del tsombiash: memoria viva del pueblo kam\u00ebnt\u0161\u00e1 Editorial Publicaci\u00f3n en la que la documentadora de la lengua kam\u00ebnt\u0161\u00e1, Mar\u00eda Antonia Narv\u00e1ez, nos hable sobre la importancia del tsombiash para su pueblo y sobre c\u00f3mo su trabajo en el Programa de Documentaci\u00f3n de Lenguas Nativas contribuye a preservar la memoria, los saberes y la lengua a trav\u00e9s de las pr\u00e1cticas culturales. Documentaci\u00f3n ling\u00fc\u00edstica Mar\u00eda Antonia Narv\u00e1ez Lengua kam\u00ebnt\u0161\u00e1 Tsombiash Pueblo kam\u00ebnt\u0161\u00e1 Programa de Documentaci\u00f3n de Lenguas Nativas Preservaci\u00f3n de la memoria Saberes ancestrales Pr\u00e1cticas culturales Fortalecimiento de la lengua Patrimonio intangible Identidad cultural https://www.caroycuervo.gov.co/el-tejido-del-tsombiash-memoria-viva-del-pueblo-kamentsa/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-99",
      "row": 99,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial La caguana, legado de las mujeres murui",
      "type": "Editorial",
      "description": "Publicaci\u00f3n sobre el trabajo de documentaci\u00f3n de Luz Dary Fl\u00f3rez, documentadora murui, sobre un alimento importante para su comunidad que fortalece la lengua y las tradiciones de su pueblo.",
      "keywords": [
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Luz Dary Fl\u00f3rez",
        "Pueblo murui",
        "Alimento tradicional",
        "Fortalecimiento de la lengua",
        "Preservaci\u00f3n de tradiciones",
        "Saberes ancestrales",
        "Identidad cultural",
        "Patrimonio intangible",
        "Pr\u00e1cticas comunitarias"
      ],
      "link": "https://www.caroycuervo.gov.co/la-caguana-legado-de-las-mujeres-murui-que-fortalece-la-lengua-y-las-tradiciones-de-su-pueblo/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial La caguana, legado de las mujeres murui Editorial Publicaci\u00f3n sobre el trabajo de documentaci\u00f3n de Luz Dary Fl\u00f3rez, documentadora murui, sobre un alimento importante para su comunidad que fortalece la lengua y las tradiciones de su pueblo. Documentaci\u00f3n ling\u00fc\u00edstica Luz Dary Fl\u00f3rez Pueblo murui Alimento tradicional Fortalecimiento de la lengua Preservaci\u00f3n de tradiciones Saberes ancestrales Identidad cultural Patrimonio intangible Pr\u00e1cticas comunitarias https://www.caroycuervo.gov.co/la-caguana-legado-de-las-mujeres-murui-que-fortalece-la-lengua-y-las-tradiciones-de-su-pueblo/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-100",
      "row": 100,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Los cantos y arrullos como memoria y reivindicaci\u00f3n de la lengua murui",
      "type": "Editorial",
      "description": "Publicaci\u00f3n sobre el trabajo de documentaci\u00f3n de Luz Dary Fl\u00f3rez, documentadora murui, alrededor de los cantos murui.",
      "keywords": [
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Luz Dary Fl\u00f3rez",
        "Pueblo murui",
        "Cantos murui",
        "Preservaci\u00f3n de la lengua",
        "Saberes ancestrales",
        "Tradici\u00f3n oral",
        "Memoria cultural",
        "Identidad comunitaria",
        "Patrimonio intangible"
      ],
      "link": "https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial Los cantos y arrullos como memoria y reivindicaci\u00f3n de la lengua murui Editorial Publicaci\u00f3n sobre el trabajo de documentaci\u00f3n de Luz Dary Fl\u00f3rez, documentadora murui, alrededor de los cantos murui. Documentaci\u00f3n ling\u00fc\u00edstica Luz Dary Fl\u00f3rez Pueblo murui Cantos murui Preservaci\u00f3n de la lengua Saberes ancestrales Tradici\u00f3n oral Memoria cultural Identidad comunitaria Patrimonio intangible https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-101",
      "row": 101,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial En busca del origen del pueblo cacua",
      "type": "Editorial",
      "description": "Publicaci\u00f3n sobre el trabajo de la documentadora Marina L\u00f3pez en el Vaup\u00e9s. Con solo 320 hablantes y clanes en riesgo de desaparecer, el proyecto busca documentar su historia y fortalecer su identidad, evitando que su lengua y cultura caigan en el olvido.",
      "keywords": [
        "Documentaci\u00f3n ling\u00fc\u00edstica",
        "Marina L\u00f3pez",
        "Vaup\u00e9s",
        "Lengua en riesgo",
        "320 hablantes",
        "Clanes en peligro",
        "Preservaci\u00f3n cultural",
        "Fortalecimiento de la identidad",
        "Memoria hist\u00f3rica",
        "Patrimonio intangible",
        "Prevenci\u00f3n del olvido",
        "Saberes ancestrales"
      ],
      "link": "https://www.caroycuervo.gov.co/en-busca-del-origen-del-pueblo-cacua/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial En busca del origen del pueblo cacua Editorial Publicaci\u00f3n sobre el trabajo de la documentadora Marina L\u00f3pez en el Vaup\u00e9s. Con solo 320 hablantes y clanes en riesgo de desaparecer, el proyecto busca documentar su historia y fortalecer su identidad, evitando que su lengua y cultura caigan en el olvido. Documentaci\u00f3n ling\u00fc\u00edstica Marina L\u00f3pez Vaup\u00e9s Lengua en riesgo 320 hablantes Clanes en peligro Preservaci\u00f3n cultural Fortalecimiento de la identidad Memoria hist\u00f3rica Patrimonio intangible Prevenci\u00f3n del olvido Saberes ancestrales https://www.caroycuervo.gov.co/en-busca-del-origen-del-pueblo-cacua/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-102",
      "row": 102,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Edtitorial El encuentro entre los cacua y los nukak",
      "type": "Editorial",
      "description": "En el marco del programa del Instituto Caro y Cuervo, Marina L\u00f3pez y Katherine Bola\u00f1os viajaron al Guaviare para trabajar con el pueblo nukak. All\u00ed documentaron su lengua y cultura, y recopilaron relatos sobre los cacua para entender el pasado com\u00fan, sus migraciones y los cambios que han vivido ambos pueblos.",
      "keywords": [
        "Programa Instituto Caro y Cuervo",
        "Marina L\u00f3pez y Katherine Bola\u00f1os",
        "Guaviare",
        "Pueblo nukak",
        "Documentaci\u00f3n de lengua y cultura",
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
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Edtitorial El encuentro entre los cacua y los nukak Editorial En el marco del programa del Instituto Caro y Cuervo, Marina L\u00f3pez y Katherine Bola\u00f1os viajaron al Guaviare para trabajar con el pueblo nukak. All\u00ed documentaron su lengua y cultura, y recopilaron relatos sobre los cacua para entender el pasado com\u00fan, sus migraciones y los cambios que han vivido ambos pueblos. Programa Instituto Caro y Cuervo Marina L\u00f3pez y Katherine Bola\u00f1os Guaviare Pueblo nukak Documentaci\u00f3n de lengua y cultura Relatos sobre los cacua Historia compartida Migraciones Cambios culturales Memoria colectiva Saberes ancestrales Patrimonio intangible https://www.caroycuervo.gov.co/el-encuentro-entre-los-cacua-y-los-nukak/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-103",
      "row": 103,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El tejido como s\u00edmbolo de resistencia de los kam\u00ebnt\u0161\u00e1",
      "type": "Editorial",
      "description": "Desde tiempos inmemoriales, los tejidos han hecho parte de la vida de los kam\u00ebnt\u0161\u00e1 biy\u00e1, un pueblo ubicado en el Valle de Sibundoy, en el departamento del Putumayo, cuyo nombre se traduce como \u201chombres de aqu\u00ed mismo con pensamiento y lengua propia\u201d. Esta interpretaci\u00f3n resulta especialmente importante si se conoce el v\u00ednculo que se teje desde el momento mismo del nacimiento entre cada una de las personas de esta comunidad y el \u201caqu\u00ed mismo\u201d de su territorio.",
      "keywords": [
        "Tejidos tradicionales",
        "Pueblo kam\u00ebnt\u0161\u00e1 biy\u00e1",
        "Valle de Sibundoy, Putumayo",
        "Identidad cultural",
        "Lengua propia",
        "V\u00ednculo con el territorio",
        "Nacimiento y pertenencia",
        "Saberes ancestrales",
        "Patrimonio material e inmaterial",
        "Cosmovisi\u00f3n ind\u00edgena",
        "Cultura viva",
        "Tradici\u00f3n intergeneracional"
      ],
      "link": "https://www.caroycuervo.gov.co/hilando-la-historia-el-tejido-como-simbolo-de-resistencia-de-los-kamentsa/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial El tejido como s\u00edmbolo de resistencia de los kam\u00ebnt\u0161\u00e1 Editorial Desde tiempos inmemoriales, los tejidos han hecho parte de la vida de los kam\u00ebnt\u0161\u00e1 biy\u00e1, un pueblo ubicado en el Valle de Sibundoy, en el departamento del Putumayo, cuyo nombre se traduce como \u201chombres de aqu\u00ed mismo con pensamiento y lengua propia\u201d. Esta interpretaci\u00f3n resulta especialmente importante si se conoce el v\u00ednculo que se teje desde el momento mismo del nacimiento entre cada una de las personas de esta comunidad y el \u201caqu\u00ed mismo\u201d de su territorio. Tejidos tradicionales Pueblo kam\u00ebnt\u0161\u00e1 biy\u00e1 Valle de Sibundoy, Putumayo Identidad cultural Lengua propia V\u00ednculo con el territorio Nacimiento y pertenencia Saberes ancestrales Patrimonio material e inmaterial Cosmovisi\u00f3n ind\u00edgena Cultura viva Tradici\u00f3n intergeneracional https://www.caroycuervo.gov.co/hilando-la-historia-el-tejido-como-simbolo-de-resistencia-de-los-kamentsa/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-104",
      "row": 104,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El pueblo Kankuamo, el guardi\u00e1n del equilibrio del mundo",
      "type": "Editorial",
      "description": "El Programa de Documentaci\u00f3n de Lenguas 2025 avanza con el trabajo conjunto entre documentalistas de comunidades ind\u00edgenas y el Instituto Caro y Cuervo, consolidando procesos de investigaci\u00f3n y fortalecimiento cultural en distintos territorios del pa\u00eds. Tras encuentros previos con los pueblos cacua y nukak, enfocados en explorar v\u00ednculos hist\u00f3ricos y ling\u00fc\u00edsticos, el equipo lleg\u00f3 a At\u00e1nquez, en la Sierra Nevada de Santa Marta, territorio del pueblo kankuamo. En esta ocasi\u00f3n, el \u00e9nfasis estuvo en la formaci\u00f3n en documentaci\u00f3n audiovisual, promoviendo herramientas para que la comunidad pueda organizar, preservar y analizar informaci\u00f3n relacionada con su lengua. Aunque la lengua kankuama ha sido considerada extinta, persisten vestigios ling\u00fc\u00edsticos y un fuerte inter\u00e9s colectivo por recuperarla, integrarla en procesos educativos y mantener viva su cosmovisi\u00f3n a trav\u00e9s de la memoria y la transmisi\u00f3n cultural.",
      "keywords": [
        "Pueblo kankuamo",
        "Lengua kankuama",
        "Identidad cultural",
        "V\u00ednculo con el territorio",
        "Madre tierra",
        "Equilibrio del mundo",
        "Saberes ancestrales",
        "Cosmovisi\u00f3n ind\u00edgena",
        "Cultura viva",
        "Tradici\u00f3n intergeneracional"
      ],
      "link": "https://www.caroycuervo.gov.co/el-pueblo-kankuamo-el-guardian-del-equilibrio-del-mundo-que-se-resiste-a-desaparecer/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial El pueblo Kankuamo, el guardi\u00e1n del equilibrio del mundo Editorial El Programa de Documentaci\u00f3n de Lenguas 2025 avanza con el trabajo conjunto entre documentalistas de comunidades ind\u00edgenas y el Instituto Caro y Cuervo, consolidando procesos de investigaci\u00f3n y fortalecimiento cultural en distintos territorios del pa\u00eds. Tras encuentros previos con los pueblos cacua y nukak, enfocados en explorar v\u00ednculos hist\u00f3ricos y ling\u00fc\u00edsticos, el equipo lleg\u00f3 a At\u00e1nquez, en la Sierra Nevada de Santa Marta, territorio del pueblo kankuamo. En esta ocasi\u00f3n, el \u00e9nfasis estuvo en la formaci\u00f3n en documentaci\u00f3n audiovisual, promoviendo herramientas para que la comunidad pueda organizar, preservar y analizar informaci\u00f3n relacionada con su lengua. Aunque la lengua kankuama ha sido considerada extinta, persisten vestigios ling\u00fc\u00edsticos y un fuerte inter\u00e9s colectivo por recuperarla, integrarla en procesos educativos y mantener viva su cosmovisi\u00f3n a trav\u00e9s de la memoria y la transmisi\u00f3n cultural. Pueblo kankuamo Lengua kankuama Identidad cultural V\u00ednculo con el territorio Madre tierra Equilibrio del mundo Saberes ancestrales Cosmovisi\u00f3n ind\u00edgena Cultura viva Tradici\u00f3n intergeneracional https://www.caroycuervo.gov.co/el-pueblo-kankuamo-el-guardian-del-equilibrio-del-mundo-que-se-resiste-a-desaparecer/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-105",
      "row": 105,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Reencontrarse con el pensamiento y recuperar la palabra murui",
      "type": "Editorial",
      "description": "El cabildo TIWA en Leticia (Amazonas), ubicado a la altura del km 6 de la v\u00eda Leticia-Tarapac\u00e1, es una comunidad multicultural que alberga a nueve pueblos ind\u00edgenas: murui, yucuna, tikuna, bora, inga, cubeo, tanimuka, cocama y mira\u00f1a. Desde este lugar, que representa un punto de confluencia de memorias, lenguas y pr\u00e1cticas culturales, la documentadora murui Luz Dary Fl\u00f3rez est\u00e1 adelantando un trabajo fundamental para la preservaci\u00f3n cultural de su pueblo: documentar su lengua y los saberes ancestrales de las mujeres mayores de su comunidad. Se ha propuesto recuperar el pensamiento y la palabra de las mujeres del clan \u0268meraia\u0268 (gente de boruga), hablantes del dialecto bue del murui, reconociendo en ellas un archivo vivo que resguarda ense\u00f1anzas fundamentales para las nuevas generaciones. Este esfuerzo hace parte del Programa de documentaci\u00f3n de diez lenguas para el 2025 del Instituto Caro y Cuervo, una iniciativa que busca detener la p\u00e9rdida de idiomas ind\u00edgenas que hoy enfrentan serias amenazas de desaparici\u00f3n.",
      "keywords": [
        "Pueblo murui",
        "Lengua murui",
        "Recuperaci\u00f3n de la palabra",
        "Memoria ancestral",
        "Saberes de las mujeres",
        "Chagra",
        "Identidad cultural",
        "Transmisi\u00f3n intergeneracional",
        "Resistencia cultural",
        "Pervivencia ind\u00edgena"
      ],
      "link": "https://www.caroycuervo.gov.co/reencontrarse-con-el-pensamiento-y-recuperar-la-palabra-murui/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial Reencontrarse con el pensamiento y recuperar la palabra murui Editorial El cabildo TIWA en Leticia (Amazonas), ubicado a la altura del km 6 de la v\u00eda Leticia-Tarapac\u00e1, es una comunidad multicultural que alberga a nueve pueblos ind\u00edgenas: murui, yucuna, tikuna, bora, inga, cubeo, tanimuka, cocama y mira\u00f1a. Desde este lugar, que representa un punto de confluencia de memorias, lenguas y pr\u00e1cticas culturales, la documentadora murui Luz Dary Fl\u00f3rez est\u00e1 adelantando un trabajo fundamental para la preservaci\u00f3n cultural de su pueblo: documentar su lengua y los saberes ancestrales de las mujeres mayores de su comunidad. Se ha propuesto recuperar el pensamiento y la palabra de las mujeres del clan \u0268meraia\u0268 (gente de boruga), hablantes del dialecto bue del murui, reconociendo en ellas un archivo vivo que resguarda ense\u00f1anzas fundamentales para las nuevas generaciones. Este esfuerzo hace parte del Programa de documentaci\u00f3n de diez lenguas para el 2025 del Instituto Caro y Cuervo, una iniciativa que busca detener la p\u00e9rdida de idiomas ind\u00edgenas que hoy enfrentan serias amenazas de desaparici\u00f3n. Pueblo murui Lengua murui Recuperaci\u00f3n de la palabra Memoria ancestral Saberes de las mujeres Chagra Identidad cultural Transmisi\u00f3n intergeneracional Resistencia cultural Pervivencia ind\u00edgena https://www.caroycuervo.gov.co/reencontrarse-con-el-pensamiento-y-recuperar-la-palabra-murui/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-106",
      "row": 106,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Reunirse alrededor del fuego para mantener vivo el namui wam",
      "type": "Editorial",
      "description": "En Morales, Cauca, el Resguardo Ind\u00edgena Misak de San Antonio enfrenta un reto determinante: preservar su lengua en medio de un contexto geosocial en el que el castellano tiene m\u00e1s presencia y uso en la vida cotidiana. La comunidad trabaja en el enraizamiento de su cultura ancestral con el acompa\u00f1amiento del Instituto Caro y Cuervo y su Programa de documentaci\u00f3n de lenguas nativas, cuyo objetivo es contribuir al registro audiovisual de diez lenguas para mitigar su riesgo de desaparici\u00f3n.",
      "keywords": [
        "Pueblo Misak",
        "Namui wam",
        "Lengua propia",
        "Identidad misak",
        "Nak chak (fog\u00f3n)",
        "Pishi Ya",
        "Memoria ancestral",
        "Transmisi\u00f3n de saberes",
        "Resistencia cultural",
        "Pervivencia ind\u00edgena"
      ],
      "link": "https://www.caroycuervo.gov.co/reunirse-alrededor-del-fuego-para-mantener-vivo-el-namui-wam-la-lengua-de-los-misak/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial Reunirse alrededor del fuego para mantener vivo el namui wam Editorial En Morales, Cauca, el Resguardo Ind\u00edgena Misak de San Antonio enfrenta un reto determinante: preservar su lengua en medio de un contexto geosocial en el que el castellano tiene m\u00e1s presencia y uso en la vida cotidiana. La comunidad trabaja en el enraizamiento de su cultura ancestral con el acompa\u00f1amiento del Instituto Caro y Cuervo y su Programa de documentaci\u00f3n de lenguas nativas, cuyo objetivo es contribuir al registro audiovisual de diez lenguas para mitigar su riesgo de desaparici\u00f3n. Pueblo Misak Namui wam Lengua propia Identidad misak Nak chak (fog\u00f3n) Pishi Ya Memoria ancestral Transmisi\u00f3n de saberes Resistencia cultural Pervivencia ind\u00edgena https://www.caroycuervo.gov.co/reunirse-alrededor-del-fuego-para-mantener-vivo-el-namui-wam-la-lengua-de-los-misak/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-107",
      "row": 107,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial \u201cPodemos perderlo todo, pero nunca la lengua mira\u00f1a\u201d: Elio Mira\u00f1a",
      "type": "Editorial",
      "description": "Mira\u00f1a es su nombre, como tambi\u00e9n el de su idioma y su pueblo. Mira\u00f1a del clan Booanam\u0289 (Boa) por el lado paterno y del Neebaje (Achiote) por el materno, Elio Mira\u00f1a, documentador de la lengua mira\u00f1a en el marco del Programa de documentaci\u00f3n de diez lenguas para 2025 del Instituto Caro y Cuervo, dice que, aunque este t\u00e9rmino de origen tup\u00ed fue una forma de colonizaci\u00f3n que tergivers\u00f3 la historia de su gente, \u201clo usamos de apellido porque tambi\u00e9n es una manera de reconocernos y hermanarnos. Al ser reducidos como poblaci\u00f3n [durante la fiebre del caucho], todos nos consideramos parte de la misma familia, m\u00e1s all\u00e1 de la diversidad de los clanes\u201d. Los mira\u00f1a son un pueblo ind\u00edgena amaz\u00f3nico cuyo territorio ancestral est\u00e1 ubicado en la quebrada del r\u00edo Gwaa\u2019i (Pam\u00e1), afluente del Paa\u2019i (r\u00edo Cahuinari). Durante el genocidio cauchero, que tuvo como epicentro el Putumayo, el grupo migr\u00f3 a zonas cercanas al I\u00f1e\u2019i (r\u00edo Mirit\u00ed), territorio de comunidades como los matapi y los yucuna. Desde 1937 se estableci\u00f3 en asentamientos ribere\u00f1os a orillas del r\u00edo Caquet\u00e1 o r\u00edo de la danta (Okajimo), formando las comunidades de Puerto Remanso del Tigre, Mari\u00e1polis, San Francisco, Las Palmas y Met\u00e1-Quinch\u00e9.",
      "keywords": [
        "Pueblo Mira\u00f1a",
        "Lengua mira\u00f1a",
        "Elio Mira\u00f1a",
        "Preservaci\u00f3n ling\u00fc\u00edstica",
        "Memoria ancestral",
        "Cantos tradicionales",
        "Saberes espirituales",
        "Transmisi\u00f3n intergeneracional",
        "Resistencia ind\u00edgena",
        "Oralidad",
        "Identidad cultural"
      ],
      "link": "https://www.caroycuervo.gov.co/podemos-perderlo-todo-incluido-el-territorio-pero-nunca-la-lengua-mirana-elio-mirana/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial \u201cPodemos perderlo todo, pero nunca la lengua mira\u00f1a\u201d: Elio Mira\u00f1a Editorial Mira\u00f1a es su nombre, como tambi\u00e9n el de su idioma y su pueblo. Mira\u00f1a del clan Booanam\u0289 (Boa) por el lado paterno y del Neebaje (Achiote) por el materno, Elio Mira\u00f1a, documentador de la lengua mira\u00f1a en el marco del Programa de documentaci\u00f3n de diez lenguas para 2025 del Instituto Caro y Cuervo, dice que, aunque este t\u00e9rmino de origen tup\u00ed fue una forma de colonizaci\u00f3n que tergivers\u00f3 la historia de su gente, \u201clo usamos de apellido porque tambi\u00e9n es una manera de reconocernos y hermanarnos. Al ser reducidos como poblaci\u00f3n [durante la fiebre del caucho], todos nos consideramos parte de la misma familia, m\u00e1s all\u00e1 de la diversidad de los clanes\u201d. Los mira\u00f1a son un pueblo ind\u00edgena amaz\u00f3nico cuyo territorio ancestral est\u00e1 ubicado en la quebrada del r\u00edo Gwaa\u2019i (Pam\u00e1), afluente del Paa\u2019i (r\u00edo Cahuinari). Durante el genocidio cauchero, que tuvo como epicentro el Putumayo, el grupo migr\u00f3 a zonas cercanas al I\u00f1e\u2019i (r\u00edo Mirit\u00ed), territorio de comunidades como los matapi y los yucuna. Desde 1937 se estableci\u00f3 en asentamientos ribere\u00f1os a orillas del r\u00edo Caquet\u00e1 o r\u00edo de la danta (Okajimo), formando las comunidades de Puerto Remanso del Tigre, Mari\u00e1polis, San Francisco, Las Palmas y Met\u00e1-Quinch\u00e9. Pueblo Mira\u00f1a Lengua mira\u00f1a Elio Mira\u00f1a Preservaci\u00f3n ling\u00fc\u00edstica Memoria ancestral Cantos tradicionales Saberes espirituales Transmisi\u00f3n intergeneracional Resistencia ind\u00edgena Oralidad Identidad cultural https://www.caroycuervo.gov.co/podemos-perderlo-todo-incluido-el-territorio-pero-nunca-la-lengua-mirana-elio-mirana/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-108",
      "row": 108,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial El reto de preservar lenguas ind\u00edgenas en Colombia",
      "type": "Editorial",
      "description": "En el mundo que crean lenguas amaz\u00f3nicas como el murui, el mira\u00f1a, el cacua y el nukak, las palabras no se clasifican en masculino o femenino, como en el espa\u00f1ol, sino en la forma y las texturas de los objetos. Cuando un nukak muere, su nombre deja de pronunciarse, y entre los cacuas las historias cumplen un rol sanador. Cada idioma ind\u00edgena plantea una manera particular de relacionarse con la realidad. Por lo tanto, cada vez que una lengua desaparece, se pierde tambi\u00e9n un conjunto de conocimientos y la manera como un grupo humano se comunica. En Colombia existen al menos 65 lenguas ind\u00edgenas, habladas por 819.291 personas que viven principalmente en zonas lim\u00edtrofes del territorio y en asentamientos localizados en diversas regiones. Esta cifra, que se encuentra en el Plan Decenal de Lenguas Nativas 2022-2032, corresponde a menos del 5 % de la poblaci\u00f3n colombiana frente a los m\u00e1s de 50 millones de hablantes de espa\u00f1ol. Se trata de comunidades que existen desde antes de la conquista y cuyas lenguas est\u00e1n en peligro de desaparici\u00f3n.",
      "keywords": [
        "Lenguas ind\u00edgenas",
        "Diversidad ling\u00fc\u00edstica",
        "Preservaci\u00f3n cultural",
        "Documentaci\u00f3n audiovisual",
        "Saberes ancestrales",
        "Cosmovisiones ind\u00edgenas",
        "Transmisi\u00f3n intergeneracional",
        "Etnoeducaci\u00f3n",
        "Identidad cultural",
        "Pervivencia ling\u00fc\u00edstica"
      ],
      "link": "https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial El reto de preservar lenguas ind\u00edgenas en Colombia Editorial En el mundo que crean lenguas amaz\u00f3nicas como el murui, el mira\u00f1a, el cacua y el nukak, las palabras no se clasifican en masculino o femenino, como en el espa\u00f1ol, sino en la forma y las texturas de los objetos. Cuando un nukak muere, su nombre deja de pronunciarse, y entre los cacuas las historias cumplen un rol sanador. Cada idioma ind\u00edgena plantea una manera particular de relacionarse con la realidad. Por lo tanto, cada vez que una lengua desaparece, se pierde tambi\u00e9n un conjunto de conocimientos y la manera como un grupo humano se comunica. En Colombia existen al menos 65 lenguas ind\u00edgenas, habladas por 819.291 personas que viven principalmente en zonas lim\u00edtrofes del territorio y en asentamientos localizados en diversas regiones. Esta cifra, que se encuentra en el Plan Decenal de Lenguas Nativas 2022-2032, corresponde a menos del 5 % de la poblaci\u00f3n colombiana frente a los m\u00e1s de 50 millones de hablantes de espa\u00f1ol. Se trata de comunidades que existen desde antes de la conquista y cuyas lenguas est\u00e1n en peligro de desaparici\u00f3n. Lenguas ind\u00edgenas Diversidad ling\u00fc\u00edstica Preservaci\u00f3n cultural Documentaci\u00f3n audiovisual Saberes ancestrales Cosmovisiones ind\u00edgenas Transmisi\u00f3n intergeneracional Etnoeducaci\u00f3n Identidad cultural Pervivencia ling\u00fc\u00edstica https://www.caroycuervo.gov.co/documentar-para-no-olvidar-el-reto-de-preservar-lenguas-indigenas-en-colombia/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-109",
      "row": 109,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Cultivar el alimento y la palabra inga",
      "type": "Editorial",
      "description": "Desde hace varios meses, M\u00f3nica Jansasoy, documentadora de la lengua inga, recorre las veredas del municipio de Santiago (Putumayo) para escuchar las voces y trabajar por la preservaci\u00f3n cultural de su pueblo. Conocer los testimonios de los mayores relacionados con la escolarizaci\u00f3n religiosa impuesta por la Iglesia cat\u00f3lica a mediados del siglo XIX ha sido uno de sus intereses y un punto de partida para reflexionar sobre otros temas fundamentales como la cosecha de los alimentos propios y los cuentos tradicionales. En el marco de su labor dentro del programa de documentaci\u00f3n de diez lenguas 2025 del Instituto Caro y Cuervo, el hecho de ser una mujer del Cabildo Inga de Santiago y hablante del idioma le ha abierto puertas como la de Juana Jacanamijoy, una sabedora de la vereda Muchivioy con quien tuvo la oportunidad de conversar sobre la historia y la cosecha de una planta fundamental para la alimentaci\u00f3n de la comunidad.",
      "keywords": [
        "Pueblo Inga",
        "Lengua inga",
        "Chagra",
        "Alimentos tradicionales",
        "Memoria ancestral",
        "Sabidur\u00eda de las mamitas",
        "Tradici\u00f3n oral",
        "Identidad cultural",
        "Transmisi\u00f3n de saberes",
        "Pervivencia ind\u00edgena"
      ],
      "link": "https://www.caroycuervo.gov.co/cultivar-el-alimento-y-la-palabra-inga/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial Cultivar el alimento y la palabra inga Editorial Desde hace varios meses, M\u00f3nica Jansasoy, documentadora de la lengua inga, recorre las veredas del municipio de Santiago (Putumayo) para escuchar las voces y trabajar por la preservaci\u00f3n cultural de su pueblo. Conocer los testimonios de los mayores relacionados con la escolarizaci\u00f3n religiosa impuesta por la Iglesia cat\u00f3lica a mediados del siglo XIX ha sido uno de sus intereses y un punto de partida para reflexionar sobre otros temas fundamentales como la cosecha de los alimentos propios y los cuentos tradicionales. En el marco de su labor dentro del programa de documentaci\u00f3n de diez lenguas 2025 del Instituto Caro y Cuervo, el hecho de ser una mujer del Cabildo Inga de Santiago y hablante del idioma le ha abierto puertas como la de Juana Jacanamijoy, una sabedora de la vereda Muchivioy con quien tuvo la oportunidad de conversar sobre la historia y la cosecha de una planta fundamental para la alimentaci\u00f3n de la comunidad. Pueblo Inga Lengua inga Chagra Alimentos tradicionales Memoria ancestral Sabidur\u00eda de las mamitas Tradici\u00f3n oral Identidad cultural Transmisi\u00f3n de saberes Pervivencia ind\u00edgena https://www.caroycuervo.gov.co/cultivar-el-alimento-y-la-palabra-inga/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-110",
      "row": 110,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial La historia de una madre que siembra el nasa yuwe en su hija",
      "type": "Editorial",
      "description": "Desde el nacimiento de su hija Sara, la mayora Edilma Taquinas, del pueblo Nasa, ha acompa\u00f1ado su crecimiento en su lengua materna: el nasa yuwe. En el municipio de Su\u00e1rez, al suroccidente de Colombia, donde cada vez se escucha menos este idioma \u2014una de las lenguas nativas en riesgo de desaparecer\u2014, su apuesta es firme: mantener viva la palabra nasa, junto con la cosmovisi\u00f3n de su comunidad, con toda la memoria, el cuidado y el enraizamiento que abarca.",
      "keywords": [
        "Pueblo Nasa",
        "Nasa yuwe",
        "Lengua materna",
        "Identidad cultural",
        "Transmisi\u00f3n familiar",
        "Memoria ancestral",
        "Cosmovisi\u00f3n nasa",
        "Enraizamiento cultural",
        "Resistencia ling\u00fc\u00edstica",
        "Pervivencia ind\u00edgena"
      ],
      "link": "https://www.caroycuervo.gov.co/la-lengua-como-el-hogar-la-historia-de-una-madre-que-siembra-el-nasa-yuwe-en-su-hija/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial La historia de una madre que siembra el nasa yuwe en su hija Editorial Desde el nacimiento de su hija Sara, la mayora Edilma Taquinas, del pueblo Nasa, ha acompa\u00f1ado su crecimiento en su lengua materna: el nasa yuwe. En el municipio de Su\u00e1rez, al suroccidente de Colombia, donde cada vez se escucha menos este idioma \u2014una de las lenguas nativas en riesgo de desaparecer\u2014, su apuesta es firme: mantener viva la palabra nasa, junto con la cosmovisi\u00f3n de su comunidad, con toda la memoria, el cuidado y el enraizamiento que abarca. Pueblo Nasa Nasa yuwe Lengua materna Identidad cultural Transmisi\u00f3n familiar Memoria ancestral Cosmovisi\u00f3n nasa Enraizamiento cultural Resistencia ling\u00fc\u00edstica Pervivencia ind\u00edgena https://www.caroycuervo.gov.co/la-lengua-como-el-hogar-la-historia-de-una-madre-que-siembra-el-nasa-yuwe-en-su-hija/"
    },
    {
      "id": "somos-lenguas-de-colombia-senas-e-inclusion-111",
      "row": 111,
      "theme": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n",
      "theme_slug": "somos-lenguas-de-colombia-senas-e-inclusion",
      "responsable": "INSTITUTO CARO Y CUERVO",
      "title": "Editorial Mujeres danzantes: guardianas de la tradici\u00f3n kam\u00ebnt\u0161\u00e1",
      "type": "Editorial",
      "description": "En el municipio de Sibundoy (Putumayo) vive un grupo de mujeres que danzan para mantener vivas las memorias del pueblo kam\u00ebnt\u0161\u00e1 y proteger el idioma, la m\u00fasica tradicional, las plantas medicinales y los tejidos que guardan nuestras historias. Todas las integrantes de Danzas Vida Or visten tupuyos rojos (blusas) y sus vientres est\u00e1n envueltos por el tsombiash, un cintur\u00f3n de lana que tiene tejidas las memorias y la cosmovisi\u00f3n de los kam\u00ebnt\u0161\u00e1. Entre los elementos que componen su vestuario tambi\u00e9n est\u00e1n los collares elaborados con semillas naturales, que representan la conexi\u00f3n con la tierra, y algunas de ellas portan un sheknaj, un bolso tejido que tradicionalmente se utilizaba para guardar las semillas y los frutos, pero cuyo uso ha ido desapareciendo.",
      "keywords": [
        "Pueblo Kam\u00ebnt\u0161\u00e1",
        "Lengua kam\u00ebnt\u0161\u00e1",
        "Danzas tradicionales",
        "Memoria ancestral",
        "Cosmovisi\u00f3n ind\u00edgena",
        "Saberes de las mayores",
        "Identidad cultural",
        "Pervivencia ind\u00edgena"
      ],
      "link": "https://www.caroycuervo.gov.co/mujeres-danzantes-guardianas-de-la-tradicion-kamentsa/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos lenguas de Colombia, se\u00f1as e inclusi\u00f3n INSTITUTO CARO Y CUERVO Editorial Mujeres danzantes: guardianas de la tradici\u00f3n kam\u00ebnt\u0161\u00e1 Editorial En el municipio de Sibundoy (Putumayo) vive un grupo de mujeres que danzan para mantener vivas las memorias del pueblo kam\u00ebnt\u0161\u00e1 y proteger el idioma, la m\u00fasica tradicional, las plantas medicinales y los tejidos que guardan nuestras historias. Todas las integrantes de Danzas Vida Or visten tupuyos rojos (blusas) y sus vientres est\u00e1n envueltos por el tsombiash, un cintur\u00f3n de lana que tiene tejidas las memorias y la cosmovisi\u00f3n de los kam\u00ebnt\u0161\u00e1. Entre los elementos que componen su vestuario tambi\u00e9n est\u00e1n los collares elaborados con semillas naturales, que representan la conexi\u00f3n con la tierra, y algunas de ellas portan un sheknaj, un bolso tejido que tradicionalmente se utilizaba para guardar las semillas y los frutos, pero cuyo uso ha ido desapareciendo. Pueblo Kam\u00ebnt\u0161\u00e1 Lengua kam\u00ebnt\u0161\u00e1 Danzas tradicionales Memoria ancestral Cosmovisi\u00f3n ind\u00edgena Saberes de las mayores Identidad cultural Pervivencia ind\u00edgena https://www.caroycuervo.gov.co/mujeres-danzantes-guardianas-de-la-tradicion-kamentsa/"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-112",
      "row": 112,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Documental Cuentos de pesca: econom\u00eda y saberes artesanales",
      "type": "Documental",
      "description": "Producci\u00f3n del ICANH que documenta la vida de pescadores artesanales de la Ci\u00e9naga de la Caimanera. Aborda su econom\u00eda, tradiciones y relaci\u00f3n con el agua, mostrando su papel en la historia y din\u00e1mica social del Caribe colombiano a trav\u00e9s de entrevistas y an\u00e1lisis de su entorno.",
      "keywords": [
        "Producci\u00f3n ICANH",
        "Pescadores artesanales",
        "Ci\u00e9naga de la Caimanera",
        "Econom\u00eda local",
        "Tradiciones y cultura",
        "Relaci\u00f3n con el agua",
        "Historia social del Caribe colombiano",
        "Din\u00e1mica comunitaria",
        "Entrevistas y an\u00e1lisis del entorno",
        "Patrimonio cultural",
        "Saberes ancestrales",
        "Identidad comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=gMbhhW1Ks3w",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Documental Cuentos de pesca: econom\u00eda y saberes artesanales Documental Producci\u00f3n del ICANH que documenta la vida de pescadores artesanales de la Ci\u00e9naga de la Caimanera. Aborda su econom\u00eda, tradiciones y relaci\u00f3n con el agua, mostrando su papel en la historia y din\u00e1mica social del Caribe colombiano a trav\u00e9s de entrevistas y an\u00e1lisis de su entorno. Producci\u00f3n ICANH Pescadores artesanales Ci\u00e9naga de la Caimanera Econom\u00eda local Tradiciones y cultura Relaci\u00f3n con el agua Historia social del Caribe colombiano Din\u00e1mica comunitaria Entrevistas y an\u00e1lisis del entorno Patrimonio cultural Saberes ancestrales Identidad comunitaria https://www.youtube.com/watch?v=gMbhhW1Ks3w"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-113",
      "row": 113,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Podcast El yag\u00e9: usos y efectos de su globalizaci\u00f3n",
      "type": "Podcast",
      "description": "Programa de la serie de podcast Antropofon\u00edas del ICANH. Est episodio trata sobre los usos y los efectos que hoy en d\u00eda tiene el consumo de ayahuasca o yag\u00e9 en entornos urbanos, no solo a nivel local sino internacional. Para esta conversaci\u00f3n tenemos como invitada a la reconocida investigadora de la ayahuasca: Alhena Caicedo, antrop\u00f3loga y actual directora del Instituto Colombiano de Antropolog\u00eda e Historia (ICANH).",
      "keywords": [
        "Serie de podcast Antropofon\u00edas",
        "ICANH",
        "Ayahuasca / yag\u00e9",
        "Consumo urbano",
        "Efectos y usos contempor\u00e1neos",
        "Alcance local e internacional",
        "Invitada: Alhena Caicedo",
        "Antropolog\u00eda",
        "Investigaci\u00f3n sobre plantas sagradas",
        "Patrimonio cultural",
        "Saberes ancestrales",
        "Pr\u00e1cticas rituales",
        "Cultura amaz\u00f3nica"
      ],
      "link": "https://open.spotify.com/episode/0LsJ3LA8S8pKY6PMbn5K7Q?si=da951c6a81734971",
      "asset_link": "",
      "force_message": "La herencia no es asunto del pasado: vive hoy en cada alimento, cada camino recorrido y cda s\u00edmbolo del que nos enorgullecemos.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Podcast El yag\u00e9: usos y efectos de su globalizaci\u00f3n Podcast Programa de la serie de podcast Antropofon\u00edas del ICANH. Est episodio trata sobre los usos y los efectos que hoy en d\u00eda tiene el consumo de ayahuasca o yag\u00e9 en entornos urbanos, no solo a nivel local sino internacional. Para esta conversaci\u00f3n tenemos como invitada a la reconocida investigadora de la ayahuasca: Alhena Caicedo, antrop\u00f3loga y actual directora del Instituto Colombiano de Antropolog\u00eda e Historia (ICANH). La herencia no es asunto del pasado: vive hoy en cada alimento, cada camino recorrido y cda s\u00edmbolo del que nos enorgullecemos. Serie de podcast Antropofon\u00edas ICANH Ayahuasca / yag\u00e9 Consumo urbano Efectos y usos contempor\u00e1neos Alcance local e internacional Invitada: Alhena Caicedo Antropolog\u00eda Investigaci\u00f3n sobre plantas sagradas Patrimonio cultural Saberes ancestrales Pr\u00e1cticas rituales Cultura amaz\u00f3nica https://open.spotify.com/episode/0LsJ3LA8S8pKY6PMbn5K7Q?si=da951c6a81734971"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-114",
      "row": 114,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Podcast La salud de la mujer, la luna y cuidados del cuerpo",
      "type": "Podcast",
      "description": "Episodio de la serie de podcast Antropofon\u00edas del ICANH. Este episodio propone un di\u00e1logo entre la medicina al\u00f3pata y la medicina ancestral Yanakuna. Nuestras invitadas hablar\u00e1n, cada una desde su esquina, sobre el cuidado de la mujer y la salud femenina. De la mano de la doctora Paula Ram\u00edrez y la aprendiz de partera Sayari Campos Burbano podremos entender la diversidad de miradas y la singularidad frente a las concepciones del cuerpo y la salud de las mujeres.",
      "keywords": [
        "Serie de podcast Antropofon\u00edas",
        "ICANH",
        "Medicina al\u00f3pata y medicina ancestral Yanakuna",
        "Cuidado de la mujer",
        "Salud femenina",
        "Diversidad de miradas m\u00e9dicas",
        "Conceptos del cuerpo y la salud",
        "Invitadas: Dra. Paula Ram\u00edrez y Sayari Campos Burbano",
        "Saberes ancestrales",
        "Parter\u00eda tradicional",
        "Di\u00e1logo intercultural",
        "Patrimonio intangible",
        "Medicina tradicional y contempor\u00e1nea"
      ],
      "link": "https://open.spotify.com/episode/51EPlgXf2rcNCoW9i7Jola?si=48d7d713ac524884",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Podcast La salud de la mujer, la luna y cuidados del cuerpo Podcast Episodio de la serie de podcast Antropofon\u00edas del ICANH. Este episodio propone un di\u00e1logo entre la medicina al\u00f3pata y la medicina ancestral Yanakuna. Nuestras invitadas hablar\u00e1n, cada una desde su esquina, sobre el cuidado de la mujer y la salud femenina. De la mano de la doctora Paula Ram\u00edrez y la aprendiz de partera Sayari Campos Burbano podremos entender la diversidad de miradas y la singularidad frente a las concepciones del cuerpo y la salud de las mujeres. Serie de podcast Antropofon\u00edas ICANH Medicina al\u00f3pata y medicina ancestral Yanakuna Cuidado de la mujer Salud femenina Diversidad de miradas m\u00e9dicas Conceptos del cuerpo y la salud Invitadas: Dra. Paula Ram\u00edrez y Sayari Campos Burbano Saberes ancestrales Parter\u00eda tradicional Di\u00e1logo intercultural Patrimonio intangible Medicina tradicional y contempor\u00e1nea https://open.spotify.com/episode/51EPlgXf2rcNCoW9i7Jola?si=48d7d713ac524884"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-115",
      "row": 115,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Podcast La chicha: de bebida prohibida a producto tur\u00edstico",
      "type": "Podcast",
      "description": "Episodio de la serie de podcast Antropofon\u00edas del ICANH. Este episodio gira en torno a la bebida m\u00e1s importante para la historia de las comunidades indigenas de este territorio: la chicha. Esta bebida tradicional fue perseguida hasta hace no muchas d\u00e9cadas, porque se consideraba una sustancia nociva para la inteligencia y causante de criminalidad. \u00bfC\u00f3mo pas\u00f3 de ser una bebida estigmatizada a ser parte del turismo gastron\u00f3mico del pa\u00eds?",
      "keywords": [
        "Serie de podcast Antropofon\u00edas",
        "ICANH",
        "Chicha",
        "Bebida tradicional ind\u00edgena",
        "Historia y cultura alimentaria",
        "Persecuci\u00f3n y estigmatizaci\u00f3n",
        "Percepci\u00f3n social y criminalizaci\u00f3n",
        "Turismo gastron\u00f3mico",
        "Patrimonio cultural",
        "Saberes ancestrales",
        "Tradici\u00f3n y resiliencia",
        "Identidad comunitaria"
      ],
      "link": "https://open.spotify.com/episode/2CyPcz2z3YSkJnWbkVVLvY?si=80fa7e3bdf84448b",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Podcast La chicha: de bebida prohibida a producto tur\u00edstico Podcast Episodio de la serie de podcast Antropofon\u00edas del ICANH. Este episodio gira en torno a la bebida m\u00e1s importante para la historia de las comunidades indigenas de este territorio: la chicha. Esta bebida tradicional fue perseguida hasta hace no muchas d\u00e9cadas, porque se consideraba una sustancia nociva para la inteligencia y causante de criminalidad. \u00bfC\u00f3mo pas\u00f3 de ser una bebida estigmatizada a ser parte del turismo gastron\u00f3mico del pa\u00eds? Serie de podcast Antropofon\u00edas ICANH Chicha Bebida tradicional ind\u00edgena Historia y cultura alimentaria Persecuci\u00f3n y estigmatizaci\u00f3n Percepci\u00f3n social y criminalizaci\u00f3n Turismo gastron\u00f3mico Patrimonio cultural Saberes ancestrales Tradici\u00f3n y resiliencia Identidad comunitaria https://open.spotify.com/episode/2CyPcz2z3YSkJnWbkVVLvY?si=80fa7e3bdf84448b"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-116",
      "row": 116,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Arte animado Susurros del Caquet\u00e1",
      "type": "Arte animado",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Juegos visuales y sonoros que reflejan algunos aspectos de la vida campesina del Caquet\u00e1. Es una invitaci\u00f3n a sumergirse en las emociones que transmiten los colores y las formas de la naturaleza en esta regi\u00f3n de Colombia.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigaci\u00f3n y creaci\u00f3n multimedia",
        "Vida campesina",
        "Caquet\u00e1",
        "Juegos visuales y sonoros",
        "Emociones de la naturaleza",
        "Colores y formas del paisaje",
        "Cultura rural",
        "Identidad territorial",
        "Experiencia sensorial",
        "Patrimonio cultural",
        "Conexi\u00f3n con el entorno natural"
      ],
      "link": "https://www.youtube.com/watch?v=pC0wF78s-9s",
      "asset_link": "",
      "force_message": "El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro pa\u00eds nos revelan a diario las formas diversas en las que habitan sus territorios.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Arte animado Susurros del Caquet\u00e1 Arte animado Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Juegos visuales y sonoros que reflejan algunos aspectos de la vida campesina del Caquet\u00e1. Es una invitaci\u00f3n a sumergirse en las emociones que transmiten los colores y las formas de la naturaleza en esta regi\u00f3n de Colombia. El campo vive y se vive en Colombia. Las historias de campesinas y campesinos de nuestro pa\u00eds nos revelan a diario las formas diversas en las que habitan sus territorios. Proyecto Vidas campesinas Investigaci\u00f3n y creaci\u00f3n multimedia Vida campesina Caquet\u00e1 Juegos visuales y sonoros Emociones de la naturaleza Colores y formas del paisaje Cultura rural Identidad territorial Experiencia sensorial Patrimonio cultural Conexi\u00f3n con el entorno natural https://www.youtube.com/watch?v=pC0wF78s-9s"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-117",
      "row": 117,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Arte animado Evocaciones del Raudal del Guayabero",
      "type": "Arte animado",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Esta animaci\u00f3n busca acercar a las(os) espectadoras(es) desde la evocaci\u00f3n po\u00e9tica a Raudal del Guayabero a partir del movimiento, el color y las formas mediante el uso de materiales propios del lugar como piedras y hojas sumados a la arena.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigaci\u00f3n y creaci\u00f3n multimedia",
        "Animaci\u00f3n po\u00e9tica",
        "Raudal del Guayabero",
        "Movimiento, color y formas",
        "Materiales locales: piedras, hojas, arena",
        "Cultura campesina",
        "Paisaje y naturaleza",
        "Experiencia sensorial",
        "Identidad territorial",
        "Patrimonio cultural",
        "Conexi\u00f3n con el entorno"
      ],
      "link": "https://www.youtube.com/watch?v=Bbd2n09wVCQ",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Arte animado Evocaciones del Raudal del Guayabero Arte animado Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Esta animaci\u00f3n busca acercar a las(os) espectadoras(es) desde la evocaci\u00f3n po\u00e9tica a Raudal del Guayabero a partir del movimiento, el color y las formas mediante el uso de materiales propios del lugar como piedras y hojas sumados a la arena. Proyecto Vidas campesinas Investigaci\u00f3n y creaci\u00f3n multimedia Animaci\u00f3n po\u00e9tica Raudal del Guayabero Movimiento, color y formas Materiales locales: piedras, hojas, arena Cultura campesina Paisaje y naturaleza Experiencia sensorial Identidad territorial Patrimonio cultural Conexi\u00f3n con el entorno https://www.youtube.com/watch?v=Bbd2n09wVCQ"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-118",
      "row": 118,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Arte animado Colores de Su\u00e1rez, Cauca",
      "type": "Arte animado",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas'. Un recorrido por los colores, la diversidad \u00e9tnica y las formas de la naturaleza acompa\u00f1adas por el testimonio de Cleste Ararat",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigaci\u00f3n y creaci\u00f3n multimedia",
        "Colores y formas de la naturaleza",
        "Diversidad \u00e9tnica",
        "Testimonio de Cleste Ararat",
        "Cultura campesina",
        "Identidad territorial",
        "Patrimonio natural y cultural",
        "Experiencia sensorial",
        "Conexi\u00f3n con el entorno",
        "Narrativa audiovisual"
      ],
      "link": "https://www.youtube.com/watch?v=6cGCIT1-8_w",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Arte animado Colores de Su\u00e1rez, Cauca Arte animado Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas'. Un recorrido por los colores, la diversidad \u00e9tnica y las formas de la naturaleza acompa\u00f1adas por el testimonio de Cleste Ararat Proyecto Vidas campesinas Investigaci\u00f3n y creaci\u00f3n multimedia Colores y formas de la naturaleza Diversidad \u00e9tnica Testimonio de Cleste Ararat Cultura campesina Identidad territorial Patrimonio natural y cultural Experiencia sensorial Conexi\u00f3n con el entorno Narrativa audiovisual https://www.youtube.com/watch?v=6cGCIT1-8_w"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-119",
      "row": 119,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Guardiana de las vida",
      "type": "Video",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Las experiencias de vida de mujeres campesinas, ind\u00edgenas y cimarronas del norte del Cauca nos hablan de c\u00f3mo en sus pr\u00e1cticas cotidianas sostienen, cuidan y luchan por la vida, la familia, la comunidad y el territorio.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigaci\u00f3n y creaci\u00f3n multimedia",
        "Mujeres campesinas, ind\u00edgenas y cimarronas",
        "Norte del Cauca",
        "Pr\u00e1cticas cotidianas",
        "Cuidado de la vida, familia y comunidad",
        "Defensa del territorio",
        "Cultura y saberes ancestrales",
        "Identidad y resistencia",
        "Econom\u00eda y sostenibilidad local",
        "Patrimonio cultural",
        "Empoderamiento femenino"
      ],
      "link": "https://www.youtube.com/watch?v=Uy4sbBPS-4g",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Guardiana de las vida Video Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Las experiencias de vida de mujeres campesinas, ind\u00edgenas y cimarronas del norte del Cauca nos hablan de c\u00f3mo en sus pr\u00e1cticas cotidianas sostienen, cuidan y luchan por la vida, la familia, la comunidad y el territorio. Proyecto Vidas campesinas Investigaci\u00f3n y creaci\u00f3n multimedia Mujeres campesinas, ind\u00edgenas y cimarronas Norte del Cauca Pr\u00e1cticas cotidianas Cuidado de la vida, familia y comunidad Defensa del territorio Cultura y saberes ancestrales Identidad y resistencia Econom\u00eda y sostenibilidad local Patrimonio cultural Empoderamiento femenino https://www.youtube.com/watch?v=Uy4sbBPS-4g"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-120",
      "row": 120,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Vivir en armon\u00eda",
      "type": "Video",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. En Su\u00e1rez, un territorio intercultural, las comunidades campesinas, ind\u00edgenas y cimarronas tejen lazos de solidaridad y apoyo mutuo por la defensa de la vida y el territorio. Las voces de las mujeres del norte del Cauca hacen un llamado nacional a la uni\u00f3n, la paz y el respeto a la diferencia.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigaci\u00f3n y creaci\u00f3n multimedia",
        "Su\u00e1rez, Norte del Cauca",
        "Comunidades campesinas, ind\u00edgenas y cimarronas",
        "Solidaridad y apoyo mutuo",
        "Defensa de la vida y el territorio",
        "Voces de mujeres",
        "Llamado a la uni\u00f3n y la paz",
        "Respeto a la diversidad",
        "Identidad intercultural",
        "Cultura y saberes ancestrales",
        "Resistencia comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=jJv7O95eJrA",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Vivir en armon\u00eda Video Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. En Su\u00e1rez, un territorio intercultural, las comunidades campesinas, ind\u00edgenas y cimarronas tejen lazos de solidaridad y apoyo mutuo por la defensa de la vida y el territorio. Las voces de las mujeres del norte del Cauca hacen un llamado nacional a la uni\u00f3n, la paz y el respeto a la diferencia. Proyecto Vidas campesinas Investigaci\u00f3n y creaci\u00f3n multimedia Su\u00e1rez, Norte del Cauca Comunidades campesinas, ind\u00edgenas y cimarronas Solidaridad y apoyo mutuo Defensa de la vida y el territorio Voces de mujeres Llamado a la uni\u00f3n y la paz Respeto a la diversidad Identidad intercultural Cultura y saberes ancestrales Resistencia comunitaria https://www.youtube.com/watch?v=jJv7O95eJrA"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-121",
      "row": 121,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Cuidar la vida",
      "type": "Video",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Las pr\u00e1cticas de cuidado de las vidas campesinas en el norte del Cauca se expresan de m\u00faltiples maneras: en el cuidado de las plantas y la tierra, en procurar el bienestar colectivo de la vida en comunidad, en armonizar espiritualmente el territorio, pero sobre todo, en re\u00edr y disfrutar la vida.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigaci\u00f3n y creaci\u00f3n multimedia",
        "Norte del Cauca",
        "Pr\u00e1cticas de cuidado campesinas",
        "Cuidado de plantas y tierra",
        "Bienestar colectivo",
        "Armon\u00eda espiritual con el territorio",
        "Comunidad y vida en colectivo",
        "Alegr\u00eda y disfrute de la vida",
        "Saberes ancestrales",
        "Cultura y tradici\u00f3n rural",
        "Identidad territorial",
        "Resistencia y sostenibilidad"
      ],
      "link": "https://www.youtube.com/shorts/vu6FBMQ4HdE",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH C\u00e1psula de video Cuidar la vida Video Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Las pr\u00e1cticas de cuidado de las vidas campesinas en el norte del Cauca se expresan de m\u00faltiples maneras: en el cuidado de las plantas y la tierra, en procurar el bienestar colectivo de la vida en comunidad, en armonizar espiritualmente el territorio, pero sobre todo, en re\u00edr y disfrutar la vida. Proyecto Vidas campesinas Investigaci\u00f3n y creaci\u00f3n multimedia Norte del Cauca Pr\u00e1cticas de cuidado campesinas Cuidado de plantas y tierra Bienestar colectivo Armon\u00eda espiritual con el territorio Comunidad y vida en colectivo Alegr\u00eda y disfrute de la vida Saberes ancestrales Cultura y tradici\u00f3n rural Identidad territorial Resistencia y sostenibilidad https://www.youtube.com/shorts/vu6FBMQ4HdE"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-122",
      "row": 122,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Etnograf\u00eda sonora Aqu\u00ed me ama\u00f1o, gracias a Dios",
      "type": "Video",
      "description": "Producci\u00f3n del proyecto Vidas campesinas que recorre la vida campesina en Caquet\u00e1. Entre orde\u00f1o, sonidos de la naturaleza y memorias del conflicto, sus protagonistas comparten saberes, riesgos y alegr\u00edas del d\u00eda a d\u00eda en el piedemonte amaz\u00f3nico, destacando su relaci\u00f3n con el territorio y la cultura.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Vida campesina",
        "Caquet\u00e1",
        "Orde\u00f1o y trabajo diario",
        "Sonidos de la naturaleza",
        "Memorias del conflicto",
        "Saberes y tradiciones",
        "Riesgos y alegr\u00edas cotidianas",
        "Piedemonte amaz\u00f3nico",
        "Relaci\u00f3n con el territorio",
        "Cultura campesina",
        "Identidad territorial",
        "Patrimonio cultural"
      ],
      "link": "https://open.spotify.com/episode/7mFMiaggcudi72cTttAtEd?si=a87f3e6c8dec4b40",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Etnograf\u00eda sonora Aqu\u00ed me ama\u00f1o, gracias a Dios Video Producci\u00f3n del proyecto Vidas campesinas que recorre la vida campesina en Caquet\u00e1. Entre orde\u00f1o, sonidos de la naturaleza y memorias del conflicto, sus protagonistas comparten saberes, riesgos y alegr\u00edas del d\u00eda a d\u00eda en el piedemonte amaz\u00f3nico, destacando su relaci\u00f3n con el territorio y la cultura. Proyecto Vidas campesinas Vida campesina Caquet\u00e1 Orde\u00f1o y trabajo diario Sonidos de la naturaleza Memorias del conflicto Saberes y tradiciones Riesgos y alegr\u00edas cotidianas Piedemonte amaz\u00f3nico Relaci\u00f3n con el territorio Cultura campesina Identidad territorial Patrimonio cultural https://open.spotify.com/episode/7mFMiaggcudi72cTttAtEd?si=a87f3e6c8dec4b40"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-123",
      "row": 123,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Etnograf\u00eda sonora La tecnolog\u00eda del jaguar",
      "type": "Video",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Cae la noche en Raudal del Guayabero; misteriosa, imponente, y con ella sus peligros. No se vale tener miedo, el jaguar sabe rastrearlo con su tecnolog\u00eda infalible, posando su pata sobre las huellas del caminante. Seguir el paso con valent\u00eda es la \u00fanica defensa. Ciertamente, despu\u00e9s de la noche vendr\u00e1 el d\u00eda y con \u00e9l la luz del sol que todo ilumina.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Investigaci\u00f3n y creaci\u00f3n multimedia",
        "Raudal del Guayabero",
        "Noche y peligros del territorio",
        "Jaguar como s\u00edmbolo y gu\u00eda",
        "Rastreo y supervivencia",
        "Valent\u00eda y resiliencia",
        "Huellas del caminante",
        "Ciclo natural: noche y d\u00eda",
        "Luz del sol y renovaci\u00f3n",
        "Cultura y cosmovisi\u00f3n campesina",
        "Conexi\u00f3n con la naturaleza",
        "Patrimonio simb\u00f3lico y narrativo"
      ],
      "link": "https://open.spotify.com/episode/1zyv56hxMof8HGgwTDseF8?si=85fcc47f4e044012",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Etnograf\u00eda sonora La tecnolog\u00eda del jaguar Video Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Cae la noche en Raudal del Guayabero; misteriosa, imponente, y con ella sus peligros. No se vale tener miedo, el jaguar sabe rastrearlo con su tecnolog\u00eda infalible, posando su pata sobre las huellas del caminante. Seguir el paso con valent\u00eda es la \u00fanica defensa. Ciertamente, despu\u00e9s de la noche vendr\u00e1 el d\u00eda y con \u00e9l la luz del sol que todo ilumina. Proyecto Vidas campesinas Investigaci\u00f3n y creaci\u00f3n multimedia Raudal del Guayabero Noche y peligros del territorio Jaguar como s\u00edmbolo y gu\u00eda Rastreo y supervivencia Valent\u00eda y resiliencia Huellas del caminante Ciclo natural: noche y d\u00eda Luz del sol y renovaci\u00f3n Cultura y cosmovisi\u00f3n campesina Conexi\u00f3n con la naturaleza Patrimonio simb\u00f3lico y narrativo https://open.spotify.com/episode/1zyv56hxMof8HGgwTDseF8?si=85fcc47f4e044012"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-124",
      "row": 124,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Etnograf\u00eda sonora Cultivo de alegr\u00eda",
      "type": "Video",
      "description": "Producci\u00f3n del proyecto Vidas campesinas que retrata un territorio donde la vida fluye sin prisa y la alegr\u00eda es herencia ancestral. Entre cultivos, saberes y memorias, la comunidad celebra la abundancia, la risa y la unidad como formas de bienestar, resaltando su conexi\u00f3n con la tierra y una vida en armon\u00eda, \u201ca tiempo\u201d y sin reproches.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Territorio y vida campesina",
        "Cultivos y agricultura local",
        "Saberes ancestrales",
        "Memorias comunitarias",
        "Alegr\u00eda y unidad",
        "Abundancia y bienestar",
        "Conexi\u00f3n con la tierra",
        "Armon\u00eda y ritmo de vida",
        "Celebraci\u00f3n de la vida cotidiana",
        "Cultura y tradici\u00f3n rural",
        "Identidad comunitaria",
        "Patrimonio intangible"
      ],
      "link": "https://open.spotify.com/episode/4E5Fe8AkyFri7aA33B99Ds?si=f9e0d390c67047fe",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Etnograf\u00eda sonora Cultivo de alegr\u00eda Video Producci\u00f3n del proyecto Vidas campesinas que retrata un territorio donde la vida fluye sin prisa y la alegr\u00eda es herencia ancestral. Entre cultivos, saberes y memorias, la comunidad celebra la abundancia, la risa y la unidad como formas de bienestar, resaltando su conexi\u00f3n con la tierra y una vida en armon\u00eda, \u201ca tiempo\u201d y sin reproches. Proyecto Vidas campesinas Territorio y vida campesina Cultivos y agricultura local Saberes ancestrales Memorias comunitarias Alegr\u00eda y unidad Abundancia y bienestar Conexi\u00f3n con la tierra Armon\u00eda y ritmo de vida Celebraci\u00f3n de la vida cotidiana Cultura y tradici\u00f3n rural Identidad comunitaria Patrimonio intangible https://open.spotify.com/episode/4E5Fe8AkyFri7aA33B99Ds?si=f9e0d390c67047fe"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-125",
      "row": 125,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Mensaje sonoro Somos la ambulancia de todos",
      "type": "Sonoro",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Las plantas y remedios naturales son la farmacia natural frente a la incapacidad del sistema de salud de atender la ruralidad dispersa. \"Somos la ambulancia, todos de todos\" pues en las vidas campesinas caqueteas la solidaridad es sanadora.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Plantas y remedios naturales",
        "Medicina tradicional",
        "Ruralidad dispersa",
        "Limitaciones del sistema de salud",
        "Solidaridad comunitaria",
        "\u201cSomos la ambulancia, todos de todos\u201d",
        "Cuidado colectivo",
        "Saberes ancestrales",
        "Cultura campesina",
        "Resiliencia y autonom\u00eda",
        "Patrimonio intangible",
        "Bienestar comunitario"
      ],
      "link": "https://open.spotify.com/episode/2kJwaVWI32dPr8yNZZ69KG?si=d5edf05cf46f4be2",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Mensaje sonoro Somos la ambulancia de todos Sonoro Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Las plantas y remedios naturales son la farmacia natural frente a la incapacidad del sistema de salud de atender la ruralidad dispersa. \"Somos la ambulancia, todos de todos\" pues en las vidas campesinas caqueteas la solidaridad es sanadora. Proyecto Vidas campesinas Plantas y remedios naturales Medicina tradicional Ruralidad dispersa Limitaciones del sistema de salud Solidaridad comunitaria \u201cSomos la ambulancia, todos de todos\u201d Cuidado colectivo Saberes ancestrales Cultura campesina Resiliencia y autonom\u00eda Patrimonio intangible Bienestar comunitario https://open.spotify.com/episode/2kJwaVWI32dPr8yNZZ69KG?si=d5edf05cf46f4be2"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-126",
      "row": 126,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Mensaje sonoro Vivimos paz y tranquilidad",
      "type": "Sonoro",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. El apoyo mutuo en las vidas campesinas les permite tener una gran calidad de vida, especialmente en estos nuevos tiempos donde pasaron de depredadores a conservadores de la naturaleza con el turismo comunitario. El mensaje es para invertir y abrir las v\u00edas para un desarrollo sostenible en la regi\u00f3n.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Apoyo mutuo y solidaridad",
        "Calidad de vida campesina",
        "Conservaci\u00f3n de la naturaleza",
        "Turismo comunitario",
        "Transici\u00f3n de depredadores a conservadores",
        "Desarrollo sostenible",
        "Econom\u00eda local",
        "Protecci\u00f3n del territorio",
        "Saberes ancestrales",
        "Cultura y tradici\u00f3n rural",
        "Identidad comunitaria",
        "Patrimonio natural y cultural"
      ],
      "link": "https://open.spotify.com/episode/2F7UA21wfO8uNl3IMPhbmM?si=556846a2938948d8",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Mensaje sonoro Vivimos paz y tranquilidad Sonoro Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. El apoyo mutuo en las vidas campesinas les permite tener una gran calidad de vida, especialmente en estos nuevos tiempos donde pasaron de depredadores a conservadores de la naturaleza con el turismo comunitario. El mensaje es para invertir y abrir las v\u00edas para un desarrollo sostenible en la regi\u00f3n. Proyecto Vidas campesinas Apoyo mutuo y solidaridad Calidad de vida campesina Conservaci\u00f3n de la naturaleza Turismo comunitario Transici\u00f3n de depredadores a conservadores Desarrollo sostenible Econom\u00eda local Protecci\u00f3n del territorio Saberes ancestrales Cultura y tradici\u00f3n rural Identidad comunitaria Patrimonio natural y cultural https://open.spotify.com/episode/2F7UA21wfO8uNl3IMPhbmM?si=556846a2938948d8"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-127",
      "row": 127,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Mensaje sonoro Espantos de otras \u00e9pocas",
      "type": "Sonoro",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. El Raudal del Guayabero fue en \u00e9pocas de la bonanza cocalera un centro de acopio y distribuci\u00f3n, con una vida comercial muy activa, que luego la violencia paramilitar arrasar\u00eda. A\u00fan se escucha en la esquina donde quedaba el billar y all\u00e1 donde quedaba el centro de salud, sonidos que recuerdan espantos de otros tiempos.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Raudal del Guayabero",
        "Bonanza cocalera",
        "Centro de acopio y distribuci\u00f3n",
        "Vida comercial activa",
        "Violencia paramilitar",
        "Memoria hist\u00f3rica",
        "Sonidos del pasado",
        "Espantos y recuerdos",
        "Transformaciones del territorio",
        "Cultura y vida campesina",
        "Identidad comunitaria",
        "Patrimonio intangible"
      ],
      "link": "https://open.spotify.com/episode/4YJZ9b4p7DOHMi1JHFMSJh?si=d5fc03e7ecca42c4",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Mensaje sonoro Espantos de otras \u00e9pocas Sonoro Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. El Raudal del Guayabero fue en \u00e9pocas de la bonanza cocalera un centro de acopio y distribuci\u00f3n, con una vida comercial muy activa, que luego la violencia paramilitar arrasar\u00eda. A\u00fan se escucha en la esquina donde quedaba el billar y all\u00e1 donde quedaba el centro de salud, sonidos que recuerdan espantos de otros tiempos. Proyecto Vidas campesinas Raudal del Guayabero Bonanza cocalera Centro de acopio y distribuci\u00f3n Vida comercial activa Violencia paramilitar Memoria hist\u00f3rica Sonidos del pasado Espantos y recuerdos Transformaciones del territorio Cultura y vida campesina Identidad comunitaria Patrimonio intangible https://open.spotify.com/episode/4YJZ9b4p7DOHMi1JHFMSJh?si=d5fc03e7ecca42c4"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-128",
      "row": 128,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Programa de radio Un raudal de historias",
      "type": "Sonoro",
      "description": "Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Las vidas campesinas de las bocas del Raudal han sobrevivido a trav\u00e9s de las bonanzas hist\u00f3ricas: tigrilladas, marimba, pesca, coca y madera han depredado la naturaleza. Ahora viven un cambio radical en el que buscan conservar el patrimonio natural y cultural, en su nueva apuesta por el turismo comunitario.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Vidas campesinas, bocas del Raudal",
        "Bonanzas hist\u00f3ricas: tigrilladas, marimba, pesca, coca, madera",
        "Depredaci\u00f3n de la naturaleza",
        "Conservaci\u00f3n del patrimonio natural y cultural",
        "Turismo comunitario",
        "Cambio y transici\u00f3n sostenible",
        "Econom\u00eda local",
        "Cultura y tradici\u00f3n campesina",
        "Identidad territorial",
        "Saberes ancestrales",
        "Resiliencia comunitaria",
        "Patrimonio intangible"
      ],
      "link": "https://open.spotify.com/episode/4zMnMsLhTlvVq94pmudiIv?si=34d2128af15b4d64",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Programa de radio Un raudal de historias Sonoro Una producci\u00f3n realizada en el marco del proyecto de investigaci\u00f3n y creaci\u00f3n multimedia Vidas campesinas. Las vidas campesinas de las bocas del Raudal han sobrevivido a trav\u00e9s de las bonanzas hist\u00f3ricas: tigrilladas, marimba, pesca, coca y madera han depredado la naturaleza. Ahora viven un cambio radical en el que buscan conservar el patrimonio natural y cultural, en su nueva apuesta por el turismo comunitario. Proyecto Vidas campesinas Vidas campesinas, bocas del Raudal Bonanzas hist\u00f3ricas: tigrilladas, marimba, pesca, coca, madera Depredaci\u00f3n de la naturaleza Conservaci\u00f3n del patrimonio natural y cultural Turismo comunitario Cambio y transici\u00f3n sostenible Econom\u00eda local Cultura y tradici\u00f3n campesina Identidad territorial Saberes ancestrales Resiliencia comunitaria Patrimonio intangible https://open.spotify.com/episode/4zMnMsLhTlvVq94pmudiIv?si=34d2128af15b4d64"
    },
    {
      "id": "somos-territorios-bioculturales-y-economias-populares-129",
      "row": 129,
      "theme": "Somos territorios bioculturales y econom\u00edas populares",
      "theme_slug": "somos-territorios-bioculturales-y-economias-populares",
      "responsable": "ICANH",
      "title": "Programa de radio El cuidado de la Guardia es la vida",
      "type": "Sonoro",
      "description": "Producci\u00f3n del proyecto Vidas campesinas que, desde el Consejo Comunitario Las Brisas en Su\u00e1rez, Cauca, re\u00fane a Guardias Cimarronas, Campesinas e Ind\u00edgenas. Entre un zancocho con pipilongo y saberes compartidos, se dialoga sobre su labor en el cuidado del territorio, resaltando la uni\u00f3n, la tradici\u00f3n y la defensa colectiva de la vida.",
      "keywords": [
        "Proyecto Vidas campesinas",
        "Consejo Comunitario Las Brisas, Su\u00e1rez, Cauca",
        "Guardias Cimarronas, Campesinas e Ind\u00edgenas",
        "Zancocho con pipilongo",
        "Saberes compartidos",
        "Cuidado del territorio",
        "Uni\u00f3n y tradici\u00f3n",
        "Defensa colectiva de la vida",
        "Cultura y memoria comunitaria",
        "Identidad territorial",
        "Resiliencia y cooperaci\u00f3n",
        "Patrimonio intangible",
        "Econom\u00eda y vida campesina"
      ],
      "link": "https://open.spotify.com/episode/4j2CKdH3UTr05dPEbYR9Pb?si=257e89a52d8f49d2",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales y econom\u00edas populares ICANH Programa de radio El cuidado de la Guardia es la vida Sonoro Producci\u00f3n del proyecto Vidas campesinas que, desde el Consejo Comunitario Las Brisas en Su\u00e1rez, Cauca, re\u00fane a Guardias Cimarronas, Campesinas e Ind\u00edgenas. Entre un zancocho con pipilongo y saberes compartidos, se dialoga sobre su labor en el cuidado del territorio, resaltando la uni\u00f3n, la tradici\u00f3n y la defensa colectiva de la vida. Proyecto Vidas campesinas Consejo Comunitario Las Brisas, Su\u00e1rez, Cauca Guardias Cimarronas, Campesinas e Ind\u00edgenas Zancocho con pipilongo Saberes compartidos Cuidado del territorio Uni\u00f3n y tradici\u00f3n Defensa colectiva de la vida Cultura y memoria comunitaria Identidad territorial Resiliencia y cooperaci\u00f3n Patrimonio intangible Econom\u00eda y vida campesina https://open.spotify.com/episode/4j2CKdH3UTr05dPEbYR9Pb?si=257e89a52d8f49d2"
    },
    {
      "id": "somos-cultura-de-paz-130",
      "row": 130,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios",
      "title": "Animaci\u00f3n Viaje a la resistencia comunitaria",
      "type": "Animaci\u00f3n",
      "description": "Relato del recorrido de ni\u00f1os y ni\u00f1as campesinos hacia la parcela comunitaria Puerto Luna (Bol\u00edvar), un espacio de resistencia agrosostenible. En el camino atraviesan monocultivos con escasa biodiversidad, contrastando con la riqueza natural que encuentran al llegar: animales, aire puro y \u00e1rboles nativos. All\u00ed, un campesino sabedor les comparte c\u00f3mo han resistido mediante la siembra de alimentos propios, defendiendo el territorio y sus pr\u00e1cticas tradicionales.",
      "keywords": [
        "Ni\u00f1os y ni\u00f1as campesinos",
        "Parcela comunitaria Puerto Luna, Bol\u00edvar",
        "Resistencia agrosostenible",
        "Monocultivos vs biodiversidad",
        "Animales, aire puro, \u00e1rboles nativos",
        "Sabedor campesino",
        "Defensa del territorio",
        "Pr\u00e1cticas agr\u00edcolas tradicionales",
        "Siembra de alimentos propios",
        "Cultura y saberes campesinos",
        "Identidad territorial",
        "Patrimonio natural y cultural",
        "Educaci\u00f3n ambiental y comunitaria"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/s/DACMI/IQCi2cVGQbuIRZfwMpHB1Y0_ARdu2oIGwvgCcZ_txIRT35w?e=a3MyMx",
      "asset_link": "",
      "force_message": "Desde el coraz\u00f3n de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios Animaci\u00f3n Viaje a la resistencia comunitaria Animaci\u00f3n Relato del recorrido de ni\u00f1os y ni\u00f1as campesinos hacia la parcela comunitaria Puerto Luna (Bol\u00edvar), un espacio de resistencia agrosostenible. En el camino atraviesan monocultivos con escasa biodiversidad, contrastando con la riqueza natural que encuentran al llegar: animales, aire puro y \u00e1rboles nativos. All\u00ed, un campesino sabedor les comparte c\u00f3mo han resistido mediante la siembra de alimentos propios, defendiendo el territorio y sus pr\u00e1cticas tradicionales. Desde el coraz\u00f3n de sus territorios bioculturales, campesinas y campesinos reafirman su compromiso con el cuidado y la defensa de la tierra, del agua y del alimento. Ni\u00f1os y ni\u00f1as campesinos Parcela comunitaria Puerto Luna, Bol\u00edvar Resistencia agrosostenible Monocultivos vs biodiversidad Animales, aire puro, \u00e1rboles nativos Sabedor campesino Defensa del territorio Pr\u00e1cticas agr\u00edcolas tradicionales Siembra de alimentos propios Cultura y saberes campesinos Identidad territorial Patrimonio natural y cultural Educaci\u00f3n ambiental y comunitaria https://mcultura.sharepoint.com/:v:/s/DACMI/IQCi2cVGQbuIRZfwMpHB1Y0_ARdu2oIGwvgCcZ_txIRT35w?e=a3MyMx"
    },
    {
      "id": "somos-cultura-de-paz-131",
      "row": 131,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios",
      "title": "Audiovisual Poema Ser campesino",
      "type": "Audiovisual",
      "description": "Este contenido narra el trabajo del hombre campesino de la Zona de Reserva Campesina del Pato Balsillas (Caquet\u00e1) ha sido fundamental para la sostenibilidad, el crecimiento econ\u00f3mico y la organizaci\u00f3n social del territorio, en este poema audiovisual se exalta el trabajo, la lucha y la resistencia campesina.",
      "keywords": [
        "Hombre campesino",
        "Zona de Reserva Campesina del Pato Balsillas, Caquet\u00e1",
        "Sostenibilidad y econom\u00eda local",
        "Organizaci\u00f3n social del territorio",
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
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios Audiovisual Poema Ser campesino Audiovisual Este contenido narra el trabajo del hombre campesino de la Zona de Reserva Campesina del Pato Balsillas (Caquet\u00e1) ha sido fundamental para la sostenibilidad, el crecimiento econ\u00f3mico y la organizaci\u00f3n social del territorio, en este poema audiovisual se exalta el trabajo, la lucha y la resistencia campesina. Hombre campesino Zona de Reserva Campesina del Pato Balsillas, Caquet\u00e1 Sostenibilidad y econom\u00eda local Organizaci\u00f3n social del territorio Poema audiovisual Trabajo y esfuerzo cotidiano Lucha y resistencia campesina Cultura y saberes rurales Identidad territorial Patrimonio intangible Comunidad y solidaridad Vida campesina https://mcultura.sharepoint.com/:v:/s/DACMI/IQDroyp-U31YTbdbCyESSnl2AfPHQ2kD-dGnBsZTMZemWzs?e=2MM0gU"
    },
    {
      "id": "somos-cultura-de-paz-132",
      "row": 132,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios",
      "title": "Audiovisual El R\u00edo",
      "type": "Audiovisual",
      "description": "El r\u00edo Balsillas ubicado en el departamento del Caquet\u00e1 ha sido contaminado por las manos de hombres y mujeres que han habitado el Valle de Balsillas desde los a\u00f1os 40. En este audiovisual el r\u00edo hace un llamado a su cuidado, protecci\u00f3n y abre la reflexi\u00f3n sobre qu\u00e9 pasar\u00eda si un d\u00eda la comunidad despierta y el r\u00edo ya no est\u00e1.",
      "keywords": [
        "R\u00edo Balsillas, Caquet\u00e1",
        "Contaminaci\u00f3n hist\u00f3rica",
        "Comunidad del valle de Balsillas",
        "Llamado a cuidado y protecci\u00f3n",
        "Reflexi\u00f3n sobre p\u00e9rdida ambiental",
        "Conciencia ambiental",
        "Patrimonio natural",
        "Sustentabilidad y conservaci\u00f3n",
        "Educaci\u00f3n ecol\u00f3gica",
        "Impacto humano en el territorio",
        "Cultura y relaci\u00f3n con el r\u00edo",
        "Audiovisual de sensibilizaci\u00f3n"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/s/DACMI/IQDYKWHlRlbcQYysuyxYKKIkAfR0uAoYtqQSfg0Gz46YVAM?e=00zIqP",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios Audiovisual El R\u00edo Audiovisual El r\u00edo Balsillas ubicado en el departamento del Caquet\u00e1 ha sido contaminado por las manos de hombres y mujeres que han habitado el Valle de Balsillas desde los a\u00f1os 40. En este audiovisual el r\u00edo hace un llamado a su cuidado, protecci\u00f3n y abre la reflexi\u00f3n sobre qu\u00e9 pasar\u00eda si un d\u00eda la comunidad despierta y el r\u00edo ya no est\u00e1. R\u00edo Balsillas, Caquet\u00e1 Contaminaci\u00f3n hist\u00f3rica Comunidad del valle de Balsillas Llamado a cuidado y protecci\u00f3n Reflexi\u00f3n sobre p\u00e9rdida ambiental Conciencia ambiental Patrimonio natural Sustentabilidad y conservaci\u00f3n Educaci\u00f3n ecol\u00f3gica Impacto humano en el territorio Cultura y relaci\u00f3n con el r\u00edo Audiovisual de sensibilizaci\u00f3n https://mcultura.sharepoint.com/:v:/s/DACMI/IQDYKWHlRlbcQYysuyxYKKIkAfR0uAoYtqQSfg0Gz46YVAM?e=00zIqP"
    },
    {
      "id": "somos-cultura-de-paz-133",
      "row": 133,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Serie fotogr\u00e1fica Esterillas: Tejido para el andar campesino",
      "type": "Serie fotogr\u00e1fica",
      "description": "Serie fotogr\u00e1fica que retrata la elaboraci\u00f3n de esteras en Bol\u00edvar, usadas como sillones sobre burros para el transporte campesino: ir a la parcela, buscar agua o ir a la escuela. Muestra cada etapa del proceso, desde el corte del junco hasta el tejido final, destacando su car\u00e1cter 100% natural y sostenible. Tambi\u00e9n resalta c\u00f3mo esta pr\u00e1ctica es fuente de ingreso en comunidades como La Suprema, al combinar saber ancestral y sustento econ\u00f3mico.",
      "keywords": [
        "Serie fotogr\u00e1fica",
        "Elaboraci\u00f3n de esteras, Bol\u00edvar",
        "Transporte campesino: burros, parcelas, agua, escuela",
        "Proceso artesanal: corte del junco, tejido final",
        "Materiales 100% naturales y sostenibles",
        "Saberes ancestrales",
        "Fuente de ingreso econ\u00f3mico",
        "Comunidad La Suprema",
        "Cultura y tradici\u00f3n rural",
        "Econom\u00eda campesina",
        "Identidad territorial",
        "Patrimonio material e intangible"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Serie fotogr\u00e1fica Esterillas: Tejido para el andar campesino Serie fotogr\u00e1fica Serie fotogr\u00e1fica que retrata la elaboraci\u00f3n de esteras en Bol\u00edvar, usadas como sillones sobre burros para el transporte campesino: ir a la parcela, buscar agua o ir a la escuela. Muestra cada etapa del proceso, desde el corte del junco hasta el tejido final, destacando su car\u00e1cter 100% natural y sostenible. Tambi\u00e9n resalta c\u00f3mo esta pr\u00e1ctica es fuente de ingreso en comunidades como La Suprema, al combinar saber ancestral y sustento econ\u00f3mico. Serie fotogr\u00e1fica Elaboraci\u00f3n de esteras, Bol\u00edvar Transporte campesino: burros, parcelas, agua, escuela Proceso artesanal: corte del junco, tejido final Materiales 100% naturales y sostenibles Saberes ancestrales Fuente de ingreso econ\u00f3mico Comunidad La Suprema Cultura y tradici\u00f3n rural Econom\u00eda campesina Identidad territorial Patrimonio material e intangible PENDIENTE"
    },
    {
      "id": "somos-territorios-bioculturales-134",
      "row": 134,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Pescar la vida",
      "type": "Documental",
      "description": "Producci\u00f3n de la serie Econom\u00edas populares que sigue a Orlando Nobles, quien viaja a diario entre Sempegua y El Banco llevando encargos. En esta comunidad de pescadores, el trueque sostiene la vida: bocachico por yuca o pl\u00e1tano. Un retrato del rebusque diario y la cultura local en la ci\u00e9naga de Zapatosa, al ritmo del vallenato.",
      "keywords": [
        "Serie Econom\u00edas populares",
        "Orlando Nobles",
        "Sempegua y El Banco",
        "Comunidad de pescadores",
        "Trueque: bocachico por yuca o pl\u00e1tano",
        "Rebusque diario",
        "Cultura local",
        "Ci\u00e9naga de Zapatosa",
        "Vallenato como identidad cultural",
        "Econom\u00eda popular",
        "Tradiciones y saberes comunitarios",
        "Vida cotidiana campesina",
        "Patrimonio intangible"
      ],
      "link": "https://www.youtube.com/watch?v=TvEfWT1VsIE",
      "asset_link": "",
      "force_message": "Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Pescar la vida Documental Producci\u00f3n de la serie Econom\u00edas populares que sigue a Orlando Nobles, quien viaja a diario entre Sempegua y El Banco llevando encargos. En esta comunidad de pescadores, el trueque sostiene la vida: bocachico por yuca o pl\u00e1tano. Un retrato del rebusque diario y la cultura local en la ci\u00e9naga de Zapatosa, al ritmo del vallenato. Los territorios bioculturales existen en Colombia gracias al intercambio de experiencias, alimentos y saberes que permiten vivir mejor. Serie Econom\u00edas populares Orlando Nobles Sempegua y El Banco Comunidad de pescadores Trueque: bocachico por yuca o pl\u00e1tano Rebusque diario Cultura local Ci\u00e9naga de Zapatosa Vallenato como identidad cultural Econom\u00eda popular Tradiciones y saberes comunitarios Vida cotidiana campesina Patrimonio intangible https://www.youtube.com/watch?v=TvEfWT1VsIE"
    },
    {
      "id": "somos-territorios-bioculturales-135",
      "row": 135,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Muchas aguas",
      "type": "Documental",
      "description": "Producci\u00f3n de la serie Econom\u00edas populares que retrata la vida en In\u00edrida, Guain\u00eda. Nicol\u00e1s impulsa el turismo ecol\u00f3gico hacia lugares como el Cerro de Mavecure, mientras comunidades curripaco y puinave viven de las artesan\u00edas. Entre mercados, r\u00edos y recorridos en mototaxi, se muestra c\u00f3mo la poblaci\u00f3n sostiene su econom\u00eda pese al aislamiento.",
      "keywords": [
        "Serie Econom\u00edas populares",
        "In\u00edrida, Guain\u00eda",
        "Nicol\u00e1s y turismo ecol\u00f3gico",
        "Cerro de Mavecure",
        "Comunidades curripaco y puinave",
        "Artesan\u00edas como sustento",
        "Mercados, r\u00edos, mototaxi",
        "Econom\u00eda local y resiliente",
        "Vida en territorios aislados",
        "Cultura y tradiciones ind\u00edgenas",
        "Rebusque y creatividad comunitaria",
        "Patrimonio intangible y material"
      ],
      "link": "https://www.youtuhttps//www.youtube.com/watch?v=PPLtglwQZmA",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Muchas aguas Documental Producci\u00f3n de la serie Econom\u00edas populares que retrata la vida en In\u00edrida, Guain\u00eda. Nicol\u00e1s impulsa el turismo ecol\u00f3gico hacia lugares como el Cerro de Mavecure, mientras comunidades curripaco y puinave viven de las artesan\u00edas. Entre mercados, r\u00edos y recorridos en mototaxi, se muestra c\u00f3mo la poblaci\u00f3n sostiene su econom\u00eda pese al aislamiento. Serie Econom\u00edas populares In\u00edrida, Guain\u00eda Nicol\u00e1s y turismo ecol\u00f3gico Cerro de Mavecure Comunidades curripaco y puinave Artesan\u00edas como sustento Mercados, r\u00edos, mototaxi Econom\u00eda local y resiliente Vida en territorios aislados Cultura y tradiciones ind\u00edgenas Rebusque y creatividad comunitaria Patrimonio intangible y material https://www.youtuhttps//www.youtube.com/watch?v=PPLtglwQZmA"
    },
    {
      "id": "somos-territorios-bioculturales-136",
      "row": 136,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video Celebrar la vida",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. M\u00fasica, comida, juegos, bailes y coplas campesinas en San Pedro de Iguaque para disfrutar y celebrar la vida en familia y en comunidad. La fiesta como parte de la circulaci\u00f3n de la econom\u00eda popular y campesina.",
      "keywords": [
        "Serie Econom\u00edas populares",
        "San Pedro de Iguaque",
        "M\u00fasica, bailes, juegos, coplas campesinas",
        "Comida tradicional",
        "Vida en familia y comunidad",
        "Celebraci\u00f3n de la vida",
        "Circulaci\u00f3n de la econom\u00eda popular",
        "Cultura y tradiciones campesinas",
        "Rebusque y econom\u00eda local",
        "Patrimonio intangible",
        "Festividades y memoria colectiva"
      ],
      "link": "https://www.youtube.com/watch?v=Wmqv2f0U5rY",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH C\u00e1psula de video Celebrar la vida Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. M\u00fasica, comida, juegos, bailes y coplas campesinas en San Pedro de Iguaque para disfrutar y celebrar la vida en familia y en comunidad. La fiesta como parte de la circulaci\u00f3n de la econom\u00eda popular y campesina. Serie Econom\u00edas populares San Pedro de Iguaque M\u00fasica, bailes, juegos, coplas campesinas Comida tradicional Vida en familia y comunidad Celebraci\u00f3n de la vida Circulaci\u00f3n de la econom\u00eda popular Cultura y tradiciones campesinas Rebusque y econom\u00eda local Patrimonio intangible Festividades y memoria colectiva https://www.youtube.com/watch?v=Wmqv2f0U5rY"
    },
    {
      "id": "somos-territorios-bioculturales-137",
      "row": 137,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video En tierra ajena",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Un grupo de campesinos del Consejo Comunitario de Sempegua en la Ci\u00e9naga de la Zapatosa, siembran yuca y ma\u00edz en tierra ajena, tierra f\u00e9rtil que tiene due\u00f1o pero no uso. Juan Jos\u00e9 vive de producir alimentos all\u00ed para comer, para vender y para transformarlos en la cocina con su esposa Isabel.",
      "keywords": [
        "Serie Econom\u00edas populares",
        "Consejo Comunitario de Sempegua, Ci\u00e9naga de la Zapatosa",
        "Campesinos y siembra de yuca y ma\u00edz",
        "Tierra f\u00e9rtil bajo uso compartido",
        "Producci\u00f3n de alimentos: consumo, venta y transformaci\u00f3n",
        "Juan Jos\u00e9 e Isabel",
        "Cocina y saberes culinarios campesinos",
        "Econom\u00eda local y sostenible",
        "Cultura y vida comunitaria",
        "Rebusque y trabajo diario",
        "Patrimonio intangible y tradiciones agr\u00edcolas"
      ],
      "link": "https://www.youtube.com/watch?v=JQy3FDhZy4o",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH C\u00e1psula de video En tierra ajena Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. Un grupo de campesinos del Consejo Comunitario de Sempegua en la Ci\u00e9naga de la Zapatosa, siembran yuca y ma\u00edz en tierra ajena, tierra f\u00e9rtil que tiene due\u00f1o pero no uso. Juan Jos\u00e9 vive de producir alimentos all\u00ed para comer, para vender y para transformarlos en la cocina con su esposa Isabel. Serie Econom\u00edas populares Consejo Comunitario de Sempegua, Ci\u00e9naga de la Zapatosa Campesinos y siembra de yuca y ma\u00edz Tierra f\u00e9rtil bajo uso compartido Producci\u00f3n de alimentos: consumo, venta y transformaci\u00f3n Juan Jos\u00e9 e Isabel Cocina y saberes culinarios campesinos Econom\u00eda local y sostenible Cultura y vida comunitaria Rebusque y trabajo diario Patrimonio intangible y tradiciones agr\u00edcolas https://www.youtube.com/watch?v=JQy3FDhZy4o"
    },
    {
      "id": "somos-territorios-bioculturales-138",
      "row": 138,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "C\u00e1psula de video De aqu\u00ed me alimento",
      "type": "Video",
      "description": "Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. En las plazas de mercado diariamente confluyen y circulan alimentos, billetes, monedas, productos, oficios y formas de rebusque.",
      "keywords": [
        "Serie Econom\u00edas populares",
        "Plazas de mercado",
        "Circulaci\u00f3n de alimentos y productos",
        "Intercambio de dinero: billetes y monedas",
        "Diversos oficios y trabajos cotidianos",
        "Rebusque y econom\u00eda informal",
        "Vida comunitaria y social",
        "Tradiciones y cultura local",
        "Econom\u00eda popular y campesina",
        "Patrimonio intangible y din\u00e1micas urbanas"
      ],
      "link": "https://www.youtube.com/watch?v=hibXo_6dMX8",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH C\u00e1psula de video De aqu\u00ed me alimento Video Producci\u00f3n de la serie audiovisual y sonora Econom\u00edas populares. En las plazas de mercado diariamente confluyen y circulan alimentos, billetes, monedas, productos, oficios y formas de rebusque. Serie Econom\u00edas populares Plazas de mercado Circulaci\u00f3n de alimentos y productos Intercambio de dinero: billetes y monedas Diversos oficios y trabajos cotidianos Rebusque y econom\u00eda informal Vida comunitaria y social Tradiciones y cultura local Econom\u00eda popular y campesina Patrimonio intangible y din\u00e1micas urbanas https://www.youtube.com/watch?v=hibXo_6dMX8"
    },
    {
      "id": "somos-territorios-bioculturales-139",
      "row": 139,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Serie documental Mundos concebidos: Una narrativa femenina",
      "type": "Video",
      "description": "Producci\u00f3n escogida en el Programa de Est\u00edmulos del ICANH. Serie documental de cuatro cap\u00edtulos que indaga en lo que significa concebirse y ser concebida como mujer Iku a trav\u00e9s del seguimiento documental a las pr\u00e1cticas cotidianas de cuidado, sostenimiento y continuidad de la vida que las mujeres despliegan en sus comunidades. Ser\u00e1 un acercamiento experimental a la investigaci\u00f3n-creaci\u00f3n de una narrativa intergeneracional y una experiencia sensorial en la vida de mujeres Iku.",
      "keywords": [
        "Programa de Est\u00edmulos ICANH",
        "Serie documental, 4 cap\u00edtulos",
        "Mujeres Iku",
        "Pr\u00e1cticas cotidianas de cuidado y sostenimiento de la vida",
        "Continuidad cultural y comunitaria",
        "Investigaci\u00f3n-creaci\u00f3n experimental",
        "Narrativa intergeneracional",
        "Experiencia sensorial",
        "Vida y rol de la mujer ind\u00edgena",
        "Patrimonio cultural intangible",
        "Comunidad y memoria colectiva",
        "Identidad y cosmovisi\u00f3n Iku"
      ],
      "link": "https://www.youtube.com/watch?v=iZH7AJhRYFY#:~:text=Mundos%20concebidos:%20una%20narrativa%20femenina%20para%20transmitir,ik%E1%B5%BE%20a%20trav%C3%A9s%20del%20seguimiento%20documental%20a",
      "asset_link": "",
      "force_message": "Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Serie documental Mundos concebidos: Una narrativa femenina Video Producci\u00f3n escogida en el Programa de Est\u00edmulos del ICANH. Serie documental de cuatro cap\u00edtulos que indaga en lo que significa concebirse y ser concebida como mujer Iku a trav\u00e9s del seguimiento documental a las pr\u00e1cticas cotidianas de cuidado, sostenimiento y continuidad de la vida que las mujeres despliegan en sus comunidades. Ser\u00e1 un acercamiento experimental a la investigaci\u00f3n-creaci\u00f3n de una narrativa intergeneracional y una experiencia sensorial en la vida de mujeres Iku. Todas las formas de vida permiten la subsitencia de los territorios bioculturales. Colombia necesita cuidar y entender sus recursos naturales, las relaciones que tejemos con ellos y con otras vidas. Programa de Est\u00edmulos ICANH Serie documental, 4 cap\u00edtulos Mujeres Iku Pr\u00e1cticas cotidianas de cuidado y sostenimiento de la vida Continuidad cultural y comunitaria Investigaci\u00f3n-creaci\u00f3n experimental Narrativa intergeneracional Experiencia sensorial Vida y rol de la mujer ind\u00edgena Patrimonio cultural intangible Comunidad y memoria colectiva Identidad y cosmovisi\u00f3n Iku https://www.youtube.com/watch?v=iZH7AJhRYFY#:~:text=Mundos%20concebidos:%20una%20narrativa%20femenina%20para%20transmitir,ik%E1%B5%BE%20a%20trav%C3%A9s%20del%20seguimiento%20documental%20a"
    },
    {
      "id": "somos-territorios-bioculturales-140",
      "row": 140,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Cortometraje Al r\u00edo lo hicieron cambiar",
      "type": "Cortometraje",
      "description": "Producci\u00f3n del ICANH que explora el impacto de la miner\u00eda de oro en el r\u00edo Caquet\u00e1. A trav\u00e9s de las voces de mujeres ind\u00edgenas Murui-muina, Andoke, Muinane y Nonuya, analiza los cambios en su vida, el territorio y el ambiente, resaltando sus formas de resistencia desde una mirada de g\u00e9nero.",
      "keywords": [
        "Producci\u00f3n ICANH",
        "Miner\u00eda de oro, r\u00edo Caquet\u00e1",
        "Mujeres ind\u00edgenas: Murui-muina, Andoke, Muinane, Nonuya",
        "Impacto ambiental y territorial",
        "Cambios en la vida comunitaria",
        "Resistencia y liderazgo femenino",
        "Perspectiva de g\u00e9nero",
        "Cultura y cosmovisi\u00f3n ind\u00edgena",
        "Defensa del territorio",
        "Patrimonio natural y social",
        "Saberes y pr\u00e1cticas ancestrales",
        "Econom\u00eda y sostenibilidad comunitaria"
      ],
      "link": "https://www.youtube.com/watch?v=4ITBOYtNB7A",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Cortometraje Al r\u00edo lo hicieron cambiar Cortometraje Producci\u00f3n del ICANH que explora el impacto de la miner\u00eda de oro en el r\u00edo Caquet\u00e1. A trav\u00e9s de las voces de mujeres ind\u00edgenas Murui-muina, Andoke, Muinane y Nonuya, analiza los cambios en su vida, el territorio y el ambiente, resaltando sus formas de resistencia desde una mirada de g\u00e9nero. Producci\u00f3n ICANH Miner\u00eda de oro, r\u00edo Caquet\u00e1 Mujeres ind\u00edgenas: Murui-muina, Andoke, Muinane, Nonuya Impacto ambiental y territorial Cambios en la vida comunitaria Resistencia y liderazgo femenino Perspectiva de g\u00e9nero Cultura y cosmovisi\u00f3n ind\u00edgena Defensa del territorio Patrimonio natural y social Saberes y pr\u00e1cticas ancestrales Econom\u00eda y sostenibilidad comunitaria https://www.youtube.com/watch?v=4ITBOYtNB7A"
    },
    {
      "id": "somos-territorios-bioculturales-141",
      "row": 141,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Podcast R\u00edos de Historias: Narrativas Sonoras Campesinas",
      "type": "Podcast",
      "description": "Producci\u00f3n del ICANH que recorre el Oriente antioque\u00f1o a trav\u00e9s de sus r\u00edos y paisajes. El podcast explora la relaci\u00f3n entre comunidades campesinas y el agua, abordando tensiones como el desarrollo hidroel\u00e9ctrico, el turismo y el desarraigo, mostrando los r\u00edos como eje de cultura, sustento y vida en el territorio.",
      "keywords": [
        "Producci\u00f3n ICANH",
        "Oriente antioque\u00f1o: r\u00edos y paisajes",
        "Podcast",
        "Comunidades campesinas y agua",
        "Tensiones: desarrollo hidroel\u00e9ctrico, turismo, desarraigo",
        "R\u00edos como eje cultural y econ\u00f3mico",
        "Sustento y vida en el territorio",
        "Cultura y patrimonio local",
        "Relaciones comunitarias y entorno natural",
        "Sostenibilidad y resistencia",
        "Identidad territorial",
        "Din\u00e1micas socioambientales"
      ],
      "link": "https://riosdehistorias.com/",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Podcast R\u00edos de Historias: Narrativas Sonoras Campesinas Podcast Producci\u00f3n del ICANH que recorre el Oriente antioque\u00f1o a trav\u00e9s de sus r\u00edos y paisajes. El podcast explora la relaci\u00f3n entre comunidades campesinas y el agua, abordando tensiones como el desarrollo hidroel\u00e9ctrico, el turismo y el desarraigo, mostrando los r\u00edos como eje de cultura, sustento y vida en el territorio. Producci\u00f3n ICANH Oriente antioque\u00f1o: r\u00edos y paisajes Podcast Comunidades campesinas y agua Tensiones: desarrollo hidroel\u00e9ctrico, turismo, desarraigo R\u00edos como eje cultural y econ\u00f3mico Sustento y vida en el territorio Cultura y patrimonio local Relaciones comunitarias y entorno natural Sostenibilidad y resistencia Identidad territorial Din\u00e1micas socioambientales https://riosdehistorias.com/"
    },
    {
      "id": "somos-territorios-bioculturales-142",
      "row": 142,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Podcast Vidas de animales ejemplares",
      "type": "Podcast",
      "description": "Producci\u00f3n escogida en el Programa de Est\u00edmulos del ICANH. Esta serie podcast de ocho cap\u00edtulos narra las vidas de un grupo de animales silvestres y dom\u00e9sticos que comparten la vida con campesinos del norte del Tolima. Presenta una exploraci\u00f3n \u201cdesde adentro\u201d, con observaci\u00f3n participante, de las vidas compartidas de los animales y los campesinos en la coproducci\u00f3n de paisajes sonoros.",
      "keywords": [
        "Programa de Est\u00edmulos ICANH",
        "Serie podcast, 8 cap\u00edtulos",
        "Animales silvestres y dom\u00e9sticos",
        "Campesinos del norte del Tolima",
        "Vidas compartidas y coproducci\u00f3n de paisajes sonoros",
        "Observaci\u00f3n participante",
        "Relaci\u00f3n humano-animal",
        "Ecolog\u00eda y cultura campesina",
        "Sostenibilidad y vida en el territorio",
        "Experiencia sensorial y sonora",
        "Cotidianidad y pr\u00e1cticas rurales",
        "Memoria y patrimonio intangible"
      ],
      "link": "https://open.spotify.com/show/5bqfcSiFOCukYGI7y0eXOW",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Podcast Vidas de animales ejemplares Podcast Producci\u00f3n escogida en el Programa de Est\u00edmulos del ICANH. Esta serie podcast de ocho cap\u00edtulos narra las vidas de un grupo de animales silvestres y dom\u00e9sticos que comparten la vida con campesinos del norte del Tolima. Presenta una exploraci\u00f3n \u201cdesde adentro\u201d, con observaci\u00f3n participante, de las vidas compartidas de los animales y los campesinos en la coproducci\u00f3n de paisajes sonoros. Programa de Est\u00edmulos ICANH Serie podcast, 8 cap\u00edtulos Animales silvestres y dom\u00e9sticos Campesinos del norte del Tolima Vidas compartidas y coproducci\u00f3n de paisajes sonoros Observaci\u00f3n participante Relaci\u00f3n humano-animal Ecolog\u00eda y cultura campesina Sostenibilidad y vida en el territorio Experiencia sensorial y sonora Cotidianidad y pr\u00e1cticas rurales Memoria y patrimonio intangible https://open.spotify.com/show/5bqfcSiFOCukYGI7y0eXOW"
    },
    {
      "id": "somos-territorios-bioculturales-143",
      "row": 143,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental La fuerza de pulowi",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora la cosmovisi\u00f3n Way\u00fau, donde Pulowi es la deidad que encarna el agua. A trav\u00e9s de la defensa del Arroyo Bruno frente a la miner\u00eda de carb\u00f3n, muestra la resistencia de esta comunidad por proteger su territorio, su cultura y sus formas de vida, resaltando la relaci\u00f3n espiritual y vital con el agua.",
      "keywords": [
        "Serie documental Diarios del agua ICANH",
        "Cosmovisi\u00f3n Way\u00fau",
        "Pulowi: deidad del agua",
        "Arroyo Bruno: defensa frente a miner\u00eda de carb\u00f3n",
        "Resistencia comunitaria",
        "Protecci\u00f3n del territorio y cultura",
        "Formas de vida tradicionales",
        "Relaci\u00f3n espiritual con el agua",
        "Sostenibilidad y medio ambiente",
        "Patrimonio natural y cultural",
        "Identidad y memoria colectiva",
        "Conflictos socioambientales"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del pa\u00eds. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una naci\u00f3n en paz.",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental La fuerza de pulowi Documental Documental de la serie Diarios del agua del ICANH que explora la cosmovisi\u00f3n Way\u00fau, donde Pulowi es la deidad que encarna el agua. A trav\u00e9s de la defensa del Arroyo Bruno frente a la miner\u00eda de carb\u00f3n, muestra la resistencia de esta comunidad por proteger su territorio, su cultura y sus formas de vida, resaltando la relaci\u00f3n espiritual y vital con el agua. Nuestra historia fluye con el agua, su gente y las complejidades de habitar diferentes territorios del pa\u00eds. Cuidar nuestros recursos naturales y las diferentes formas de vida, nos permite seguir construyendo una naci\u00f3n en paz. Serie documental Diarios del agua ICANH Cosmovisi\u00f3n Way\u00fau Pulowi: deidad del agua Arroyo Bruno: defensa frente a miner\u00eda de carb\u00f3n Resistencia comunitaria Protecci\u00f3n del territorio y cultura Formas de vida tradicionales Relaci\u00f3n espiritual con el agua Sostenibilidad y medio ambiente Patrimonio natural y cultural Identidad y memoria colectiva Conflictos socioambientales https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-144",
      "row": 144,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Un manantial que resiste",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que cuestiona la idea de una Guajira des\u00e9rtica, destacando su riqueza h\u00eddrica. En esta regi\u00f3n, comunidades afrodescendientes han creado sistemas de gobernanza del agua, hoy amenazados por la miner\u00eda de carb\u00f3n. Estas comunidades luchan por proteger su territorio y evitar nuevos desastres ambientales.",
      "keywords": [
        "Serie documental Diarios del agua ICANH",
        "Guajira: riqueza h\u00eddrica",
        "Comunidades afrodescendientes",
        "Gobernanza comunitaria del agua",
        "Miner\u00eda de carb\u00f3n: amenaza ambiental",
        "Protecci\u00f3n del territorio",
        "Prevenci\u00f3n de desastres ambientales",
        "Resistencia y sostenibilidad",
        "Patrimonio natural y cultural",
        "Conflictos socioambientales",
        "Identidad y memoria colectiva",
        "Gesti\u00f3n del recurso h\u00eddrico"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Un manantial que resiste Documental Documental de la serie Diarios del agua del ICANH que cuestiona la idea de una Guajira des\u00e9rtica, destacando su riqueza h\u00eddrica. En esta regi\u00f3n, comunidades afrodescendientes han creado sistemas de gobernanza del agua, hoy amenazados por la miner\u00eda de carb\u00f3n. Estas comunidades luchan por proteger su territorio y evitar nuevos desastres ambientales. Serie documental Diarios del agua ICANH Guajira: riqueza h\u00eddrica Comunidades afrodescendientes Gobernanza comunitaria del agua Miner\u00eda de carb\u00f3n: amenaza ambiental Protecci\u00f3n del territorio Prevenci\u00f3n de desastres ambientales Resistencia y sostenibilidad Patrimonio natural y cultural Conflictos socioambientales Identidad y memoria colectiva Gesti\u00f3n del recurso h\u00eddrico https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-145",
      "row": 145,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental La canci\u00f3n del agua",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora La Mojana, una llanura clave para regular inundaciones. A trav\u00e9s de su historia, muestra c\u00f3mo antiguos pueblos crearon un sistema de canales y camellones para habitar el territorio, evidenciando una relaci\u00f3n ancestral con el agua que a\u00fan define su vida y desaf\u00edos actuales.",
      "keywords": [
        "Serie documental Diarios del agua ICANH",
        "La Mojana: llanura reguladora de inundaciones",
        "Historia y memoria ancestral",
        "Pueblos originarios",
        "Sistemas de canales y camellones",
        "Habitar y gestionar el territorio",
        "Relaci\u00f3n ancestral con el agua",
        "Sostenibilidad h\u00eddrica",
        "Desaf\u00edos contempor\u00e1neos",
        "Patrimonio cultural y ambiental",
        "Resiliencia comunitaria",
        "Identidad y tradici\u00f3n"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental La canci\u00f3n del agua Documental Documental de la serie Diarios del agua del ICANH que explora La Mojana, una llanura clave para regular inundaciones. A trav\u00e9s de su historia, muestra c\u00f3mo antiguos pueblos crearon un sistema de canales y camellones para habitar el territorio, evidenciando una relaci\u00f3n ancestral con el agua que a\u00fan define su vida y desaf\u00edos actuales. Serie documental Diarios del agua ICANH La Mojana: llanura reguladora de inundaciones Historia y memoria ancestral Pueblos originarios Sistemas de canales y camellones Habitar y gestionar el territorio Relaci\u00f3n ancestral con el agua Sostenibilidad h\u00eddrica Desaf\u00edos contempor\u00e1neos Patrimonio cultural y ambiental Resiliencia comunitaria Identidad y tradici\u00f3n https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-146",
      "row": 146,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Los laberintos del agua",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que revisa el impacto hist\u00f3rico del Canal del Dique en el sur del Atl\u00e1ntico. Muestra c\u00f3mo el control del agua, visto antes como progreso, gener\u00f3 riesgos sociales y ecol\u00f3gicos, y plantea la posibilidad de replantear estas intervenciones para transformar el territorio.",
      "keywords": [
        "Documental",
        "Diarios del agua",
        "ICANH",
        "Canal del Dique",
        "Sur del Atl\u00e1ntico",
        "Impacto hist\u00f3rico",
        "Control del agua",
        "Progreso",
        "Riesgos sociales",
        "Riesgos ecol\u00f3gicos",
        "Intervenciones humanas",
        "Transformaci\u00f3n del territorio",
        "Gesti\u00f3n del agua",
        "Historia ambiental",
        "Territorio",
        "Sostenibilidad"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Los laberintos del agua Documental Documental de la serie Diarios del agua del ICANH que revisa el impacto hist\u00f3rico del Canal del Dique en el sur del Atl\u00e1ntico. Muestra c\u00f3mo el control del agua, visto antes como progreso, gener\u00f3 riesgos sociales y ecol\u00f3gicos, y plantea la posibilidad de replantear estas intervenciones para transformar el territorio. Documental Diarios del agua ICANH Canal del Dique Sur del Atl\u00e1ntico Impacto hist\u00f3rico Control del agua Progreso Riesgos sociales Riesgos ecol\u00f3gicos Intervenciones humanas Transformaci\u00f3n del territorio Gesti\u00f3n del agua Historia ambiental Territorio Sostenibilidad https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-147",
      "row": 147,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Las conquistas del agua",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora Santa Mar\u00eda de la Antigua del Dari\u00e9n, primera fundaci\u00f3n continental americana. A partir de hallazgos arqueol\u00f3gicos, aborda los retos hist\u00f3ricos e interculturales de la regi\u00f3n y resalta la importancia de incluir a comunidades locales as\u00ed como proteger este territorio atravesado por el r\u00edo Atrato.",
      "keywords": [
        "Documental",
        "Diarios del agua",
        "ICANH",
        "Santa Mar\u00eda de la Antigua del Dari\u00e9n",
        "Primera fundaci\u00f3n continental americana",
        "Hallazgos arqueol\u00f3gicos",
        "Arqueolog\u00eda",
        "Retos hist\u00f3ricos",
        "Interculturalidad",
        "Comunidades locales",
        "Territorio",
        "R\u00edo Atrato",
        "Patrimonio hist\u00f3rico",
        "Protecci\u00f3n del territorio",
        "Historia colonial",
        "Regi\u00f3n del Dari\u00e9n"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Las conquistas del agua Documental Documental de la serie Diarios del agua del ICANH que explora Santa Mar\u00eda de la Antigua del Dari\u00e9n, primera fundaci\u00f3n continental americana. A partir de hallazgos arqueol\u00f3gicos, aborda los retos hist\u00f3ricos e interculturales de la regi\u00f3n y resalta la importancia de incluir a comunidades locales as\u00ed como proteger este territorio atravesado por el r\u00edo Atrato. Documental Diarios del agua ICANH Santa Mar\u00eda de la Antigua del Dari\u00e9n Primera fundaci\u00f3n continental americana Hallazgos arqueol\u00f3gicos Arqueolog\u00eda Retos hist\u00f3ricos Interculturalidad Comunidades locales Territorio R\u00edo Atrato Patrimonio hist\u00f3rico Protecci\u00f3n del territorio Historia colonial Regi\u00f3n del Dari\u00e9n https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-148",
      "row": 148,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Un sitio de libres entre el mar y el r\u00edo",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que recorre la historia de Barranquilla como ciudad portuaria ligada al r\u00edo Magdalena. Explora su desarrollo desde el comercio fluvial, la transformaci\u00f3n urbana y la p\u00e9rdida de su memoria h\u00eddrica, as\u00ed como los retos sociales que enfrentan las comunidades ribere\u00f1as ante los proyectos de modernizaci\u00f3n.",
      "keywords": [
        "Documental",
        "Diarios del agua",
        "ICANH",
        "Barranquilla",
        "Ciudad portuaria",
        "R\u00edo Magdalena",
        "Historia urbana",
        "Comercio fluvial",
        "Desarrollo econ\u00f3mico",
        "Transformaci\u00f3n urbana",
        "Memoria h\u00eddrica",
        "Comunidades ribere\u00f1as",
        "Retos sociales",
        "Modernizaci\u00f3n",
        "Infraestructura",
        "Territorio",
        "Patrimonio cultural"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Un sitio de libres entre el mar y el r\u00edo Documental Documental de la serie Diarios del agua del ICANH que recorre la historia de Barranquilla como ciudad portuaria ligada al r\u00edo Magdalena. Explora su desarrollo desde el comercio fluvial, la transformaci\u00f3n urbana y la p\u00e9rdida de su memoria h\u00eddrica, as\u00ed como los retos sociales que enfrentan las comunidades ribere\u00f1as ante los proyectos de modernizaci\u00f3n. Documental Diarios del agua ICANH Barranquilla Ciudad portuaria R\u00edo Magdalena Historia urbana Comercio fluvial Desarrollo econ\u00f3mico Transformaci\u00f3n urbana Memoria h\u00eddrica Comunidades ribere\u00f1as Retos sociales Modernizaci\u00f3n Infraestructura Territorio Patrimonio cultural https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-149",
      "row": 149,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental El maritorio de la naci\u00f3n creole",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora el Archipi\u00e9lago de San Andr\u00e9s, Providencia y Santa Catalina. Aborda su historia, identidad raizal y tensiones con el centralismo, as\u00ed como el impacto del turismo masivo en la Reserva SeaFlower, resaltando la urgencia de proteger su cultura y ecosistemas.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Archipi\u00e9lago de San Andr\u00e9s, Providencia y Santa Catalina",
        "Historia",
        "Identidad raizal",
        "Centralismo",
        "Turismo masivo",
        "Reserva Seaflower",
        "Protecci\u00f3n cultural",
        "Protecci\u00f3n ecosistemas",
        "Agua",
        "Territorio",
        "Comunidad",
        "Biodiversidad",
        "Saberes tradicionales",
        "Gobernanza territorial"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental El maritorio de la naci\u00f3n creole Documental Documental de la serie Diarios del agua del ICANH que explora el Archipi\u00e9lago de San Andr\u00e9s, Providencia y Santa Catalina. Aborda su historia, identidad raizal y tensiones con el centralismo, as\u00ed como el impacto del turismo masivo en la Reserva SeaFlower, resaltando la urgencia de proteger su cultura y ecosistemas. Diarios del Agua ICANH Archipi\u00e9lago de San Andr\u00e9s, Providencia y Santa Catalina Historia Identidad raizal Centralismo Turismo masivo Reserva Seaflower Protecci\u00f3n cultural Protecci\u00f3n ecosistemas Agua Territorio Comunidad Biodiversidad Saberes tradicionales Gobernanza territorial https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-150",
      "row": 150,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Agua arriba; agua abajo",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que recorre el Pac\u00edfico sur en Tumaco y Barbacoas. Explora su historia y diversidad cultural, marcada por ciclos del agua entre mar y monta\u00f1a, y c\u00f3mo estos territorios han sido transformados por cambios ambientales y sociales que alteran su relaci\u00f3n con el entorno.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Pac\u00edfico Sur",
        "Tumaco",
        "Barbacoas",
        "Historia",
        "Diversidad cultural",
        "Ciclos del agua",
        "Mar y monta\u00f1a",
        "Transformaciones ambientales",
        "Transformaciones sociales",
        "Relaci\u00f3n con el entorno"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Agua arriba; agua abajo Documental Documental de la serie Diarios del agua del ICANH que recorre el Pac\u00edfico sur en Tumaco y Barbacoas. Explora su historia y diversidad cultural, marcada por ciclos del agua entre mar y monta\u00f1a, y c\u00f3mo estos territorios han sido transformados por cambios ambientales y sociales que alteran su relaci\u00f3n con el entorno. Diarios del Agua ICANH Pac\u00edfico Sur Tumaco Barbacoas Historia Diversidad cultural Ciclos del agua Mar y monta\u00f1a Transformaciones ambientales Transformaciones sociales Relaci\u00f3n con el entorno https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-151",
      "row": 151,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental El asesinato de un r\u00edo",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH que explora el r\u00edo Nech\u00ed y su historia ligada al oro. Desde la colonia hasta hoy, muestra c\u00f3mo la explotaci\u00f3n minera transform\u00f3 el r\u00edo y concentr\u00f3 su control, generando tensiones ambientales y sociales que cuestionan el costo de extraer riqueza del agua.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "R\u00edo Nech\u00ed",
        "Historia",
        "Oro",
        "Miner\u00eda",
        "Transformaci\u00f3n del r\u00edo",
        "Tensiones ambientales",
        "Tensiones sociales",
        "Explotaci\u00f3n de recursos",
        "Agua",
        "Conflicto socioambiental"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental El asesinato de un r\u00edo Documental Documental de la serie Diarios del agua del ICANH que explora el r\u00edo Nech\u00ed y su historia ligada al oro. Desde la colonia hasta hoy, muestra c\u00f3mo la explotaci\u00f3n minera transform\u00f3 el r\u00edo y concentr\u00f3 su control, generando tensiones ambientales y sociales que cuestionan el costo de extraer riqueza del agua. Diarios del Agua ICANH R\u00edo Nech\u00ed Historia Oro Miner\u00eda Transformaci\u00f3n del r\u00edo Tensiones ambientales Tensiones sociales Explotaci\u00f3n de recursos Agua Conflicto socioambiental https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-152",
      "row": 152,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Cauca: un r\u00edo con derechos",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH. Recorre municipios ribere\u00f1os del r\u00edo Cauca, explorando su riqueza ecol\u00f3gica y la red de afluentes que conforman su cuenca. Aborda los impactos de la miner\u00eda, las hidroel\u00e9ctricas y el monocultivo de ca\u00f1a. Ante esta crisis, la Corte Constitucional reconoci\u00f3 derechos al r\u00edo Cauca y su cuenca, abriendo un camino para su protecci\u00f3n y para las comunidades que lo habitan y defienden.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "R\u00edo Cauca",
        "Municipios ribere\u00f1os",
        "Riqueza ecol\u00f3gica",
        "Cuenca hidrogr\u00e1fica",
        "Miner\u00eda",
        "Hidroel\u00e9ctricas",
        "Monocultivo de ca\u00f1a",
        "Crisis ambiental",
        "Derechos del r\u00edo",
        "Protecci\u00f3n comunitaria"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Cauca: un r\u00edo con derechos Documental Documental de la serie Diarios del agua del ICANH. Recorre municipios ribere\u00f1os del r\u00edo Cauca, explorando su riqueza ecol\u00f3gica y la red de afluentes que conforman su cuenca. Aborda los impactos de la miner\u00eda, las hidroel\u00e9ctricas y el monocultivo de ca\u00f1a. Ante esta crisis, la Corte Constitucional reconoci\u00f3 derechos al r\u00edo Cauca y su cuenca, abriendo un camino para su protecci\u00f3n y para las comunidades que lo habitan y defienden. Diarios del Agua ICANH R\u00edo Cauca Municipios ribere\u00f1os Riqueza ecol\u00f3gica Cuenca hidrogr\u00e1fica Miner\u00eda Hidroel\u00e9ctricas Monocultivo de ca\u00f1a Crisis ambiental Derechos del r\u00edo Protecci\u00f3n comunitaria https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-territorios-bioculturales-153",
      "row": 153,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Entre muertos y tambores de sanaci\u00f3n",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH. En La Balsa, corregimiento de Buenos Aires (Cauca), comunidades afrodescendientes narran c\u00f3mo el r\u00edo Cauca fue escenario de la violencia del Bloque Calima en los a\u00f1os 2000, usado para ocultar cr\u00edmenes. La JEP estima miles de v\u00edctimas arrojadas al r\u00edo. En 2023 el r\u00edo Cauca fue declarado v\u00edctima, impulsando procesos de memoria y sanaci\u00f3n liderados por las comunidades ribere\u00f1as.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "La Balsa",
        "Buenos Aires, Cauca",
        "Comunidades afrodescendientes",
        "R\u00edo Cauca",
        "Bloque Calima",
        "Violencia",
        "V\u00edctimas",
        "JEP",
        "Memoria",
        "Sanaci\u00f3n",
        "Comunidades ribere\u00f1as"
      ],
      "link": "https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Documental Entre muertos y tambores de sanaci\u00f3n Documental Documental de la serie Diarios del agua del ICANH. En La Balsa, corregimiento de Buenos Aires (Cauca), comunidades afrodescendientes narran c\u00f3mo el r\u00edo Cauca fue escenario de la violencia del Bloque Calima en los a\u00f1os 2000, usado para ocultar cr\u00edmenes. La JEP estima miles de v\u00edctimas arrojadas al r\u00edo. En 2023 el r\u00edo Cauca fue declarado v\u00edctima, impulsando procesos de memoria y sanaci\u00f3n liderados por las comunidades ribere\u00f1as. Diarios del Agua ICANH La Balsa Buenos Aires, Cauca Comunidades afrodescendientes R\u00edo Cauca Bloque Calima Violencia V\u00edctimas JEP Memoria Sanaci\u00f3n Comunidades ribere\u00f1as https://open.spotify.com/episode/48i7M7sDsiI61QItzJzmj7?si=67482ae837de418c"
    },
    {
      "id": "somos-cultura-de-paz-154",
      "row": 154,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Documental Mallorqu\u00edn: la historia de un ecocidio",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH. La ci\u00e9naga de Mallorqu\u00edn, en Barranquilla, enfrenta graves riesgos por proyectos urban\u00edsticos que amenazan este ecosistema protegido, incluso como zona RAMSAR. La expansi\u00f3n y la falta de medidas adecuadas de mitigaci\u00f3n aumentan la contaminaci\u00f3n del agua, afectando la biodiversidad y a las comunidades que dependen de este entorno natural.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Ci\u00e9naga de Mallorqu\u00edn",
        "Barranquilla",
        "Ecosistema protegido",
        "Zona RAMSAR",
        "Proyectos urban\u00edsticos",
        "Contaminaci\u00f3n del agua",
        "Biodiversidad",
        "Comunidades locales"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Documental Mallorqu\u00edn: la historia de un ecocidio Documental Documental de la serie Diarios del agua del ICANH. La ci\u00e9naga de Mallorqu\u00edn, en Barranquilla, enfrenta graves riesgos por proyectos urban\u00edsticos que amenazan este ecosistema protegido, incluso como zona RAMSAR. La expansi\u00f3n y la falta de medidas adecuadas de mitigaci\u00f3n aumentan la contaminaci\u00f3n del agua, afectando la biodiversidad y a las comunidades que dependen de este entorno natural. Diarios del Agua ICANH Ci\u00e9naga de Mallorqu\u00edn Barranquilla Ecosistema protegido Zona RAMSAR Proyectos urban\u00edsticos Contaminaci\u00f3n del agua Biodiversidad Comunidades locales PENDIENTE"
    },
    {
      "id": "somos-territorios-bioculturales-155",
      "row": 155,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Documental Salmedina: memorias del agua",
      "type": "Documental",
      "description": "Documental de la serie Diarios del agua del ICANH. Este cap\u00edtulo explora el patrimonio sumergido en aguas poco profundas de Cartagena, destacando su valor estrat\u00e9gico en el siglo XVIII. Conecta los vestigios de los bajos de Salmedina con el Fuerte de San Fernando en Bocachica, y reflexiona sobre la relaci\u00f3n hist\u00f3rica de la ciudad con el mar. A trav\u00e9s de la arqueolog\u00eda subacu\u00e1tica, invita a redescubrir estas profundidades.",
      "keywords": [
        "Diarios del Agua",
        "ICANH",
        "Cartagena",
        "Patrimonio sumergido",
        "Siglo XVIII",
        "Bajos de Salmedina",
        "Fuerte de San Fernando",
        "Bocachica",
        "Arqueolog\u00eda subacu\u00e1tica",
        "Relaci\u00f3n hist\u00f3rica con el mar"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "PENDIENTE",
      "search_text": "Somos territorios bioculturales ICANH Documental Salmedina: memorias del agua Documental Documental de la serie Diarios del agua del ICANH. Este cap\u00edtulo explora el patrimonio sumergido en aguas poco profundas de Cartagena, destacando su valor estrat\u00e9gico en el siglo XVIII. Conecta los vestigios de los bajos de Salmedina con el Fuerte de San Fernando en Bocachica, y reflexiona sobre la relaci\u00f3n hist\u00f3rica de la ciudad con el mar. A trav\u00e9s de la arqueolog\u00eda subacu\u00e1tica, invita a redescubrir estas profundidades. Diarios del Agua ICANH Cartagena Patrimonio sumergido Siglo XVIII Bajos de Salmedina Fuerte de San Fernando Bocachica Arqueolog\u00eda subacu\u00e1tica Relaci\u00f3n hist\u00f3rica con el mar PENDIENTE"
    },
    {
      "id": "somos-territorios-bioculturales-156",
      "row": 156,
      "theme": "Somos territorios bioculturales",
      "theme_slug": "somos-territorios-bioculturales",
      "responsable": "ICANH",
      "title": "Podcast La Mojana: 2.000 a\u00f1os de vida anfibia",
      "type": "Podcast",
      "description": "Podcast Antropofon\u00edas del ICANH. En su primer cap\u00edtulo aborda La Mojana, regi\u00f3n del Caribe colombiano afectada por inundaciones recurrentes. Analiza este fen\u00f3meno y su relaci\u00f3n con las comunidades que habitan el territorio, con la participaci\u00f3n de la arque\u00f3loga Ana Mar\u00eda Falchetti y la antrop\u00f3loga Juana Camacho, quienes aportan miradas sobre historia, territorio y sistemas alimentarios.",
      "keywords": [
        "Antropofon\u00edas",
        "ICANH",
        "La Mojana",
        "Caribe colombiano",
        "Inundaciones",
        "Comunidades locales",
        "Historia",
        "Territorio",
        "Sistemas alimentarios",
        "Ana Mar\u00eda Falchetti",
        "Juana Camacho"
      ],
      "link": "https://open.spotify.com/episode/0TnAe1XSYmU2dZziVznyLq?si=585a5b39af9444ab",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos territorios bioculturales ICANH Podcast La Mojana: 2.000 a\u00f1os de vida anfibia Podcast Podcast Antropofon\u00edas del ICANH. En su primer cap\u00edtulo aborda La Mojana, regi\u00f3n del Caribe colombiano afectada por inundaciones recurrentes. Analiza este fen\u00f3meno y su relaci\u00f3n con las comunidades que habitan el territorio, con la participaci\u00f3n de la arque\u00f3loga Ana Mar\u00eda Falchetti y la antrop\u00f3loga Juana Camacho, quienes aportan miradas sobre historia, territorio y sistemas alimentarios. Antropofon\u00edas ICANH La Mojana Caribe colombiano Inundaciones Comunidades locales Historia Territorio Sistemas alimentarios Ana Mar\u00eda Falchetti Juana Camacho https://open.spotify.com/episode/0TnAe1XSYmU2dZziVznyLq?si=585a5b39af9444ab"
    },
    {
      "id": "somos-cultura-de-paz-157",
      "row": 157,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Soacha: un patrimonio en construcci\u00f3n",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofon\u00edas del ICANH. Aborda el patrimonio arqueol\u00f3gico de Soacha y su avance en planes de manejo, en medio de retos legales y sociales. A partir del ataque al s\u00edmbolo El Dios Var\u00f3n, ciudadanos y expertos reflexionan sobre los desaf\u00edos de proteger el patrimonio y aplicar estas pol\u00edticas en contextos complejos.",
      "keywords": [
        "Antropofon\u00edas",
        "ICANH",
        "Soacha",
        "Patrimonio arqueol\u00f3gico",
        "Planes de manejo",
        "Retos legales",
        "Retos sociales",
        "El Dios Var\u00f3n",
        "Protecci\u00f3n del patrimonio",
        "Pol\u00edticas culturales"
      ],
      "link": "https://open.spotify.com/episode/51EPlgXf2rcNCoW9i7Jola?si=48d7d713ac524884",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Soacha: un patrimonio en construcci\u00f3n Podcast Episodio del podcast Antropofon\u00edas del ICANH. Aborda el patrimonio arqueol\u00f3gico de Soacha y su avance en planes de manejo, en medio de retos legales y sociales. A partir del ataque al s\u00edmbolo El Dios Var\u00f3n, ciudadanos y expertos reflexionan sobre los desaf\u00edos de proteger el patrimonio y aplicar estas pol\u00edticas en contextos complejos. Antropofon\u00edas ICANH Soacha Patrimonio arqueol\u00f3gico Planes de manejo Retos legales Retos sociales El Dios Var\u00f3n Protecci\u00f3n del patrimonio Pol\u00edticas culturales https://open.spotify.com/episode/51EPlgXf2rcNCoW9i7Jola?si=48d7d713ac524884"
    },
    {
      "id": "somos-cultura-de-paz-158",
      "row": 158,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Chiribiquete: huellas del poblemiento de Am\u00e9rica",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofon\u00edas del ICANH. Explora Chiribiquete, territorio amaz\u00f3nico protegido por raudales y tepuyes, de dif\u00edcil acceso y gran valor cultural. A partir de sus vestigios humanos y pict\u00f3ricos milenarios, se reflexiona sobre el origen y las rutas de llegada de los primeros habitantes de Am\u00e9rica, destacando la importancia de su conservaci\u00f3n.",
      "keywords": [
        "Antropofon\u00edas",
        "ICANH",
        "Chiribiquete",
        "Amazon\u00eda",
        "Raudales",
        "Tepuyes",
        "Patrimonio cultural",
        "Vestigios humanos",
        "Pinturas rupestres",
        "Conservaci\u00f3n"
      ],
      "link": "https://open.spotify.com/episode/05W93VLE9qaAv850YSZzFr?si=fb8a1fc86b6249ca",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Chiribiquete: huellas del poblemiento de Am\u00e9rica Podcast Episodio del podcast Antropofon\u00edas del ICANH. Explora Chiribiquete, territorio amaz\u00f3nico protegido por raudales y tepuyes, de dif\u00edcil acceso y gran valor cultural. A partir de sus vestigios humanos y pict\u00f3ricos milenarios, se reflexiona sobre el origen y las rutas de llegada de los primeros habitantes de Am\u00e9rica, destacando la importancia de su conservaci\u00f3n. Antropofon\u00edas ICANH Chiribiquete Amazon\u00eda Raudales Tepuyes Patrimonio cultural Vestigios humanos Pinturas rupestres Conservaci\u00f3n https://open.spotify.com/episode/05W93VLE9qaAv850YSZzFr?si=fb8a1fc86b6249ca"
    },
    {
      "id": "somos-cultura-de-paz-159",
      "row": 159,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Gentrificaci\u00f3n de Getseman\u00ed: voces de la resistencia",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofon\u00edas del ICANH. En este episodio conversamos con l antrop\u00f3logo Patrick Morales y presentamos Gentrificaci\u00f3n de Getseman\u00ed: voces de resistencia, un laboratorio para entender todas estas din\u00e1micas asociadas a la expulsi\u00f3n de la poblaci\u00f3n local, la patrimonizaci\u00f3n y la resistencia de las comunidades a la turistificaci\u00f3n.",
      "keywords": [
        "Antropofon\u00edas",
        "ICANH",
        "Patrick Morales",
        "Getseman\u00ed",
        "Gentrificaci\u00f3n",
        "Voces de resistencia",
        "Patrimonizaci\u00f3n",
        "Turistificaci\u00f3n",
        "Comunidades locales",
        "Expulsi\u00f3n poblacional"
      ],
      "link": "https://open.spotify.com/episode/2haGzEoUw6dNgsZla9oDWq?si=b1b3817f2b4b44e1",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Gentrificaci\u00f3n de Getseman\u00ed: voces de la resistencia Podcast Episodio del podcast Antropofon\u00edas del ICANH. En este episodio conversamos con l antrop\u00f3logo Patrick Morales y presentamos Gentrificaci\u00f3n de Getseman\u00ed: voces de resistencia, un laboratorio para entender todas estas din\u00e1micas asociadas a la expulsi\u00f3n de la poblaci\u00f3n local, la patrimonizaci\u00f3n y la resistencia de las comunidades a la turistificaci\u00f3n. Antropofon\u00edas ICANH Patrick Morales Getseman\u00ed Gentrificaci\u00f3n Voces de resistencia Patrimonizaci\u00f3n Turistificaci\u00f3n Comunidades locales Expulsi\u00f3n poblacional https://open.spotify.com/episode/2haGzEoUw6dNgsZla9oDWq?si=b1b3817f2b4b44e1"
    },
    {
      "id": "somos-cultura-de-paz-160",
      "row": 160,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Las estatuas chamanes de San Agust\u00edn",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofon\u00edas del ICANH. Conversa con H\u00e9ctor Llanos, historiador y arque\u00f3logo de la Universidad Nacional, sobre la cultura agustiniana y su relaci\u00f3n con las sociedades ind\u00edgenas del Alto Magdalena. A partir de las estatuas cham\u00e1n de San Agust\u00edn, se exploran los sistemas de pensamiento detr\u00e1s de estos monumentos y su significado cultural.",
      "keywords": [
        "Antropofon\u00edas",
        "ICANH",
        "H\u00e9ctor Llanos",
        "Universidad Nacional",
        "Cultura agustiniana",
        "Sociedades ind\u00edgenas",
        "Alto Magdalena",
        "Estatuas cham\u00e1n",
        "Monumentos",
        "Significado cultural"
      ],
      "link": "https://open.spotify.com/episode/7npramYWSzx2gaoeOUPbtu?si=22e2ce9a3e5b4238",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Las estatuas chamanes de San Agust\u00edn Podcast Episodio del podcast Antropofon\u00edas del ICANH. Conversa con H\u00e9ctor Llanos, historiador y arque\u00f3logo de la Universidad Nacional, sobre la cultura agustiniana y su relaci\u00f3n con las sociedades ind\u00edgenas del Alto Magdalena. A partir de las estatuas cham\u00e1n de San Agust\u00edn, se exploran los sistemas de pensamiento detr\u00e1s de estos monumentos y su significado cultural. Antropofon\u00edas ICANH H\u00e9ctor Llanos Universidad Nacional Cultura agustiniana Sociedades ind\u00edgenas Alto Magdalena Estatuas cham\u00e1n Monumentos Significado cultural https://open.spotify.com/episode/7npramYWSzx2gaoeOUPbtu?si=22e2ce9a3e5b4238"
    },
    {
      "id": "somos-cultura-de-paz-161",
      "row": 161,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Santa Marta 500 a\u00f1os: lugares comunes y debates sobre su fuindaci\u00f3n",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofon\u00edas del ICANH. En este cap\u00edtulo hablaremos con Antonio Jaramillo y Marcela Escand\u00f3n, quienes aportan una perspectiva alternativa de la fundaci\u00f3n de Santa Marta. Reconstruyendo los primeros a\u00f1os de una cuidad que comenz\u00f3 ante todo como el punto de lanza para la invasi\u00f3n de una amplia regi\u00f3n. Marcela y Antonio comparten algunos lugares comunes del mito fundamental.",
      "keywords": [
        "Antropofon\u00edas",
        "ICANH",
        "Antonio Jaramillo",
        "Marcela Escand\u00f3n",
        "Santa Marta",
        "Fundaci\u00f3n",
        "Historia colonial",
        "Mito fundacional",
        "Invasi\u00f3n territorial",
        "Reconstrucci\u00f3n hist\u00f3rica"
      ],
      "link": "https://open.spotify.com/episode/6BgDgITEZJNXWG9WhbsH13?si=cf1c5f9b512043f8",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Santa Marta 500 a\u00f1os: lugares comunes y debates sobre su fuindaci\u00f3n Podcast Episodio del podcast Antropofon\u00edas del ICANH. En este cap\u00edtulo hablaremos con Antonio Jaramillo y Marcela Escand\u00f3n, quienes aportan una perspectiva alternativa de la fundaci\u00f3n de Santa Marta. Reconstruyendo los primeros a\u00f1os de una cuidad que comenz\u00f3 ante todo como el punto de lanza para la invasi\u00f3n de una amplia regi\u00f3n. Marcela y Antonio comparten algunos lugares comunes del mito fundamental. Antropofon\u00edas ICANH Antonio Jaramillo Marcela Escand\u00f3n Santa Marta Fundaci\u00f3n Historia colonial Mito fundacional Invasi\u00f3n territorial Reconstrucci\u00f3n hist\u00f3rica https://open.spotify.com/episode/6BgDgITEZJNXWG9WhbsH13?si=cf1c5f9b512043f8"
    },
    {
      "id": "somos-cultura-de-paz-162",
      "row": 162,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Culturas creoles en el Oc\u00e9ano \u00cdndico",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofon\u00edas del ICANH. Conversa con Andr\u00e9s Leiva sobre las culturas cr\u00e9oles y mestizas de la isla de La Reuni\u00f3n, en el oc\u00e9ano \u00cdndico. A partir de estas insularidades, se trazan puentes con el Caribe y otras islas, entendidas no como territorios aislados, sino como espacios de contacto, intercambio e interculturalidad desde la globalizaci\u00f3n temprana.",
      "keywords": [
        "Antropofon\u00edas",
        "ICANH",
        "Andr\u00e9s Leiva",
        "Isla de La Reuni\u00f3n",
        "Culturas cr\u00e9oles",
        "Culturas mestizas",
        "Caribe",
        "Insularidades",
        "Interculturalidad",
        "Globalizaci\u00f3n temprana"
      ],
      "link": "https://open.spotify.com/episode/0DACyIVazKlJLokeqhBuTm?si=dddf069fb91b499c",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Culturas creoles en el Oc\u00e9ano \u00cdndico Podcast Episodio del podcast Antropofon\u00edas del ICANH. Conversa con Andr\u00e9s Leiva sobre las culturas cr\u00e9oles y mestizas de la isla de La Reuni\u00f3n, en el oc\u00e9ano \u00cdndico. A partir de estas insularidades, se trazan puentes con el Caribe y otras islas, entendidas no como territorios aislados, sino como espacios de contacto, intercambio e interculturalidad desde la globalizaci\u00f3n temprana. Antropofon\u00edas ICANH Andr\u00e9s Leiva Isla de La Reuni\u00f3n Culturas cr\u00e9oles Culturas mestizas Caribe Insularidades Interculturalidad Globalizaci\u00f3n temprana https://open.spotify.com/episode/0DACyIVazKlJLokeqhBuTm?si=dddf069fb91b499c"
    },
    {
      "id": "somos-cultura-de-paz-163",
      "row": 163,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Podcast Santa Mar\u00eda la Antigua del Dari\u00e9n: cruce de caminos y resistencias",
      "type": "Podcast",
      "description": "Episodio del podcast Antropofon\u00edas del ICANH. Conversa con Carolina Quintero, curadora del Museo Nacional, y Alberto Sarcina, arque\u00f3logo del ICANH, sobre el Parque Arqueol\u00f3gico y Casa Museo de Santa Mar\u00eda la Antigua del Dari\u00e9n. Destaca un ejercicio participativo e intercultural donde la arqueolog\u00eda y la museolog\u00eda aportan a la construcci\u00f3n y reconstrucci\u00f3n del territorio junto a las comunidades.",
      "keywords": [
        "Antropofon\u00edas",
        "ICANH",
        "Carolina Quintero",
        "Alberto Sarcina",
        "Museo Nacional",
        "Parque Arqueol\u00f3gico",
        "Casa Museo",
        "Santa Mar\u00eda la Antigua del Dari\u00e9n",
        "Arqueolog\u00eda",
        "Museolog\u00eda",
        "Participaci\u00f3n comunitaria",
        "Interculturalidad"
      ],
      "link": "https://open.spotify.com/episode/16TjnmykfIiRsQQCdZKaNx?si=5d404811e5174a13",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz ICANH Podcast Santa Mar\u00eda la Antigua del Dari\u00e9n: cruce de caminos y resistencias Podcast Episodio del podcast Antropofon\u00edas del ICANH. Conversa con Carolina Quintero, curadora del Museo Nacional, y Alberto Sarcina, arque\u00f3logo del ICANH, sobre el Parque Arqueol\u00f3gico y Casa Museo de Santa Mar\u00eda la Antigua del Dari\u00e9n. Destaca un ejercicio participativo e intercultural donde la arqueolog\u00eda y la museolog\u00eda aportan a la construcci\u00f3n y reconstrucci\u00f3n del territorio junto a las comunidades. Antropofon\u00edas ICANH Carolina Quintero Alberto Sarcina Museo Nacional Parque Arqueol\u00f3gico Casa Museo Santa Mar\u00eda la Antigua del Dari\u00e9n Arqueolog\u00eda Museolog\u00eda Participaci\u00f3n comunitaria Interculturalidad https://open.spotify.com/episode/16TjnmykfIiRsQQCdZKaNx?si=5d404811e5174a13"
    },
    {
      "id": "somos-cultura-de-paz-164",
      "row": 164,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Documental \u00d1uba y Sew\u00e1: Volver a la vida",
      "type": "Podcast",
      "description": "Documental de la serie El futuro del pasado del ICANH. Tras 15 a\u00f1os, el pueblo Kogui de la Sierra Nevada de Santa Marta recupera objetos sagrados en un proceso de rematriaci\u00f3n que propicia el di\u00e1logo entre arque\u00f3logos y autoridades espirituales. El relato revela por qu\u00e9 estos objetos son seres vivos y su papel en el equilibrio del mundo.",
      "keywords": [
        "El futuro del pasado",
        "ICANH",
        "Pueblo Kogui",
        "Sierra Nevada de Santa Marta",
        "Objetos sagrados",
        "Rematriaci\u00f3n",
        "Arqueolog\u00eda",
        "Autoridades espirituales",
        "Seres vivos",
        "Equilibrio del mundo"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Sanar el territorio colombiano pasa por revisar nuestra historia y devolverles a nuestros pueblos ancestrales lo que les fue arrebatado.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Documental \u00d1uba y Sew\u00e1: Volver a la vida Podcast Documental de la serie El futuro del pasado del ICANH. Tras 15 a\u00f1os, el pueblo Kogui de la Sierra Nevada de Santa Marta recupera objetos sagrados en un proceso de rematriaci\u00f3n que propicia el di\u00e1logo entre arque\u00f3logos y autoridades espirituales. El relato revela por qu\u00e9 estos objetos son seres vivos y su papel en el equilibrio del mundo. Sanar el territorio colombiano pasa por revisar nuestra historia y devolverles a nuestros pueblos ancestrales lo que les fue arrebatado. El futuro del pasado ICANH Pueblo Kogui Sierra Nevada de Santa Marta Objetos sagrados Rematriaci\u00f3n Arqueolog\u00eda Autoridades espirituales Seres vivos Equilibrio del mundo PENDIENTE"
    },
    {
      "id": "somos-cultura-de-paz-165",
      "row": 165,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Documental Un tejido para sanar",
      "type": "Podcast",
      "description": "Documental de la serie El futuro del pasado del ICANH. Aborda el Decreto 1500 de 2018, que redefini\u00f3 el territorio ancestral de los pueblos Kogui, Arhuaco, Wiwa y Kankuamo en la Sierra Nevada de Santa Marta. La obra audiovisual del Consejo Territorial de Cabildos busca tender puentes entre estos pueblos y el Estado, destacando la protecci\u00f3n de la L\u00ednea Negra como sistema de sitios sagrados.",
      "keywords": [
        "El futuro del pasado",
        "ICANH",
        "Decreto 1500 de 2018",
        "Pueblos Kogui, Arhuaco, Wiwa, Kankuamo",
        "Sierra Nevada de Santa Marta",
        "Territorio ancestral",
        "Consejo Territorial de Cabildos",
        "L\u00ednea Negra",
        "Sitios sagrados",
        "Protecci\u00f3n cultural"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Documental Un tejido para sanar Podcast Documental de la serie El futuro del pasado del ICANH. Aborda el Decreto 1500 de 2018, que redefini\u00f3 el territorio ancestral de los pueblos Kogui, Arhuaco, Wiwa y Kankuamo en la Sierra Nevada de Santa Marta. La obra audiovisual del Consejo Territorial de Cabildos busca tender puentes entre estos pueblos y el Estado, destacando la protecci\u00f3n de la L\u00ednea Negra como sistema de sitios sagrados. El futuro del pasado ICANH Decreto 1500 de 2018 Pueblos Kogui, Arhuaco, Wiwa, Kankuamo Sierra Nevada de Santa Marta Territorio ancestral Consejo Territorial de Cabildos L\u00ednea Negra Sitios sagrados Protecci\u00f3n cultural PENDIENTE"
    },
    {
      "id": "somos-cultura-de-paz-166",
      "row": 166,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "ICANH",
      "title": "Documental \u00bfQui\u00e9n gobierna el r\u00edo Atrato?",
      "type": "Podcast",
      "description": "Documental de la serie El futuro del pasado del ICANH. Explora el contexto que llev\u00f3 a reconocer al r\u00edo Atrato como sujeto de derechos. A trav\u00e9s de testimonios, muestra la vida en torno al r\u00edo y analiza avances y retos en la implementaci\u00f3n de esta sentencia, que busca proteger su vida y la de las comunidades. M\u00e1s all\u00e1 del papel, cuestiona qui\u00e9n gobierna realmente el r\u00edo Atrato.",
      "keywords": [
        "El futuro del pasado",
        "ICANH",
        "R\u00edo Atrato",
        "Sujeto de derechos",
        "Comunidades ribere\u00f1as",
        "Testimonios",
        "Protecci\u00f3n del r\u00edo",
        "Sentencia judicial",
        "Gobernanza",
        "Vida del r\u00edo"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz ICANH Documental \u00bfQui\u00e9n gobierna el r\u00edo Atrato? Podcast Documental de la serie El futuro del pasado del ICANH. Explora el contexto que llev\u00f3 a reconocer al r\u00edo Atrato como sujeto de derechos. A trav\u00e9s de testimonios, muestra la vida en torno al r\u00edo y analiza avances y retos en la implementaci\u00f3n de esta sentencia, que busca proteger su vida y la de las comunidades. M\u00e1s all\u00e1 del papel, cuestiona qui\u00e9n gobierna realmente el r\u00edo Atrato. El futuro del pasado ICANH R\u00edo Atrato Sujeto de derechos Comunidades ribere\u00f1as Testimonios Protecci\u00f3n del r\u00edo Sentencia judicial Gobernanza Vida del r\u00edo PENDIENTE"
    },
    {
      "id": "somos-cultura-de-paz-167",
      "row": 167,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Documental Relatos de la Guajirita",
      "type": "Podcast",
      "description": "Escuela De La Vista Al Lente. Relatos de la Guajirita. Documental que aborda historias de vida, saberes ancestrales y pr\u00e1cticas culturales del corregimiento afrodescendiente La Guajirita (Becerril, Cesar). A trav\u00e9s de testimonios intergeneracionales, explora memoria, identidad, m\u00fasica, espiritualidad y tradiciones, evidenciando la fuerza de la comunidad para preservar su cultura y transmitirla a nuevas generaciones.",
      "keywords": [
        "Escuela De La Vista Al Lente",
        "Relatos de la Guajirita",
        "La Guajirita",
        "Becerril, Cesar",
        "Comunidades afrodescendientes",
        "Historias de vida",
        "Saberes ancestrales",
        "Pr\u00e1cticas culturales",
        "Memoria e identidad",
        "M\u00fasica y espiritualidad",
        "Tradiciones",
        "Transmisi\u00f3n generacional"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/7.%20BECERRIL/3_%20pago_10%25/1.%20Contenidos/2.%20contenio/RELATOS%20DE%20LA%20GUAJIRITA,%20DOCUMENTAL.mov?csf=1&web=1&e=Lm8KjO",
      "asset_link": "",
      "force_message": "La comunicaci\u00f3n en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, j\u00f3venes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusi\u00f3n en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, est\u00e9ticas y espiritualidades.",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS Documental Relatos de la Guajirita Podcast Escuela De La Vista Al Lente. Relatos de la Guajirita. Documental que aborda historias de vida, saberes ancestrales y pr\u00e1cticas culturales del corregimiento afrodescendiente La Guajirita (Becerril, Cesar). A trav\u00e9s de testimonios intergeneracionales, explora memoria, identidad, m\u00fasica, espiritualidad y tradiciones, evidenciando la fuerza de la comunidad para preservar su cultura y transmitirla a nuevas generaciones. La comunicaci\u00f3n en los territorios bio-culturales es un acto de memoria, resistencia y futuro. Desde las voces de sabedoras, j\u00f3venes, liderazgos comunitarios y narrativas propias, las historias afrodescendientes nombran el territorio, defienden la vida y transforman la exclusi\u00f3n en dignidad. Comunicar desde lo afro no es solo contar lo que somos, es disputar sentidos frente al racismo, la violencia y el olvido, fortaleciendo la cultura de paz, la justicia racial y el derecho a narrarnos desde nuestros saberes, est\u00e9ticas y espiritualidades. Escuela De La Vista Al Lente Relatos de la Guajirita La Guajirita Becerril, Cesar Comunidades afrodescendientes Historias de vida Saberes ancestrales Pr\u00e1cticas culturales Memoria e identidad M\u00fasica y espiritualidad Tradiciones Transmisi\u00f3n generacional https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/7.%20BECERRIL/3_%20pago_10%25/1.%20Contenidos/2.%20contenio/RELATOS%20DE%20LA%20GUAJIRITA,%20DOCUMENTAL.mov?csf=1&web=1&e=Lm8KjO"
    },
    {
      "id": "somos-cultura-de-paz-168",
      "row": 168,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Ficci\u00f3n Gauchos de resistencia",
      "type": "Podcast",
      "description": "Gauchos de Resistencia narra la historia de Iv\u00e1n, un joven de 17 a\u00f1os que, junto a su hermano y su abuela, enfrenta dificultades econ\u00f3micas tras la p\u00e9rdida de ingresos familiares. Mientras vende un dulce tradicional para sostener su hogar, se ve expuesto a riesgos de econom\u00edas ilegales. Sin embargo, su pasi\u00f3n por el arte se convierte en una v\u00eda para resistir, proteger a su familia y proyectar un futuro distinto.",
      "keywords": [
        "Gauchos de Resistencia",
        "Iv\u00e1n",
        "J\u00f3venes",
        "Familia",
        "Dificultades econ\u00f3micas",
        "Dulce tradicional",
        "Econom\u00edas ilegales",
        "Arte como resistencia",
        "Protecci\u00f3n familiar",
        "Futuro alternativo"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/12.%20MAREA%20PRODUCCIONES/3_%20pago_10%25%20%20MAREA%20PRODUCCIONES/1.%20Contenidos/3.%20contenido/2.%20Gauchos%20de%20resistencia.mp4?csf=1&web=1&e=iwlNYl",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS Ficci\u00f3n Gauchos de resistencia Podcast Gauchos de Resistencia narra la historia de Iv\u00e1n, un joven de 17 a\u00f1os que, junto a su hermano y su abuela, enfrenta dificultades econ\u00f3micas tras la p\u00e9rdida de ingresos familiares. Mientras vende un dulce tradicional para sostener su hogar, se ve expuesto a riesgos de econom\u00edas ilegales. Sin embargo, su pasi\u00f3n por el arte se convierte en una v\u00eda para resistir, proteger a su familia y proyectar un futuro distinto. Gauchos de Resistencia Iv\u00e1n J\u00f3venes Familia Dificultades econ\u00f3micas Dulce tradicional Econom\u00edas ilegales Arte como resistencia Protecci\u00f3n familiar Futuro alternativo https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/12.%20MAREA%20PRODUCCIONES/3_%20pago_10%25%20%20MAREA%20PRODUCCIONES/1.%20Contenidos/3.%20contenido/2.%20Gauchos%20de%20resistencia.mp4?csf=1&web=1&e=iwlNYl"
    },
    {
      "id": "somos-cultura-de-paz-169",
      "row": 169,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Ficci\u00f3n Altanegra",
      "type": "Podcast",
      "description": "Escuela AfroguaJira, Audiovisual y Antirracista del Kuagro de Comunicaciones de Altanegra aborda el racismo estructural, laboral y de g\u00e9nero a trav\u00e9s de una pieza, visibilizando la exclusi\u00f3n que enfrentan las mujeres afro y reivindicando la est\u00e9tica como resistencia. Tambi\u00e9n conecta estas violencias con el territorio y la justicia ambiental. M\u00e1s que denuncia, es un acto cinematogr\u00e1fico que interpela sobre ser joven, negra y de pueblo en una sociedad que excluye.",
      "keywords": [
        "Escuela AfroguaJira",
        "Kuagro de Comunicaciones",
        "Racismo estructural",
        "Racismo laboral",
        "Racismo de g\u00e9nero",
        "Mujeres afro",
        "Est\u00e9tica como resistencia",
        "Territorio",
        "Justicia ambiental",
        "Juventud negra",
        "Exclusi\u00f3n social",
        "Cine documental"
      ],
      "link": "https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/10.%20%20MATA%20%27E%20PELO/3_%20pago_10%25/1.%20Contenidos/1.%20Contenido/Pelicula%20Altanegra%20Oficial%20.mp4?csf=1&web=1&e=N7do1K",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS Ficci\u00f3n Altanegra Podcast Escuela AfroguaJira, Audiovisual y Antirracista del Kuagro de Comunicaciones de Altanegra aborda el racismo estructural, laboral y de g\u00e9nero a trav\u00e9s de una pieza, visibilizando la exclusi\u00f3n que enfrentan las mujeres afro y reivindicando la est\u00e9tica como resistencia. Tambi\u00e9n conecta estas violencias con el territorio y la justicia ambiental. M\u00e1s que denuncia, es un acto cinematogr\u00e1fico que interpela sobre ser joven, negra y de pueblo en una sociedad que excluye. Escuela AfroguaJira Kuagro de Comunicaciones Racismo estructural Racismo laboral Racismo de g\u00e9nero Mujeres afro Est\u00e9tica como resistencia Territorio Justicia ambiental Juventud negra Exclusi\u00f3n social Cine documental https://mcultura.sharepoint.com/:v:/r/sites/DACMI/Documentos%20compartidos/General/Grupo%20CCT%202025/003_CONVENIOS%20GRUPO%20COM_2025/1_0798_CONVENIO%20INTERADMINISTRATIVO%20FONDO%20MIXTO%20DE%20NARI%C3%91O/3_%20EJECUCI%C3%93N/5_%20ESTRATEGIAS/1_AFROCOLOMBIAS/1_FORMACI%C3%93N/004_Escuelas%20Comunicaci%C3%B3n%20Afrocolombias2025/10.%20%20MATA%20%27E%20PELO/3_%20pago_10%25/1.%20Contenidos/1.%20Contenido/Pelicula%20Altanegra%20Oficial%20.mp4?csf=1&web=1&e=N7do1K"
    },
    {
      "id": "somos-cultura-de-paz-170",
      "row": 170,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS",
      "title": "Documental F\u00e9lix Banguero",
      "type": "Documental",
      "description": "Documental que retrata a un l\u00edder afrodescendiente de Guachen\u00e9 (Norte del Cauca), cuya vida articula defensa del territorio, memoria ancestral, m\u00fasica y espiritualidad. Su historia encarna la resistencia y la dignidad de una comunidad que se organiza para preservar su identidad y no ser olvidada. Este documental ha sido posible gracias a la Escuela de Comunicaci\u00f3n Colectivo de Comunicaciones F\u00e9lix Banguero.",
      "keywords": [
        "Documental",
        "Guachen\u00e9, Norte del Cauca",
        "L\u00edder afrodescendiente",
        "Defensa del territorio",
        "Memoria ancestral",
        "M\u00fasica",
        "Espiritualidad",
        "Resistencia comunitaria",
        "Dignidad",
        "Escuela de Comunicaci\u00f3n Colectivo F\u00e9lix Banguero"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "NO CUENTA CON AUTORIZACI\u00d3N",
      "search_text": "Somos cultura de paz MinCulturas DACMI- Direcci\u00f3n de Audiovisuales, Cine y Medios Interactivos - Grupo Comunicaci\u00f3n, Culturas y Territorios-AFROCOLOMBIAS Documental F\u00e9lix Banguero Documental Documental que retrata a un l\u00edder afrodescendiente de Guachen\u00e9 (Norte del Cauca), cuya vida articula defensa del territorio, memoria ancestral, m\u00fasica y espiritualidad. Su historia encarna la resistencia y la dignidad de una comunidad que se organiza para preservar su identidad y no ser olvidada. Este documental ha sido posible gracias a la Escuela de Comunicaci\u00f3n Colectivo de Comunicaciones F\u00e9lix Banguero. Documental Guachen\u00e9, Norte del Cauca L\u00edder afrodescendiente Defensa del territorio Memoria ancestral M\u00fasica Espiritualidad Resistencia comunitaria Dignidad Escuela de Comunicaci\u00f3n Colectivo F\u00e9lix Banguero NO CUENTA CON AUTORIZACI\u00d3N"
    },
    {
      "id": "somos-cultura-de-paz-171",
      "row": 171,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "Biblioteca Nacional",
      "title": "Ficci\u00f3n Tiempos nocturnos",
      "type": "Cortometraje",
      "description": "Ficci\u00f3n ambientada en Berrugas, Sucre. Durante un apag\u00f3n, un grupo de j\u00f3venes se re\u00fane bajo la luna para contar historias de fantas\u00eda y terror. Poco a poco, los relatos comienzan a sentirse reales, como si los esp\u00edritus del mar, el manglar y la historia respondieran. En la noche caribe\u00f1a, lo m\u00e1gico y lo inquietante se mezclan con la vida cotidiana.",
      "keywords": [
        "Ficci\u00f3n",
        "Berrugas, Sucre",
        "J\u00f3venes",
        "Apag\u00f3n",
        "Historias de fantas\u00eda",
        "Historias de terror",
        "Esp\u00edritus del mar",
        "Manglar",
        "Magia e inquietud",
        "Noche caribe\u00f1a"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz Biblioteca Nacional Ficci\u00f3n Tiempos nocturnos Cortometraje Ficci\u00f3n ambientada en Berrugas, Sucre. Durante un apag\u00f3n, un grupo de j\u00f3venes se re\u00fane bajo la luna para contar historias de fantas\u00eda y terror. Poco a poco, los relatos comienzan a sentirse reales, como si los esp\u00edritus del mar, el manglar y la historia respondieran. En la noche caribe\u00f1a, lo m\u00e1gico y lo inquietante se mezclan con la vida cotidiana. Ficci\u00f3n Berrugas, Sucre J\u00f3venes Apag\u00f3n Historias de fantas\u00eda Historias de terror Esp\u00edritus del mar Manglar Magia e inquietud Noche caribe\u00f1a PENDIENTE"
    },
    {
      "id": "somos-cultura-de-paz-172",
      "row": 172,
      "theme": "Somos cultura de paz",
      "theme_slug": "somos-cultura-de-paz",
      "responsable": "Biblioteca Nacional",
      "title": "Mini clips sobre procesos en Bibliotecas P\u00fablicas y Bibliotecas Rurales Itinerantes",
      "type": "Mini clips",
      "description": "El equipo de comunicaciones de la Biblioteca Nacional de Colombia presenta una serie de videos cortos que muestran el trabajo de las bibliotecas en comunidades \u00e9tnicas y sus procesos de apropiaci\u00f3n. Las bibliotecas se destacan como espacios centrales donde la palabra oral y escrita preserva la memoria, narra el presente y proyecta los sue\u00f1os de cada territorio.",
      "keywords": [
        "Biblioteca Nacional de Colombia",
        "Comunidades \u00e9tnicas",
        "Bibliotecas",
        "Apropiaci\u00f3n cultural",
        "Palabra oral",
        "Palabra escrita",
        "Memoria",
        "Presente",
        "Sue\u00f1os territoriales",
        "Espacios culturales"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Las bibliotecas son el coraz\u00f3n de las comunidades, lugares donde la palabra escrita y oral es la protagonista para preservar la memoria, las historias del presente y los sue\u00f1os del futuro de cada territorio.",
      "availability_note": "PENDIENTE",
      "search_text": "Somos cultura de paz Biblioteca Nacional Mini clips sobre procesos en Bibliotecas P\u00fablicas y Bibliotecas Rurales Itinerantes Mini clips El equipo de comunicaciones de la Biblioteca Nacional de Colombia presenta una serie de videos cortos que muestran el trabajo de las bibliotecas en comunidades \u00e9tnicas y sus procesos de apropiaci\u00f3n. Las bibliotecas se destacan como espacios centrales donde la palabra oral y escrita preserva la memoria, narra el presente y proyecta los sue\u00f1os de cada territorio. Las bibliotecas son el coraz\u00f3n de las comunidades, lugares donde la palabra escrita y oral es la protagonista para preservar la memoria, las historias del presente y los sue\u00f1os del futuro de cada territorio. Biblioteca Nacional de Colombia Comunidades \u00e9tnicas Bibliotecas Apropiaci\u00f3n cultural Palabra oral Palabra escrita Memoria Presente Sue\u00f1os territoriales Espacios culturales PENDIENTE"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-173",
      "row": 173,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas Direcci\u00f3n de Poblaciones - GIT Culturas Negras, Afrodescendientes, Raizales y Palenqueras",
      "title": "Cartilla sobre feminismos negros y derechos reproductivos para mujeres Negras Afrocolombianas, Raizales y Palenqueras",
      "type": "Documento Cartilla",
      "description": "Cartilla con contenidos sobre feminismos negros y derechos reproductivos para mujeres negras, afrocolombianas, raizales y palenqueras desde la perspectiva de los derechos culturales con el prop\u00f3sito de fortalecer sus voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y pol\u00edticos.",
      "keywords": [
        "Racismo estructural",
        "Racismo laboral",
        "Racismo de g\u00e9nero"
      ],
      "link": "",
      "asset_link": "",
      "force_message": "Visibilizar y fortalecer las voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y pol\u00edticos de las mujeres negras, afrodescendientes, raizales y palenqueras",
      "availability_note": "PENDIENTE",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural MinCulturas Direcci\u00f3n de Poblaciones - GIT Culturas Negras, Afrodescendientes, Raizales y Palenqueras Cartilla sobre feminismos negros y derechos reproductivos para mujeres Negras Afrocolombianas, Raizales y Palenqueras Documento Cartilla Cartilla con contenidos sobre feminismos negros y derechos reproductivos para mujeres negras, afrocolombianas, raizales y palenqueras desde la perspectiva de los derechos culturales con el prop\u00f3sito de fortalecer sus voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y pol\u00edticos. Visibilizar y fortalecer las voces, narrativas y reivindicaciones en los distintos escenarios sociales, culturales y pol\u00edticos de las mujeres negras, afrodescendientes, raizales y palenqueras Racismo estructural Racismo laboral Racismo de g\u00e9nero PENDIENTE"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-174",
      "row": 174,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas Direcci\u00f3n de Poblaciones - GIT Culturas Ind\u00edgenas, Rrom y Lenguas Nativas",
      "title": "Documentos de Memoria Viva de la naci\u00f3n gonawindua",
      "type": "Documento cartilla",
      "description": "Implementaci\u00f3n Programa de j\u00f3venes de la Sierra Nevada de Gonawindua El convenio 1619-2025 suscrito entre la CIT y el Ministerio de las Culturas, Artes y saberes hace parte de la ruta de cumplimiento del acuerdo IM-165, que exige: Garantizar el dise\u00f1o e implementaci\u00f3n de un programa para el fortalecimiento, reivindicaci\u00f3n y transmisi\u00f3n intergeneracional de los conocimientos propios para los j\u00f3venes de los pueblos de la Sierra Nevada de Gonawind\u00faa, en concertaci\u00f3n con el Consejo Territorial de Cabildos, de acuerdo a la ley de origen y cosmovisi\u00f3n propia de los pueblos de la Sierra Nevada de Gonawind\u00faa.",
      "keywords": [
        "Priorizaci\u00f3n y caracterizaci\u00f3n de los espacioos comunitarios. Saneaminto de los territorios, Trabajo Comunitario, Bautizo y entrega a la comunidad"
      ],
      "link": "https://mcultura-my.sharepoint.com/personal/atorresb_mincultura_gov_co/_layouts/15/onedrive.aspx?e=5%3A5c11216d2eb444ef99dd2b2198743a94&sharingv2=true&fromShare=true&at=9&CT=1776201569449&OR=OWA%2DNT%2DMail&CID=bb3765e8%2D3ad6%2D7c7d%2D1983%2D4e8f6f63eab1&clickParams=eyJYLUFwcE5hbWUiOiJNaWNyb3NvZnQgT3V0bG9vayBXZWIgQXBwIiwiWC1BcHBWZXJzaW9uIjoiMjAyNjA0MDMwMDEuMzEiLCJPUyI6IldpbmRvd3MgMTEifQ%3D%3D&cidOR=Client&id=%2Fpersonal%2Fatorresb%5Fmincultura%5Fgov%5Fco%2FDocuments%2FDIRECCION%20DE%20POBLACIONES%202025%2FDIRECCION%20DE%20POBLACIONES%202025%2FCONVENIOS%202025%2F3%2E%201619%2D2025%5F%20CONFERACION%20INDIGENA%20TAYRONA%5FCIT%2FEJECUCION%2FTERCER%20PAGO%2FINFORME%20TECNICO%2FEVIDENCIAS%2FCOMPONENTE%201%2F1%2E1&FolderCTID=0x0120004EEA25B391B440479AE8DF393CA887F8&view=0",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural MinCulturas Direcci\u00f3n de Poblaciones - GIT Culturas Ind\u00edgenas, Rrom y Lenguas Nativas Documentos de Memoria Viva de la naci\u00f3n gonawindua Documento cartilla Implementaci\u00f3n Programa de j\u00f3venes de la Sierra Nevada de Gonawindua El convenio 1619-2025 suscrito entre la CIT y el Ministerio de las Culturas, Artes y saberes hace parte de la ruta de cumplimiento del acuerdo IM-165, que exige: Garantizar el dise\u00f1o e implementaci\u00f3n de un programa para el fortalecimiento, reivindicaci\u00f3n y transmisi\u00f3n intergeneracional de los conocimientos propios para los j\u00f3venes de los pueblos de la Sierra Nevada de Gonawind\u00faa, en concertaci\u00f3n con el Consejo Territorial de Cabildos, de acuerdo a la ley de origen y cosmovisi\u00f3n propia de los pueblos de la Sierra Nevada de Gonawind\u00faa. Priorizaci\u00f3n y caracterizaci\u00f3n de los espacioos comunitarios. Saneaminto de los territorios, Trabajo Comunitario, Bautizo y entrega a la comunidad https://mcultura-my.sharepoint.com/personal/atorresb_mincultura_gov_co/_layouts/15/onedrive.aspx?e=5%3A5c11216d2eb444ef99dd2b2198743a94&sharingv2=true&fromShare=true&at=9&CT=1776201569449&OR=OWA%2DNT%2DMail&CID=bb3765e8%2D3ad6%2D7c7d%2D1983%2D4e8f6f63eab1&clickParams=eyJYLUFwcE5hbWUiOiJNaWNyb3NvZnQgT3V0bG9vayBXZWIgQXBwIiwiWC1BcHBWZXJzaW9uIjoiMjAyNjA0MDMwMDEuMzEiLCJPUyI6IldpbmRvd3MgMTEifQ%3D%3D&cidOR=Client&id=%2Fpersonal%2Fatorresb%5Fmincultura%5Fgov%5Fco%2FDocuments%2FDIRECCION%20DE%20POBLACIONES%202025%2FDIRECCION%20DE%20POBLACIONES%202025%2FCONVENIOS%202025%2F3%2E%201619%2D2025%5F%20CONFERACION%20INDIGENA%20TAYRONA%5FCIT%2FEJECUCION%2FTERCER%20PAGO%2FINFORME%20TECNICO%2FEVIDENCIAS%2FCOMPONENTE%201%2F1%2E1&FolderCTID=0x0120004EEA25B391B440479AE8DF393CA887F8&view=0"
    },
    {
      "id": "somos-un-pais-plurietnico-y-multicultural-175",
      "row": 175,
      "theme": "Somos un pa\u00eds pluri\u00e9tnico y multicultural",
      "theme_slug": "somos-un-pais-plurietnico-y-multicultural",
      "responsable": "MinCulturas Direcci\u00f3n de Poblaciones - GIT Culturas Ind\u00edgenas, Rrom y Lenguas Nativas",
      "title": "Documento de Actividaad de fortalecimiento de la shib romani kumpania de sabanalarga",
      "type": "Docuemento Cartilla",
      "description": "Los talleres de fortalecimiento tuvieron como objetivo principal la revitalizaci\u00f3n y preservaci\u00f3n de la lengua Shib Romani para \u00f1as 9 kumpnaias y 2 organizaciones del pueblo RROM A trav\u00e9s de un enfoque comunitario, se busc\u00f3 fortalecer la identidad cultural y asegurar la transmisi\u00f3n de nuestra lengua Roman\u00ed a las nuevas generaciones.",
      "keywords": [
        "Kumpania, pueblo Rrom. Shib Roman\u00ed"
      ],
      "link": "https://mcultura.sharepoint.com/:b:/r/sites/Dir.Poblacion/Documentos%20compartidos/Direccion%20Poblaciones/02_Direcci%C3%B3n%20de%20Poblaciones_2025/02_Justicia_Cultural_%C3%89tnica/05_Rrom/Convenio%202025%20Rrom/segundo%20desembolso%20convenio%201644%20de%202025/L1_Fortalecimineto%20Lengua%20Romani%2011%20informe%2011%20talleres/INFORME,%20LISTADOS%20DE%20ASISTENCIA%20FOTOS%20Y%20VIDEOS%20KUMPANIA%20DE%20SABANALARGA/LEGALIZACION_TALLER_SHIB_ROMANI%20KUMPANIA%20DE%20SABANALARGA.pdf?csf=1&web=1&e=CYnB96",
      "asset_link": "",
      "force_message": "",
      "availability_note": "",
      "search_text": "Somos un pa\u00eds pluri\u00e9tnico y multicultural MinCulturas Direcci\u00f3n de Poblaciones - GIT Culturas Ind\u00edgenas, Rrom y Lenguas Nativas Documento de Actividaad de fortalecimiento de la shib romani kumpania de sabanalarga Docuemento Cartilla Los talleres de fortalecimiento tuvieron como objetivo principal la revitalizaci\u00f3n y preservaci\u00f3n de la lengua Shib Romani para \u00f1as 9 kumpnaias y 2 organizaciones del pueblo RROM A trav\u00e9s de un enfoque comunitario, se busc\u00f3 fortalecer la identidad cultural y asegurar la transmisi\u00f3n de nuestra lengua Roman\u00ed a las nuevas generaciones. Kumpania, pueblo Rrom. Shib Roman\u00ed https://mcultura.sharepoint.com/:b:/r/sites/Dir.Poblacion/Documentos%20compartidos/Direccion%20Poblaciones/02_Direcci%C3%B3n%20de%20Poblaciones_2025/02_Justicia_Cultural_%C3%89tnica/05_Rrom/Convenio%202025%20Rrom/segundo%20desembolso%20convenio%201644%20de%202025/L1_Fortalecimineto%20Lengua%20Romani%2011%20informe%2011%20talleres/INFORME,%20LISTADOS%20DE%20ASISTENCIA%20FOTOS%20Y%20VIDEOS%20KUMPANIA%20DE%20SABANALARGA/LEGALIZACION_TALLER_SHIB_ROMANI%20KUMPANIA%20DE%20SABANALARGA.pdf?csf=1&web=1&e=CYnB96"
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
    "title": "Gobernanza Cultural para la Paz, Organizaci\u00f3n y Formaci\u00f3n sobre el Sistema Nacional de Cultura",
    "description": "Generar, en la FILBo, un di\u00e1logo de saberes e intercambio de experiencias sobre gobernanza cultural para la paz y formaci\u00f3n en el Sistema Nacional de Cultura en ocho regiones del pa\u00eds. Se instalar\u00e1 un stand con fotograf\u00edas, relatos y publicaciones de la Direcci\u00f3n de Fomento Regional, donde se socializan experiencias y la caracterizaci\u00f3n de organizaciones en 15 nodos de distintas regiones.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "22 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Instituto Colombiano de Antropolog\u00eda e Historia",
    "title": "Conflicto, Paz y Tierras: 10 a\u00f1os del Acuerdo de Paz",
    "description": "Este conversatorio presenta los resultados de dos investigaciones sobre restituci\u00f3n de tierras y las transiciones del conflicto tras la firma del Acuerdo de Paz de 2016. Un espacio para analizar sus hallazgos y aportar a la comprensi\u00f3n de los cambios en los territorios.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "22 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Novedades editoriales de la Biblioteca Nacional de Colombia",
    "description": "Durante este evento, se presentar\u00e1n las novedades editoriales que lanz\u00f3 la BNC desde la pasada Feria Internacional del Libro de Bogot\u00e1.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "22 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Crear para resistir, conversar para transformar",
    "description": "A veces las palabras no alcanzan para expresar lo que duele o asusta. Por eso este espacio comienza creando: una experiencia que mezcla palabra, cuerpo y artes pl\u00e1sticas para explorar c\u00f3mo el arte y la cultura nos ayudan a ser y expresarnos. Luego, abriremos una conversaci\u00f3n sobre creatividad, comunidad y resistencia. Un lugar para sentir, pensar y hablar sin filtros, dirigido a j\u00f3venes.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "22 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Desde el principio, selecci\u00f3n de cuentos, cr\u00f3nicas y otros escritos antes del gui\u00f3n de Humberto Dorado Miranda",
    "description": "Participan: Humberto Dorado Miranda y Dominique Rodr\u00edguez Organiza: Ser Zanja",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "23 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Red Estudiantil por la Memoria y el Patrimonio - Taller de apropiaci\u00f3n social del patrimonio cultural",
    "description": "Taller de apropiaci\u00f3n social del patrimonio cultural, enfocado a estudiantes de 9 a 11 grado, con \u00e9nfasis en proyectos que puedan servir para el cumplimiento de las 80 horas del servicio social obligatorio.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "23 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "En la evoluci\u00f3n del turismo cultural, la historia de los barrios extramuros en Cartagena - Taller cartogr\u00e1fico",
    "description": "Taller cartogr\u00e1fico para reconstruir la historia de los barrios extramurales surgidos junto a las murallas de Cartagena tras la Independencia y su retiro en el siglo XIX, medida que impuls\u00f3 la consolidaci\u00f3n de la ciudad como destino tur\u00edstico. Un espacio para leer el territorio, reconocer memorias y comprender sus transformaciones urbanas.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "23 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "\u00bfC\u00f3mo se gestan herramientas para la educaci\u00f3n musical en Colombia?",
    "description": "Este conversatorio abre un di\u00e1logo sobre la creaci\u00f3n de herramientas para la educaci\u00f3n musical en Colombia, a partir de experiencias en la elaboraci\u00f3n de gu\u00edas y cuadernos de ejercicios para trompeta, eufonio y clarinete, publicados el \u00faltimo a\u00f1o, as\u00ed como de la gu\u00eda \u201cEn clave de PEM\u201d. Procesos impulsados por el Grupo de M\u00fasica de la Direcci\u00f3n de Artes, orientados a fortalecer la formaci\u00f3n y las escuelas de m\u00fasica en el pa\u00eds.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "23 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Consciencia sonora: Taller introductorio sobre particularidades sonoras de lenguas ind\u00edgenas en Colombia",
    "description": "La lengua es un elemento clave de la cultura. Su p\u00e9rdida implica el riesgo de desaparecer formas \u00fanicas de nombrar el mundo y sonidos poco comunes. Este espacio invita a conocer y reproducir rasgos conson\u00e1nticos y voc\u00e1licos de lenguas ind\u00edgenas de Colombia, y a reflexionar sobre su papel en la construcci\u00f3n de valores culturales y en la diversidad ling\u00fc\u00edstica del pa\u00eds.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "23 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Instituto Colombiano de Antropolog\u00eda e Historia",
    "title": "Territorialidades ind\u00edgenas en tensi\u00f3n",
    "description": "Presentaci\u00f3n de los hallazgos y conclusiones de las investigaciones que se han llevado a cabo en el ICANH sobre territorialidades ind\u00edgenas en tensi\u00f3n en diversos territorios del pa\u00eds.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "23 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Disputar el canon de la novela colombiana: cuerpo, memoria y territorio en Zapata Olivella, Burgos Cantor y Espinosa",
    "description": "Lanzamiento del libro Disputar el canon de la novela colombiana, con una charla entre el autor y Catalina Correa. El di\u00e1logo abordar\u00e1 c\u00f3mo Manuel Zapata Olivella, Roberto Burgos Cantor y Germ\u00e1n Espinosa imaginaron el Caribe desde una perspectiva distinta al \u201cboom\u201d, visibilizando miradas y aspectos poco explorados en la literatura del pa\u00eds.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "23 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Defendiendo el territorio desde el cine comunitario",
    "description": "En este conversatorio, integrantes de los colectivos No le saque la piedra a la monta\u00f1a (Bogot\u00e1), Yosokwi (Sierra Nevada de Santa Marta) y El Rostro de mi Pueblo (Curbarad\u00f3, Dari\u00e9n) nos contar\u00e1n c\u00f3mo a trav\u00e9s del cine comunitario se da la defensa, resistencia y apropiaci\u00f3n del territorio en el que se encuentran.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "24 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Paisaje Cultural Cafetero para ni\u00f1os",
    "description": "Un taller para ense\u00f1ar a los ni\u00f1os y ni\u00f1as la importancia del Paisaje Cultural Cafetero de Colombia a trav\u00e9s de material did\u00e1ctico.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "24 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Conversatorio: C\u00f3mo hacer cine comunitario en Colombia",
    "description": "Espacio de intercambio sobre cine comunitario en Colombia. A partir del di\u00e1logo entre procesos territoriales y pedag\u00f3gicos, se abordar\u00e1n creaci\u00f3n colectiva, formaci\u00f3n audiovisual, sostenibilidad y el papel del cine en la paz, la memoria y la transformaci\u00f3n social. Participan iniciativas como las Escuelas Audiovisuales Comunitarias, la Escuela Audiovisual Infantil de Bel\u00e9n de los Andaqu\u00edes y Ojo al Sancocho.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "24 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Bibliotecas comunitarias, populares e itinerantes: tejiendo palabras, territorios y resistencias.",
    "description": "En Colombia, las bibliotecas comunitarias, populares e itinerantes (BICOPOI) tienen una larga trayectoria y m\u00faltiples historias. Esta conversaci\u00f3n presenta sus apuestas y esfuerzos por construir una red nacional que fortalezca su sostenibilidad, su agencia pol\u00edtica y su papel como fuerzas transformadoras en diversos territorios del pa\u00eds.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "24 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Presentaci\u00f3n del libro \"Casimiro. Memoria biocultural del barrio El Reposo de Quibd\u00f3, Choc\u00f3\"",
    "description": "Casimiro, una quebrada del barrio El Reposo en Quibd\u00f3, es el centro de un proceso comunitario liderado por j\u00f3venes de \u201cLa ruta de los cuidados\u201d, enfocado en su limpieza y recuperaci\u00f3n. La publicaci\u00f3n Casimiro. Memoria biocultural\u2026 recoge voces sobre la memoria del barrio y sus especies. El libro surge junto a la Biblioteca Nacional, en el Plan \u201cArnoldo Palacios\u201d del Choc\u00f3.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "24 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "\u00bfQuieres estudiar la Maestr\u00eda en Ense\u00f1anza de Espa\u00f1ol como Lengua Extranjera? Descubre qu\u00e9 investigan nuestros estudiantes",
    "description": "Encuentro con los profesores de la maestr\u00eda y una muestra de clase abierta.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "24 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Club de escucha Gaceta sonora: El club negro de Colombia",
    "description": "Espacio de escucha en torno al p\u00f3dcast El club negro de Colombia, de Gaceta Sonora, basado en el libro de Rosa Chamorro. Tras un fragmento, dialoga el music\u00f3logo \u00c1ngel Perea Escobar sobre memoria y pensamiento afrocolombiano, a partir de figuras como Manuel Zapata Olivella y Delia Zapata Olivella.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "25 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Pijara\u00f1a, pijara\u00f1a, ilustra los versos la ara\u00f1a",
    "description": "Taller de la serie \u00ableer es mi cuento\u00bb con la ilustradora: Gabriela Ot\u00e1lora hablar\u00e1 sobre el proceso de ilustrar un libro de poes\u00eda de tradici\u00f3n oral para ni\u00f1os y ni\u00f1as, a partir de su trabajo en la serie \u00abLeer es mi cuento\u00bb. Un espacio para acercarse al universo de la ilustraci\u00f3n infantil y a las decisiones creativas detr\u00e1s de las im\u00e1genes que acompa\u00f1an la lectura.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "25 abril 2026",
    "time": "12:30 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Taller y charla: As\u00ed se construye un carnaval, oficios, redes y econom\u00edas de la fiesta de Pasto",
    "description": "Espacio h\u00edbrido de charla y taller para comprender el carnaval desde su producci\u00f3n material. Liderado por el Taller Escuela de Carnaval Ruano (Pasto), combina creaci\u00f3n de una pieza breve con di\u00e1logo sobre oficios, materiales, econom\u00edas y redes que sostienen la fiesta. Aborda el papel de las mujeres y las formas de vivir el carnaval m\u00e1s all\u00e1 de la agenda oficial.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "25 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Isabel Carrasquilla y Magda Moreno: contando despu\u00e9s de muertas",
    "description": "En Santo Domingo (Antioquia), a finales del siglo XIX, surgi\u00f3 la Sociedad de El Tercer Piso y sus tertulias de lectura. En 2024 se retoma este espacio para leer, investigar y dialogar sobre sus integrantes. La actividad aborda textos de Isabel Carrasquilla y Magda Moreno, con lectura en voz alta y reflexi\u00f3n colectiva sobre su obra y contexto.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "25 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Colombiano de Antropolog\u00eda e Historia",
    "title": "El gale\u00f3n cabe en una taza",
    "description": "Una cata de chocolate para hablar sobre los cargamentos donde se hallaron tazas de porcelana y restos de cacao, recolectados en 2025 para su estudio. \u00bfQu\u00e9 hac\u00edan estos objetos en una nave asociada a otros cargamentos? \u00bfQu\u00e9 rutas siguieron y qu\u00e9 revelan sobre el comercio en el Caribe? Este encuentro explora estas preguntas y propone una experiencia con aroma y sabor a chocolate para acercarse a esta historia.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "25 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Relata 20 a\u00f1os: dos d\u00e9cadas de formaci\u00f3n en escritura creativa",
    "description": "En esta charla, moderada por Juan Afanador, l\u00edder del componente de formaci\u00f3n de la Gerencia de Literatura, discuten sobre el estado de la formaci\u00f3n en escritura y sus futuros deseables. Charlan Giuseppe Caputo y Tania Ganitsky.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "25 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Presentaci\u00f3n de la publicaci\u00f3n \"Fundar Cuidado: seis figuras de conservaci\u00f3n en territorios de Colombia\"",
    "description": "En alianza con Fondo Acci\u00f3n, la Maestr\u00eda en Escritura Creativa del Instituto Caro y Cuervo presenta siete cuadernillos sobre protecci\u00f3n ambiental y v\u00ednculos con ecosistemas del pa\u00eds. Se lanza Fundar cuidado, que recoge experiencias comunitarias en distintas regiones. Resultado de un proyecto de apropiaci\u00f3n social del conocimiento en 2025, dirigido al p\u00fablico general.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "25 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Sobre reparaci\u00f3n simb\u00f3lica y pr\u00e1ctica art\u00edstica",
    "description": "Desde 2023, el Grupo de Artes Pl\u00e1sticas y Visuales acompa\u00f1a procesos de memoria y reparaci\u00f3n simb\u00f3lica con v\u00edctimas del Estado, como Madres de Falsos Positivos, buscadoras de La Escombrera y la Comunidad de Paz de San Jos\u00e9 de Apartad\u00f3. Esta conversaci\u00f3n aborda estos proyectos y c\u00f3mo el arte, desde el rol creativo de las v\u00edctimas, se convierte en una herramienta de reparaci\u00f3n y transformaci\u00f3n.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "26 abril 2026",
    "time": "12:30 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Taller experiencial Memorias mayores, pr\u00e1cticas art\u00edsticas para la paz",
    "description": "Taller vivencial que presenta el trabajo con personas mayores portadoras de saberes art\u00edsticos y culturales. A trav\u00e9s de un di\u00e1logo intergeneracional con j\u00f3venes, un sabedor tradicional compartir\u00e1 su experiencia mediante la oralidad, la escucha, la experimentaci\u00f3n y la creaci\u00f3n. Un espacio para intercambiar conocimientos y disfrutar de las artes en la FILBo.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "26 abril 2026",
    "time": "2:00 p. m.",
    "entity": "AGN",
    "title": "Colombia vista desde los archivos del National Security Archive donados a la Comisi\u00f3n de la Verdad",
    "description": "Lectura del conflicto armado colombiano a partir de documentos desclasificados de EE. UU. reunidos por el National Security Archive y usados por la Comisi\u00f3n de la Verdad. Se analizan cables, informes y memorandos sobre guerra, paz, narcotr\u00e1fico y actores armados, en di\u00e1logo con archivos y testimonios, para abrir nuevas preguntas sobre memoria e investigaci\u00f3n.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "26 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "La traducci\u00f3n de literatura latinoamericana al bengal\u00ed: conversaci\u00f3n con el escritor Anisuz Zaman (India)",
    "description": "En conversaci\u00f3n con Alfonso Carvajal, Anisuz Zaman reflexiona sobre los v\u00ednculos entre la literatura colombiana y la India a partir de su trabajo de traducci\u00f3n al bengal\u00ed. El di\u00e1logo aborda la traducci\u00f3n como lectura profunda y mediaci\u00f3n cultural entre distintos contextos ling\u00fc\u00edsticos.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "26 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Presentaci\u00f3n del libro \u201cMabung\u00fa triunfo: po\u00e9ticas de resistencia afro en Mar\u00eda Teresa Ram\u00edrez\u201d, de Francy Yobanna Morales Acosta",
    "description": "Conversatorio sobre Mabung\u00fa triunfo: po\u00e9ticas de resistencia afro en Mar\u00eda Teresa Ram\u00edrez, con la autora y dos invitadas. El di\u00e1logo abordar\u00e1 la obra de Mar\u00eda Teresa Ram\u00edrez y su valor en la poes\u00eda en palenquero, lengua poco estudiada en Colombia. Un espacio dirigido a p\u00fablico general y a especialistas en literatura y poes\u00eda.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "26 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Lanzamiento de publicaciones resultado de las Becas de Est\u00edmulos del Grupo de Danza",
    "description": "Presentaci\u00f3n de publicaciones en danza: Dramaturgias del bailar\u00edn en Colombia de Lina Villegas; Cartilla pedagog\u00eda en movimiento del Colectivo Sol Femenino del Putumayo; Cartilla ra\u00edces en evoluci\u00f3n de Andr\u00e9s Jos\u00e9 Rinc\u00f3n; y Danzas y expresiones coreogr\u00e1ficas de Tunja de Sof\u00eda Fonseca.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "26 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Curar como territorio",
    "description": "A partir del 47 Sal\u00f3n Nacional de Artistas \u2013 KAUKA, asamblea de mundos posibles, esta conversaci\u00f3n aborda la curadur\u00eda desde lo territorial como ejercicio de autonom\u00eda pol\u00edtica, simb\u00f3lica y cultural. El encuentro funciona como pre-lanzamiento de su l\u00ednea editorial y cat\u00e1logo, y propone reflexionar sobre otras formas de construir y narrar el arte desde los territorios.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "27 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Maguar\u00e9 viaja con nosotros",
    "description": "Taller \u201cMaguar\u00e9 viaja con nosotros\u201d, dirigido a ni\u00f1as y ni\u00f1os de 0 a 6 a\u00f1os, que promueve sus derechos culturales mediante experiencias l\u00fadicas y sensoriales. A partir de un mapa de Colombia, se desarrollan actividades de juego, sonido, movimiento y creaci\u00f3n colectiva para explorar la diversidad cultural, fortalecer la identidad territorial y fomentar la participaci\u00f3n activa.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "27 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Surgir: Memoria de la historia de la lengua de se\u00f1as colombiana",
    "description": "Conversatorio sobre un texto que narra la historia de la Lengua de Se\u00f1as Colombiana (LSC), con participaci\u00f3n de expertos. Dirigido a la comunidad sorda y al p\u00fablico interesado, propicia el di\u00e1logo y el intercambio de saberes. Presenta avances del proyecto \u201c100 a\u00f1os de la educaci\u00f3n de las personas sordas en Colombia \u2013 Fase II\u201d, centrado en instituciones y colectivos.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "27 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Entre letras y trazos, \u00bfc\u00f3mo se recupera el patrimonio cultural?",
    "description": "Entre letras y trazos, este conversatorio de la Biblioteca Nacional de Colombia explora la recuperaci\u00f3n del patrimonio bibliogr\u00e1fico y documental. Con la mirada del caricaturista Andr\u00e9s Gonz\u00e1lez, se reflexiona sobre el papel de la caricatura en la historia y la importancia de preservarla. Un espacio para pensar la memoria desde el arte y su proyecci\u00f3n hacia el futuro.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "27 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Taller: Radio Consultas. Experimentaci\u00f3n radiof\u00f3nica con el archivo de Radio Sutatenza",
    "description": "Este taller explora, de forma pr\u00e1ctica, el m\u00e9todo de alfabetizaci\u00f3n de Radio Sutatenza. A partir de guiones, boletines y cartillas, recrea el curso de Alfabeto de 1962 para analizar sus estrategias. Dirigido a docentes, estudiantes e investigadores, propone un ejercicio sonoro que conecta radio, pedagog\u00eda y materiales impresos, y reflexiona sobre su impacto en la educaci\u00f3n rural.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "27 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Presentaci\u00f3n de libro digital. \"De-volver al San Juan. Memorias y vivencias del Hospital San Juan de Dios\"",
    "description": "Con 461 a\u00f1os, el Hospital Universitario San Juan de Dios es s\u00edmbolo de cuidado y resistencia en Bogot\u00e1. De-volver al San Juan re\u00fane voces de trabajadoras, vecinos y personas vinculadas que sostuvieron su memoria y defendieron su misi\u00f3n. El libro, resultado de un proyecto entre el Instituto Caro y Cuervo y MinCulturas, recoge testimonios que evidencian una resistencia colectiva y persistente.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "27 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Presentaci\u00f3n del cat\u00e1logo Metales y Numism\u00e1tica",
    "description": "Se realizar\u00e1 la presentaci\u00f3n del libro, moderada por el equipo del museo, donde se compartir\u00e1n los detalles de su proceso de creaci\u00f3n y su relevancia para la cultura del pa\u00eds.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "27 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Colombia, pa\u00eds de la oralidad",
    "description": "La narraci\u00f3n oral, o cuenter\u00eda, ha sido clave para transmitir conocimientos, valores y memoria colectiva. Esta actividad presenta un balance de documentos sobre esta pr\u00e1ctica entre 1990 y 2025, evidenciando su permanencia y aportes a la cultura, el arte y la sociedad. Un espacio para reconocer el valor de la palabra hablada y sus ra\u00edces ancestrales.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "28 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Taller: Al pie de los cerros, a la orilla del r\u00edo",
    "description": "Este taller explora la relaci\u00f3n con el lugar que habitamos, desde las costumbres, la vida cotidiana, la comunidad y la memoria. A trav\u00e9s de material did\u00e1ctico sobre el barrio Las Aguas, se reflexiona sobre la importancia de reconocer el territorio como base para la apropiaci\u00f3n y construcci\u00f3n del patrimonio local.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "28 abril 2026",
    "time": "11:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Construyamos un hogar para la paz",
    "description": "\u00bfSab\u00edas que la paz tambi\u00e9n se construye desde lo cotidiano? Este espacio invita a reconocer el hogar y la comunidad como puntos de partida para una sociedad m\u00e1s justa. A trav\u00e9s de un material did\u00e1ctico, crearemos casas y un barrio de papel, donde cada acci\u00f3n elegida aporta a la construcci\u00f3n colectiva de paz desde peque\u00f1as decisiones diarias.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "28 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Presentaci\u00f3n de Poemas de superaci\u00f3n personal o curso rel\u00e1mpago para ser un traficante de llovizna",
    "description": "Poemas de superaci\u00f3n personal o curso rel\u00e1mpago para ser un traficante de llovizna (Literatelia, 2025) re\u00fane 28 poemas que exploran la vida cotidiana desde miradas m\u00faltiples atravesadas por lo emocional y lo medi\u00e1tico. Con pr\u00f3logo de Hugo de Mendoza y edici\u00f3n de Manuel Ceballos, el libro rinde homenaje a Luis Vidales. Presenta: Jorge Valbuena.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "28 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Memoriante: una experiencia para reconocer las memorias sobre la Toma y Retoma del Palacio de Justicia",
    "description": "El Museo de la Independencia Casa del Florero presenta Memoriante, una experiencia educativa para reflexionar sobre la Toma y Retoma del Palacio de Justicia. Invita a acercarse al conflicto desde la escucha y la narraci\u00f3n, y a explorar distintas memorias del 6 y 7 de noviembre de 1985 mediante din\u00e1micas pedag\u00f3gicas que promueven el di\u00e1logo y la construcci\u00f3n de relatos colectivos.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "28 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Planes locales de lectura, escritura, oralidad y bibliotecas en el pa\u00eds: apuestas para la vida",
    "description": "Conversatorio con equipos que lideran planes locales de lectura, escritura, oralidad y bibliotecas en distintas regiones del pa\u00eds. Moderado por el PNLEOB, el di\u00e1logo abordar\u00e1 c\u00f3mo estas estrategias se relacionan con el cuidado de la vida, la justicia social y epist\u00e9mica, y la construcci\u00f3n de paz desde los territorios.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "28 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Lanzamiento de publicaciones con enfoque \u00e9tnico",
    "description": "Lanzamiento de la cartilla Danzantes de Males: Historia de Kenana y Jeima, que narra la experiencia de dos j\u00f3venes del pueblo Nukak Bak\u00e1. Un espacio para conocer sus historias y acercarse a las memorias, saberes y expresiones culturales de esta comunidad.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "28 abril 2026",
    "time": "5:00 p. m.",
    "entity": "AGN",
    "title": "Los imperialismos del pasado y del presente",
    "description": "De los imperios coloniales a las potencias actuales, este conversatorio cruza archivos, prensa y memoria para rastrear continuidades de dominaci\u00f3n en Am\u00e9rica y el Caribe. Analiza c\u00f3mo se justifican hoy las injerencias, qu\u00e9 resistencias han dejado huella y c\u00f3mo leer el presente con mirada hist\u00f3rica. Un espacio para reconocer patrones, tensiones y abrir preguntas con el p\u00fablico.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "28 abril 2026",
    "time": "6:00 p. m.",
    "entity": "AGN",
    "title": "Lanzamiento de la colecci\u00f3n otras colombias Posibles",
    "description": "En alianza con MiCASa, el Archivo General de la Naci\u00f3n presenta nuevos t\u00edtulos de la colecci\u00f3n Otras Colombias Posibles. A los dos libros de 2025 se suman diez m\u00e1s que abordan miradas afro e ind\u00edgenas, luchas de las mujeres, culturas campesinas, migraciones, econom\u00eda, ciudad, ambiente, est\u00e9ticas disidentes y memorias para la paz y la reparaci\u00f3n.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "28 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Charla: 50 a\u00f1os despu\u00e9s de Le\u00f3n de Greiff",
    "description": "Charla sobre la vida y obra de Le\u00f3n de Greiff, a 50 a\u00f1os de su muerte. El encuentro aborda sus m\u00faltiples facetas como poeta, editor, cuentista, traductor, mel\u00f3mano y hombre de radio, destacando su legado en la literatura y la cultura colombiana.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "29 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Mi territorio es patrimonio - conoce y comparte los patrimonios con el material educativo",
    "description": "Espacio que presenta una herramienta para la sensibilizaci\u00f3n y apropiaci\u00f3n del patrimonio en contextos locales. Invita a reconocer lo propio, lo comunitario y lo colectivo. A trav\u00e9s de actividades participativas, se exploran valores emocionales, simb\u00f3licos e hist\u00f3ricos del patrimonio, fortaleciendo la conexi\u00f3n con los territorios, las memorias y los saberes que nos constituyen.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "29 abril 2026",
    "time": "11:30 a. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Presentaci\u00f3n de El sacrilegio",
    "description": "El amor y la violencia atraviesan esta novela hist\u00f3rica sobre una adolescente boliviana que huye con un cura y enfrenta m\u00faltiples peripecias en medio de las violencias colombianas. La historia se sit\u00faa en el sur del Tolima, entre la pobreza y la lucha campesina, antes y despu\u00e9s del asesinato de Jorge Eli\u00e9cer Gait\u00e1n.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "29 abril 2026",
    "time": "2:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Lanzamiento Fugas de Tinta No. 18",
    "description": "En este espacio, Cristian Valencia conversa con personas privadas de la libertad que han encontrado en la escritura creativa nuevas formas de expresi\u00f3n. Incluye el lanzamiento del m\u00e1s reciente volumen de Fugas de Tinta, en alianza con el INPEC.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "29 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Conversatorio. Promoci\u00f3n de lectura y cr\u00edtica literaria desde clubes de lectura afrocentrados",
    "description": "Los clubes de lectura son espacios clave del ecosistema cultural. Este conversatorio explora experiencias que van m\u00e1s all\u00e1 de la difusi\u00f3n: el colectivo Kutusoma, con enfoque afrocentrado, y Entre Nosotras, dedicado a autoras racializadas. A trav\u00e9s del di\u00e1logo con sus directoras, se conocer\u00e1n sus din\u00e1micas y su papel en la educaci\u00f3n y la difusi\u00f3n cultural con enfoque equitativo.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "29 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "La causa criminal contra Rafael Larra\u00f1aga y el jud\u00edo Barchillona. El genocidio cauchero m\u00e1s all\u00e1 de La Vor\u00e1gine",
    "description": "Presentaci\u00f3n de un libro sobre la causa criminal contra el pastuso Rafael Larra\u00f1aga y el jud\u00edo Isaac Jacobo Barchillona, personajes retratados por Jos\u00e9 Eustasio Rivera. El texto aborda un proceso hist\u00f3rico in\u00e9dito que permite conocer una faceta oscura del pa\u00eds y el contexto que dio origen a La Vor\u00e1gine.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "29 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Maestr\u00edas ICC | Escuchamos tus preguntas",
    "description": "Encuentro con los profesores de la maestr\u00eda y una muestra de clase abierta.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "29 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Investigar el t\u00edtere, imaginar un arte del objeto",
    "description": "El arte titiritero es un sistema vivo de transmisi\u00f3n cultural que ha perdurado por la oralidad, la experiencia y la resistencia comunitaria. Su marginalidad ha impulsado lenguajes y pedagog\u00edas propias, donde m\u00fasica, voz y sonido son centrales. Ante una memoria fragmentada y en riesgo, se destaca la importancia de documentar y fortalecer espacios como la FIATO para su proyecci\u00f3n.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "30 abril 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Relatos polif\u00f3nicos de pa\u00eds",
    "description": "Mesa de radio en vivo sobre nuevas publicaciones de la DACMI, en el marco de la Red de Comunicaci\u00f3n para la Vida. Libros como Relatos polif\u00f3nicos de pa\u00eds y Pautas para el trabajo audiovisual con pueblos ind\u00edgenas ser\u00e1n el punto de partida para un di\u00e1logo entre autores y p\u00fablico sobre diversidad cultural, comunicaci\u00f3n y creaci\u00f3n en Colombia.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "30 abril 2026",
    "time": "11:30 a. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Del aguacate al zopilote: taller para buscar y compartir las palabras nativas de nuestro continente",
    "description": "Clarisa Ruiz escribi\u00f3 un libro en el que las palabras son los personajes principales y, en esta entrega de la serie \u00abLeer es mi cuento\u00bb recoge palabras que son muy propias de nuestra lengua (incluso cuando vienen de otros idiomas) para dotarlas de nuevos sentidos, los cuales dialogan a la perfecci\u00f3n con las ilustraciones de Juan Camilo Mayorga",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "30 abril 2026",
    "time": "1:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "El ensayo narrativo en la disrupci\u00f3n del contenido: Presentaci\u00f3n de La soberan\u00eda y el cuerpo: dial\u00e9ctica de la resistencia.",
    "description": "La soberan\u00eda y el cuerpo: dial\u00e9ctica de la resistencia se inscribe en el ensayo narrativo. No busca trama ni cl\u00edmax, sino indagar, desde la memoria y la experiencia, en escenas que piensan el mundo. Propone la literatura como forma de conocimiento y reflexi\u00f3n, y se distancia de tendencias que privilegian el exceso, el adorno y las moralejas de consuelo en el arte contempor\u00e1neo.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "30 abril 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Colombiano de Antropolog\u00eda e Historia",
    "title": "Pir\u00e1mides prehisp\u00e1nicas en Popay\u00e1n",
    "description": "Se presentar\u00e1n los resultados de la investigaci\u00f3n \u201cCaracterizaci\u00f3n del conjunto de pir\u00e1mides prehisp\u00e1nicas en Popay\u00e1n\u201d de V\u00edctor Gonz\u00e1lez, que analiza su ubicaci\u00f3n, tipolog\u00edas, estado de conservaci\u00f3n y valor patrimonial. El estudio aporta nuevas lecturas sobre estos vestigios arqueol\u00f3gicos, su relaci\u00f3n con el territorio, sus usos hist\u00f3ricos y su importancia para la memoria y la comprensi\u00f3n de las sociedades que habitaron la regi\u00f3n.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "30 abril 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "El R\u00e9quiem del Silencio y Don Guillermo: dos publicaciones para escuchar la voz de las v\u00edctimas en el marco del centenario de Guillermo Cano.",
    "description": "Conversatorio con Lizeth Acosta, Diego P\u00e9rez y Johanna Calder\u00f3n sobre dos publicaciones de la BNC: la colecci\u00f3n Don Guillermo y el R\u00e9quiem del Silencio Op. 143 de Blas Emilio Atehort\u00faa. El di\u00e1logo abordar\u00e1 sus procesos editoriales y su aporte a la memoria cultural del pa\u00eds.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "30 abril 2026",
    "time": "5:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "El circo investiga",
    "description": "Panel de discusi\u00f3n entre ganadorxs de las becas de investigaci\u00f3n en circo entre 2023 y 2025.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "30 abril 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Relatos polif\u00f3nicos de pa\u00eds",
    "description": "Mesa de radio en vivo sobre nuevas publicaciones de la DACMI en la Red de Comunicaci\u00f3n para la Vida. Libros como Relatos polif\u00f3nicos de pa\u00eds y Pautas y recomendaciones para el trabajo audiovisual y cinematogr\u00e1fico con pueblos ind\u00edgenas ser\u00e1n el punto de partida para un di\u00e1logo abierto entre autores y p\u00fablico sobre la diversidad cultural, la comunicaci\u00f3n y las formas de creaci\u00f3n en Colombia.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "30 abril 2026",
    "time": "7:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Lanzamiento del libro \"Rescate tipogr\u00e1fico. Perspectivas y experiencias de investigaci\u00f3n en el suroccidente colombiano\"",
    "description": "El evento ofrece una mirada actual de la tipograf\u00eda en Colombia desde el Laboratorio Entre Plomos de la Universidad del Cauca y el trabajo de rescate patrimonial de La Linterna y el Taller Escuela de Artes Gr\u00e1ficas en Cali. Un espacio para que p\u00fablico y dise\u00f1adores conozcan la impresi\u00f3n tipogr\u00e1fica artesanal y las iniciativas que buscan mantenerla vigente.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "1 mayo 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "ZOOM AL P\u00daBLICO",
    "description": "Taller creativo para socializar los resultados del Estudio de P\u00fablicos de Cine Colombiano 2025. Propone un espacio de mediaci\u00f3n audiovisual que acerca esta investigaci\u00f3n del FDC y la DACMI (2024\u20132025). Desde la pedagog\u00eda art\u00edstica, introduce hallazgos clave y fomenta la reflexi\u00f3n sobre la creaci\u00f3n audiovisual en di\u00e1logo con las demandas, deseos y motivaciones de los p\u00fablicos.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "1 mayo 2026",
    "time": "12:30 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Conversatorio entre talentos de la cinematograf\u00eda nacional en torno a pel\u00edculas colombiana",
    "description": "Este evento tiene como objetivo la promoci\u00f3n del cine colombiano en el marco de la campa\u00f1a El Cine Colombiano \u00a1Nos Late! - nuestrocine.co",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "1 mayo 2026",
    "time": "2:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "La formaci\u00f3n art\u00edstica como pol\u00edtica p\u00fablica en el \u00e1mbito nacional e internacional",
    "description": "Conversatorio entre expertos de pol\u00edticas p\u00fablicas del sector art\u00edstico y cultural.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "1 mayo 2026",
    "time": "3:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Artes para la paz: Ecosistemas de formaci\u00f3n Art\u00edstica",
    "description": "Conversatorio entre l\u00edderes de procesos de formaci\u00f3n art\u00edstica y cultural en \u00e1mbitos escolares y comunitarios. El di\u00e1logo aborda experiencias, retos y aportes a la consolidaci\u00f3n de ecosistemas art\u00edsticos en los territorios, destacando el papel de la educaci\u00f3n y la creaci\u00f3n en el fortalecimiento cultural y la participaci\u00f3n.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "1 mayo 2026",
    "time": "4:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Lanzamiento del libro: Testamento goliardo, de Helc\u00edas Mart\u00e1n G\u00f3ngora",
    "description": "Esta antolog\u00eda hace parte de la colecci\u00f3n Posteris Lvmen de la Universidad del Cauca, que publicar\u00e1 100 libros de autores caucanos para conmemorar su centenario. Es resultado de un proyecto investigativo desarrollado en alianza con el Instituto Caro y Cuervo.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "1 mayo 2026",
    "time": "5:00 p. m.",
    "entity": "AGN",
    "title": "Las memorias inc\u00f3modas de la migraci\u00f3n en Colombia",
    "description": "Mirada hist\u00f3rica a la migraci\u00f3n \u201cindeseada\u201d en Colombia: sirio-libaneses, chinos, \u201ccomunistas\u201d y otros grupos se\u00f1alados como amenaza. Desde el siglo XIX se revisan leyes, expedientes y prensa para entender la construcci\u00f3n de prejuicios y controles. Tambi\u00e9n se explora c\u00f3mo estas comunidades resistieron, se asentaron y transformaron el pa\u00eds, y qu\u00e9 preguntas abre hoy ese archivo sobre ciudadan\u00eda y derechos.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "1 mayo 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Lectura en voz alta: Mujeres y poes\u00eda contempor\u00e1nea",
    "description": "El Ministerio de las Culturas presenta una colecci\u00f3n de poes\u00eda con cuatro cuadernillos que re\u00fanen a 45 poetas colombianas en distintos momentos de su trayectoria. Sus voces exploran temas como ciencia ficci\u00f3n, erotismo y lo fant\u00e1stico, ampliando el panorama de la poes\u00eda escrita por mujeres. El lanzamiento incluye lectura en voz alta y presentaci\u00f3n de la compiladora Camila Charry.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "1 mayo 2026",
    "time": "7:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Presentaci\u00f3n del libro: Vocabulario tipogr\u00e1fico",
    "description": "El \u201cVocabulario tipogr\u00e1fico\u201d del Instituto Caro y Cuervo da a conocer la terminolog\u00eda de la impresi\u00f3n tipogr\u00e1fica, un oficio que a\u00fan se preserva en la Imprenta Patri\u00f3tica. Esta edici\u00f3n, basada en la gu\u00eda de Juan Jos\u00e9 Morato Caldeiro, fue compuesta en linotipia e impresa en m\u00e1quinas tipogr\u00e1ficas, destacando su car\u00e1cter artesanal y su v\u00ednculo con la tradici\u00f3n de la imprenta.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "2 mayo 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Red Estudiantil por la Memoria y el Patrimonio - Taller de apropiaci\u00f3n social del patrimonio cultural",
    "description": "Taller de apropiaci\u00f3n social del patrimonio cultural dirigido a estudiantes de grados 9\u00b0 a 11\u00b0. Se enfoca en el dise\u00f1o de proyectos que aporten al cumplimiento de las 80 horas de servicio social obligatorio, promoviendo el reconocimiento, la valoraci\u00f3n y la participaci\u00f3n activa en la protecci\u00f3n del patrimonio cultural.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "2 mayo 2026",
    "time": "1:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Taller sobre la tipograf\u00eda de Yerbabuena del Instituto Caro y Cuervo",
    "description": "Los participantes conocer\u00e1n, de la voz de uno de sus creadores, el proceso de dise\u00f1o de la tipograf\u00eda de la estrategia \u201cColombia, casa com\u00fan\u201d. El espacio abordar\u00e1 decisiones est\u00e9ticas, conceptuales y t\u00e9cnicas, y permitir\u00e1 comprender c\u00f3mo la tipograf\u00eda contribuye a construir identidad visual y comunicar una apuesta cultural.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "2 mayo 2026",
    "time": "2:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Lanzamiento Antolog\u00eda Relata 2025",
    "description": "En este espacio, Johana Marcela Rozo charla con dos autores de la Antolog\u00eda Relata 2025.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "2 mayo 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Colombiano de Antropolog\u00eda e Historia",
    "title": "El gale\u00f3n San Jose a futuro. \u00bfC\u00f3mo conservarlo?",
    "description": "El naufragio del gale\u00f3n San Jos\u00e9 plantea un dilema: \u00bfconservar sus restos en el fondo del mar o extraerlos? Este evento, con sustento cient\u00edfico, aborda las implicaciones de ambas opciones y busca ofrecer elementos para comprender un debate vigente a nivel global sobre patrimonio, conservaci\u00f3n y memoria.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "2 mayo 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "El futuro est\u00e1 lleno de deseo. 20 a\u00f1os de Relata",
    "description": "Encuentro te\u00f3rico-pr\u00e1ctico para explorar el deseo como motor de futuros posibles para Relata. A partir de poes\u00eda y literatura especulativa, se reflexiona sobre imaginaci\u00f3n, fantas\u00eda y cuerpo en la construcci\u00f3n de espacios colectivos de lectura y escritura. Dirigido por Alejo Morales y Paula Castillo.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "2 mayo 2026",
    "time": "6:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Presentaci\u00f3n del libro: El oro no flota",
    "description": "Presentaci\u00f3n del libro El oro no flota. A partir del gale\u00f3n San Jos\u00e9, el encuentro propone mirar m\u00e1s all\u00e1 del \u201ctesoro sumergido\u201d y acercarse, desde la imaginaci\u00f3n, a lo que permanece en el fondo del mar. Con Andr\u00e9s Ospina y Diego Boh\u00f3rquez, se exploran cruces entre historia, literatura e ilustraci\u00f3n para recrear y reinventar el pasado.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "2 mayo 2026",
    "time": "7:00 p. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Pedagog\u00edas que caminan - sobre autonom\u00edas pedag\u00f3gicas y escuelas territoriales",
    "description": "Conversaci\u00f3n sobre los giros pedag\u00f3gicos en Artes Pl\u00e1sticas y Visuales desde la Escuela Itinerante de APV, que propone modelos horizontales, colectivos y situados para la formaci\u00f3n art\u00edstica. El encuentro incluye el lanzamiento de sus publicaciones 2024 y 2025 y reflexiona sobre nuevas formas de construir escuela desde los territorios.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "3 mayo 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "A de aerolito: leer con los sentidos",
    "description": "Taller multisensorial para explorar formas de leer y comunicarnos. A partir del aerolito, pieza del Museo Nacional, se invita a descubrir la letra A en distintos sistemas: braille, Lengua de Se\u00f1as Colombiana y sistema alfanum\u00e9rico. Un espacio para reconocer la diversidad de lenguajes y promover la inclusi\u00f3n a trav\u00e9s de experiencias sensoriales.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "3 mayo 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Lanzamiento de la Biblioteca Rafael Guti\u00e9rrez Girardot (Cap\u00edtulo Colombia). Tomo I. Poes\u00eda colombiana. Ensayos cr\u00edticos",
    "description": "Conversatorio sobre el proyecto Biblioteca Rafael Guti\u00e9rrez (Cap\u00edtulo Colombia), investigaci\u00f3n que re\u00fane la obra de Rafael Guti\u00e9rrez Girardot. Liderado por el GELCIL de la Universidad de Antioquia y el Instituto Caro y Cuervo, presenta el primer tomo de una colecci\u00f3n de 11 vol\u00famenes, que recoge su mirada cr\u00edtica sobre la poes\u00eda y el pensamiento en su tiempo.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "3 mayo 2026",
    "time": "4:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Voces vivas Presentaci\u00f3n del primer repositorio de lenguas nativas de Colombia",
    "description": "Presentaci\u00f3n del primer repositorio de lenguas nativas de Colombia, desarrollado por comunidades ind\u00edgenas y el Instituto Caro y Cuervo. El proyecto documenta 15 lenguas y re\u00fane memorias ling\u00fc\u00edsticas y culturales. En la sesi\u00f3n se compartir\u00e1 su proceso de creaci\u00f3n y los contenidos disponibles, invitando a explorar la diversidad ling\u00fc\u00edstica del pa\u00eds.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "4 mayo 2026",
    "time": "10:30 a. m.",
    "entity": "Ministerio de las Culturas, las Artes y los Saberes",
    "title": "Taller: Historias en capas, color en juego - El legado de Beatriz Gonz\u00e1lez",
    "description": "A trav\u00e9s de un juego creativo con im\u00e1genes de la Independencia y la exploraci\u00f3n del color, este taller propone un acercamiento a la obra de Beatriz Gonz\u00e1lez. Los participantes experimentar\u00e1n con la apropiaci\u00f3n y transformaci\u00f3n de im\u00e1genes para comprender c\u00f3mo el arte resignifica el pasado y lo conecta con la vida cotidiana.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "4 mayo 2026",
    "time": "3:00 p. m.",
    "entity": "Instituto Caro y Cuervo",
    "title": "Lanzamiento de un nuevo t\u00edtulo de la Biblioteca Com\u00fan \"El trabajo de Waldina D\u00e1vila de Ponce\"",
    "description": "La Biblioteca Com\u00fan presenta el segundo t\u00edtulo de su colecci\u00f3n, dedicado a Waldina D\u00e1vila. El evento dar\u00e1 a conocer a esta autora del siglo XIX y destacar\u00e1 su pensamiento cr\u00edtico sobre las consecuencias de la guerra en el \u00e1mbito familiar, invitando a redescubrir su obra y su lugar en la literatura colombiana.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  },
  {
    "date": "4 mayo 2026",
    "time": "4:00 p. m.",
    "entity": "Biblioteca Nacional de Colombia",
    "title": "Del taller a la publicaci\u00f3n: presentaci\u00f3n de Coraz\u00f3n de lava de Paula Alejandra Rojas",
    "description": "Coraz\u00f3n de lava re\u00fane ocho cuentos sobre ni\u00f1as y adolescentes que, en su tr\u00e1nsito a la adultez, enfrentan su lado oculto. Finalista de premios nacionales, el libro surge del trabajo del Taller Lispector. En este espacio, su autora conversa con Natalia Guzm\u00e1n y Dayro Mart\u00ednez sobre procesos de lectura y edici\u00f3n colectiva.",
    "location": "Auditorio estand: Colombia, casa com\u00fan"
  }
]
</script>

    <script>
        (() => {
            const body = document.body;
            const accessibilityBar = document.querySelector('.accessibility-bar');
            const accessibilityToggle = document.getElementById('accessibility-toggle');
            const accessibilityTools = document.getElementById('accessibility-tools');
            const increaseButton = document.getElementById('font-increase');
            const decreaseButton = document.getElementById('font-decrease');
            const resetButton = document.getElementById('font-reset');
            const contrastButton = document.getElementById('contrast-toggle');
            let fontScale = 1;

            const setAccessibilityPanel = (expanded) => {
                if (!accessibilityToggle || !accessibilityTools) return;
                accessibilityToggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
                accessibilityTools.hidden = !expanded;
            };

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

            accessibilityToggle?.addEventListener('click', () => {
                const expanded = accessibilityToggle.getAttribute('aria-expanded') === 'true';
                setAccessibilityPanel(!expanded);
            });

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

            document.addEventListener('click', (event) => {
                if (!accessibilityBar || accessibilityTools?.hidden) return;
                if (accessibilityBar.contains(event.target)) return;
                setAccessibilityPanel(false);
            });

            document.addEventListener('keydown', (event) => {
                if (event.key !== 'Escape' || accessibilityTools?.hidden) return;
                setAccessibilityPanel(false);
                accessibilityToggle?.focus();
            });

            accessibilityTools?.addEventListener('focusout', (event) => {
                if (accessibilityTools.hidden) return;
                if (accessibilityBar?.contains(event.relatedTarget)) return;
                setAccessibilityPanel(false);
            });

            syncScale();
            syncAccessibilityUI();
            setAccessibilityPanel(false);
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
            const programDayFilter = document.getElementById('filbo-program-day-filter');
            const programSearch = document.getElementById('filbo-program-search');
            const programCount = document.getElementById('filbo-program-count');
            const programHelper = document.getElementById('filbo-program-helper');
            const programReset = document.getElementById('filbo-program-reset');
            let lastProgramTrigger = null;
            let previousBodyOverflow = '';
            const inertTargets = mainContent ? Array.from(mainContent.children).filter((element) => element !== modal) :
                [];
            let scheduleLoaded = false;
            let scheduleItems = [];

            if (!openProgramButton || !modal || !modalPanel) return;

            const slugify = (value) => (value || '')
                .toString()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/^-+|-+$/g, '') || 'fecha';

            const normalizeText = (value) => (value || '')
                .toString()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .trim();

            const updateScheduleSummary = (visibleItems, totalItems) => {
                const hasDayFilter = Boolean(programDayFilter?.value);
                const hasSearchFilter = Boolean((programSearch?.value || '').trim());

                if (programCount) {
                    const label = visibleItems === 1 ? 'actividad' : 'actividades';
                    programCount.textContent = `${visibleItems} ${label}`;
                }

                if (programHelper) {
                    if (!totalItems) {
                        programHelper.textContent = 'No hay actividades disponibles en este momento.';
                    } else if (hasDayFilter || hasSearchFilter) {
                        programHelper.textContent = `Mostrando ${visibleItems} de ${totalItems} actividades según los filtros aplicados.`;
                    } else {
                        programHelper.textContent = 'Use los filtros para encontrar más rápido cada actividad.';
                    }
                }

                if (programReset) {
                    programReset.hidden = !totalItems || (!hasDayFilter && !hasSearchFilter);
                }
            };

            const populateScheduleDayFilter = (items) => {
                if (!programDayFilter) return;

                const dates = Array.from(new Set((Array.isArray(items) ? items : [])
                    .map((item) => item?.date || '')
                    .filter(Boolean)));
                const currentValue = programDayFilter.value;

                programDayFilter.innerHTML = '<option value="">Todos los días</option>';

                dates.forEach((date) => {
                    const option = document.createElement('option');
                    option.value = date;
                    option.textContent = date;
                    programDayFilter.append(option);
                });

                programDayFilter.value = dates.includes(currentValue) ? currentValue : '';
            };

            const getFilteredSchedule = () => {
                const dayValue = programDayFilter?.value || '';
                const queryValue = normalizeText(programSearch?.value || '');

                return scheduleItems.filter((item) => {
                    const matchesDay = !dayValue || (item.date || '') === dayValue;
                    const searchableText = normalizeText([
                        item.date,
                        item.time,
                        item.entity,
                        item.title,
                        item.description
                    ].join(' '));
                    const matchesQuery = !queryValue || searchableText.includes(queryValue);
                    return matchesDay && matchesQuery;
                });
            };

            const renderSchedule = (items, totalItems = items.length) => {
                if (!programList) return;
                programList.innerHTML = '';
                updateScheduleSummary(Array.isArray(items) ? items.length : 0, totalItems);

                if (!Array.isArray(items) || !items.length) {
                    const empty = document.createElement('p');
                    empty.className = 'program-modal-copy program-modal-empty';
                    empty.textContent = totalItems ?
                        'No hay resultados para los filtros aplicados. Pruebe otro día o una búsqueda más amplia.' :
                        'No hay programación disponible en este momento.';
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
                        article.setAttribute('aria-label', `${event.time || 'Sin hora'} ${event.title || 'Actividad'}`);

                        const meta = document.createElement('div');
                        meta.className = 'program-modal-meta';

                        const time = document.createElement('span');
                        time.className = 'program-modal-time';
                        time.textContent = event.time || 'Sin hora';

                        const entity = document.createElement('span');
                        entity.className = 'program-modal-entity';
                        entity.textContent = event.entity || 'Entidad por confirmar';

                        const title = document.createElement('h4');
                        title.textContent = event.title || 'Actividad';

                        const description = document.createElement('p');
                        description.textContent = event.description || '';

                        meta.append(time, entity);
                        article.append(meta, title, description);
                        section.append(article);
                    });

                    programList.append(section);
                });
            };

            const applyScheduleFilters = () => {
                renderSchedule(getFilteredSchedule(), scheduleItems.length);
            };

            const clearScheduleFilters = () => {
                if (programDayFilter) programDayFilter.value = '';
                if (programSearch) programSearch.value = '';
                applyScheduleFilters();
                programDayFilter?.focus();
            };

            const ensureScheduleLoaded = async () => {
                if (scheduleLoaded) return;
                try {
                    const dataNode = document.getElementById('filbo-schedule-data');
                    if (!dataNode) throw new Error('missing embedded schedule data');
                    scheduleItems = JSON.parse(dataNode.textContent || '[]');
                    populateScheduleDayFilter(scheduleItems);
                    applyScheduleFilters();
                } catch (error) {
                    scheduleItems = [];
                    populateScheduleDayFilter(scheduleItems);
                    renderSchedule([], 0);
                } finally {
                    scheduleLoaded = true;
                }
            };

            programDayFilter?.addEventListener('change', applyScheduleFilters);
            programSearch?.addEventListener('input', applyScheduleFilters);
            programReset?.addEventListener('click', clearScheduleFilters);

            const getFocusableModalItems = () => {
                return Array.from(modalPanel.querySelectorAll(
                        'button,[href],input,select,textarea,[tabindex]:not([tabindex="-1"])'))
                    .filter((element) => !element.hasAttribute('disabled') && !element.getAttribute('aria-hidden'));
            };

            const focusFirstModalElement = () => {
                if (programDayFilter) {
                    programDayFilter.focus();
                    return;
                }

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
            const THEME_MERGE_MAP = {
                'somos-lenguas-de-colombia-senas-e-inclusion': 'somos-diversidad-linguistica',
                'somos-economias-populares': 'somos-territorios-bioculturales-y-economias-populares',
                'somos-territorios-bioculturales': 'somos-territorios-bioculturales-y-economias-populares',
            };
            const tabsRoot = document.getElementById('themes-tablist');
            const board = document.querySelector('.board');
            const mobileToggle = document.getElementById('themes-mobile-toggle');
            const mobileToggleIcon = document.getElementById('themes-mobile-toggle-icon');
            const mobileToggleLabel = document.getElementById('themes-mobile-toggle-label');
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

            const mergeCatalogThemes = (catalog) => {
                const originalThemes = Array.isArray(catalog?.themes) ? catalog.themes : [];
                const originalItems = Array.isArray(catalog?.items) ? catalog.items : [];
                const themesBySlug = new Map(originalThemes.map((theme) => [theme.slug, {
                    ...theme,
                    types: Array.isArray(theme.types) ? [...theme.types] : [],
                    keywords: Array.isArray(theme.keywords) ? [...theme.keywords] : [],
                }]));

                const items = originalItems.map((item) => {
                    const nextSlug = THEME_MERGE_MAP[item.theme_slug] || item.theme_slug;
                    const mergedTheme = themesBySlug.get(nextSlug);
                    return {
                        ...item,
                        theme_slug: nextSlug,
                        theme: mergedTheme?.name || item.theme,
                    };
                });

                Object.entries(THEME_MERGE_MAP).forEach(([sourceSlug, targetSlug]) => {
                    const sourceTheme = themesBySlug.get(sourceSlug);
                    const targetTheme = themesBySlug.get(targetSlug);
                    if (!sourceTheme || !targetTheme) return;

                    targetTheme.types = Array.from(new Set([...(targetTheme.types || []), ...(sourceTheme.types || [])]));
                    targetTheme.keywords = Array.from(new Set([...(targetTheme.keywords || []), ...(sourceTheme.keywords || [])]));
                });

                const itemCounts = items.reduce((accumulator, item) => {
                    const slug = item.theme_slug || '';
                    if (!slug) return accumulator;
                    accumulator.set(slug, (accumulator.get(slug) || 0) + 1);
                    return accumulator;
                }, new Map());

                const themes = originalThemes
                    .filter((theme) => !Object.prototype.hasOwnProperty.call(THEME_MERGE_MAP, theme.slug))
                    .map((theme) => {
                        const mergedTheme = themesBySlug.get(theme.slug) || theme;
                        return {
                            ...mergedTheme,
                            count: itemCounts.get(theme.slug) || 0,
                        };
                    });

                return {
                    ...catalog,
                    themes,
                    items,
                };
            };

            const syncMobileTabsUI = (activeTab) => {
                if (!mobileToggle) return;
                if (mobileToggleLabel) {
                    mobileToggleLabel.textContent = activeTab?.dataset.title || 'Seleccionar temática';
                }
                if (mobileToggleIcon) {
                    mobileToggleIcon.innerHTML = '';
                    const activeIcon = activeTab?.querySelector('.chip-icon');
                    if (activeIcon) {
                        const icon = document.createElement('img');
                        icon.src = activeIcon.getAttribute('src') || '';
                        icon.alt = '';
                        mobileToggleIcon.append(icon);
                    }
                }
            };

            const setMobileTabsOpen = (expanded) => {
                if (!mobileToggle || !board) return;
                mobileToggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
                board.classList.toggle('is-mobile-tabs-open', expanded);
            };

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
                const keywordTags = (item.keywords || []).map((keyword) => `<span>${keyword}</span>`)
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
                            ${keywordTags ? `<div class="tooltip-group"><span class="tooltip-label">Palabras clave</span><div class="tooltip-tags">${keywordTags}</div></div>` : ''}
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
                label.textContent = 'Palabras clave';

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
                syncMobileTabsUI(tab);
                if (window.innerWidth <= 720) setMobileTabsOpen(false);

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
            mobileToggle?.addEventListener('click', () => {
                const expanded = mobileToggle.getAttribute('aria-expanded') === 'true';
                setMobileTabsOpen(!expanded);
            });

            document.addEventListener('click', (event) => {
                if (!event.target.closest('.board')) setMobileTabsOpen(false);
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
                if (window.innerWidth > 720) setMobileTabsOpen(false);
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
                const catalog = mergeCatalogThemes(JSON.parse(catalogNode.textContent || '{}'));
                if (!catalog || !Array.isArray(catalog.themes) || !Array.isArray(catalog.items)) {
                    throw new Error('invalid embedded catalog data');
                }

                renderTabsAndCards(catalog);
                bindTabEvents();
                const initialTab = tabs.find((tab) => tab.getAttribute('aria-selected') === 'true') || tabs[0];
                if (initialTab) activateTab(initialTab, false);
                else syncMobileTabsUI(null);
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
