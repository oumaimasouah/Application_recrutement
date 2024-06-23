import logoImage from "../../assets/logo.png";


const JobsSection = () => {
    const jobs = [
        {
            title: "Python developer",
            subtitle: "Cherche developer python",
            description:
                "A leading tech company is looking for a skilled software engineer...",
            imageUrl: "path-to-image.jpg",
            readMoreUrl: "#",
            tags: ["Python", "Django", "React"],
        },
        {
            title: "Nodejs developer",
            subtitle: "Cherche developer Nodejs",
            description:
                "A leading tech company is looking for a skilled software engineer...",
            imageUrl: "path-to-image.jpg",
            readMoreUrl: "#",
            tags: ["Nodejs", "AWS", "React"],
        },
        // Add more job listings here
    ];

    return (
        <section className="py-20 bg-gray-100 px-5">
            <div className="container mx-auto">
                <h2 className="text-3xl font-bold mb-8 text-center">
                    Latest Jobs
                </h2>
                <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                    {/* Example job listing */}
                    {jobs.map((job, index) => (
                        <div className="bg-white p-6 rounded-lg shadow-lg">
                            <h3 className="text-xl font-semibold mb-2">
                                {job.title}
                            </h3>

                            <img
                                class="w-42 h-24 mb-3 rounded-full shadow-lg"
                                src={logoImage}
                                alt="Bonnie image"
                            />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                {job.subtitle}
                            </h5>
                            <p className="mb-4">{job.description}</p>

                            <div className="flex space-x-2 mb-4">
                                {job.tags.map((tag) => (
                                    <span className="bg-gray-200 text-gray-800 px-2 py-1 rounded-full text-xs">
                                        {tag}
                                    </span>
                                ))}
                            </div>
                            <a
                                href="#"
                                className="text-green-500 hover:underline"
                            >
                                Read more
                            </a>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
};

export default JobsSection;
