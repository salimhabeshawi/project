#!/usr/bin/env bash
set -euo pipefail

if [[ "${EUID}" -eq 0 ]]; then
  echo "Run this script as your normal user. It will call sudo for pacman."
  exit 1
fi

if ! command -v pacman >/dev/null 2>&1; then
  echo "This helper is for Arch Linux only (pacman not found)."
  exit 1
fi

# Playwright runtime dependencies for Arch Linux.
sudo pacman -Syu --needed \
  alsa-lib \
  at-spi2-core \
  cairo \
  cups \
  dbus \
  expat \
  flite \
  fontconfig \
  freetype2 \
  gdk-pixbuf2 \
  glib2 \
  gst-libav \
  gst-plugins-bad \
  gst-plugins-base \
  gst-plugins-good \
  gstreamer \
  gtk3 \
  harfbuzz-icu \
  icu \
  libdrm \
  libevent \
  libffi \
  libglvnd \
  libjpeg-turbo \
  libnotify \
  libpng \
  libsecret \
  libwebp \
  libxml2 \
  libxslt \
  libx11 \
  libxcomposite \
  libxdamage \
  libxext \
  libxfixes \
  libxkbcommon \
  libxrandr \
  mesa \
  nspr \
  nss \
  pango \
  wayland \
  xorg-server-xvfb

echo "Arch dependencies installed."
echo "Next: npx playwright install"
