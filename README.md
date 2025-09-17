🌞 Solar & Inverter E-Commerce Website (WordPress + WooCommerce)
📌 Overview

This project is an e-commerce website built on WordPress with WooCommerce for selling renewable energy solutions. It is designed to showcase and sell solar panels, inverters, batteries, mounting systems, connectors, and kits.

The goal is to provide a user-friendly buying experience with curated product navigation, custom search (based on appliances/devices), and a responsive modern design optimized for both desktop and mobile users.

🚀 Features

WooCommerce Integration

Full shopping cart and checkout functionality

Support for product variations (sizes, capacities, technologies)

Payment gateway integration (PayPal, Stripe, Mobile Money – configurable)

Custom Navigation & Menus

Mega-menu style dropdowns for product categories (Solar Panels, Batteries, Inverters)

Sub-menu items for specific product types (e.g., Monocrystalline, Lithium-ion, Hybrid Inverters)

Customizable Top Bar

Left: Logo

Right: Contact Information (Sales Email, Phone Number)

Optional: Social icons or quick links

Curated Search Bar (Planned Feature)

Buyers can select appliances/devices (TV, Fan, Fridge, etc.)

System recommends the required solar panels, inverter, and batteries bundle based on consumption

Category Pages

Solar Panels

Inverters

Batteries

Mounting & Racking

Cables & Connectors

Kits & Bundles

Responsive Design

Based on OceanWP theme

Optimized for speed and SEO

🏗️ Project Structure

Theme: OceanWP (with customizations via child theme)

Plugins:

WooCommerce (core shop system)

Elementor (optional page builder)

Custom Search Plugin (for appliance-based search logic)

Ocean Extra (theme functionality)

Customizations:

partials/topbar/content.php → customized top bar (logo + contact info)

CSS overrides via Customizer → Additional CSS

Planned: Walker_Nav_Menu to control mega-menu submenu output

⚙️ Installation & Setup

Install WordPress (≥6.x).

Install and activate the OceanWP theme and create a child theme.

Install required plugins:

WooCommerce

Elementor (optional)

Ocean Extra

Import demo content (if available) or create product categories manually.

Add products under Solar Panels, Inverters, Batteries, etc.

Configure WooCommerce settings: currency, shipping, tax, payment gateways.

Apply custom CSS via Appearance → Customize → Additional CSS.

For advanced mega-menu layout, implement a custom Walker class in child theme.
