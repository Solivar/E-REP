import React from 'react';

import ImageModal from './ImageModal';

function Image() {
    return (
        <div>
            <img src="https://via.placeholder.com/150" className="img-fluid" alt="User image"
                data-toggle="modal" data-target="#image-modal"
            />
            <ImageModal image_path={null}/>
        </div>
    );
}

export default Image;
