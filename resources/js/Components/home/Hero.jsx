import JobSearch from "../../assets/search.png";
import BackgroundImage from "../../assets/test.png";

const Hero = ({ backgroundOnly = false }) => (
    <section className="text-white pt-20 px-12 md:px-12">
        <img
            src={BackgroundImage}
            alt="Job search"
            className="w-full absolute top-0 left-0"
            style={{ zIndex: -1 }}
        />
        <div
            className={`container mx-auto flex flex-col md:flex-row items-center ${
                backgroundOnly ? "hidden" : ""
            }`}
        >
            {" "}
            <div className="md:w-1/2 pb-10">
                <h2 className="text-4xl font-bold mb-4">
                    Pôle emploi - Find Your Dream job
                </h2>
                <p className="mb-6">
                    Explore thousands of job opportunities and find the perfect
                    fit for your career goals.
                </p>
                <button className="bg-white text-teal-500 font-semibold py-2 px-4 rounded">
                    Explore Jobs
                </button>
                <button className="bg-teal-500 text-white font-semibold py-2 px-4 ml-4 rounded">
                    Post a Job
                </button>
            </div>
            <div className="md:w-1/2 hidden lg:block md:w-1/2">
                <img src={JobSearch} alt="Job search" className="w-full" />
            </div>
        </div>
    </section>
);

export default Hero;
