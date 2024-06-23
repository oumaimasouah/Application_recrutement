import logoImage from '@/assets/logo.png';

export default function ApplicationLogo(props) {
    return (
        <img src={logoImage} alt="Logo" {...props} className='w-40' />
    );
}
