import { useState } from 'react';

const ExpandableAddButton = () => {
  const [isHovered, setIsHovered] = useState(false);

  return (
    <div
      className="relative inline-flex items-center"
      onMouseEnter={() => setIsHovered(true)}
      onMouseLeave={() => setIsHovered(false)}
    >
      <div
        className={`flex items-center rounded-full overflow-hidden transition-all duration-300 ease-in-out ${
          isHovered ? 'bg-blue-400 pr-24' : 'bg-blue-400'
        }`}
      >
        <div className="flex items-center justify-center w-12 h-12 rounded-full bg-blue-400 text-white z-10">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            className="w-8 h-8"
          >
            <path d="M12 4.5v15m7.5-7.5h-15" strokeWidth="3" stroke="white" />
          </svg>
        </div>

        <span
          className={`absolute left-14 text-white font-medium transition-opacity duration-200 whitespace-nowrap ${
            isHovered ? 'opacity-100' : 'opacity-0'
          }`}
        >
          Add Item
        </span>
      </div>

      {/* Dotted circle decoration */}
      <div className="absolute inset-0 w-12 h-12 rounded-full border-4 border-blue-400 border-dashed animate-spin-slow opacity-0 group-hover:opacity-100" style={{ borderRadius: '50%', animationDuration: '8s' }} />
    </div>
  );
};

// Optional: Create a customized version with props
const CustomizableAddButton = ({
  text = "Add Item",
  bgColor = "bg-blue-400",
  textColor = "text-white",
  size = "w-12 h-12",
  iconSize = "w-8 h-8",
  expandedWidth = "pr-24"
}) => {
  const [isHovered, setIsHovered] = useState(false);

  return (
    <div
      className="relative inline-flex items-center"
      onMouseEnter={() => setIsHovered(true)}
      onMouseLeave={() => setIsHovered(false)}
    >
      <div
        className={`flex items-center rounded-full overflow-hidden transition-all duration-300 ease-in-out ${
          isHovered ? `${bgColor} ${expandedWidth}` : bgColor
        }`}
      >
        <div className={`flex items-center justify-center ${size} rounded-full ${bgColor} ${textColor} z-10`}>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            className={iconSize}
          >
            <path d="M12 4.5v15m7.5-7.5h-15" strokeWidth="3" stroke="currentColor" />
          </svg>
        </div>

        <span
          className={`absolute left-14 ${textColor} font-medium transition-opacity duration-200 whitespace-nowrap ${
            isHovered ? 'opacity-100' : 'opacity-0'
          }`}
        >
          {text}
        </span>
      </div>
    </div>
  );
};

// Choose which component to export
export default ExpandableAddButton;
