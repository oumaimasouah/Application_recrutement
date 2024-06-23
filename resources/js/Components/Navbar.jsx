import { Link } from "@inertiajs/react";
import logoImage from "../assets/logo.png";

const Navbar = () => (
  <nav className=" text-blue-900 p-4 px-12 md:px-12">
      <div
          className="container mx-auto flex justify-between items-center px-4"
          style={{ background: "#ffffffa8", borderRadius: "50px" }}
      >
          <Link className="text-xl font-bold" href="/">
              <img src={logoImage} alt="Logo" className="w-48" />
          </Link>
          <div
              className="space-x-4 p-4"
              style={{ background: "#ffffffa8", borderRadius: "50px" }}
          >
              <Link href="/" className="hover:underline"> Home </Link>
              <a href="#" className="hover:underline">
                  Jobs
              </a>
              <Link href="/login" className="hover:underline"> Login </Link>
              <a href="#" className="hover:underline">
                  Register
              </a>
          </div>
      </div>
  </nav>
);

export default Navbar;