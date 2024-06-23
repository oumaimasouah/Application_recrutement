import React from "react";
import Navbar from "../Components/Navbar";
import Hero from "../Components/home/Hero";
import AboutUs from "../Components/home/About";
import JobsSection from "../Components/home/Jobs";
import Footer from "../Components/home/Footer";







const App = () => {
    return (
        <div className="App">
            <Navbar />
            <Hero />
            <JobsSection />
            <AboutUs />
            <Footer />
        </div>
    );
};

export default App;
