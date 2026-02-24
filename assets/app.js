import { app } from "./bootstrap.js";
import "chart.js/auto";
import ChartController from "@symfony/ux-chartjs";

app.register("symfony--ux-chartjs--chart", ChartController);

/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import "./styles/app.css";

console.log("This log comes from assets/app.js - welcome to AssetMapper! 🎉");