import React from 'react';

import styled from 'styled-components';

import { DEFAULT_IMG_PATH } from '../../Consts';


const Img = styled.img`
    cursor: pointer;
`;

function Image({ children, image_path }) {
    const imgSrc = image_path ? image_path : DEFAULT_IMG_PATH;
    return (
        <div>
            <Img src={imgSrc} className="img-fluid" alt="User image"
                data-toggle="modal" data-target="#image-modal"
            />
            {children}
        </div>
    );
}

export default Image;
